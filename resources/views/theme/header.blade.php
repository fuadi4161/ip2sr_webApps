<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1> <a class="navbar-brand" href="{{ route('home')}}">
                <img src="web/images/Logowebipsr.v2.png" width="35px" /> IP2SR
                </a></h1>
            <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                   
                    <li class="nav-item dropdown @@pages__active">
                      @auth
  
                        @if( Auth::user()->profile_photo == null)
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{url('assets/images/avatars/default.png')}}" style="border-radius: 50%; width:34px;height:34px; margin-top:-7px;">
                        </a>
                        @else
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{url('assets/images/avatars/'. Auth::user()->profile_photo)}}" style="border-radius: 50%; width:34px;height:34px; margin-top:-7px;">
                        </a>
                        @endif
  
  
                      @else
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Account <span class="fa fa-angle-down"></span>
                        </a>
                      @endif
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          
                        @if (Route::has('login'))
                            
                                @auth
                                    @role('super-admin')
                                    <a href="{{ route('super.dashboard-pemuda') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                    @role('admin')
                                    <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                    @role('pemuda')
                                    <a href="{{ route('pemuda.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                    @role('bendahara')
                                    <a href="{{ route('bendahara.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                    @role('sekertaris')
                                    <a href="{{ route('sekertaris.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                    @role('admin-wifi')
                                    <a href="{{ route('admin-wifi.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                    @role('wifi')
                                    <a href="{{ route('wifi.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                    @endrole
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dropdown-item">Login</a>
  
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-sm text-gray-700 underline dropdown-item">Register</a>
                                    @endif
                                @endif
                            
                        @endif
  
                      @auth
                        <div class="block px-4 py-2 text-xs text-warning">
                                {{ __('Action') }}
                            </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
  
                            <a class="dropdown-item href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                      @endif
                    </li>
                    <!--/search-right-->
                    {{-- <div class="search-right">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <h4 class="mb-3">Search here</h4>
                                <form action="error.html" method="GET" class="search-box">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="">
                                    <button type="submit" class="btn btn-style btn-primary">Search</button>
                                </form>
  
                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- /search popup -->
                    </div> --}}
                    <!--//search-right-->
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
  </header>