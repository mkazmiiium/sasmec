@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">View Report</a>
    <span class="breadcrumb-item active">Food Premise Inspection Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Food Premise Inspection Form</h5>
    </div><!-- sl-page-title -->

    <form class="form-horizontal form-wizard form" action="emailing-data.php" method="POST"  method="post" onsubmit="return submitUserForm();">
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
            <p class="card-text wizard-title">Registration</p>
 
                <div class="row ">
                
                    <div class="col-lg-10">
                        <div class="row mg-t-25">
                            <div class="col-lg-10">
                                
                                <div class="mg-t-25">
                                    <label for="programname" class="form-label">Name of Program</label>
                                </div>
                                <input type="text" id="programname" name="programname" placeholder="Name of Program" class="form-control" autofocus>
                                 
                                <div class="mg-t-25">
                                  <label for="PremiseName" class="form-label">Premise Name *</label>
                                </div>
                                <input type="text" id="PremiseName" name="PremiseName" placeholder="Premise Name" class="form-control" autofocus>
                                
                              
      
                              <div class="mg-t-25">
                                  <label for="location" class="form-label">Premise Location *</label>
                              </div>
                               <input type="text" id="location" name="location" placeholder="Premise Location" class="form-control" autofocus>
                               
                             
                             <div class="mg-t-25">
                                  <label for="declaration" class="form-label">Declaration:</label>
                              </div>
      
                              <div class="mg-t-25">
                                  <div class="mg-t-25">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" id="declaration" name="declaration">&emsp;We agree to accept any inspection done by Shariah Officer of SASMEC @IIUM 
                                              or any person representing him at any time. We promise to give full cooperation 
                                              and commitment before, during and after the inspection.
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          
                              <div class="mg-t-25">
                                  <div class="mg-t-25">
                                      <span class="help-block">*Required fields</span>
                                  </div>
                              </div>
                        
                          </div>
                                    
                            </div><!-- col-3 -->
                        </div><!-- row -->
                    </div>
                </div>
            </section>

            <section  class="step">
              <p class="card-text wizard-title">Certification of Halal</p>
              <div class="row">

              <div class="col-lg-10">
                <div class="card pd-20 pd-sm-40">
         

                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-180p">Does the premise satisfy the following criteria?</th>
                          <th class="wd-5p">Yes</th>
                          <th class="wd-5p">No</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr>
                          <td>
                            <label for="remarks1" class="form-label">1. Certification of Halal<br><br>
                              Note: All certificate of halal must come from JAKIM or any recognised 
                              foreign halal certification bodies & authorities.</label>
                              <textarea placeholder="Remarks" id="remarks1" name="remarks1" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                          </td>
                          <td>
                            <input type="radio" id="yes" name="Q1" value="yes">
                          </td>
                          <td>
                            <input type="radio" id="no" name="Q1" value="no">
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
                  </div> 
              </div>
          </section>

          <section  class="step">
            <p class="card-text wizard-title">Chicken and Meat</p>
            <div class="row">

            <div class="col-lg-10">
              <div class="card pd-20 pd-sm-40">
         

                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-80p">Does the premise satisfy the following criteria?</th>
                        <th class="wd-5p">Yes</th>
                        <th class="wd-5p">No</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>
                          <label for="remarks2" class="form-label">1. Certificate of Slaughter</label>
                          <textarea placeholder="Remarks" id="remarks2" name="remarks2" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                        </td>
                        <td>
                          <input type="radio" id="yes" name="Q2" value="yes">
                        </td>
                        <td>
                          <input type="radio" id="no" name="Q2" value="no">
                        </td>
                        
                      </tr>

                      <tr>
                        <td>
                          <label for="remarks2" class="form-label">2. Certificate of slaughtering place (slaughterhouse)</label>
                          <textarea placeholder="Remarks" id="remarks3" name="remarks3" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                        </td>
                        <td>
                          <input type="radio" id="yes" name="Q3" value="yes">
                        </td>
                        <td>
                          <input type="radio" id="no" name="Q3" value="no">
                        </td>
                        
                      </tr>

                      <tr>
                        <td>
                          <label for="remarks4" class="form-label">3. Certificate of halal from JAKIM 
                            or any recognised foreign<br> halal certification bodies & authorities</label>
                            <textarea placeholder="Remarks" id="remarks4" name="remarks4" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                        </td>
                        <td>
                          <input type="radio" id="yes" name="Q4" value="yes">
                        </td>
                        <td>
                          <input type="radio" id="no" name="Q4" value="no">
                        </td>
                        
                      </tr>
                      
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
                </div> 
            </div>
        </section>

        <section  class="step">
          <p class="card-text wizard-title">All Raw Materials</p>
          <div class="row">

          <div class="col-lg-10">

            <div class="card pd-20 pd-sm-40">
              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-80p">Does the premise satisfy the following criteria?</th>
                      <th class="wd-5p">Yes</th>
                      <th class="wd-5p">No</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>
                        <label for="remarks5" class="form-label">1. Certificate of halal from JAKIM
                          or any recognised foreign halal certification bodies and authorities</label>
                          <textarea placeholder="Remarks" id="remarks5" name="remarks5" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                      </td>
                      <td>
                        <input type="radio" id="yes" name="Q5" value="yes">
                      </td>
                      <td>
                        <input type="radio" id="no" name="Q5" value="no">
                      </td>
                      
                    </tr>

                    <tr>
                      <td>
                        <label for="remarks6" class="form-label">2. Acknowledgment letter from Muslim
                          provider / supplier if the product is a homemade product.</label>
                          <textarea placeholder="Remarks" id="remarks6" name="remarks6" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                      </td>
                      <td>
                        <input type="radio" id="yes" name="Q6" value="yes">
                      </td>
                      <td>
                        <input type="radio" id="no" name="Q6" value="no">
                      </td>
                      
                    </tr>

                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div><!-- card -->
              </div> 
          </div>
      </section>

      <section  class="step">
        <p class="card-text wizard-title">Food Handler</p>
        <div class="row">

        <div class="col-lg-10">
          <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-80p">Does the premise satisfy the following criteria?</th>
                    <th class="wd-5p">Yes</th>
                    <th class="wd-5p">No</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <td>
                      <label for="remarks7" class="form-label">1. All food handler vaccinate with Typhoid injection</label>
                      <textarea placeholder="Remarks" id="remarks7" name="remarks7" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q7" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q7" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks8" class="form-label">2. All food handler are Muslim</label>
                      <textarea placeholder="Remarks" id="remarks8" name="remarks8" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q8" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q8" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks9" class="form-label">3. Friendly</label>
                      <textarea placeholder="Remarks" id="remarks9" name="remarks9" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q9" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q9" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks10" class="form-label">4. Helpful</label>
                      <textarea placeholder="Remarks" id="remarks10" name="remarks10" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q10" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q10" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks11" class="form-label">5. Clean Clothes</label>
                      <textarea placeholder="Remarks" id="remarks11" name="remarks11" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q11" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q11" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks12" class="form-label">6. Clean Nails</label>
                      <textarea placeholder="Remarks" id="remarks12" name="remarks12" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q12" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q12" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks13" class="form-label">7. Not have any open injuries</label>
                      <textarea placeholder="Remarks" id="remarks13" name="remarks13" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q13" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q13" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks14" class="form-label">8. Wearing suitable shoes</label>
                      <textarea placeholder="Remarks" id="remarks14" name="remarks14" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q14" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q14" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks15" class="form-label">9. Washing their hands before handle the foods</label>
                      <textarea placeholder="Remarks" id="remarks15" name="remarks15" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q15" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q15" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks16" class="form-label">10. Washing their hands after go to toilet</label>
                      <textarea placeholder="Remarks" id="remarks16" name="remarks16" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q16" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q16" value="no">
                    </td>
                    
                  </tr>

                  <tr>
                    <td>
                      <label for="remarks17" class="form-label">11. No coughing / sneezing towards food</label>
                      <textarea placeholder="Remarks" id="remarks17" name="remarks17" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                    </td>
                    <td>
                      <input type="radio" id="yes" name="Q17" value="yes">
                    </td>
                    <td>
                      <input type="radio" id="no" name="Q17" value="no">
                    </td>
                    
                  </tr>

                </tbody>
              </table>
            </div><!-- table-wrapper -->
          </div><!-- card -->
            </div> 
        </div>
    </section>

    <section  class="step">
      <p class="card-text wizard-title">Cleanliness of Premise</p>
      <div class="row">

      <div class="col-lg-10">
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-80p">Does the premise satisfy the following criteria?</th>
                  <th class="wd-5p">Yes</th>
                  <th class="wd-5p">No</th>
                  
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>
                    <label for="remarks18" class="form-label">1. Dining area</label>
                    <textarea placeholder="Remarks" id="remarks18" name="remarks18" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q18" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q18" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks19" class="form-label">2. Kitchen area<br>+ Dustbin<br>+ Cooker hood / Exhaust fan</label>
                    <textarea placeholder="Remarks" id="remarks19" name="remarks19" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <br>
                    <div>
                      <input type="radio" id="yes" name="Q191" value="yes">
                  </div>
                  <div>
                      <input type="radio" id="yes" name="Q192" value="yes">
                  </div>
                  </td>
                  <td>
                    <br>
                    <div>
                      <input type="radio" id="no" name="Q191" value="no">
                  </div>
                  <div>
                      <input type="radio" id="no" name="Q192" value="no">
                  </div>
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks20" class="form-label">3. Hand washing area (with hand soap)</label>
                    <textarea placeholder="Remarks" id="remarks20" name="remarks20" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q20" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q20" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks21" class="form-label">4. Dishwashing area</label>
                    <textarea placeholder="Remarks" id="remarks21" name="remarks21" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q21" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q21" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks22" class="form-label">5. Storage area<br>+ Raw foods stored separately from ready-
                      to-eat foods<br>+ Toxic/poisonous substances stored separately 
                      from food<br>+ Good shelves condition<br>+ Halal and Haram items stored separately (if any)</label>
                      <textarea placeholder="Remarks" id="remarks22" name="remarks22" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td><br>
                    <div>
                      <input type="radio" id="yes" name="Q221" value="yes">
                  </div>
                  <div>
                      <input type="radio" id="yes" name="Q222" value="yes">
                  </div>
                  <div>
                      <input type="radio" id="yes" name="Q223" value="yes">
                  </div>
                  <div>
                      <input type="radio" id="yes" name="Q224" value="yes">
                  </div>
                  </td>
                  <td><br>
                    <div>
                      <input type="radio" id="no" name="Q221" value="no">
                  </div>
                  <div>
                      <input type="radio" id="no" name="Q222" value="no">
                  </div>
                  <div>
                      <input type="radio" id="no" name="Q223" value="no">
                  </div>
                  <div>
                      <input type="radio" id="no" name="Q224" value="no">
                  </div>
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks23" class="form-label">6. Packaging area</label>
                    <textarea placeholder="Remarks" id="remarks23" name="remarks23" class="form-control" id="remarks" rows="1" style="width:400px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q23" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q23" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks24" class="form-label">7. Chiller / Freezer<br>+ Halal and Haram items stored separately (if any)</label>
                    <textarea placeholder="Remarks" id="remarks24" name="remarks24" class="form-control" id="remarks" rows="1" style="width:400px;"></textarea>
                  </td>
                  <td><br>
                    <div>
                      <input type="radio" id="yes" name="Q24" value="yes">
                    </div>
                  </td>
                  <td><br>
                    <div>
                      <input type="radio" id="no" name="Q24" value="no">
                    </div>
                    
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks25" class="form-label">8. Food Container</label>
                    <textarea placeholder="Remarks" id="remarks25" name="remarks25" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q25" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q25" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks26" class="form-label">9. Floor/wall/ceiling</label>
                    <textarea placeholder="Remarks" id="remarks26" name="remarks26" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q26" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q26" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks27" class="form-label">10. Toilet</label>
                    <textarea placeholder="Remarks" id="remarks27" name="remarks27" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q27" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q27" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks28" class="form-label">11. Dustbin<br>+ Closed dustbin with plastic bag</label>
                    <textarea placeholder="Remarks" id="remarks28" name="remarks28" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q28" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q28" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks29" class="form-label">12. Utensils (plates, glasses, spoons, forks, cups etc)</label>
                    <textarea placeholder="Remarks" id="remarks29" name="remarks29" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q29" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q29" value="no">
                  </td>
                  
                </tr>

                <tr>
                  <td>
                    <label for="remarks30" class="form-label">13. Others:</label>
                    <textarea placeholder="Remarks" id="remarks30" name="remarks30" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                  </td>
                  <td>
                    <input type="radio" id="yes" name="Q30" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="no" name="Q30" value="no">
                  </td>
                  
                </tr>

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
          </div> 
      </div>
  </section>

  <section  class="step">
    <p class="card-text wizard-title">Food and Beverages</p>
    <div class="row">

    <div class="col-lg-10">

      <div class="card pd-20 pd-sm-40">
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-80p">Does the premise satisfy the following criteria?</th>
                <th class="wd-5p">Yes</th>
                <th class="wd-5p">No</th>
                
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>
                  <label for="remarks31" class="form-label">1. Fresh</label>
                  <textarea placeholder="Remarks" id="remarks31" name="remarks31" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                </td>
                <td>
                  <input type="radio" id="yes" name="Q31" value="yes">
                </td>
                <td>
                  <input type="radio" id="no" name="Q31" value="no">
                </td>
                
              </tr>

              <tr>
                <td>
                  <label for="remarks32" class="form-label">2. High Quality</label>
                  <textarea placeholder="Remarks" id="remarks32" name="remarks32" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                </td>
                <td>
                  <input type="radio" id="yes" name="Q32" value="yes">
                </td>
                <td>
                  <input type="radio" id="no" name="Q32" value="no">
                </td>
                
              </tr>

              <tr>
                <td>
                  <label for="remarks33" class="form-label">3. Reasonable Price</label>
                  <textarea placeholder="Remarks" id="remarks33" name="remarks33" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                </td>
                <td>
                  <input type="radio" id="yes" name="Q33" value="yes">
                </td>
                <td>
                  <input type="radio" id="no" name="Q33" value="no">
                </td>
                
              </tr>

              <tr>
                <td>
                  <label for="remarks34" class="form-label">4. Wrapped / Covered</label>
                  <textarea placeholder="Remarks" id="remarks34" name="remarks34" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                </td>
                <td>
                  <input type="radio" id="yes" name="Q34" value="yes">
                </td>
                <td>
                  <input type="radio" id="no" name="Q34" value="no">
                </td>
                
              </tr>

              <tr>
                <td>
                  <label for="remarks35" class="form-label">5. Expired date</label>
                  <textarea placeholder="Remarks" id="remarks35" name="remarks35" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                </td>
                <td>
                  <input type="radio" id="yes" name="Q35" value="yes">
                </td>
                <td>
                  <input type="radio" id="no" name="Q35" value="no">
                </td>
                
              </tr>

              <tr>
                <td>
                  <label for="remarks36" class="form-label">6. Others:
                    <input type="text" id="others36" name="others36" placeholder="Others" class="form-control" style="width:200px;">
                    </label>
                    <textarea placeholder="Remarks" id="remarks36" name="remarks36" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
                </td>
                <td><br>
                  <div>
                    <input type="radio" id="yes" name="Q36" value="yes">
                  </div>
                </td>
                <td><br>
                  <div>
                    <input type="radio" id="no" name="Q36" value="no">
                  </div>
                </td>
                
              </tr>

            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
        </div> 
    </div>
