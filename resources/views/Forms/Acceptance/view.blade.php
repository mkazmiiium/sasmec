@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Manage Report</a>
    <span class="breadcrumb-item active">Acceptance and Consent Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Acceptance and Consent Form</h5>
    </div><!-- sl-page-title -->

      
        <div class="page">
            <section class="content">
              
            <div class="mt-100">
              <div class="flex flex-col text-left w-full">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          
                  <div style="position: relative; text-align: center">
                    <img src="{{ asset('images/iium-logo.jpg') }}" width="200" alt=""><br>
                    <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>SHARIAH PROGRAM / TRAINING<br>ACCEPTANCE AND CONSENT FORM</h4>
                  </div><br>

                  <div class="col-span-6 sm:col-span-10">
                    <div class="col-sm-9">
                        <label for="acceptance">I </label><u>{{ $acceptance->acceptance }}</u> an invitation as a:<br><br>
                        <label class = "checkbox-inline">
                            <input type = "checkbox" value = "Speaker" name="job">Speaker
                         </label> 
                         <label class = "checkbox-inline">
                            <input type="checkbox" value="Moderator" name="job">Moderator
                         </label><br>
                         <label class = "checkbox-inline">
                            <input type = "checkbox" value = "Facilitator" name="job">Facilitator
                         </label> 
                         <label class = "checkbox-inline">
                            <input type = "checkbox" value = "Instructor" name="job">Instructor
                         </label><br>
                         <label class = "checkbox-inline">
                            <input type = "checkbox" value = "Panelist" name="job">Panelist
                         </label> 
                         <label class = "checkbox-inline">
                            <input type = "checkbox" value = "" name="job">{{ $acceptance->others }}
                         </label><br><br>
                         <label for="acceptance">I </label><u>{{ $acceptance->acceptance2 }}</u> the commitee to distribute my resources for the public
                         reading and knowledge purposes.<br>
                         Resources category allowed:<br>
            
                         <label class = "checkbox-inline">
                            <input type = "checkbox" value = "Slide presentation" name="resources">Slide presentation in PDF format
                         </label>
                         <label class = "checkbox-inline">
                            <input type="checkbox" value="Video recording" name="resources">Video recording
                         </label>
                         <label class = "checkbox-inline">
                            <input type = "checkbox" value = "">{{ $acceptance->others2 }}
                           
                                
                         </label><br><br>
            
                         <label class = "checkbox-inline">I acknowledge that I have observed the content of my presentation including copyright issues. <br>
                        I acknowledge that Sultan Ahmad Shah Medical Centre @ IIUM will not responsible to the content of
                        presentation and cannot be held liable to any breach of Copyright and Data Protection made by the
                        speaker.</label>
                    </div>
                </div>
          
               
          
          
                  </div>
                </div>
              </div>
            </div>
          
            </section>
            </div>
      

</div><!-- sl-mainpanel -->

<script>
  $(function(){
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
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

  });
</script>


<style>

    body{
      font-family: Arial, Helvetica, sans-serif;
      background: rgb(204,204,204); 
      margin: 0 auto;
      padding: 0;
      display: flex;
    }
    
    .centre{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    
    p{
      font-size: 100px;
    }
    
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    
    /* page[size="A4"] {
      background: white;
      width: 21cm;
      height: 29.7cm;
      display: block;
      margin-bottom: 0.5cm;
      margin: 0mm 0mm 20mm 55mm;
      box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
    } 
    @media print {
    body, page[size="A4"] {
      margin: 10mm;
      box-shadow: 0;
    }*/
    
    :root {
      --bleeding: 0.5cm;
      --margin: 1cm;
    }
    
    @page {
      size: A4;
      margin: 0;
      
    }
    
    * {
      box-sizing: border-box;
    }
    
    .page {
      display: inline-block;
      position: relative;
      height: 297mm;
      width: 210mm;
      font-size: 12pt;
      margin: 2em auto;
      padding: calc(var(--bleeding) + var(--margin));
      box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
      background: white;
      margin: 0mm 0mm 20mm 55mm;
    }
    
    @media screen {
      .page::after {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: calc(100% - var(--bleeding) * 2);
        height: calc(100% - var(--bleeding) * 2);
        margin: var(--bleeding);
        outline: thin dashed black;
        pointer-events: none;
        z-index: 9999;
      }
    }
    
    @media print {
      .page {
        margin: 0;
        overflow: hidden;
      }
    
    </style>


@endsection