@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
        <a class="breadcrumb-item" href="#">Manage Staffs</a>
        <span class="breadcrumb-item active">Register New Staff</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Register New staff</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">


            <div class="table-wrapper">


                <form class="form-horizontal" action="{{ route('admin.register.store') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter Username" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dept" class="col-sm-2 col-form-label">Department</label>
                        <div class="col-sm-10">
                            <input type="dept" class="form-control" id="dept" placeholder="Enter Staff Department" name="dept">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="position" placeholder="Enter Staff Position" name="position">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_no" class="col-sm-2 col-form-label">Contact No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contact_no" placeholder="Enter Staff Contact No" name="contact_no">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Enter Staff Username" name="username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter Staff Email" name="email">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Enter Staff password" name="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="cpassword" placeholder="Enter Staff password" name="cpassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cpassword" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-5">
                            <select name="role" style="padding: 8px;">
                                <option value="admin">Admin</option>
                                <option value="dsc">DSC</option>
                                <option value="ndsc">NDSC</option>
                            </select>
                        </div>
                    </div>

                    <div class="pull-right">
                        <input type="submit" name="submit" id="btn-validate" class="btn-success text-capitalize submit btn" value="Submit" onclick="return validate();" />
                    </div>
                </form>

            </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-mainpanel -->

    <script>
        const validate = () => {
            const password = document.getElementById("password").value;
            const cpassword = document.getElementById("cpassword").value;

            if (password != cpassword) {
                alert("Password does not match");
                return false;
            }
            if (password.length < 5) {
                alert("Password must be at least 5 characters long");
                return false;
            }
        }

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