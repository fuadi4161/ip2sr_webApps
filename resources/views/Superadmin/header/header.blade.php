<header class="main-header bg-white d-flex justify-content-between p-2">
    <div class="header-toggle">
        <div class="menu-toggle mobile-menu-icon">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <i class="i-Add-UserStar mr-3 text-20 cursor-pointer" id="dropdownMenuButton" type="button" data-toggle="dropdown"></i>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"> Tambah User Pemuda</a>
            <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg2" href="#"> Tambah User Wifi</a>
            <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg3" href="#">Tambah User wifi & Pemuda</a>
            <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg4" href="#">Tambah Admin wifi</a>
        </div>


        <i class="i-Speach-Bubble-3 mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"></i>
        <i class="i-Email mr-3 text-20 mobile-hide cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inbox"></i>
        <i class="i-Calendar-4 mr-3 mobile-hide text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i>
        <i class="i-Checkout-Basket mobile-hide mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i>
    </div>
    <div class="header-part-right">
        <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
        <!-- Grid menu Dropdown-->
        <div class="dropdown dropleft"><i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="menu-icon-grid"><a href="/"><i class="i-Shop-4"></i> Home</a>
                <a href="#"><i class="i-Library"></i> Forum</a>
                <a href="#"><i class="i-Speach-Bubble-3"></i> Chat</a>
                <a href="#"><i class="i-Email"></i> Pesan</a>
                <a href="{{route('super.profil')}}"><i class="i-Checked-User"></i> Profile</a>
                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="i-Ambulance"></i> Logout</a> </div>
            </div>
        </div>
    </div>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('super.add-user-pemuda')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah User Pemuda</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="firstName1">Username</label>
                            <input class="form-control" id="firstName1" type="text" name="name" placeholder="Enter username">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="lastName1">Email</label>
                            <input class="form-control" id="email" type="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control" id="password1" type="password" name="password" placeholder="Enter password">
                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('super.add-user-wifi')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah User Wifi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="firstName">Username</label>
                            <input class="form-control" id="firstName" type="text" name="name" placeholder="Enter username">
                        </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="picker1">Langganan</label>
                                <select class="form-control"  name="status_langganan">
                                    <option value="1"  name="status_langganan">100k 1.5 Mbps</option>
                                    <option value="2"  name="status_langganan">150k 2 Mbps</option>
                                    <option value="3"  name="status_langganan">200k 2.5 Mbps</option>
                                    <option value="4"  name="status_langganan">250k 3 Mbps</option>
                                    <option value="5"  name="status_langganan">300k 3.5 Mbps</option>
                                    <option value="6"  name="status_langganan">400k 6 Mbps</option>
                                </select>
                            </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="lastName1">Email</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="exampleInputEmail1">Password</label>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Enter password">
                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah User Wifi & Pemuda</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                ...

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary ml-2" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('super.add-admin-wifi')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Admin Wifi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="firstName">Username</label>
                            <input class="form-control" id="firstName" type="text" name="name" placeholder="Enter username">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="lastName1">Email</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="exampleInputEmail1">Password</label>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Enter password">
                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>