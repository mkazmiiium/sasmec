@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">View Report</a>
        <span class="breadcrumb-item active">Program Monitoring Form</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Program Monitoring Form</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="{{ route('program.store') }}" method="POST" method="post" onsubmit="return submitUserForm();">
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
                        <p class="card-text wizard-title">Program Information</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">
                                            <label for="name" class="form-label">Name <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="name" name="name" placeholder="Name" class="form-control" required>

                                        <div class="mg-t-25">
                                            <label for="date" class="form-label">Date <span style="color:red">*</label>
                                        </div>

                                        <input type="date" name="date" id="date" class="form-control" style="width:170px">

                                        <div class="mg-t-25">
                                            <label for="organizer" class="form-label">Organizer <span style="color:red">*</label>
                                        </div>
                                        <input type="text" name="organizer" id="organizer" placeholder="Organizer" class="form-control" required>


                                        <div class="mg-t-25">
                                            <label for="pic" class="form-label">PIC <span style="color:red">*</label>
                                        </div>
                                        <input type="text" id="pic" name="pic" placeholder="Person-In-Charge" class="form-control" required>

                                        <div class="mg-t-25">
                                            <label for="program_details" class="form-label">Program Details <span style="color:red">*</label>
                                        </div>
                                        <input type="text" id="program_details" name="program_details" placeholder="Program Details" class="form-control" maxlength="253">
                                        <br>
                                        <div class="file-upload-wrapper">
                                            <input type="file" id="attachment" name="attachment" class="file-upload" data-height="500" />
                                        </div>

                                        <div class="mg-t-25">
                                            <div class="mg-t-25">
                                                <span class="help-block"><span style="color:red">*Required fields</span>
                                            </div>
                                        </div>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>

                    <section class="step">
                        <p class="card-text wizard-title">Before Program</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">
                                            <label for="Q1">1. Organizing committee give a briefing about program to Representative from Department
                                                of Shariah Compliance?</label>
                                        </div>

                                        <div class="mg-t-25">
                                            <label for="briefing_date" class="form-label">Date:</label>
                                            <input type="date" id="briefing_date" name="briefing_date" class="form-control" style="width:170px;">
                                        </div>


                                        <div class="mg-t-25">
                                            <label for="briefing_time" class="form-label">Time:</label>
                                            <input type="time" id="briefing_time" name="briefing_time" class="form-control" style="width:170px;">
                                        </div>


                                        <div class="mg-t-25">
                                            <label for="briefing_person" class="form-label">Briefing given by:</label>
                                            <input type="text" id="briefing_person" name="briefing_person" placeholder="Briefing given by" class="form-control" style="width:300px;" autofocus>

                                        </div>

                                        <div class="mg-t-25">
                                            <label for="Q2">2. Organizing Committee ask an advice from Representative from Department of Shariah
                                                Compliance regarding to the flow of the program?</label>
                                        </div>

                                        <div class="mg-t-25">
                                            <label for="advise_date" class="form-label">Date:</label>
                                            <input type="date" id="advise_date" name="advise_date" class="form-control" style="width:170px;">

                                        </div>

                                        <div class="mg-t-25">
                                            <label for="advise_time" class="form-label">Time:</label>
                                            <input type="time" id="advise_time" name="advise_time" class="form-control" style="width:170px;">

                                        </div>

                                        <div class="mg-t-25">
                                            <label for="advise_details" class="form-label">Details of advice:</label>
                                            <input type="text" id="advise_details" name="advise_details" placeholder="Details" class="form-control" autofocus maxlength="253">

                                        </div>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>

                    <section class="step">
                        <p class="card-text wizard-title">During Program</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <div class="mg-t-25">
                                            <label for="during_prog_report" class="form-label">During Program</label>

                                            <textarea id="during_prog_report" name="during_prog_report" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                                        </div>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>

                    <section class="step">
                        <p class="card-text wizard-title">After Program</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <div class="mg-t-25">
                                            <label for="corrective_action" class="form-label">After Program</label>

                                            <textarea id="corrective_action" name="corrective_action" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                                        </div>

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