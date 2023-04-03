@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo">
  <a href="">
    <div class="logo-column">
      <img class="dsc-logo" src="{{ asset('images/dsc-logo.jpg') }}" alt="">
      <img class="sasmec-logo" src="{{ asset('images/sasmec-logo.png') }}" alt="">
    </div>
  </a>
</div>
<div class="sl-sideleft">
  <div class="sl-sideleft-menu">
    <a href="{{ route('dashboard') }}" class="sl-menu-link active">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-home tx-22"></i>
        <span class="menu-item-label">Dashboard</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-document-text tx-20"></i>
        <span class="menu-item-label">Create Report</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route('document-review.create') }}" class="nav-link">Document Review</a></li>
      <li class="nav-item"><a href="{{ route('food.create') }}" class="nav-link">Food Premise Inspection</a></li>
      <li class="nav-item"><a href="{{ route('referral.create') }}" class="nav-link">Referral Form</a></li>
      <li class="nav-item"><a href="{{ route('program.create') }}" class="nav-link">Program Monitoring</a></li>
      <li class="nav-item"><a href="{{ route('activity-monitor.create') }}" class="nav-link">Activity Monitoring</a></li>
      <li class="nav-item"><a href="{{ route('complaint.create') }}" class="nav-link">Complaint Form</a></li>
      <li class="nav-item"><a href="{{ route('terms.create') }}" class="nav-link">Terms and Condition</a></li>

      @if(Auth::user()->hasRole('dsc'))
      <li class="nav-item"><a href="{{ route('slo-report.create') }}" class="nav-link">SLO Report</a></li>
      @else
      @endif

      <li class="nav-item"><a href="{{ route('clinic.create') }}" class="nav-link">Shariah Clinic</a></li>
      <li class="nav-item"><a href="{{ route('speaker.create') }}" class="nav-link">Speaker Consent Form</a></li>
      <li class="nav-item"><a href="{{ route('acceptance.create') }}" class="nav-link">Acceptance or Consent Form</a></li>
      <li class="nav-item"><a href="{{ route('slo-monthly.create') }}" class="nav-link">SLO Monthly Report</a></li>
      <li class="nav-item"><a href="{{ route('patient-visit.create') }}" class="nav-link">Patient Visit Form</a></li>
    </ul>

    @php

    $allreport = (auth()->user()->allreport == 1);
    $alluser = (auth()->user()->alluser == 1);
    $assignstaff = (auth()->user()->assignstaff == 1);
    $reviewreport = (auth()->user()->reviewreport == 1);
    $reviewstatistic = (auth()->user()->reviewstatistic == 1);
    $useraccess = (auth()->user()->useraccess == 1);

    @endphp

    @if($reviewreport == true)
    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-filing tx-24"></i>
        <span class="menu-item-label">Manage Report</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route('document-review.view-all') }}" class="nav-link">Document Review</a></li>
      <li class="nav-item"><a href="{{ route('food.view-all') }}" class="nav-link">Food Premise Inspection</a></li>
      <li class="nav-item"><a href="{{ route('referral.view-all') }}" class="nav-link">Referral Form</a></li>
      <li class="nav-item"><a href="{{ route('program.view-all') }}" class="nav-link">Program Monitoring</a></li>
      <li class="nav-item"><a href="{{ route('activity-monitor.view') }}" class="nav-link">Activity Monitoring</a></li>
      <li class="nav-item"><a href="{{ route('complaint.view-all') }}" class="nav-link">Complaint Form</a></li>
      <li class="nav-item"><a href="{{ route('terms.view-all') }}" class="nav-link">Terms and Condition</a></li>
      <li class="nav-item"><a href="{{ route('slo-report.view-all') }}" class="nav-link">SLO Report</a></li>
      <li class="nav-item"><a href="{{ route('clinic.view-all') }}" class="nav-link">Shariah Clinic</a></li>
      <li class="nav-item"><a href="{{ route('speaker.view-all') }}" class="nav-link">Speaker Consent Form</a></li>
      <li class="nav-item"><a href="{{ route('acceptance.view-all') }}" class="nav-link">Acceptance or Consent Form</a></li>
      <li class="nav-item"><a href="{{ route('slo-monthly.view-all') }}" class="nav-link">SLO Monthly Report</a></li>
      <li class="nav-item"><a href="{{ route('patient-visit.view-all') }}" class="nav-link">Patient Visit Form</a></li>
    </ul>
    @else
    @endif

    @if($reviewreport == true)
    <a href="{{ route('view.task') }}" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-list tx-22"></i>
        <span class="menu-item-label">My Tasks</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    @else
    @endif

    <a href="{{ route('report.history') }}" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-paper tx-22"></i>
        <span class="menu-item-label">My Report History</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->

    </a><!-- sl-menu-link -->


    @if($alluser == true )
    <a href="index.html" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-people tx-22"></i>
        <span class="menu-item-label">Manage Staff</span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    @else
    @endif

  </div><!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<style>
  .logo-column {
    float: left;
    display: flex;
    flex-direction: row;
  }

  .dsc-logo {
    height: 70px;
    width: 70px;
    top: 0px;
    left: 0px;
    margin: 0px;
  }

  .sasmec-logo {
    height: 70px;
    width: 175px;
    left: 0px;
    top: 0px;
    margin: 0px;
    padding: 0px;
  }
</style>