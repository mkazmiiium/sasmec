@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">View Report</a>
    <span class="breadcrumb-item active">Acceptance Consent Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Acceptance Consent Form</h5>
    </div><!-- sl-page-title -->

    <form class="form-horizontal form-wizard form" action="{{ route('acceptance.store') }}" method="POST"  method="post" onsubmit="return submitUserForm();">
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
                <p class="card-text wizard-title">Details</p>
     
                    <div class="row ">
                    
                        <div class="col-lg-10">
                            <div class="row mg-t-25">
                                <div class="col-lg-10">
                                    
                                    <div class="mg-t-25">
                                        <label for="program" class="form-label">Program <span style="color:red">*</label>
                                    </div>
    
                                    <input type="text" id="program" name="program" placeholder="Program" class="form-control" required>

                                    <div class="mg-t-25">
                                        <label for="date" class="form-label">Date <span style="color:red">*</label>
                                    </div>
    
                                    <input type="date" name="date" id="date" class="form-control" style="width:170px" >

                                    <div class="mg-t-25">
                                        <label for="name" class="form-label">Name <span style="color:red">*</label>
                                    </div>
    
                                    <input type="text" id="name" name="name" placeholder="Name " class="form-control" required>

                                    <div class="mg-t-25">
                                        <label for="institution" class="form-label">Institution <span style="color:red">*</label>
                                    </div>
    
                                    <input type="text" id="institution" name="institution" placeholder="Institution" class="form-control" required>

                            
    
                                </div><!-- col-3 -->
                            </div><!-- row -->
                        </div>
                    </div>
                </section>


         <section class="step">
            <p class="card-text wizard-title">Terms and Condition</p>
 
                <div class="row ">
                
                    <div class="col-lg-10">
                        <div class="row mg-t-25">
                            <div class="col-lg-10">
                                
                            <div class="mg-t-25">
                            <p>
                            <label for="acceptance">I </label>
                            <select id="acceptance" name="acceptance">
                            <option label="Choose one" disable selected></option>
                            <option value="Accept">Accept</option>
                            <option value="Do not accept">Do Not Accept</option>

                            </select>  an invitation as a: <br>
                            <label class = "checkbox-inline">
                                <input type = "checkbox" value = "Speaker" name="job">Speaker
                             </label>
                             <label class = "checkbox-inline">
                                <input type="checkbox" value="Moderator" name="job">Moderator
                             </label>
                             <label class = "checkbox-inline">
                                <input type = "checkbox" value = "Facilitator" name="job">Facilitator
                             </label>
                             <label class = "checkbox-inline">
                                <input type = "checkbox" value = "Instructor" name="job">Instructor
                             </label>
                             <label class = "checkbox-inline">
                                <input type = "checkbox" value = "Panelist" name="job">Panelist
                             </label>
                             <label class = "checkbox-inline">
                                <input type = "checkbox" value = "" name="job">Others: (please specify)
                                <input type="text" id="others" name="others" placeholder="Others" class="form-control" style="width:200px;display:inline-block;">
                                    
                             </label>
                            
                            </p>

                            <p>
                                <label for="acceptance2">I </label>
                                <select id="acceptance2" name="acceptance2">
                                <option label="Choose one" disable selected></option>
                                <option value="Accept">Allow</option>
                                <option value="Do not accept">Do Not Allow</option>
    
                                </select>  the committee to distribute my resources for the public reading and knowledge purposes. <br><br>
                                Resources category allowed (please tick): <br>
                                <label class = "checkbox-inline">
                                    <input type = "checkbox" value = "Slide presentation" name="resources">Slide presentation in PDF format
                                 </label>
                                 <label class = "checkbox-inline">
                                    <input type="checkbox" value="Video recording" name="resources">Video recording
                                 </label>
                                 <label class = "checkbox-inline">
                                    <input type = "checkbox" value = "">Others: (please specify)
                                    <input type="text" id="others2" name="others2" placeholder="Others" class="form-control" style="width:200px;display:inline-block;">
                                        
                                 </label><br><br>
                                 I acknowledge that I have observed the content of my presentation including copyright issues. <br>
                                
                                I acknowledge that Sultan Ahmad Shah Medical Centre @IIUM will not responsible to the content of
                                presentation and cannot be held liable to any breach of Copyright and Data Protection made by the
                                Speaker. <br>
                                
                                </p>
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