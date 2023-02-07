<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientVisit;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class PatientVisitController extends Controller
{
    // public function viewAll(){      

    //     $complaints = DB::table('complaint_forms')->latest()->latest()->get();

    //     $received_by = DB::table('users')
    //                     ->join('complaint_forms', 'users.id', '=', 'complaint_forms.scu_id')
    //                     ->select('users.name')
    //                     ->get();

    //     return view('ManageReports.all-patient-visit', compact('complaints', 'received_by'));
    // }

    public function viewAll(){      

        $patientvisit = DB::select('select * from patient_visits');

        return view('ManageReports.all-patient-visit',['patientvisit'=>$patientvisit]);
    }

    public function create(){
        return view('Forms.PatientVisit.create');
    }

    public function storeReport(Request $request){

        PatientVisit::insert([
            'id' => Auth::user()->id,
            'patientname' => $request->patientname,
            'ward' => $request->ward,
            'referreddate' => $request->referreddate,
            'attendeddate' => $request->attendeddate,
            'reason' => $request->reason,
            'background' => $request->background,
            'currentcondiiton' => $request->currentcondiiton,
            'problem' => $request->problem,
            'intervention' => $request->intervention,
            'casestatus' => $request->casestatus,
            'followup' => $request->followup,
        ]);

        $notification = array(
            'message' => 'Your complaint form is successfully submitted.',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

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

        return view('forms.complaint.assignstaff', compact('complaint', 'staffs'));
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

        return view('forms.complaint.investigate', compact('complaint'));
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

    public function viewPatientVisitDetails($id){

        $patientvisit = PatientVisit::findOrFail($id);

        return view('ManageReports.view-patientvisit-details', compact('patientvisit'));
    }

    public function pdf($id) {
        $patientvisit = PatientVisit::find($id);
        $pdf = PDF::loadView('Forms/PatientVisit/pdf', compact('patientvisit'));
        
        return $pdf->stream('PatientVisit.pdf');
    }
}
