@extends('layouts.app')

@section('content')



<div class="sl-mainpanel">


    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h4>Dashboard</h4>
        </div><!-- sl-page-title -->

        @if(session('message'))
        <div class="alert {{ session('alert-class') }} {{ session('alert-type') }}">
            {{ session('message') }}
        </div>
        @endif

        <div class="card pd-20 pd-sm-40">

            <p class="text-xl font-bold p-2">Menu</p>
            <div class="row">
                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white bg-dark">
                        <div class="card-body">
                            <h3 class="card-title">My Task</h3>
                            <p class="card-text">View my task</p>
                            <a href="{{ route('view.task') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">View Task</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white bg-dark">
                        <div class="card-body">
                            <h3 class="card-title">My Report History</h3>
                            <p class="card-text">View all my reports history</p>
                            <a href="{{ route('report.history') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;" style="background-color: #C3C4C9; color: black;">View History</a>
                        </div>
                    </div>
                </div>

            </div>
            <p class="text-xl font-bold p-2">List of All Reports</p>
            <div class="row">

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white " style="background-color:#0d8368">
                        <div class="card-body">
                            <h3 class="card-title">Activity Monitoring Form</h3>
                            <p class="card-text">IIUM-IIUMMC-SHAR-F007</p>
                            <a href="{{ route('activity-monitor.create') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Create Report</a>
                            <a href="{{ route('activity-monitor.view') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Manage Reports</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white " style="background-color:#0d8368">
                        <div class="card-body">
                            <h3 class="card-title">Complaint Form</h3>
                            <p class="card-text">IIUM-IIUMMC-SHAR-F008</p>
                            <a href="{{ route('complaint.create') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Create Report</a>
                            <a href="{{ route('complaint.view-all') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Manage Reports</a>
                        </div>
                    </div>
                </div>

                {{-- 

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white  " style="background-color:#0d8368">
                        <div class="card-body">
                            <h3 class="card-title">Terms and Condition Form</h3>
                            <p class="card-text">IIUM-IIUMMC-SHAR-F009</p>
                            <a href="{{ route('terms.create') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Create Report</a>
                            <a href="{{ route('terms.view-all') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Manage Reports</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white " style="background-color:#0d8368">
                        <div class="card-body">
                            <h3 class="card-title">SLO Report</h3>
                            <p class="card-text">IIUM-IIUMMC-SHAR-F010</p>
                            <a href="{{ route('slo-report.create') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Create Report</a>
                            <a href="{{ route('slo-report.view-all') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Manage Reports</a>
                        </div>
                    </div>
                </div>
                

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white " style="background-color:#0d8368">
                        <div class="card-body">
                            <h3 class="card-title">Acceptance/ Speaker Consent form</h3>
                            <p class="card-text">IIUM-IIUMMC-SHAR-F012</p>
                            <a href="{{ route('acceptance.create') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Create Report</a>
                            <a href="{{ route('acceptance.view-all') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Manage Reports</a>
                        </div>
                    </div>
                </div>
                --}}

                <div class="col-sm-4 py-2">
                    <div class="card h-100 text-white " style="background-color:#0d8368">
                        <div class="card-body">
                            <h3 class="card-title">SLO Monthly Report</h3>
                            <p class="card-text">IIUM-IIUMMC-SHAR-F013</p>
                            <a href="{{ route('slo-monthly.create') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Create Report</a>
                            <a href="{{ route('slo-monthly.view-all') }}" class="btn btn-outline-light" style="background-color: #C3C4C9; color: black;">Manage Reports</a>
                        </div>
                    </div>
                </div>

            </div>
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

    <style>
        .card-title {
            color: white;
        }
    </style>


    @endsection