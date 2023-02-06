@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Speaker Consent Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Speaker Consent Form</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
         

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-10p">Report ID</th>
                <th class="wd-15p">Issue</th>
                <th class="wd-15p">Status</th>
                <th class="wd-20p">SCU in-charge</th>
                <th class="wd-25p">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clinics as $clinic)
              <tr>
                <td>{{ $clinic->id }}</td>
                <td>{{ $clinic->issue }}</td>
                <td>{{ $clinic->status }}</td>
                <td>
                  {{-- @if($complaint->received_by == NULL)
                    No SCU assigned
                  @else
                    {{ $received_by }}  
                  @endif --}}
                </td>
                <td>
                  <div class="btn-group table-action" role="group">
                    <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                      <i class="fa fa-eye mg-r-10"></i>
                      <a href="{{ action('App\Http\Controllers\Form\ClinicController@pdf', $clinic->id) }}">Show</a>
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