@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="{{ route('report.history') }}">View Report</a>
    <span class="breadcrumb-item active">SLO Monthly Details</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>SLO Monthly Details</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title mg-b-20 mg-sm-b-30" style="font-size: 20px;">SLO Monthly {{ $slomonthly->id }}</h6>

              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Shariah Liaison Officer’s Name:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $slomonthly->slo_name }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Department / Unit / Ward / Clinic:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $slomonthly->dept }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Date:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $slomonthly->date }}
                </div>
              </div><!-- row -->
              <hr>
              <div class="row">
                <h6 class="card-body-title col-sm-16 form-control-label" style="text-decoration:underline;">A. Details</h6>
              </div><!-- row -->
              <br>
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Report:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $slomonthly->report_details }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Corrective Action:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $slomonthly->correctiveaction }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Suggestions / Recommendations:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $slomonthly->suggestion }}
                </div>
              </div><!-- row -->
              
        </div><!-- card -->


   </div><!-- sl-pagebody -->
   
    
</div><!-- sl-mainpanel -->


  

@endsection