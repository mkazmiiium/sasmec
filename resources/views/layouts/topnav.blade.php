<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
  <div class="sl-header-left">

  </div><!-- sl-header-left -->
  <div class="sl-header-right">
    <nav class="nav">
      <div class="dropdown">
        <div style="width: 50%; float: left; padding: 5px;">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name">{{ Auth::user()->name }}</span></span>
          </a>
        </div>
        <div style="width: 50%; float: right; padding-top: 5px; padding-right: 5px">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li style="background-color: #6FC2C8; padding: 5px; border-radius: 5px">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" style="color: #555555;">
                <i class="icon ion-power" style="color: #555555;"></i> Sign Out</a>

              {{-- <li style="background-color: blue; "><a href="{{ route('register') }}" >
              <i class="icon ion-register"></i> Register New User</a> --}}
          </form>
        </div>
      </div><!-- dropdown -->
    </nav>

  </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->