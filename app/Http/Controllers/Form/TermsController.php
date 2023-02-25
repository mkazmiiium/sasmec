<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Terms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Terms::all();

        return view('list', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Terms.create_report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $terms = new Terms;

        $terms->name = request('name');
        $terms->address = request('address');
        $terms->contactnumber = request('contactnumber');
        $terms->gender = request('gender');
        $terms->nric = request('nric');
        // since additional document arent required we check here, {best way of doing this is in the db file}

        request('additionalrequirements') == null ? $terms->additionalrequirements = "null" : $terms->additionalrequirements = request('additionalrequirements');
        $terms->declaration = request('declaration');
        $terms->save();

        $notification = array(
            'message' => 'Terms and Condition submitted Sucessfully!',
              'alert-type' => 'success',
            'alert-class' => 'bg-success text-white'
        );


        return redirect('/dashboard')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    // public function show(Terms $terms)
    // {
    //     $terms = DB::select('select * from terms');

    //     return view('terms.show_report',['terms'=>$terms]);
    // }

    public function viewAll()
    {

        $terms = DB::select('select * from terms');

        return view('ManageReports.all-terms', ['terms' => $terms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function edit(Terms $terms)
    {
        // sus
        $terms = Terms::find($terms->id);

        return view('Terms.edit')->with('terms', $terms);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terms $terms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terms $terms)
    {
        //
    }

    public function view($id)
    {
        $terms = terms::find($id);

        return view('Terms.view', compact('terms'));
    }

    public function pdf($id)
    {

        // this the function i need to exactly edit to solve this problem
        $terms = terms::find($id);
        $pdf = PDF::loadView('Terms/pdf', compact('terms'));

        return $pdf->stream('Terms.pdf');
    }
}