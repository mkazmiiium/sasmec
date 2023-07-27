@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">View Report</a>
    <span class="breadcrumb-item active">Shariah Liaison Officer Monthly Report Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Shariah Liaison Officer Monthly Report Form</h5>
    </div><!-- sl-page-title -->

    <form class="form-horizontal form-wizard form" action="{{ route('slo-monthly.store') }}" method="POST"  method="post" onsubmit="return submitUserForm();">
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
            <p class="card-text wizard-title">Report Details</p>
 
                <div class="row ">
                
                    <div class="col-lg-10">
                        <div class="row mg-t-25">
                            <div class="col-lg-10">
                                
                                <div class="mg-t-25">
                                <label for="report_details" class="form-label">Report Details</label>
                                </div>

                                <textarea class="form-control" id="report_details" rows="5" name="report_details" required style="width:700px;"></textarea>

                                <div class="mg-t-25">
                                <label for="correctiveaction" class="form-label">Corrective Action</label>
                                </div>

                                <textarea class="form-control" id="correctiveaction" rows="5" name="correctiveaction" style="width:700px;"></textarea>

                                <div class="mg-t-25">
                                <label for="suggesttion" class="form-label">Suggestions / Recommendation from SLO</label>
                                </div>

                                <textarea class="form-control" id="suggestion" rows="5" name="suggestion" style="width:700px;"></textarea>
                               
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