</section>

<section  class="step">
  <p class="card-text wizard-title">Preparation Method</p>
  <div class="row">

  <div class="col-lg-10">
    <div class="card pd-20 pd-sm-40">
      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-80p">Does the premise satisfy the following criteria?</th>
              <th class="wd-5p">Yes</th>
              <th class="wd-5p">No</th>
              
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td>
                <label for="remarks37" class="form-label">1. Cleaning egg</label>
                <textarea placeholder="Remarks" id="remarks37" name="remarks37" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q37" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q37" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks38" class="form-label">2. Washing vegetables and fruits</label>
                <textarea placeholder="Remarks" id="remarks38" name="remarks38" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q38" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q38" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks39" class="form-label">3. Cleaning and washing chicken, fish, meat etc.</label>
                <textarea placeholder="Remarks" id="remarks39" name="remarks39" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q39" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q39" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks40" class="form-label">4. Cleaning utensils before and after used</label>
                <textarea placeholder="Remarks" id="remarks40" name="remarks40" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q40" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q40" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks41" class="form-label">5. Rinsing rice with clean water before cooking</label>
                <textarea placeholder="Remarks" id="remarks41" name="remarks41" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q41" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q41" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks42" class="form-label">6. Hygiene</label>
                <textarea placeholder="Remarks" id="remarks42" name="remarks42" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q42" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q42" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks43" class="form-label">7. Follow the right method of food preparation</label>
                <textarea placeholder="Remarks" id="remarks43" name="remarks43" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q43" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q43" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks44" class="form-label">8. Others:
                  <input type="text" id="others44" name="others44" placeholder="Others" class="form-control" style="width:200px;">
                  </label>
                  <textarea placeholder="Remarks" id="remarks44" name="remarks44" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td><br>
                <div>
                  <input type="radio" id="yes" name="Q44" value="yes">
                </div>
              </td>
              <td><br>
                <div>
                  <input type="radio" id="no" name="Q44" value="no">
                </div>
              </td>
              
            </tr>

          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- card -->
      </div> 
  </div>
