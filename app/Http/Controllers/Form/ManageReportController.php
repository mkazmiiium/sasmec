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
    public function viewAllReport()
    {
        return view('Reports.view');
    }

    public function viewReportHistory()
    {

        if (Auth::user()->role == 'admin') {
            $documents = DB::select('select * from document_reviews'); // need update

            $food_premises = DB::select('select * from food_premises'); // need update

            $referrals = DB::select('select * from referral_forms'); // beed update

            $programs = DB::select('select * from programs'); // need update

            $activity = DB::select('select * from activity_monitorings'); // need update    

            $complaints = DB::select('select * from complaint_forms'); // need update

            $clinics = DB::select('select * from clinics'); // need update

            $slomonthly = DB::select('select * from s_l_o_monthlies'); // need update

            $patientvisit = DB::select('select * from patient_visits'); // need update

            $count = 1;

            return view('User.admin_report_history', compact(
                'complaints',
                'programs',
                'documents',
                'referrals',
                'clinics',
                'slomonthly',
                'patientvisit',
                'food_premises',
                'count',
                'activity'
            ));
        } else {

            // the new update, to show only this 3 to users 

            $complaints = DB::table('complaint_forms')->where('complainant_id', '=', Auth::user()->id)
                ->orderBy('status', 'DESC')
                ->get();
            
            $activity = DB::table('activity_monitorings')->where('id', '=', Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->get();


            $slomonthly = DB::table('s_l_o_monthlies')->where('slo_id', '=', Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->get();

            $count = 1;
            return view('User.report_history', compact(
                'activity',
                'complaints',
                'slomonthly',
                'count'
            ));
        }
    }
}
