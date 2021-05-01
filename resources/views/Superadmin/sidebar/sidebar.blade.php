<div class="sidebar-panel bg-white">
    <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><img class="pl-3" src="{{ asset('web/images/Logowebipsr.v2.png')}}" alt="alt" style="width: 23%"/>
        <span class=" item-name text-20 text-primary font-weight-700">IP2SR</span>
        <div class="sidebar-compact-switch ml-auto"><span></span></div>
    </div>
    <!--  user -->
    <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
        <div class="side-nav">
            <div class="main-menu">
                <ul class="metismenu" id="menu">
                    <li class="Ul_li--hover"><a href="{{ route('super.dashboard-pemuda')}}"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard Pemuda</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('super.dashboard-network')}}"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard Network</span></a>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Library text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Manajement User</span></a>
                        <ul class="mm-collapse">
                            <li class="nav-item"><a href="{{ route('super.users')}}"><i class="text-20 i-Find-User mr-2"></i><span class="item-name">Semua User</span></a></li>
                            <li class="item-name"><a href="{{ route('super.users-pemuda')}}"><i class="text-20 i-Find-User mr-2"></i><span class="item-name">User Pemuda</span></a></li>
                            <li class="item-name"><a href="{{ route('super.users-wifi')}}"><i class="text-20 i-Find-User mr-2"></i><span class="item-name">User Network</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('super.notulen')}}"><i class="i-File-Clipboard-File--Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Notes</span></a>
                    </li>
                    <!--  <p class="main-menu-title text-muted ml-3 font-weight-700 text-13 mt-4 mb-2">UI Elements</p> -->
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="nav-icon i-Line-Chart-2"></i><span class="item-name text-15 text-muted">Manajement Kas</span></a>
                        <ul class="mm-collapse">
                            <li class="nav-item"><a href="{{ route('super.keuangan-pemuda')}}"><i class="text-20 i-Statistic mr-2"></i><span class="item-name">Keuangan Pemuda</span></a></li>
                            <li class="item-name"><a href="{{ route('super.keuangan-wifi')}}"><i class="text-20 i-Statistic mr-2"></i><span class="item-name">Keuangan Network</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('super.media')}}"><i class="i-Computer-Secure text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Media Menejement</span></a>  
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="nav-icon i-Line-Chart-2"></i><span class="item-name text-15 text-muted">Kalender</span></a>
                        <ul class="mm-collapse">
                            <li class="nav-item"><a href="{{ route('super.kalendar')}}"><i class="text-20 i-Statistic mr-2"></i><span class="item-name">kalendar</span></a></li>
                            <li class="nav-item"><a href="{{ route('super.event')}}"><i class="text-20 i-Statistic mr-2"></i><span class="item-name">Events</span></a></li>
                            <li class="item-name"><a href="{{route('super.agenda')}}"><i class="text-20 i-Statistic mr-2"></i><span class="item-name">Agenda</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a href="{{route('super.arisan')}}"><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Arisan</span></a>
                    </li>
                    <li class="Ul_li--hover">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="i-Safe-Box1 text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Log Out</span></a>
                        </form>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
        </div>
    </div>
    <!--  side-nav-close -->
</div>