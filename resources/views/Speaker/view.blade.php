@extends('layouts.app')

@section('content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/dashboard">Dashboard</a>
    <a class="breadcrumb-item" href="#">My Report History</a>
    <span class="breadcrumb-item active">Speaker Consent Form</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Speaker Consent Form</h5>
    </div><!-- sl-page-title -->

    
    <div class="page" style="--bleeding: 0.5cm;--margin: 1cm;">
      <div style="position: relative; text-align: center">
        <img src="{{ asset('images/iium-logo.jpg') }}" width="200" alt=""><br>
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>SPEAKER CONSENT FORM</h4>
      </div>

      <div class="mg-t-10">
      <label class="form-check-label" for="declaration" style="text-align: justify">
        Name of program / Training: <u>{{ $speaker->programname }}</u><br>
        Date: <u>{{ $speaker->date }}</u>
      </label>
    </div>

      <div class="boxed">
        SPEAKER CONSENT
      </div>

      <div class="mg-t-10">
      <label class="form-check-label" for="declaration" style="text-align: justify">
        Speaker’s Name: <u>{{ $speaker->speakername }}</u><br>
        Institution: <u>{{ $speaker->institution }}</u>
      </label>
    </div>
      

    </div>

  </div><!-- sl-mainpanel -->

{{-- <script>
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
</script> --}}


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
    
    .boxed {
      border: 1px solid black ;
      text-align: center;
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