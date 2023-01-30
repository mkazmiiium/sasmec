@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    {{-- <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Speaker Consent Form</span> --}}
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Dashboard</h5>
    </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        
        {{-- <p class="text-xl font-bold p-2">Pending Tasks</p>
        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white bg-dark" >
                    <div class="card-body">
                        <h3 class="card-title">My Task</h3>
                        <p class="card-text">View my task</p>
                        
                    </div>
                </div>
            </div>
    
        </div> --}}
        
        <p class="text-xl font-bold p-2">Menu</p>
        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white bg-dark" >
                    <div class="card-body">
                        <h3 class="card-title">My Task</h3>
                        <p class="card-text">View my task</p>
                        <a href="{{ route('view.task') }}" class="btn btn-outline-light">View Task</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white bg-dark">
                    <div class="card-body">
                        <h3 class="card-title">My Report History</h3>
                        <p class="card-text">View all my reports history</p>
                        <a href="{{ route('report.history') }}" class="btn btn-outline-light">View History</a>
                    </div>
                </div>
            </div>
    
        </div>
        <p class="text-xl font-bold p-2">List of All Reports</p>
        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white" style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Document Review Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F001</p>
                        <a href="{{ route('document-review.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('document-review.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Food Premise Inspection</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F002</p>
                        <a href="{{ route('food.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('referral.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Referral Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F004</p>
                        <a href="{{ route('referral.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('referral.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Program Monitoring Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F006</p>
                        <a href="{{ route('program.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('program.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Activity Monitoring Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F007</p>
                        <a href="{{ route('document-review.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('referral.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Complaint Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F008</p>
                        <a href="{{ route('complaint.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('complaint.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white  " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Terms and Condition Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F009</p>
                        <a href="{{ route('terms.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('terms.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">SLO Report</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F010</p>
                        <a href="{{ route('slo-report.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('slo-report.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white  " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Shariah Clinic Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F011</p>
                        <a href="{{ route('clinic.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('clinic.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Speaker Consent Form</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F012</p>
                        <a href="{{ route('acceptance.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('acceptance.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">SLO Monthly Report</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F013</p>
                        <a href="{{ route('slo-monthly.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('slo-monthly.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 py-2">
                <div class="card h-100 text-white " style="background-color:#0d8368">
                    <div class="card-body">
                        <h3 class="card-title">Patient Visit Report</h3>
                        <p class="card-text">IIUM-IIUMMC-SHAR-F014</p>
                        <a href="{{ route('patient-visit.create') }}" class="btn btn-outline-light">Create Report</a>
                        <a href="{{ route('patient-visit.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                    </div>
                </div>
            </div>
            
        </div>
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

<style>
    .card-title{
        color: white;
    }
</style>



@endsection