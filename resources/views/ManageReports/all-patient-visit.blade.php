@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Patient Visit Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Patient Visit Form</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
         

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-10p">Report ID</th>
                <th class="wd-15p">Patient Name</th>
                <th class="wd-15p">Ward</th>
                <th class="wd-15p">Referred Date</th>
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
                      <a href="{{ action('App\Http\Controllers\Form\ClinicController@view', $patientvisit->id) }}">Show</a>
                    </button>
                    <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                      <i class="fa fa-download mg-r-10"></i> 
                      <a href="{{ action('App\Http\Controllers\Form\ClinicController@pdf', $patientvisit->id) }}">Download</a>
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