</section>

<section  class="step">
  <p class="card-text wizard-title">Others</p>
  <div class="row">

  <div class="col-lg-10">
    <div class="card pd-20 pd-sm-40">
      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-80p">Does the premise satisfy the following criteria?</th>
              <th class="wd-5p">Yes</th>
              <th class="wd-5p">No</th>
              
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td>
                <label for="remarks45" class="form-label">1. Tangkal Pelaris or any superstition items</label>
                <textarea placeholder="Remarks" id="remarks45" name="remarks45" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q45" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q45" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                  <label for="remarks46" class="form-label">2. Frequency of garbage removal adequate to
                  maintain the premises in the sanitary condition</label>
                  <textarea placeholder="Remarks" id="remarks46" name="remarks46" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q46" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q46" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                  <label for="remarks47" class="form-label">3. Good waste management, ventilation & drainage system</label>
                  <textarea placeholder="Remarks" id="remarks47" name="remarks47" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q47" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q47" value="no">
              </td>
              
            </tr>

            <tr>
              <td>
                <label for="remarks48" class="form-label">4. No expired food item</label>
                <textarea placeholder="Remarks" id="remarks48" name="remarks48" class="form-control" id="remarks" rows="1" style="width:600px;"></textarea>
              </td>
              <td>
                <input type="radio" id="yes" name="Q48" value="yes">
              </td>
              <td>
                <input type="radio" id="no" name="Q48" value="no">
              </td>
              
            </tr>

          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- card -->
      </div> 
  </div>
</section>

<section  class="step">
  <p class="card-text wizard-title">Comments</p>
  <div class="row">

  <div class="col-lg-10">
          <div class="row mg-t-25">
              <div class="col-lg-10">
                <label for="comment" class="font-semibold leading-none">Comment:</label>
                <div class="form-group col-md-12">
                    <textarea id="comment" name="comment" cols="40" rows="5" class="form-control" id="remarks" rows="4" style="width:800px;"></textarea>
                </div><br>

                <label for="correctiveaction" class="font-semibold leading-none">Corrective Action:</label>
                <div class="form-group col-md-12">
                    <textarea id="correctiveaction" name="correctiveaction" cols="40" rows="5" class="form-control" id="remarks" rows="4" style="width:800px;"></textarea>
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