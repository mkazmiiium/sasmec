<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\ComplaintForm;
use Carbon\Carbon;
use Auth;
use DB;

class ManageReportController extends Controller
{
    public function viewAllReport(){      
        return view('Reports.view');
    }

    public function viewReportHistory(){
        

        // $complaints = DB::table('complaint_forms')->where('complainant_id', '=', Auth::user()->id)
        //                                         ->orderBy('status', 'DESC')
        //                                         ->get();

        // $referrals = DB::table('referral_forms')->where('doc_id', '=', Auth::user()->id)
        //                                             ->orderBy('case_status', 'DESC')
        //                                             ->get();

        // $slo = DB::table('slo_reports')->where('slo_id', '=', Auth::user()->id)
        //                                         ->orderBy('status', 'DESC')
        //                                         ->get();

        // return view('User.report_history', compact('complaints', 'referrals', 'slo'),['programs'=>$programs]);

        // $complaints = DB::table('complaint_forms')->where('scu_id', '=', Auth::user()->id)
        //                                         ->orderBy('status', 'DESC')
        //                                         ->get();

        $complaints = DB::table('complaint_forms')->where('complainant_id', '=', Auth::user()->id)
                                                ->orderBy('status', 'DESC')
                                                ->get();
        
        // $complaints = DB::select('select * from complaint_forms');

        $terms = DB::select('select * from terms');

        $food_premises = DB::select('select * from food_premises');

        $speakers = DB::select('select * from speakers');

        $programs = DB::select('select * from programs');

        $documents = DB::select('select * from document_reviews');

        $referrals = DB::select('select * from referral_forms');

        $sloreports = DB::select('select * from slo_reports');

        $clinics = DB::select('select * from clinics');

        $acceptances = DB::select('select * from acceptances');

        $slomonthly = DB::select('select * from s_l_o_monthlies');

        $patientvisit = DB::select('select * from patient_visits');

        $activity = DB::select('select * from activity_monitorings');
        $count = 1;

        return view('User.report_history', compact('complaints','terms','speakers','programs','documents'
        ,'referrals','sloreports','clinics','acceptances','slomonthly','patientvisit', 'food_premises', 'count', 'activity'));
    }

}
