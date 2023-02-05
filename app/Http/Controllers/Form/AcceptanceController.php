<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acceptance;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class AcceptanceController extends Controller
{
    public function viewAll(){      

        $acceptance = DB::select('select * from acceptances');

        return view('ManageReports.all-acceptance',['acceptance'=>$acceptance]);
    }

    public function create(){
        return view('Forms.Acceptance.create');
    }

    public function store(Request $request){

        $acceptance = new Acceptance;
        
        $acceptance->program = request('program');
        $acceptance->date = request('date');
        $acceptance->name = request('name');
        $acceptance->institution = request('institution');
        $acceptance->acceptance = request('acceptance');
        $acceptance->job = request('job');
        $acceptance->others = request('others');
        $acceptance->acceptance2 = request('acceptance2');
        $acceptance->resources = request('resources');
        $acceptance->others2 = request('others2');
        $acceptance->save();

        return redirect('/dashboard')->with('message','Data is added successfully!');
        
    }

    public function viewComplaintDetails($id){

        $complaint = ComplaintForm::findOrFail($id);

        $received_by = DB::table('users')
                        ->join('complaint_forms', 'users.id', '=', 'complaint_forms.scu_id')
                        ->select('users.name')
                        ->get();

        return view('ManageReports.view-complaint-details', compact('complaint', 'received_by'));
    }

    public function assignStaff($id){

        $complaint = ComplaintForm::findOrFail($id);
        $staffs= DB::table('users')
                         ->where('reviewreport', '=', 1)
                         ->get();

        return view('Forms.Complaint.assignstaff', compact('complaint', 'staffs'));
    }

    public function storeAssignStaff(Request $request, $id){

        // $received_staff = DB::table('users')
        //                     ->select('name')
        //                     ->where('id', '=', $request->review_staff)
        //                     ->get();

        ComplaintForm::findOrFail($id)->update([
            'scu_id' => $request->review_staff,
            'received_by' => DB::table('users')
                                ->where('id', '=', $request->review_staff)
                                ->get('name'),
            'received_date' => Carbon::now(),
            'status' => "In review",
        ]);

        return redirect()->route('complaint.view-all');

    }

    public function investigateComplaint($id){

        $complaint = ComplaintForm::findOrFail($id);

        return view('Forms.Complaint.investigate', compact('complaint'));
    }

    public function storeInvestigation(Request $request, $id){

        ComplaintForm::findOrFail($id)->update([
            'investigation' => $request->details,
            'immediate_action' => $request->immediate_action,
            'immediate_completion' => $request->immediate_completion,
            'longterm_action' => $request->longterm_action,
            'longterm_completion' => $request->longterm_completion,
            'status' => 'To verify'
        ]);

        return redirect()->route('view.task');
    }

    public function view($id) {
        $acceptance = Acceptance::find($id);
        
        return view('Forms.Acceptance.view',compact('acceptance'));
    }

    public function pdf($id) {
        $acceptance = Acceptance::find($id);
        $pdf = PDF::loadView('Forms/Acceptance/pdf', compact('acceptance'));
        
        return $pdf->download('acceptance.pdf');
    }
}
