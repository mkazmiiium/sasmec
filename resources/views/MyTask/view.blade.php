@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">My Task</a>
    <span class="breadcrumb-item active">All Tasks</span>
  </nav>

  <!-- /.col -->
  <div class="col-md-15">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#document_review" data-toggle="tab">Document Review</a></li>

          <!-- <li class="nav-item"><a class="nav-link" href="#referral" data-toggle="tab">Referral Form</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#program" data-toggle="tab">Program Monitoring</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity Monitoring</a></li> --}}
          <li class="nav-item"><a class="nav-link" href="#complaint" data-toggle="tab">Complaint Form</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="#terms" data-toggle="tab">Terms and Condition</a></li> --}}
          {{-- <li class="nav-item"><a class="nav-link" href="#sloreport" data-toggle="tab">SLO Report</a></li> --}}
          <li class="nav-item"><a class="nav-link" href="#clinic" data-toggle="tab">Shariah Clinic</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="#speaker" data-toggle="tab">Speaker Consent</a></li> --}}
          {{-- <li class="nav-item"><a class="nav-link" href="#acceptance" data-toggle="tab">Acceptance or Concent Form</a></li> --}}
          {{-- <li class="nav-item"><a class="nav-link" href="#slomonthly" data-toggle="tab">SLO Monthly</a></li> --}}
          {{-- <li class="nav-item"><a class="nav-link" href="#patient" data-toggle="tab">Patient Visit</a></li> --}}
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">

          <!-- Document Review -->
          <div class="active tab-pane" id="document_review">
            <div class="card pd-20 pd-sm-40">


              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-10p">NO</th>
                      <th class="wd-15p">Document Name</th>
                      <th class="wd-15p">Received Date</th>
                      <th class="wd-20p">Status</th>
                      <th class="wd-25p">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <span hidden> {{ $count = 1; }}</span>
                    @foreach($documents as $document)
                    <tr>
                      <td>{{ $count}}</td>
                      <td>{{ $document->document_name }}</td>
                      <td>{{ $document->received_date }}</td>
                      <td>{{ $document->status }}</td>
                      <td>
                        <div class="btn-group table-action" role="group">

                          <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                            <i class="fa fa-eye mg-r-10"></i>
                            <a href="/{{ $document->document_file}}" target="_blank">Show</a>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <span hidden> {{ $count++ }}</span>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div><!-- card -->
          </div>
          <!-- End Document Review -->

          <!-- Food Premise -->
          <div class="tab-pane" id="food_premise">

          </div>
          <!-- End Food Premise -->

          <!-- Program Monitoring -->
          <div class="tab-pane" id="program">
            <div class="card pd-20 pd-sm-40">


              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-10p">No</th>
                      <th class="wd-15p">Program Name</th>
                      <th class="wd-15p">Date</th>
                      <th class="wd-15p">Organizer</th>
                      <th class="wd-20p">Status</th>
                      <th class="wd-20p">SCU-IN-CHARGE</th>
                      
                      <th class="wd-20p">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <span hidden> {{ $count = 1; }}</span>
                    @foreach($programs as $program)
                    <tr>
                      <td>{{ $count }}</td>
                      <td>{{ $program->name }}</td>
                      <td>{{ $program->date }}</td>
                      <td>{{ $program->organizer }}</td>
                      <td>{{ $program->status }}</td>
                      <td>{{ $program->received_by }}</td>
                      <td>
                        <div class="btn-group table-action" role="group">
                          <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                            <i class="fa fa-eye mg-r-10"></i>
                            <a href="{{ url('/program/comment/'.$program->id) }}">Edit</a>
                          </button>
                          <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                            <i class="fa fa-download mg-r-10"></i>
                            <a href="{{ action('App\Http\Controllers\Form\ProgramController@pdf', $program->id) }}" target="_blank">Download</a>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <span hidden> {{ $count++ }}</span>
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
                  <th class="wd-10p">NO</th>
                  <th class="wd-15p">Complainant Name</th>
                  <th class="wd-15p">Complaint Type</th>
                  <th class="wd-15p">Complaint Date</th>
                  <th class="wd-20p">Status</th>
                  <th class="wd-20p">SCU-IN-CHARGE</th>
                  
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                <span hidden> {{ $count = 1; }}</span>
                @foreach($complaints as $complaint)
                <tr>
                  <td>{{ $count }}</td>
                  <td>{{ $complaint->complainant_name }}</td>
                  <td>{{ $complaint->complaint_type }}</td>
                  <td>{{ $complaint->complaint_date }}</td>
                  <td>{{ $complaint->status }}</td>
                  <td>{{ $complaint->received_by }}</td>
                  <td>
                    <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ url('/complaint/details/'.$complaint->id) }}">Show</a>
                      </button>
                      <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                        <i class="fa fa-download mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\ComplaintFormController@pdf', $complaint->id) }}">Download</a>
                      </button>
                    </div>
                  </td>
                </tr>
                <span hidden> {{ $count++ }}</span>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Complaint Form -->

          <!-- Terms and Condition-->
          <div class="tab-pane" id="terms">

          </div>
          <!-- End Terms and Condition -->

          <!-- SLO Report-->
          <div class="tab-pane" id="sloreport">

          </div>
          <!-- End SLO Report -->

          <!-- Shariah Clinic-->
          <div class="tab-pane" id="clinic">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">No</th>
                  <th class="wd-30p">Issue</th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                <span hidden> {{ $count = 1; }}</span>
                @foreach($clinics as $clinics)
                <tr>
                  <td>{{ $count }}</td>
                  <td>{{ $clinics->issue }}</td>
                  <td>{{ $clinics->status }}</td>
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
                        <a href="{{ action('App\Http\Controllers\Form\ClinicController@commentClinic', $clinics->id) }}">Edit</a>
                      </button>
                      <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                        <i class="fa fa-download mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\Form\ClinicController@pdf', $clinics->id) }}">Download</a>
                      </button>
                    </div>
                  </td>
                </tr>
                <span hidden> {{ $count++ }}</span>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Shariah Clinic -->

          <!-- Speaker Consent-->
          <div class="tab-pane" id="speaker">

          </div>
          <!-- End Speaker Consent -->

          <!-- Acceptance of Consent Form-->
          <div class="tab-pane" id="acceptance">

          </div>
          <!-- End Acceptance of Consent Form -->

          <!-- SLO Monthly Form-->
          <div class="tab-pane" id="slomonthly">

          </div>
          <!-- End SLO Monthly Form -->

          <!-- Patient Visit Form-->
          <div class="tab-pane" id="patient">

          </div>
          <!-- End Patient Visit Form -->

        </div>



      </div>


    </div><!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<script>
  $(function() {
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
    $('.dataTables_length select').select2({
      minimumResultsForSearch: Infinity
    });

  });
</script>





@endsection