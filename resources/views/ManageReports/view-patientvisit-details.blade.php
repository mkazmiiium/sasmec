@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="{{ route('report.history') }}">View Report</a>
    <span class="breadcrumb-item active">Patient Visit Details</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Patient Visit Details</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title mg-b-20 mg-sm-b-30" style="font-size: 20px;">Patient Visit {{ $patientvisit->id }}</h6>

              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Name of Patient/Relative:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $patientvisit->patientname }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Ward / Clinic:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $patientvisit->ward }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Referred Date:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $patientvisit->referreddate }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Attended Date:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $patientvisit->attendeddate }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Reason for Referral:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                    {{ $patientvisit->reason }}
                </div>
              </div><!-- row -->
              <hr>
              <div class="row">
                <h6 class="card-body-title col-sm-16 form-control-label" style="text-decoration:underline;">A. Details</h6>
              </div><!-- row -->
              <br>
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Background of Patient/Relative:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $patientvisit->report_details }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Current Condition:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $patientvisit->currentcondiiton }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Problem:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $patientvisit->problem }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Intervention:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $patientvisit->intervention }}
                </div>
              </div><!-- row -->
              
        </div><!-- card -->


   </div><!-- sl-pagebody -->
   
    
</div><!-- sl-mainpanel -->


  

@endsection