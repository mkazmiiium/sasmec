@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">View Report</a>
        <span class="breadcrumb-item active">Speaker Consent Form</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Speaker Consent Form</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="/speaker" method="POST" method="post" onsubmit="return submitUserForm();">
            @csrf
            <div class="form-content col-md-8 col-md-offset-2">
                <div class="wizard-header">
                    <h5 class="wizard-page">Page <span class="current-page"></span> of <span class="total-page"></span> </h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-lg" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <hr>
                <div class="box row-fluid">


                    <section class="step">
                        <p class="card-text wizard-title">Speaker's Information</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">
                                            <label for="programname" class="form-label">Name of Program</label> <span style="color: red;">*</span>
                                        </div>
                                        <input type="text" id="programname" name="programname" placeholder="Name of Program" class="form-control" autofocus required>

                                        <div class="mg-t-25">
                                            <label for="date" class="form-label">Date</label> <span style="color: red;">*</span>
                                        </div>
                                        <input type="date" name="date" id="date" class="form-control" style="width:170px" required>

                                        <div class="mg-t-25">
                                            <label for="speakername" class="form-label">Speaker's Name</label> <span style="color: red;">*</span>
                                        </div>
                                        <input type="text" id="speakername" name="speakername" placeholder="Speaker's Name" class="form-control" autofocus required>

                                        <div class="mg-t-25">
                                            <label for="institution" class="form-label">Institution</label> <span style="color: red;">*</span>
                                        </div>
                                        <input type="text" id="institution" name="institution" placeholder="Institution" class="form-control" autofocus required>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>

                    <section class="step">
                        <p class="card-text wizard-title">Agreement</p>
                        <div class="row">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <input class="form-check-input" type="checkbox" id="agreement" name="agreement" required>
                                        <label class="form-check-label" for="agreement">
                                            I allow the committee to distribute my slide presentation in pdf format
                                            and video recording to the program/training participants.<br><br>

                                            I acknowledge that I have observed the content of my presentation including copyright issues.<br><br>

                                            I acknowledge that Sultan Ahmad Shah Medical Centre @IIUM will not responsible to the content of
                                            presentation and cannot be held liable to any breach of Copyright and Data Protection made by the Speaker.
                                        </label>
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