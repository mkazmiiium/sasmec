@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">SLO Report</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Manage SLO Reports</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
         

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-10p">Report ID</th>
                <th class="wd-15p">Report Date</th>
                <th class="wd-30p">Report Details</th>
                <th class="wd-15p">Assigned SCU</th>
                <th class="wd-15p">Status</th>
                <th class="wd-20p">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sloreports as $sloreport)
              <tr>
                <td>{{ $sloreport->id }}</td>
                <td>{{ $sloreport->report_date }}</td>
                <td>{{ $sloreport->report_details }}</td>
                <td>
                    @if($sloreport->scu_id == NULL)
                        <span
                        class="text-base font-semibold">
                        No SCU assigned
                        </span>
                        @else
                        <span
                        class="text-base font-semibold">
                        {{ $sloreport->scu_id }}
                        </span>
                    @endif
                </td>
                <td>{{ $sloreport->status }}</td>
                <td>
                  <div class="btn-group table-action" role="group">
                    <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                      <i class="fa fa-eye mg-r-10"></i>
                      <a href="{{ url('/sloreport/pdf/'.$sloreport->id) }}">Show</a>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->

</div><!-- sl-mainpanel -->

<script>
  $(function(){
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