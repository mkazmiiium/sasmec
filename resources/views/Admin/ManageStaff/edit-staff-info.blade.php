@extends('layouts.app')

@section('content')


<section class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>

  </nav>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle admin_picture" src="/images/admin_vector.jpg" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center admin_name"> {{ $user->name }}</h3>

              <p class="text-muted text-center">{{ $user->role }}</p>



            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <br><br>
          <div class="card">
            <div class="card-header p-2">

              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="personal_info">
                  <form class="form-horizontal" method="POST" action="{{ action('App\Http\Controllers\AdminController@EditUser', $user->id) }}" id="AdminInfoForm">
                    @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name">

                        <span class="text-danger error-text name_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" value="{{ $user->email }}" name="email">
                        <span class="text-danger error-text email_error"></span>
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="change_password">
                  <form class="form-horizontal" action="{{ action('App\Http\Controllers\AdminController@EditUser', $user->id) }}" method="POST" id="changePasswordAdminForm">
                    @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Old Passord</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputName" placeholder="Enter current password" name="oldpassword">
                        <span class="text-danger error-text oldpassword_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="newpassword" placeholder="Enter new password" name="newpassword">
                        <span class="text-danger error-text newpassword_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Confirm New Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="cnewpassword" placeholder="ReEnter new password" name="cnewpassword">
                        <span class="text-danger error-text cnewpassword_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Update Password</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</section>


@endsection