<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\ActivityMonitoring;
use PDF;
use Auth;

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
        $activity = DB::select('select * from activity_monitorings');
        $user = Auth::user();
        return view('ManageReports.all-activity', compact('activity', 'user'));
    }

    // store activity in db
    public function store(Request $req)
    {
        ActivityMonitoring::insert([
            'activity_name' => $req->activity_name,
            'pic' => $req->pic,
            'department' => $req->department,
            'shariah_critical_point' => $req->shariah_critical_point,
            'shariah_non_conformity' => $req->shariah_non_conformity,
            'corrective_action' => $req->corrective_action,
            'discussion_point' => $req->discussion_point,
            'suggestion' => $req->suggestion,
            'next_follow' => $req->next_follow,
            'created_date' => Carbon::now()
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
            $user = Auth::user();
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
