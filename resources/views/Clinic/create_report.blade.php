@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">View Report</a>
        <span class="breadcrumb-item active">Shariah Clinic Form</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Shariah Clinic Form</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="{{ route('clinic.store') }}" method="POST" method="post" onsubmit="return submitUserForm();">
            @csrf
            <div class="form-content col-md-8 col-md-offset-2">
                <div class="wizard-header">
                    <h5 class="wizard-page">Page <span class="current-page"></span> of <span class="total-page"></span>
                    </h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-lg" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <hr>
                <div class="box row-fluid">


                    <section class="step">
                        <p class="card-text wizard-title">Issue</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">


                                        <div class="mg-t-25">
                                            <label for="issue" class="font-semibold leading-none">Issue</label>
                                        </div>
                                        <textarea id="issue" name="issue" cols="300" rows="5" class="form-control" style="width:700px;" required></textarea>

                                        <div class="mg-t-25">
                                            <label for="comment" class="font-semibold leading-none">Suggestions/Recommendations/Comments</label>
                                        </div>
                                        <textarea id="comment" name="comment" cols="300" rows="5" class="form-control" style="width:700px;" required></textarea>
                                        <div class="mg-t-25">
                                            <label for="correctiveaction" class="font-semibold leading-none">Corrective Actions</label>
                                        </div>
                                        <textarea id="correctiveaction" name="correctiveaction" cols="300" rows="5" class="form-control" style="width:700px;" ></textarea>
                                        
                                        <div class="mg-t-25">
                                            <label for="followup" class="font-semibold leading-none">Next Follow-up</label>
                                        </div>
                                        <textarea id="followup" name="followup" cols="300" rows="5" class="form-control" style="width:700px;" ></textarea>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <button type="button" class="action btn btn-default text-capitalize back btn">Back</button>
                                <button type="button" class="action btn btn-primary text-capitalize next btn">Next</button>
                                <input type="submit" name="submit" id="btn-validate" class="action btn btn-success text-capitalize submit btn" value="Submit" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div><!-- sl-pagebody -->


</div><!-- sl-mainpanel -->



@endsection