<header class="main-header bg-white d-flex justify-content-between p-2">
    <div class="header-toggle">
        <div class="menu-toggle mobile-menu-icon">
            <div></div>
            <div></div>
            <div></div>
        </div><i class="i-Add-UserStar mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo"></i><i class="i-Speach-Bubble-3 mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"></i><i class="i-Email mr-3 text-20 mobile-hide cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inbox"></i><i class="i-Calendar-4 mr-3 mobile-hide text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i><i class="i-Checkout-Basket mobile-hide mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i>
    </div>
    <div class="header-part-right">
        <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
        <!-- Grid menu Dropdown-->
        <div class="dropdown dropleft"><i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="menu-icon-grid"><a href="#"><i class="i-Shop-4"></i> Home</a>
                <a href="#"><i class="i-Library"></i> Forum</a>
                <a href="#"><i class="i-Speach-Bubble-3"></i> Chat</a>
                <a href="#"><i class="i-Email"></i> Pesan</a>
                <a href="#"><i class="i-Checked-User"></i> Profile</a><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="i-Ambulance"></i> Logout</a> </div>
            </div>
        </div>
    </div>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>