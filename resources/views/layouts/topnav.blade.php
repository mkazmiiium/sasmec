<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
      
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
      <nav class="nav">
        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name">{{ Auth::user()->name }}</span></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li>{{ Auth::user()->dept }}</li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <li><a href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                      <i class="icon ion-power"></i> Sign Out</a>
              </form>
              </li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
     
    </div><!-- sl-header-right -->
  </div><!-- sl-header -->
  <!-- ########## END: HEAD PANEL ########## -->
