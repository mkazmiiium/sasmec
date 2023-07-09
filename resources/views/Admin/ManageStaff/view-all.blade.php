@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">Manage Staffs</a>
        <span class="breadcrumb-item active">View all Staff information</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>View all Staff information</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">


            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-10p">Staff ID</th>
                            <th class="wd-10p">Staff Role</th>
                            <th class="wd-15p">Staff Name</th>
                            <th class="wd-15p">Department</th>
                            <th class="wd-15p">Position</th>
                            <th class="wd-20p">email</th>
                            <th class="wd-25p">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->dept }}</td>
                            <td>{{ $user->position }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <div class="btn-group table-action" role="group">
                      <button class="btn btn-outline-primary btn-block wd-xs-50p m-0 mr-1">
                        <i class="fa fa-eye mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\AdminController@EditUser', $user->id) }}" target="_blank">View Details</a>
                      </button>
                      <button class="btn btn-outline-failure btn-block wd-xs-60p m-0 ml-1" style="background-color: orange; padding-top: 2px">
                        <i class="fa fa-trash mg-r-10"></i>
                        <a href="{{ action('App\Http\Controllers\AdminController@DeleteUser', $user->id) }}" target="_blank" onclick="return confirm('Are you sure you want to delete this user? ')">Delete</a>
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