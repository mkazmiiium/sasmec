<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReferralForm;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
//use DB;

class ReferralFormController extends Controller
{
    public function viewAll()
    {

        $referrals = DB::table('referral_forms')->latest()->latest()->get();

        return view('ManageReports.all-referral', compact('referrals'));
    }

    public function create()
    {
        return view('Forms.Referral.create');
    }

    public function store(Request $request)
    {
        ReferralForm::insert([
            'name' => $request->name,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'gender' => $request->gender,
            'ref_no' => $request->ref_no,
            'nric' => $request->nric,
            'dept' => $request->dept,
            'doc_expertise' => $request->doc_expertise,
            'pt_diagnosis' => $request->pt_diagnosis,
            'case_type' => $request->case_type,
            'purpose' => $request->purpose,
            'details' => $request->details,
            'doc_id' => Auth::user()->id,
            'report_date' => Carbon::now(),
            'case_status' => 'Pending',
        ]);

        $notification = array(
            'message' => "Referral form is created successfully",
            'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function viewReferralDetails($case_no)
    {

        $referral = DB::table('referral_forms')->where('case_no', $case_no)->first();
        return view('ManageReports.view-referral-details', compact('referral'));
    }

    public function pdf($id)
    {
        $referral = DB::table('referral_forms')->where('case_no', $id)->first();
        $doc_name = DB::table('users')->where('id', $referral->doc_id)->value('name');
        error_log($doc_name);
        $pdf = PDF::loadView('Forms/Referral/pdf', compact('referral', 'doc_name'));

        return $pdf->stream('referral.pdf');
    }
}
