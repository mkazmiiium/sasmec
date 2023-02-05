<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SLOReport;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class SLOReportController extends Controller
{
    public function viewAll(){      

        $sloreports = DB::table('slo_reports')->latest()->latest()->get();

        return view('ManageReports.all-slo-report', compact('sloreports'));
    }

    public function create(){
        return view('Forms.SLOReport.create');
    }

    public function storeReport(Request $request){

        SLOReport::insert([
            'slo_id' => Auth::user()->id,
            'slo_name' => Auth::user()->name,
            'dept' => Auth::user()->dept,
            'report_date' => Carbon::now(),
            'report_details' => $request->report_details,
            'slo_action' => $request->slo_action,
            'status' => "Pending",
        ]);

        return redirect()->route('dashboard');

    }

    public function viewSLOReportDetails($id){

        $sloreports = SloReport::findOrFail($id);

        return view('ManageReports.view-sloreport-details', compact('sloreports'));
    }

    public function pdf($id) {
        $slo = SloReport::find($id);
        $pdf = PDF::loadView('Forms/SLOReport/pdf', compact('slo'));
        
        return $pdf->download('slo_report.pdf');
    }
}
