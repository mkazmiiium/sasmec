@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">My Report History</a>
    <span class="breadcrumb-item active">All Report History</span>
  </nav>

  <!-- /.col -->
  <div class="col-md-15">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#document_review" data-toggle="tab">Document Review</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#food_premise" data-toggle="tab">Food Premise Inspection</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#referral" data-toggle="tab">Referral Form</a></li>
          <li class="nav-item"><a class="nav-link" href="#program" data-toggle="tab">Program Monitoring</a></li>
          <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity Monitoring</a></li>
          <li class="nav-item"><a class="nav-link" href="#complaint" data-toggle="tab">Complaint Form</a></li>
          <li class="nav-item"><a class="nav-link" href="#terms" data-toggle="tab">Terms and Condition</a></li>
          <li class="nav-item"><a class="nav-link" href="#sloreport" data-toggle="tab">SLO Report</a></li>
          <li class="nav-item"><a class="nav-link" href="#clinic" data-toggle="tab">Shariah Clinic</a></li>
          <li class="nav-item"><a class="nav-link" href="#speaker" data-toggle="tab">Speaker Consent</a></li>
          <li class="nav-item"><a class="nav-link" href="#acceptance" data-toggle="tab">Acceptance or Concent Form</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#slomonthly" data-toggle="tab">SLO Monthly</a></li>
          <li class="nav-item"><a class="nav-link" href="#patient" data-toggle="tab">Patient Visit</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">

          <!-- Document Review -->
          <div class="active tab-pane" id="document_review">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">Document Name</th>
                  <th class="wd-15p">Received Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($documents as $document)
                <tr>
                  <td>{{ $document->id }}</td>
                  <td>{{ $document->document_name }}</td>
                  <td>{{ $document->received_date }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">

                      </button>
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\DocumentReviewController@pdf', $document->id) }}"
                          target="_blank">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Document Review -->

          <!-- Food Premise -->
          <div class="tab-pane" id="food_premise">


            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">No</th>
                  <th class="wd-15p">Premise Name</th>
                  <th class="wd-15p">Location</th>
                  <th class="wd-15p">Action</th>


                </tr>
              </thead>
              <tbody>

                @foreach($food_premises as $food_premises)
                <tr>

                  <td>{{ $count }}</td>
                  <td>{{ $food_premises->PremiseName }}</td>
                  <td>{{ $food_premises->location }}</td>
                  <td>
                    <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ url('food/create') }}">Edit</a>
                      </button>
                    </div>
                  </td>


                </tr>
                <span hidden> {{ $count ++ }}</span>

                @endforeach
              </tbody>
            </table>
          </div>

          <!-- End Food Premise -->

          <!-- Referral Form -->
          <div class="tab-pane" id="referral">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone No</th>
                  <th class="wd-15p">NRIC</th>
                  <th class="wd-15p">Department</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($referrals as $referral)
                <tr>
                  <td>{{ $referral->id }}</td>
                  <td>{{ $referral->name }}</td>
                  <td>{{ $referral->phone_no }}</td>
                  <td>{{ $referral->nric }}</td>
                  <td>{{ $referral->dept }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ url('referral/details/'.$referral->id) }}">Show</a>
                      </button>
                      <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                        <i class="fa fa-download mg-r-10"></i>
                        <a
                          href="{{ action('App\Http\Controllers\Form\ReferralFormController@pdf', $referral->id) }}">Download</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Referral Form-->

          <!-- Program Monitoring -->
          <div class="tab-pane" id="program">
            <div class="card pd-20 pd-sm-40">


              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-10p">Report ID</th>
                      <th class="wd-15p">Program Name</th>
                      <th class="wd-15p">Date</th>
                      <th class="wd-15p">PIC</th>
                      <th class="wd-20p">Organizer</th>
                      <th class="wd-25p">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($programs as $program)
                    <tr>
                      <td>{{ $program->id }}</td>
                      <td>{{ $program->name }}</td>
                      <td>{{ $program->date }}</td>
                      <td>{{ $program->pic }}</td>
                      <td>{{ $program->organizer }}</td>
                      {{-- <td>
                        @if($complaint->received_by == NULL)
                        No SCU assigned
                        @else
                        {{ $received_by }}
                        @endif
                      </td> --}}
                      <td>
                        <div class="btn-group table-action" role="group">

                          <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                            <i class="fa fa-eye mg-r-10"></i>
                            <a href="{{ action('App\Http\Controllers\Form\ProgramController@pdf', $program->id) }}"
                              target="_blank">Show</a>
                          </button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div><!-- card -->
          </div>
          <!-- End Program Monitoring -->

          <!-- Activity Monitoring -->
          <div class="tab-pane" id="activity">

          </div>
          <!-- End Activity Monitoring -->

          <!-- Complaint Form -->
          <div class="tab-pane" id="complaint">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">Complainant Name</th>
                  <th class="wd-15p">Complaint Type</th>
                  <th class="wd-15p">Complaint Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($complaints as $complaint)
                <tr>
                  <td>{{ $complaint->id }}</td>
                  <td>{{ $complaint->complainant_name }}</td>
                  <td>{{ $complaint->complaint_type }}</td>
                  <td>{{ $complaint->complaint_date }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ url('/complaint/details/'.$complaint->id) }}">Show</a>
                      </button>
                      <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                        <i class="fa fa-download mg-r-10"></i>
                        <a
                          href="{{ action('App\Http\Controllers\Form\ComplaintFormController@pdf', $complaint->id) }}">Download</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Complaint Form -->

          <!-- Terms and Condition-->
          <div class="tab-pane" id="terms">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Contact Number</th>
                  <th class="wd-15p">NRIC</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($terms as $terms)
                <tr>
                  <td>{{ $terms->id }}</td>
                  <td>{{ $terms->name }}</td>
                  <td>{{ $terms->contactnumber }}</td>
                  <td>{{ $terms->nric }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">

                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\TermsController@pdf', $terms->id) }}" target="
                        ">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Terms and Condition -->

          <!-- SLO Report-->
          <div class="tab-pane" id="sloreport">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">SLO Name</th>
                  <th class="wd-15p">Department</th>
                  <th class="wd-15p">Report Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sloreports as $sloreports)
                <tr>
                  <td>{{ $sloreports->id }}</td>
                  <td>{{ $sloreports->slo_name }}</td>
                  <td>{{ $sloreports->dept }}</td>
                  <td>{{ $sloreports->report_date }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">

                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\SLOReportController@pdf', $sloreports->id) }}"
                          target="
                        ">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End SLO Report -->

          <!-- Shariah Clinic-->
          <div class="tab-pane" id="clinic">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-40p">Issue</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clinics as $clinics)
                <tr>
                  <td>{{ $clinics->id }}</td>
                  <td>{{ $clinics->issue }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">


                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\ClinicController@pdf', $clinics->id) }}"
                          target="_blank">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Shariah Clinic -->

          <!-- Speaker Consent-->
          <div class="tab-pane" id="speaker">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">Report ID</th>
                  <th class="wd-25p">Program Name</th>
                  <th class="wd-10p">Date</th>
                  <th class="wd-15p">Speaker's Name</th>
                  <th class="wd-15p">Institution</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($speakers as $speaker)
                <tr>
                  <td>{{ $speaker->id }}</td>
                  <td>{{ $speaker->programname }}</td>
                  <td>{{ $speaker->date }}</td>
                  <td>{{ $speaker->speakername }}</td>
                  <td>{{ $speaker->institution }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">

                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\SpeakerController@pdf', $speaker->id) }}"
                          target="_blank">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Speaker Consent -->

          <!-- Acceptance of Consent Form-->
          <div class="tab-pane" id="acceptance">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">Program Name</th>
                  <th class="wd-15p">Date</th>
                  <th class="wd-15p">Speaker's Name</th>
                  <th class="wd-15p">Institution</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($acceptances as $acceptance)
                <tr>
                  <td>{{ $acceptance->id }}</td>
                  <td>{{ $acceptance->program }}</td>
                  <td>{{ $acceptance->date }}</td>
                  <td>{{ $acceptance->name }}</td>
                  <td>{{ $acceptance->institution }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a
                          href="{{ action('App\Http\Controllers\Form\AcceptanceController@view', $acceptance->id) }}">Show</a>
                      </button>
                      <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                        <i class="fa fa-download mg-r-10"></i>
                        <a
                          href="{{ action('App\Http\Controllers\Form\AcceptanceController@pdf', $acceptance->id) }}">Download</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Acceptance of Consent Form -->

          <!-- SLO Monthly Form-->
          <div class="tab-pane" id="slomonthly">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">SLO Officer Name</th>
                  <th class="wd-15p">Department</th>
                  <th class="wd-15p">Month</th>
                  <th class="wd-15p">Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($slomonthly as $slomonthly)
                <tr>
                  <td>{{ $slomonthly->id }}</td>
                  <td>{{ $slomonthly->slo_name }}</td>
                  <td>{{ $slomonthly->dept }}</td>
                  <td>{{ $slomonthly->month }}</td>
                  <td>{{ $slomonthly->date }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">

                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\SLOMonthlyController@pdf', $slomonthly->id) }}"
                          target="_blank">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End SLO Monthly Form -->

          <!-- Patient Visit Form-->
          <div class="tab-pane" id="patient">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Report ID</th>
                  <th class="wd-15p">Patient Name</th>
                  <th class="wd-15p">Ward</th>
                  <th class="wd-15p">Referred Date</th>
                  <th class="wd-15p">Attended Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($patientvisit as $patientvisit)
                <tr>
                  <td>{{ $patientvisit->id }}</td>
                  <td>{{ $patientvisit->patientname }}</td>
                  <td>{{ $patientvisit->ward }}</td>
                  <td>{{ $patientvisit->referreddate }}</td>
                  <td>{{ $patientvisit->attendeddate }}</td>
                  {{-- <td>
                    @if($complaint->received_by == NULL)
                    No SCU assigned
                    @else
                    {{ $received_by }}
                    @endif
                  </td> --}}
                  <td>
                    <div class="btn-group table-action" role="group">

                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\PatientVisitController@pdf', $patientvisit->id) }}"
                          target="_blank">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Patient Visit Form -->

        </div>



      </div>


    </div><!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<script>
  $(function () {
    'use strict';

    $('#datatable1').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
    });

    $('#datatable2').DataTable({
      bLengthChange: false,
      searching: false,
      responsive: true
    });

    // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

  });
</script>





@endsection