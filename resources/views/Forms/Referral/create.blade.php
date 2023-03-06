@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">Create Report</a>
        <span class="breadcrumb-item active">Referral Form</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Referral From</h5>
        </div><!-- sl-page-title -->

        <form class="form-horizontal form-wizard form" action="#" method="POST" method="post">
            @csrf
            <div class=" form-content col-md-8 col-md-offset-2">
                <div class="wizard-header">
                    <h5 class="wizard-page">Page <span class="current-page"></span> of <span class="total-page"></span>
                    </h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-lg" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>

                <hr>
                <div class="box row-fluid">









                    <section class="step">
                        <p class="card-text wizard-title">Patient/Staff Information</p>

                        <div class="row ">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">

                                        <div class="mg-t-25">

                                            <label for="name" class="form-label">Name <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="name" name="name" placeholder="Name" class="form-control" required minlength="5">

                                        <div class="mg-t-25">
                                            <label for="address" class="form-label">Address <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="address" name="address" placeholder="Address" class="form-control" autofocus required>


                                        <div class="mg-t-25">
                                            <label for="contactnumber" class="form-label">Contact number <span style="color:red">*</span></label>
                                        </div>

                                        <input type="number" id="contactnumber" name="contactnumber" placeholder="Contact Number" class="form-control" autofocus required>


                                        <div class="mg-t-25">
                                            <label class="form-label">Gender <span style="color:red">*</label>
                                        </div>


                                        <label class="radio-inline">
                                            <input type="radio" id="female" name="gender" value="female" required>Female
                                        </label>


                                        <label class="radio-inline">
                                            <input type="radio" id="male" name="gender" value="male" required>Male
                                        </label>



                                        <div class="mg-t-25">
                                            <label for="nric" class="form-label">NRIC <span style="color:red">*</label>
                                        </div>
                                        <input type="text" id="nric" name="nric" placeholder="NRIC" class="form-control" autofocus required>



                                        <div class="mg-t-25">
                                            <label for="additionalrequirements" class="form-label">Additional
                                                Requirements </label>
                                        </div>
                                        <input type="text" id="additionalrequirements" name="additionalrequirements" placeholder="Additional Requirements" class="form-control" autofocus>




                                    </div><!-- col-3 -->
                                </div><!-- row -->
                            </div>
                        </div>
                    </section>





                    <section class="step">
                        <p class="card-text wizard-title">Information From Doctor</p>
                        <div class="row ">
                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <div class="mg-t-25">

                                            <label for="name" class="form-label">Despline / Expertise <span style="color:red">*</label>
                                        </div>

                                        <input type="text" name="doc_expertise" placeholder="Despline / Expertise" class="form-control" required minlength="5">
                                        <div class="mg-t-25">

                                            <label for="name" class="form-label">Patient Diagnosis <span style="color:red">*</label>
                                        </div>

                                        <input type="text" id="" name="pt_diagnosis" placeholder="Patient Diagnosis" class="form-control" required minlength="5">

                                        <div class="mg-t-25">

                                            <label for="case_type" class="form-label">Type of case: <span style="color:red">*</label>
                                            <br>
                                        </div>

                                        <!-- create a check box with the following 1. elective case 2. urgent case -->

                                        <input type="checkbox" name="case_type" value="Elective Case" onclick="onlyOne(this)" style="size: 50%">
                                        <label for="casetype" style="font-weight: lighter;"> Elective case</label><br>
                                        <input type="checkbox" name="case_type" value="Urgent Case" onclick="onlyOne(this)">
                                        <label for="vehicle3" style="font-weight: lighter;"> Urgent case</label><br><br>


                                        <script>
                                            function onlyOne(checkbox) {
                                                var checkboxes = document.getElementsByName('case_type')
                                                checkboxes.forEach((item) => {
                                                    if (item !== checkbox) item.checked = false
                                                })
                                            }
                                        </script>


                                    </div>
                                </div>
                            </div>

                    </section>


                    <section class="step">
                        <p class="card-text wizard-title">Purpose</p>
                        <div class="row ">
                            <div class="col-lg-10">
                                <div class="row mg-t-25">

                                    <div class="col-lg-10">
                                        <div class="mg-t-25">

                                            <label for="case_type" class="form-label">Supportive Therapy <span style="color:red">*</label>
                                            <br>
                                        </div>

                                        <input type="checkbox" name="purpose_1" value="Supportive Therapyt - Spiritual" onclick="onlyOne_1(this)" style="size: 50%">
                                        <label for="" style="font-weight: lighter;"> Spiritual</label><br>
                                        <input type="checkbox" name="purpose_1" value="Supportive Therapyt - Moral / Motivation" onclick="onlyOne_1(this)">
                                        <label for="" style="font-weight: lighter;"> Moral / Motivation </label><br><br>


                                        <div class="mg-t-25">

                                            <label for="case_type" class="form-label">Practical Assistance <span style="color:red">*</label>
                                            <br>
                                        </div>

                                        <input type="checkbox" name="purpose_2" value="Practical Assistance - Perform Ibadah" onclick="onlyOne_2(this)" style="size: 50%">
                                        <label for="" style="font-weight: lighter;"> Perform Ibadah</label><br>
                                        <input type="checkbox" name="purpose_2" value="Practical Assistance - Others" onclick="onlyOne_2(this)">
                                        <label for="" style="font-weight: lighter;"> Others </label><br>

                                        <div class="mg-t-25">

                                            <label for="name" class="form-label">Details </label>
                                        </div>

                                        <input type="text" name="details" placeholder="Details" class="form-control" required minlength="5">


                                        <script>
                                            function onlyOne_1(checkbox) {
                                                var checkboxes = document.getElementsByName("purpose_1")
                                                checkboxes.forEach((item) => {
                                                    if (item !== checkbox) item.checked = false
                                                })
                                            }


                                            function onlyOne_2(checkbox) {
                                                var checkboxes = document.getElementsByName("purpose_2")
                                                checkboxes.forEach((item) => {
                                                    if (item !== checkbox) item.checked = false
                                                })
                                            }
                                        </script>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step">
                        <p class="card-text wizard-title">Declaration</p>
                        <div class="row">

                            <div class="col-lg-10">
                                <div class="row mg-t-25">
                                    <div class="col-lg-10">
                                        <input class="form-check-input" type="checkbox" id="declaration" name="declaration" required>
                                        <label class="form-check-label" for="declaration">
                                            &nbsp;
                                            I acknowledge that I have clearly explained to the patient some of the
                                            conditions that
                                            the patient may face, as described in the next page.<br><br>

                                            Saya mengaku bahawa saya telah menerangkan dengan jelas kepada pesakit
                                            berkenaan dengan beberapa keadaan yang
                                            mungkin dihadapi oleh pesakit seperti yang dinyatakan di muka surat
                                            seterusnya.
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