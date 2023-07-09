<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SLOMonthly;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class SLOMonthlyController extends Controller
{
    public function viewAll()
    {

        if (Auth::user()->role == 'admin') {
            $slomonthly = DB::table('s_l_o_monthlies')
                ->orderBy('status', 'DESC')
                ->get();

            $received_by = DB::table('users')
                ->join('s_l_o_monthlies', 'users.id', '=', 's_l_o_monthlies.slo_id')
                ->select('users.name')
                ->get();

            return view('ManageReports.all-slo-monthly', compact('slomonthly', 'received_by'));
        } else {
            $slomonthly = DB::table('s_l_o_monthlies')->where('slo_id', '=', Auth::user()->id)
                ->orderBy('status', 'DESC')
                ->get();

            $received_by = DB::table('users')
                ->join('s_l_o_monthlies', 'users.id', '=', 's_l_o_monthlies.slo_id')
                ->select('users.name')
                ->get();

            return view('ManageReports.all-slo-monthly', compact('slomonthly', 'received_by'));
        }
    }

    public function create()
    {
        return view('Forms.SloMonthly.create');
    }

    public function storeReport(Request $request)
    {

        SloMonthly::insert([
            'slo_id' => Auth::user()->id,
            'slo_name' => Auth::user()->name,
            'dept' => Auth::user()->dept,
            'month' => Auth::user()->month,
            'date' => Carbon::now(),
            'report_details' => $request->report_details,
            'correctiveaction' => $request->correctiveaction,
            'status' => "Pending",
        ]);


        $notification = array(
            'message' => 'Your SLO monthly report is successfully submitted.',
            'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );


        return redirect()->route('dashboard')->with($notification);
    }

    public function viewSLOMonthlyDetails($id)
    {

        $slomonthly = SloMonthly::findOrFail($id);

        return view('ManageReports.view-slomonthly-details', compact('slomonthly'));
    }

    public function pdf($id)
    {
        $slomonthly = SloMonthly::find($id);
        $pdf = PDF::loadView('Forms/SloMonthly/pdf', compact('slomonthly'));

        return $pdf->stream('slo_monthly.pdf');
    }
}
