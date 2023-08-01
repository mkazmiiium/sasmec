@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Manage Activity Monitoring Reports</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Manage Activity Monitoring Reports</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">


      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-10p">No</th>
              <th class="wd-15p">Activity Name</th>
              <th class="wd-15p">Department Rep</th>
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
      </div><!-- table-wrapper -->
    </div><!-- card -->
  </div><!-- sl-mainpanel -->


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