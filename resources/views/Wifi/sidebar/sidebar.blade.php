<div class="sidebar-panel bg-white">
    <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><img class="pl-3" src="{{ asset('web/images/Logowebipsr.v2.png')}}" style="width: 23%"/>
        <span class=" item-name text-20 text-primary font-weight-700">IP2SR</span>
        <div class="sidebar-compact-switch ml-auto"><span></span></div>
    </div>
    <!--  user -->
    <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
        <div class="side-nav">
            <div class="main-menu">
                <ul class="metismenu" id="menu">
                    @role('wifi')
                    <li class="Ul_li--hover"><a href="{{ route('wifi.dashboard')}}"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('wifi.pembayaran')}}"><i class="i-Letter-Open text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Pembayaran</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href=""><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Berita</span></a>
                    </li>
                    @endrole
                    @role('admin-wifi')
                    <li class="Ul_li--hover"><a href="{{ route('admin-wifi.dashboard')}}"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('admin-wifi.users-wifi')}}"><i class="i-Letter-Open text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Input Pembayaran</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('admin-wifi.laporan')}}"><i class="i-Library text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Laporan Pembayaran</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href="{{ route('admin-wifi.pembayaran')}}"><i class="i-File-Clipboard-File--Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Pembayaran</span></a>
                    </li>
                    <li class="Ul_li--hover"><a href=""><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Berita</span></a>
                    </li>
                    @endrole
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