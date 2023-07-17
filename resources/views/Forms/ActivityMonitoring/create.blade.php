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
                      <label for="department_info" class="form-label">Department / Unit / Ward / Clinic <span style="color:red">*</span></label>
                    </div>
                    <input type="text" id="department_info" name="department_info" placeholder="Department / Unit / Ward / Clinic" class="form-control" autofocus minlength="5" required maxlength="253">


                    <div class="mg-t-25">
                      <label for="pic" class="form-label">Representative of Department / Unit / Ward / Clinic <span style="color:red">*</span></label>
                    </div>
                    <input type="text" id="representative_dep" name="representative_dep" placeholder="Representative of Department / Unit / Ward / Clinic" class="form-control" required maxlength="253">


                    <div class="mg-t-25">
                      <label for="department" class="form-label"> Representative from Department of Shariah Compliance <span style="color:red">*</span></label>
                    </div>
                    <input type="text" id="representative_shariah" name="representative_shariah" placeholder="Representative from Department of Shariah Compliance" class="form-control" required maxlength="253">

                  </div><!-- col-3 -->
                </div><!-- row -->
              </div>
            </div>
          </section>




          <section class="step">
            <p class="card-text wizard-title">Workflow</p>
            <div class="row">
              <div class="col-lg-10">
                <div class="card pd-5 pd-sm-1">


                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-180p">Does Person in charge give a briefing or explanation about workflow?</th>
                          <th class="wd-5p">Yes</th>
                          <th class="wd-5p">No</th>

                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <label for="Q1_remarks" class="form-label"> <b>Remarks: </b></label>
                            <br>
                            <textarea id="Q1_remarks" name="Q1_remarks" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                          </td>
                          <td>
                            <input type="radio" id="yes" name="Q1" value="yes" required>
                          </td>
                          <td>
                            <input type="radio" id="no" name="Q1" value="no" required>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
              </div>
            </div>

            <div class="row">
              <div class="col-lg-10">
                <div class="card pd-5 pd-sm-1">


                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-180p">Workflow of the deparment / Unit / Ward / clinic comply with shariah? </th>
                          <th class="wd-5p">Yes</th>
                          <th class="wd-5p">No</th>

                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <label for="Q2_remarks" class="form-label"> <b>Remarks </b>(Note: If not comply with shariah, it shall be stated in remarks field.)
                            </label>
                            <br><br>
                            <textarea id="Q2_remarks" name="Q2_remarks" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                          </td>
                          <td>
                            <input type="radio" id="yes" name="Q2" value="yes" required>
                          </td>
                          <td>
                            <input type="radio" id="no" name="Q2" value="no" required>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
              </div>
            </div>
          </section>

          <section class="step">
            <p class="card-text wizard-title">Shariah Critical Control Points</p>
            <div class="row">
              <div class="col-lg-10">
                <div class="card pd-5 pd-sm-1">


                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-180p">Shariah Critical Control Points are achieved / fully implemente?</th>
                          <th class="wd-5p">Yes</th>
                          <th class="wd-5p">No</th>

                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <label for="Q3_remarks" class="form-label"> <b>Remarks: </b></label>
                            <br>
                            <textarea id="Q3_remarks" name="Q3_remarks" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                          </td>
                          <td>
                            <input type="radio" id="yes" name="Q3" value="yes" required>
                          </td>
                          <td>
                            <input type="radio" id="no" name="Q3" value="no" required>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
              </div>
            </div>

            <div class="row">
              <div class="col-lg-10">
                <div class="card pd-5 pd-sm-1">


                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-180p">Shariah Critical Control Points are identified accordingly to Shariah requirements? </th>
                          <th class="wd-5p">Yes</th>
                          <th class="wd-5p">No</th>

                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <label for="Q4_remarks" class="form-label"> <b>Remarks </b>(Note: If not comply with shariah, it shall be stated in remarks field.)
                            </label>
                            <br><br>
                            <textarea id="Q4_remarks" name="Q4_remarks" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                          </td>
                          <td>
                            <input type="radio" id="yes" name="Q4" value="yes" required>
                          </td>
                          <td>
                            <input type="radio" id="no" name="Q4" value="no" required>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
              </div>
            </div>


            <div class="row">
              <div class="col-lg-10">
                <div class="card pd-5 pd-sm-1">


                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-180p">Any activites of non-conformitiy to Shariah are noticed during inspection? </th>
                          <th class="wd-5p">Yes</th>
                          <th class="wd-5p">No</th>

                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <label for="Q5_remarks" class="form-label"> <b>Remarks </b>(Note: If any activities of non-conformites are noticed, it shall be stated in the remark field.)
                            </label>
                            <br><br>
                            <textarea id="Q5_remarks" name="Q5_remarks" cols="700" rows="5" class="form-control" maxlength="253"></textarea>
                          </td>
                          <td>
                            <input type="radio" id="yes" name="Q5" value="yes" required>
                          </td>
                          <td>
                            <input type="radio" id="no" name="Q5" value="no" required>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
              </div>
            </div>
          </section>


          <section class="step">
            <p class="card-text wizard-title">corrective action</p>

            <div class="row ">

              <div class="col-lg-10">
                <div class="row mg-t-25">

                  <div class="mg-t-25">
                    <label for="discussion_point" class="form-label">Activity Correctiveness Action (If any) <span style="color:red">*</span></label>
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