<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speaker = Speaker::all();

        return view('list', compact('speaker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Speaker.create_report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $speaker = new Speaker;

        $speaker->programname = request('programname');
        $speaker->date = request('date');
        $speaker->speakername = request('speakername');
        $speaker->institution = request('institution');
        $speaker->agreement = request('agreement');
        $speaker->save();

        $notification = array(
            'message' => 'Speaker Consent Form Created Successfully!',
              'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );


        return redirect('/dashboard')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    // public function show(Speaker $speaker)
    // {
    //     $speaker = DB::select('select * from speakers');
    //     return view('Speaker.show_report',['speakers'=>$speaker]);
    // }

    public function viewAll(Speaker $speaker)
    {
        $speaker = DB::select('select * from speakers');
        return view('ManageReports.all-speaker', ['speakers' => $speaker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Speaker $speaker)
    {
        $speaker = Speaker::find($id);

        return view('Speaker.edit')->with('speaker', $speaker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speaker $speaker)
    {
        //
    }

    public function view($id)
    {
        $speaker = speaker::find($id);

        return view('Speaker.view', compact('speaker'));
    }

    public function pdf($id)
    {
        if (speaker::where('id', $id)->exists()) {


            $pdf = PDF::loadview('Speaker/pdf', compact('speaker'));

            return $pdf->stream('Speaker.pdf');
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
