@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Referral Report</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Manage Referral Reports</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
         

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Referral Date</th>
                <th class="wd-25p">Patient Name</th>
                <th class="wd-15p">Case Type</th>
                <th class="wd-15p">Purpose</th>
                <th class="wd-15p">Case Status</th>
                <th class="wd-20p">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($referrals as $referral)
              <tr>
                <td> {{ $referral->report_date }}</td>
                <td>{{ $referral->name }}</td>
                <td>{{ $referral->case_type }}</td>
                <td>{{ $referral->purpose }}</td>
                <td>{{ $referral->purpose }}</td>
                <td>{{ $referral->case_status }}</td>
                <td>
                  <div class="btn-group table-action" role="group">
                    <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                      <i class="fa fa-eye mg-r-10"></i>
                      <a href="{{ url('/referral/details/'.$referral->id) }}">Show</a>
                    </button>
                    <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                      <i class="fa fa-download mg-r-10"></i> 
                      <a href="{{ url('/referral/pdf/'.$referral->id) }}">Download</a>
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