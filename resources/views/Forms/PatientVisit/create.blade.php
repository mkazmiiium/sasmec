@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">View Report</a>
        <span class="breadcrumb-item active">Patient Visit Report</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Patient Visit Report</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="{{ route('patient-visit.store') }}" method="POST" method="post" onsubmit="return submitUserForm();">
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
                        <p class="card-text wizard-title">Patient Details</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">
                                            <label for="patientname" class="form-label">Name of Patient/Relative <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="patientname" name="patientname" placeholder="Patient Name" class="form-control" required>

                                        <div class="mg-t-25">
                                            <label for="ward" class="form-label">Ward / Clinic <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="ward" name="ward" placeholder="Ward / Clinic" class="form-control" required>

                                        <div class="mg-t-25">
                                            <label for="referreddate" class="form-label">Referred Date <span style="color:red">*</label>
                                        </div>

                                        <input type="date" name="referreddate" id="referreddate" class="form-control" style="width:170px" required>

                                        <div class="mg-t-25">
                                            <label for="attendeddate" class="form-label">Attended Date <span style="color:red">*</label>
                                        </div>

                                        <input type="date" name="attendeddate" id="attendeddate" class="form-control" style="width:170px" required>

                                        <div class="mg-t-25">
                                            <label for="reason" class="form-label">Reason for Referral</label>
                                        </div>

                                        <textarea class="form-control" id="reason" rows="5" name="reason" style="width:700px;"></textarea>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>


                    <section class="step">
                        <p class="card-text wizard-title">Report Details</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">
                                            <label for="background" class="form-label">Background of Patient/Relative</label>
                                        </div>

                                        <textarea class="form-control" id="background" rows="5" name="background" style="width:700px;"></textarea>

                                        <div class="mg-t-25">
                                            <label for="currentcondiiton" class="form-label">Current Condition</label>
                                        </div>

                                        <textarea class="form-control" id="currentcondiiton" rows="5" name="currentcondiiton" style="width:700px;"></textarea>

                                        <div class="mg-t-25">
                                            <label for="problem" class="form-label">Problem</label>
                                        </div>

                                        <textarea class="form-control" id="problem" rows="5" name="problem" style="width:700px;"></textarea>

                                        <div class="mg-t-25">
                                            <label for="intervention" class="form-label">Intervention</label>
                                        </div>

                                        <textarea class="form-control" id="intervention" rows="5" name="intervention" style="width:700px;"></textarea>

                                        <div class="mg-t-25">
                                            <label for="casestatus" class="form-label">Case Status/Outcome</label>
                                        </div>

                                        <textarea class="form-control" id="casestatus" rows="5" name="casestatus" style="width:700px;"></textarea>

                                        <div class="mg-t-25">
                                            <label for="followup" class="form-label">Next Follow Up (if any):</label>
                                        </div>

                                        <textarea class="form-control" id="followup" rows="5" name="followup" style="width:700px;"></textarea>

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