@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">Create Report</a>
        <span class="breadcrumb-item active">Complaint Form</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Complaint Form</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="{{ route('complaint.store') }}" method="POST" onsubmit="return submitUserForm();">
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
                        <p class="card-text wizard-title">Complaint Details</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <div class="mg-t-25">
                                            <h6 class="form-label">Type of Complaint<span style="color:red">*</span>
                                            </h6>
                                        </div>


                                        <select class="form-control select2" name="complaint_type" required style="height: 15%;">
                                            <option label="Choose one" disable selected></option>
                                            <option value="Improper Attire/Dress Code">Improper Attire/Dress Code
                                            </option>
                                            <option value="Inappropritate Socializing">Inappropritate Socializing
                                            </option>
                                            <option value="Improper Attitude">Improper Attitude</option>
                                            <option value="Others">Others</option>
                                        </select>

                                        <div class="mg-t-25">
                                            <h6 class="form-label">Details<span style="color:red">*</span></h6>
                                        </div>

                                        <textarea rows="5" class="form-control" name="details" placeholder="Complaint Details" required></textarea>

                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>

                    <section class="step">
                        <p class="card-text wizard-title">Declaration</p>
                        <p id="checkbox_msg" style="color: red;"></p>
                        <div class="row">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <label class="ckbox">
                                            <input type="checkbox" id="input_box" required><span>I hereby declare that
                                                the information given in this application is true and
                                                correct to the best of my knowledge and belief. In case any information
                                                given in this application proves to be false or incorrect, I shall be
                                                responsible for the consequences.</span>
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
                                <input type="submit" name="submit" id="btn-validate" class="action btn btn-success text-capitalize submit btn" value="Submit" onclick="return input_verify()" />
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
            </div>

        </form>


    </div><!-- sl-pagebody -->


</div><!-- sl-mainpanel -->



@endsection