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
      <h5>Activity Monitoring Form</h5>
    </div><!-- sl-page-title -->

    <form class="form-horizontal form-wizard form" action="{{ route('activity-monitor.store') }}" method="POST" method="post" onsubmit="return submitUserForm();">
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
                      <label for="activity_name" class="form-label">Acitivity Name <span style="color:red">*</span></label>
                    </div>
                    <input type="text" id="activity_name" name="activity_name" placeholder="Activity Name" class="form-control" autofocus minlength="5" required maxlength="253">


                    <div class="mg-t-25">
                      <label for="pic" class="form-label">Person In Charge<span style="color:red">*</span></label>
                    </div>
                    <input type="text" id="pic" name="pic" placeholder="Person In Charge" class="form-control" required maxlength="253">


                    <div class="mg-t-25">
                      <label for="department" class="form-label">Activity Department <span style="color:red">*</span></label>
                    </div>
                    <input type="text" id="department" name="department" placeholder="Activity Department" class="form-control" required maxlength="253">


                    <div class="mg-t-25">
                      <label for="shariah_non_conformity" class="form-label">Shariah Critical Points</label>
                    </div>
                    <input type="text" id="shariah_non_conformity" name="shariah_non_conformity" placeholder="Shariah Non Conformity" class="form-control" maxlength="253">

                  </div><!-- col-3 -->
                </div><!-- row -->
              </div>
            </div>
          </section>



          <section class="step">
            <p class="card-text wizard-title">corrective action</p>

            <div class="row ">

              <div class="col-lg-10">
                <div class="row mg-t-25">

                  <div class="mg-t-25">
                    <label for="discussion_point" class="form-label">Activity Correctiveness Action <span style="color:red">*</span></label>
                  </div>
                  <textarea id="corrective_action" name="corrective_action" cols="700" rows="5" class="form-control" maxlength="253"></textarea>

                  <div class="mg-t-25">
                    <label for="discussion_point" class="form-label">Activity Discussion Points<span style="color:red">*</span></label>
                  </div>
                  <textarea id="discussion_point" name="discussion_point" cols="700" rows="5" class="form-control" maxlength="253"></textarea>

                </div><!-- row -->
              </div>
            </div>
          </section>




          <section class="step">
            <p class="card-text wizard-title">suggestion / recommendations</p>

            <div class="row ">

              <div class="col-lg-10">
                <div class="row mg-t-25">

                  <div class="mg-t-25">
                    <label for="suggestion" class="form-label">Suggestion <span style="color:red">*</span></label>
                  </div>
                  <textarea id="suggestion" name="suggestion" cols="700" rows="5" class="form-control" maxlength="253"></textarea>

                  <div class="mg-t-25">
                    <label for="next_follow" class="form-label">Acitivity Next Follow Up<span style="color:red">*</span></label>
                  </div>
                  <textarea id="next_follow" name="next_follow" cols="700" rows="5" class="form-control" maxlength="253"></textarea>

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