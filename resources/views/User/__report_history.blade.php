@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">My Report History</a>
    <span class="breadcrumb-item active">All Report History</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>My Report History</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
         

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-10p">Report ID</th>
                <th class="wd-15p">Program Name</th>
                <th class="wd-15p">Date</th>
                <th class="wd-15p">Speaker's Name</th>
                <th class="wd-20p">Institution</th>
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
                      <a href="{{ action('App\Http\Controllers\Form\SpeakerController@view', $speaker->id) }}">Show</a>
                    </button>
                    <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                      <i class="fa fa-download mg-r-10"></i> 
                      <a href="{{ action('App\Http\Controllers\Form\SpeakerController@pdf', $speaker->id) }}">Download</a>
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