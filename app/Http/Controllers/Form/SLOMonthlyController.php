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
    public function viewAll(){      

        $slomonthly = DB::table('s_l_o_monthlies')->latest()->latest()->get();

        return view('ManageReports.all-slo-monthly', compact('slomonthly'));
    }

    public function create(){
        return view('Forms.SloMonthly.create');
    }

    public function storeReport(Request $request){

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

        return redirect()->route('dashboard');

    }

    public function viewSLOMonthlyDetails($id){

        $slomonthly = SloMonthly::findOrFail($id);

        return view('ManageReports.view-slomonthly-details', compact('slomonthly'));
    }

    public function pdf($id) {
        $slomonthly = SloMonthly::find($id);
        $pdf = PDF::loadView('forms/slomonthly/pdf', compact('slomonthly'));
        
        return $pdf->download('slo_monthly.pdf');
    }
}
