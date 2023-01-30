@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Complaint Report</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Manage Complaint Reports</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
         

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-10p">Report ID</th>
                <th class="wd-15p">Complaint Type</th>
                <th class="wd-15p">Complaint Date</th>
                <th class="wd-15p">Status</th>
                <th class="wd-20p">SCU in-charge</th>
                <th class="wd-25p">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($complaints as $complaint)
              <tr>
                <td>{{ $complaint->id }}</td>
                <td>{{ $complaint->complaint_type }}</td>
                <td>{{ $complaint->complaint_date }}</td>
                <td>{{ $complaint->status }}</td>
                <td>
                  @if($complaint->received_by == NULL)
                    No SCU assigned
                  @else
                    {{ $complaint->received_by }}  
                  @endif
                </td>
                <td>
                  <div class="btn-group table-action" role="group">
                    <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                      <i class="fa fa-eye mg-r-10"></i>
                      <a href="{{ url('complaint/details/'.$complaint->id) }}">Show</a>
                    </button>
                    <button class="btn btn-outline-success btn-block wd-xs-60p m-0 ml-1">
                      <i class="fa fa-download mg-r-10"></i> 
                      <a href="{{ url('/complaint/pdf/'.$complaint->id) }}">Download</a>
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


<!-- <div class="flex flex-col text-left w-full pr-6">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="text-2xl font-bold py-8 pl-8">
    Manage Complaint Reports
    </div>
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div
        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
      >
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50 justify-center">
            <tr>
              <th
                scope="col"
                class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
              >
                Report ID
              </th> 
              <th
                scope="col"
                class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
              >
                Complaint Type
              </th>
              <th
                scope="col"
                class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
              >
                Complaint Date
              </th>
              <th
                scope="col"
                class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
              >
                Status
              </th>
              <th
                scope="col"
                class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
              >
                SCU in-charge
              </th>
              <th
                scope="col"
                class="px-6 py-3 text-left text-base font-bold uppercase tracking-wider"
              >
                Actions
              </th>
              
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            @foreach($complaints as $complaint)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-base font-semibold">
                      {{ $complaint->id }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span
                  class="text-base font-semibold"
                >
                  {{ $complaint->complaint_type }}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span
                  class="text-base font-semibold"
                >
                  {{ $complaint->complaint_date }}
                </span>
              </td>
              <td class="px-6 py-1 whitespace-nowrap">
                <span
                  class="px-4 inline-flex text-base leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-800"
                >
                  {{ $complaint->status }}
                </span>
              </td>
              <td class="px-6 py-1 whitespace-nowrap">

                @if($complaint->received_by == NULL)
                <span
                  class="text-base font-semibold">
                  No SCU assigned
                </span>
                @else
                <span
                  class="text-base font-semibold">
                  {{ $received_by }}
                </span>
                @endif
                
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button class="bg-indigo-200 hover:bg-indigo-300 text-indigo-600 hover:text-indigo-900 font-bold py-1 px-2 rounded inline-flex items-center">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" 
                        d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                    </svg>
                    <a href="{{ url('complaint/details/'.$complaint->id) }}" class="px-2 items-center text-indigo-600 hover:text-indigo-900">View</a>
                </button>
                <button class="bg-green-200 hover:bg-green-300 text-green-800 hover:text-green-900 font-bold py-1 px-2 rounded inline-flex items-center">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z" />
                    </svg>
                    <a href="{{ url('/complaint/pdf/'.$complaint->id) }}" class="px-2 items-center text-green-800 hover:text-green-900">Download</a>
                </button>
              </td>
            </tr>

            @endforeach

          </tbody>
        </table>

        <div class="row m-2">
            <div class="col-md-12">
                {{ $complaints->links('pagination::tailwind') }}
            </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


@endsection