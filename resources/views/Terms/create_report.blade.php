@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">View Report</a>
    <span class="breadcrumb-item active">Terms and Condition</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Terms and Condition</h5>
    </div><!-- sl-page-title -->

    <form class="form-horizontal form-wizard form" action="/terms" method="POST"  method="post" onsubmit="return submitUserForm();">
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
            <p class="card-text wizard-title">Patient/Staff Information</p>
 
                <div class="row ">
                
                    <div class="col-lg-10">
                        <div class="row mg-t-25">
                            <div class="col-lg-10">
                                
                                <div class="mg-t-25">
                        
                                  <label for="name" class="form-label">Name <span style="color:red">*</label>
                                </div>
                                 
                                <input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
                                 
                              <div class="mg-t-25">
                                  <label for="address" class="form-label">Address <span style="color:red">*</label>
                                </div>
                                  
                              <input type="text" id="address" name="address" placeholder="Address" class="form-control" autofocus>
                                  
                              
                              <div class="mg-t-25">
                                  <label for="contactnumber" class="form-label">Contact number *</label>
                                </div>
                                  
                              <input type="text" id="contactnumber" name="contactnumber" placeholder="Contact Number" class="form-control"  autofocus>
                                  
                              
                              <div class="mg-t-25">
                                  <label class="form-label">Gender <span style="color:red">*</label>
                              </div>
                             
                                      
                              <label class="radio-inline">
                                  <input type="radio" id="female" name="gender" value="female" >Female
                              </label>
                          
                          
                              <label class="radio-inline">
                                  <input type="radio" id="male" name="gender" value="male" >Male
                              </label>
                                     
                                  
                              
                              <div class="mg-t-25">
                                  <label for="nric" class="form-label">NRIC <span style="color:red">*</label>
                              </div>
                              <input type="text" id="nric" name="nric" placeholder="NRIC" class="form-control" autofocus>
                               
                              
                              
                              <div class="mg-t-25">
                                  <label for="additionalrequirements" class="form-label">Additional Requirements </label>
                                </div>
                              <input type="text" id="additionalrequirements" name="additionalrequirements" placeholder="Additional Requirements" class="form-control" autofocus>
                                   
                               
                               <div class="mg-t-25">
                                  <div class="col-sm-9 col-sm-offset-3">
                                      <span class="help-block"><span style="color:red">*Required fields</span>
                                  </div>
                              </div>

                            </div><!-- col-3 -->
                        </div><!-- row -->
                    </div>
                </div>
            </section>

            <section  class="step">
              <p class="card-text wizard-title">Declaration</p>
              <div class="row">

              <div class="col-lg-10">
                      <div class="row mg-t-25">
                          <div class="col-lg-10">
                            <input class="form-check-input" type="checkbox" id="declaration" name="declaration">
                            <label class="form-check-label" for="declaration">
                                I acknowledge that I have clearly explained to the patient some of the conditions that 
                                the patient may face, as described in the next page.<br><br>
                                
                                Saya mengaku bahawa saya telah menerangkan dengan jelas kepada pesakit berkenaan dengan beberapa keadaan yang 
                                mungkin dihadapi oleh pesakit seperti yang dinyatakan di muka surat seterusnya.
                            </label>
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