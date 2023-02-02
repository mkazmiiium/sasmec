@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">View Report</a>
    <span class="breadcrumb-item active">Program Monitoring Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Program Monitoring Form</h5>
    </div><!-- sl-page-title -->

    <form class="form-horizontal form-wizard form" action="{{ route('program.store') }}" method="POST"  method="post" onsubmit="return submitUserForm();">
	@csrf    
<div class="form-content col-md-8 col-md-offset-2">  	
        <div class="wizard-header">
            <h5 class="wizard-page">Page <span class="current-page"></span> of <span class="total-page"></span> </h5> 
            <div class="progress">
                <div class="progress-bar progress-bar-lg" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
 
        <hr>
        <div class="box row-fluid">	


         <section class="step">
            <p class="card-text wizard-title">Program Information</p>
 
                <div class="row ">
                
                    <div class="col-lg-10">
                        <div class="row mg-t-25">
                            <div class="col-lg-10">
                                
                                <div class="mg-t-25">
                                    <label for="name" class="form-label">Name <span style="color:red">*</label>
                                </div>

                                <input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
                               
                                <div class="mg-t-25">
                                    <label for="date" class="form-label">Date <span style="color:red">*</label>
                                </div>
                               
                                <input type="date" name="date" id="date" class="form-control" style="width:170px" >
                               
                                <div class="mg-t-25">
                                    <label for="organizer" class="form-label">Organizer <span style="color:red">*</label>
                                </div>
                                <input type="text"name="organizer"  id="organizer" placeholder="Organizer" class="form-control" required>
                                    
        
                                <div class="mg-t-25">
                                    <label for="pic" class="form-label">PIC <span style="color:red">*</label>
                                </div>
                                <input type="text" id="pic" name="pic" placeholder="Person-In-Charge" class="form-control" required>
                                    
                                <div class="mg-t-25">
                                    <label for="program_details" class="form-label">Program Details <span style="color:red">*</label>
                                </div>    
                                    <input type="text" id="program_details" name="program_details" placeholder="Program Details" class="form-control" required>
                                    <br><div class="file-upload-wrapper">
                                        <input type="file" id="attachment" name="attachment" class="file-upload" data-height="500" />
                                    </div>
                                    
                                <div class="mg-t-25">
                                    <div class="mg-t-25">
                                        <span class="help-block"><span style="color:red">*Required fields</span>
                                    </div>
                                </div>

                            </div><!-- col-3 -->
                        </div><!-- row -->
                    </div>
                </div>
            </section>

            
 
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-right">
                    <button type="button" class="action btn btn-default text-capitalize back btn" >Back</button>
                    <button type="button" class="action btn btn-primary text-capitalize next btn">Next</button>
                    <input type="submit" name="submit"  id="btn-validate"  class="action btn btn-success text-capitalize submit btn" value="Submit" />
                    </div>
                </div>
            </div>	
            		
        </div>
    </div> 
</form>  


   </div><!-- sl-pagebody -->
   
    
</div><!-- sl-mainpanel -->



@endsection