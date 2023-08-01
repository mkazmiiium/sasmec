<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\ActivityMonitoring;
use App\Models\User;
use PDF;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ActivityMonitoringController extends Controller
{

    // return blade to create a new activity monitoring
    public function create()
    {
        return view('Forms.ActivityMonitoring.create');
    }

    // return view of all activity monitoring itesm
    public function view()
    {

        if (Auth::user()->role == 'admin') {
            $activity = ActivityMonitoring::latest()->get();


            $user = DB::table('users')
                ->join('activity_monitorings', 'users.id', '=', 'activity_monitorings.user_id')
                ->select('users.name')
                ->get();

            return view('ManageReports.all-activity', compact('activity', 'user'));
        } else {
            $activity = ActivityMonitoring::where('user_id', '=', Auth::user()->id)
                ->latest()
                ->get();
            // Retrieve the associated user
            $user = User::find($activity[0]->user_id);
            return view('ManageReports.all-activity', compact('activity', 'user'));
        }
    }

    // store activity in db
    public function store(Request $req)
    {
        ActivityMonitoring::insert([
            'user_id' => Auth::user()->id,
            'activity_name' => $req->activity_name,
            'department_info' => $req->department_info,
            'representative_dep' => $req->representative_dep,
            'representative_shariah' => $req->representative_shariah,
            'Q1' => $req->Q1,
            'Q1_remarks' => $req->Q1_remarks,
            'Q2' => $req->Q2,
            'Q2_remarks' => $req->Q2_remarks,
            'Q3' => $req->Q3,
            'Q3_remarks' => $req->Q3_remarks,
            'Q4' => $req->Q4,
            'Q4_remarks' => $req->Q4_remarks,
            'Q5' => $req->Q5,
            'Q5_remarks' => $req->Q5_remarks,
            'corrective_action' => $req->corrective_action,
            'discussion_point' => $req->discussion_point,
            'suggestion' => $req->suggestion,
            'next_follow' => $req->next_follow,
            'created_at' => Carbon::now()->format('Y-m-d')
        ]);

        $notification = array(
            'message' => 'Report submitted successfully!',
            'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    // get pdf stream
    public function pdf($id)
    {

        if (ActivityMonitoring::where('id', $id)->exists()) {

            $activity = ActivityMonitoring::find($id);
            $user = User::find($activity->user_id);
            $pdf = PDF::loadview('Forms.ActivityMonitoring.pdf', compact('activity', 'user'));
            return $pdf->stream('Forms.ActivityMonitoring.pdf');
            // The record exists in the database
        } else {
            $notification = array(
                'message' => 'No Data Found!',
                'alert-type' => 'error',
                'alert-class' => 'bg-danger text-white'
            );

            return redirect('/dashboard')->with($notification);
            // The record was not found in the database
        }
    }
}
