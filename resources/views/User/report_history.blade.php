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
          <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity Monitoring</a></li>
          <li class="nav-item"><a class="nav-link" href="#complaint" data-toggle="tab">Complaint Form</a></li>
          <li class="nav-item"><a class="nav-link" href="#slomonthly" data-toggle="tab">SLO Monthly</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">


          <!-- Activity Monitoring -->
          <div class="active tab-pane" id="activity">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">No</th>
                  <th class="wd-15p">Activity Name</th>
                  <th class="wd-15p">Department</th>
                  
                  <th class="wd-20p">Corrective Action</th>
                  <th class="wd-15p">Suggession</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                <span hidden> {{ $count = 1; }}</span>
                @foreach($activity as $activity)
                <tr>
                  <td>{{ $count }}</td>
                  <td>{{ $activity->activity_name }}</td>
                  <td>{{ $activity->department_info }}</td>
                  <td>{{ $activity->corrective_action }}</td>
                  <td>{{ $activity->suggestion }}</td>

                  <td>
                    <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                        <i class="fa fa-download mg-r-10"></i>
                        <a href="{{ route('activity-monitor.pdf', $activity->id) }}" target="_blank">Download</a>
                      </button>
                    </div>
                  </td>
                </tr>
                <span hidden> {{ $count++ }}</span>
                @endforeach
              </tbody>
            </table>
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
                <span hidden> {{ $count++; }}</span>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Complaint Form -->


          <!-- SLO Monthly Form-->
          <div class="tab-pane" id="slomonthly">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">NO</th>
                  <th class="wd-15p">SLO Officer Name</th>
                  <th class="wd-15p">Department</th>

                  <th class="wd-15p">Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                <span hidden> {{ $count = 1; }}</span>
                @foreach($slomonthly as $slomonthly)
                <tr>
                  <td>{{ $count }}</td>
                  <td>{{ $slomonthly->slo_name }}</td>
                  <td>{{ $slomonthly->dept }}</td>
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
                        <a href="{{ action('App\Http\Controllers\Form\SLOMonthlyController@pdf', $slomonthly->id) }}" target="_blank">Show</a>
                      </button>
                    </div>
                  </td>
                </tr>
                <span hidden> {{ $count++; }}</span>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End SLO Monthly Form -->
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