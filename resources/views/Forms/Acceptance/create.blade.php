@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">View Report</a>
        <span class="breadcrumb-item active">Acceptance Consent Form</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Acceptance Consent Form</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="{{ route('acceptance.store') }}" method="POST" id="xyzform">
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
                        <p class="card-text wizard-title">Details</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">
                                            <label for="program" class="form-label">Program <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="program" name="program" placeholder="Program" class="form-control" required>

                                        <div class="mg-t-25">
                                            <label for="date" class="form-label">Date <span style="color:red">*</label>
                                        </div>

                                        <input type="date" name="date" id="date" class="form-control" style="width:170px" required>

                                        <div class="mg-t-25">
                                            <label for="name" class="form-label">Name <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="name" name="name" placeholder="Name " class="form-control" required>

                                        <div class="mg-t-25">
                                            <label for="institution" class="form-label">Institution <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="institution" name="institution" placeholder="Institution" class="form-control" required>



                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>


                    <section class="step">
                        <p class="card-text wizard-title">Terms and Condition</p>
                        <br>

                        <div class="section0">

                            <label for="section0">I: </label>

                            <select form="xyzform" style="width: 150px; height: 35px;" name="acceptance" required>
                                <option value="Accept">Accept</option>
                                <option value="Do not accept">Do not Accept</option>
                            </select>
                            <label for="section01"> an invitation as: </label>

                            <select name="job" form="xyzform" style="width: 150px; height: 35px;" required>
                                <option value="Speaker">Speaker</option>
                                <option value="Moderator">Moderator</option>
                                <option value="Facilitator">Facilitator</option>
                                <option value="Instructor">Instructor</option>
                                <option value="Panelist">Panelist</option>
                                <option type="text">Others</option>
                            </select>

                            <input type="text" placeholder="If others please specify " class="form-control" style="margin: 12px" name="others">
                        </div>


                        <div class="section1">

                            <label for="section1">I: </label>

                            <select form="xyzform" style="width: 150px; height: 35px;" name="acceptance2" required>
                                <option value="Allow">Allow</option>
                                <option value="Do not allow">Do Not Allow</option>
                            </select>
                            <label for="section01"> the committe to distrube my resources for the public reading and knowledge purposes. </label>


                            <label for="resources"> Resources category allowed (Please tick): </label>

                            <select form="xyzform" style="width: 300px; height: 35px;" name="resources" required>
                                <option value="Slide presentation">Slide Presentation in PDF format</option>
                                <option value="Video recording">Video recording</option>
                                <option type="text">Others</option>
                            </select>
                            <input type="text" placeholder="If others is selected " class="form-control" style="margin-top: 15px; margin-left: 10px;" name="others2">
                        </div>


                        <div class="row mg-t-25">
                            <div class="col-lg-10">
                                <p id="checkbox_msg" style="color: red;"></p>
                                <label class="ckbox">
                                    <input type="checkbox" id="input_box"><span>I hereby declare that
                                        the information given in this application is true and
                                        correct to the best of my knowledge and belief. In case any information
                                        given in this application proves to be false or incorrect, I shall be
                                        responsible for the consequences.</span>
                                </label>
                            </div><!-- col-3 -->
                        </div><!-- row -->



                    </section>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pull-right">
                                <button type="button" class="action btn btn-default text-capitalize back btn">Back</button>
                                <button type="button" class="action btn btn-primary text-capitalize next btn">Next</button>
                                <input type="submit" name="submit" id="btn-validate" class="action btn btn-success text-capitalize submit btn" value="Submit" onclick="return input_verify()" />
                            </div>
                        </div>
                    </div>
                    <script>
                        function input_verify() {
                            var input_box = document.getElementById('input_box');
                            if (input_box.checked == true) {
                                return true;
                            } else {
                                document.getElementById('checkbox_msg').innerHTML = "Please check the box";
                                return false;
                            }
                        }
                    </script>

                </div>
            </div>
        </form>


    </div><!-- sl-pagebody -->


</div><!-- sl-mainpanel -->



@endsection