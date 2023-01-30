@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="{{ route('report.history') }}">View Report</a>
    <span class="breadcrumb-item active">Program Monitoring Details</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Program Monitoring Details</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title mg-b-20 mg-sm-b-30" style="font-size: 20px;">Program Monitoring {{ $program->id }}</h6>

              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Name:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $program->name }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">Date:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $program->date }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Organizer:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $program->organizer }}
                </div>
                <h6 class="card-body-title col-sm-2 form-control-label">PIC:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $program->pic }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-2 form-control-label">Program Details:</h6>
                <div class="card-info col-sm-4 mg-t-10 mg-sm-t-0">
                {{ $program->program_details }}
                </div>
                
              </div><!-- row -->
              <hr>
              <div class="row">
                <h6 class="card-body-title col-sm-16 form-control-label" style="text-decoration:underline;">1. Organizing committee give a briefing about program to Representative from Department 
                    of Shariah Compliance?</h6>
              </div><!-- row -->
              <br>
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Date:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $program->briefing_date }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Time:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $program->briefing_time }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Briefing given by:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $program->briefing_person }}
                </div>
              </div><!-- row -->
              <hr>
              <div class="row">
                <h6 class="card-body-title col-sm-16 form-control-label" style="text-decoration:underline;">2. Organizing Committee ask an advice from Representative from Department of Shariah
                  Compliance regarding to the flow of the program?</h6>
              </div><!-- row -->
              <br>
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Date:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $program->advise_date }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Time:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $program->advise_time }}
                </div>
              </div><!-- row -->
              <div class="row">
                <h6 class="card-body-title col-sm-4 form-control-label">Details of advice:</h6>
                <div class="card-info col-sm-6 mg-t-10 mg-sm-t-0">
                {{ $program->advise_details }}
                </div>
              </div><!-- row -->
              
        </div><!-- card -->


   </div><!-- sl-pagebody -->
   
    
</div><!-- sl-mainpanel -->


  

@endsection