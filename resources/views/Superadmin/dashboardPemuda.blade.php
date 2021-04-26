@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
	<h1 class="mr-2">Dashboard Administrator</h1>
	<ul>
		<li><a href="">Dashboard</a></li>
		<li>Pemuda</li>
	</ul>
</div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i style="color: green" class="i-Money-2"></i>
                    <p class="text-muted mt-2 mb-2">Pemasukan</p>
                    <p class="text-primary text-24 line-height-1 m-0">Rp 2.000.000</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i style="color: red" class="i-Money-2"></i>
                    <p class="text-muted mt-2 mb-2">Pengeluaran</p>
                    <p class="text-primary text-24 line-height-1 m-0">Rp 1.000.000</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon mb-4">
                <div class="card-body text-center"><i class="i-Money-2"></i>
                    <p class="text-muted mt-2 mb-2">Total Saldo</p>
                    <p class="text-primary text-24 line-height-1 m-0">Rp 1.000.000</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon-big mb-4">
                <div class="card-body text-center"><i class="i-Receipt-3"></i>
                    <p class="text-muted mt-2 mb-2">Kegiatan</p>
                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon-big mb-4">
                <div class="card-body text-center"><i class="i-Boy"></i>
                    <p class="text-muted mt-2 mb-2">Anggota</p>
                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon-big mb-4">
                <div class="card-body text-center"><i class="i-Bell"></i>
                    <p class="text-muted mt-2 mb-2">Kritik/Saran</p>
                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card o-hidden mb-4">
                <div class="card-header d-flex align-items-center">
                    <h3 class="w-50 float-left card-title m-0">New Users</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <button class="btn bg-gray-100" id="dropdownMenuButton_table1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table1"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table dataTable-collapse text-center" id="user_table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Smith</td>
                                    <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                    <td>Smith@gmail.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jhon Doe</td>
                                    <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                    <td>Jhon@gmail.com</td>
                                    <td><span class="badge badge-info">Pending</span></td>
                                    <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Alex</td>
                                    <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                    <td>Otto@gmail.com</td>
                                    <td><span class="badge badge-warning">Not Active</span></td>
                                    <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row-->
    <div class="row">
        <!-- notification-->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Notification</div>
                    <div class="ul-widget-app__browser-list">
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Bell1 text-white bg-warning rounded-circle p-2 mr-3"></i><span class="text-15">You have 9 pending Tasks</span><span class="text-mute">in a sec</span></div>
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Internet text-white green-500 rounded-circle p-2 mr-3"></i><span class="text-15">Traffic Overloaded</span><span class="text-mute">4 Hours ago</span></div>
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Shopping-Cart text-white cyan-500 rounded-circle p-2 mr-3"></i><span class="text-15">New Order Received</span><span class="text-mute">yesterday </span></div>
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Add-UserStar text-white teal-500 rounded-circle p-2 mr-3"></i><span class="text-15">New User </span><span class="text-mute">2 April </span></div>
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Bell text-white purple-500 rounded-circle p-2 mr-3"></i><span class="text-15">New Update </span><span class="text-mute">2 April </span></div>
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Shopping-Cart text-white bg-danger rounded-circle p-2 mr-3"></i><span class="text-15">New Order Received</span><span class="text-mute">yesterday </span></div>
                        <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Internet text-white green-500 rounded-circle p-2 mr-3"></i><span class="text-15">Traffic Overloaded</span><span class="text-mute">4 Hours ago</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- best-sellers-->
        <div class="col-lg-6 col-xl-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget__head">
                        <div class="ul-widget__head-label">
                            <h3 class="ul-widget__head-title">Latest Log</h3>
                        </div>
                        <div class="ul-widget__head-toolbar">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget-s6-tab1-content" role="tab" aria-selected="true">Today</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s6-tab2-content" role="tab" aria-selected="false">Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ul-widget__body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="__g-widget-s6-tab1-content">
                                <div class="ul-widget-s6__items">
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-primary ul-widget6__dot"></p>
                                        </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-success ul-widget6__dot"></p>
                                        </span>
                                        <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-primary m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                    </div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-warning ul-widget6__dot"></p>
                                        </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-danger ul-widget6__dot"></p>
                                        </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-info ul-widget6__dot"></p>
                                        </span>
                                        <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-success m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                    </div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-dark ul-widget6__dot"></p>
                                        </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-primary ul-widget6__dot"></p>
                                        </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                            <p class="badge-dot-success ul-widget6__dot"></p>
                                        </span>
                                        <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-danger m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="__g-widget-s6-tab2-content">
                                <div class="ul-widget2">
                                    <div class="ul-widget-s6__items">
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-danger ul-widget6__dot"></p>
                                            </span><span class="ul-widget-s6__text">44 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-warning ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-primary m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                        </div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-primary ul-widget6__dot"></p>
                                            </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-danger ul-widget6__dot"></p>
                                            </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-info ul-widget6__dot"></p>
                                            </span>
                                            <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-success m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                        </div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-dark ul-widget6__dot"></p>
                                            </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-primary ul-widget6__dot"></p>
                                            </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                        <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                <p class="badge-dot-success ul-widget6__dot"></p>
                                            </span><span class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-danger m-2">Primary</span></span><span class="ul-widget-s6__time">14 mins</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row-->
{{-- <div class="card user-profile o-hidden mb-4">
<div class="header-cover" style="background-image: url({{ asset('theme/images/photo-wide-4.jpg')}})"></div>
    @if( Auth::user()->profile_photo == null)
    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/default.png')}}" alt="" />
    @else
    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="" />
    @endif
        <p class="m-0 text-24">Timothy Carlson</p>
        <p class="text-muted m-0">Digital Marketer</p>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs profile-nav mb-4" id="profileTab" role="tablist">
            <li class="nav-item"><a class="nav-link active show" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a></li>
            <li class="nav-item"><a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a></li>
            <li class="nav-item"><a class="nav-link" id="friends-tab" data-toggle="tab" href="#friends" role="tab" aria-controls="friends" aria-selected="false">Cashflow Ip2sr</a></li>
            <li class="nav-item"><a class="nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Cashflow Wifi</a></li>
        </ul>
        <div class="tab-content" id="profileTabContent">
            <div class="tab-pane fade active show" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                <ul class="timeline clearfix">
                    <li class="timeline-line"></li>
                    <li class="timeline-item">
                        <div class="timeline-badge"><i class="badge-icon bg-primary text-white i-Cloud-Picture"></i></div>
                        <div class="timeline-card card">
                            <div class="card-body">
                                <div class="mb-1"><strong class="mr-1">Timothy Carlson</strong> added a new photo
                                    <p class="text-muted">3 hours ago</p>
                                </div><img class="rounded mb-2" src="../../dist-assets/images/photo-wide-1.jpg" alt="">
                                <div class="mb-3"><a class="mr-1" href="#">Like</a><a href="#">Comment</a></div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Write comment" aria-label="comment">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="button-comment1" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge"><img class="badge-img" src="../../dist-assets/images/faces/1.jpg" alt=""></div>
                        <div class="timeline-card card">
                            <div class="card-body">
                                <div class="mb-1"><strong class="mr-1">Timothy Carlson</strong> updated his sattus
                                    <p class="text-muted">16 hours ago</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dicta beatae illo illum iusto iste mollitia explicabo quam officia. Quas ullam, quisquam architecto aspernatur enim iure debitis dignissimos suscipit
                                    ipsa.
                                </p>
                                <div class="mb-3"><a class="mr-1" href="#">Like</a><a href="#">Comment</a></div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Write comment" aria-label="comment">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="button-comment2" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="timeline clearfix">
                    <li class="timeline-line"></li>
                    <li class="timeline-group text-center">
                        <button class="btn btn-icon-text btn-primary"><i class="i-Calendar-4"></i> 2018</button>
                    </li>
                </ul>
                <ul class="timeline clearfix">
                    <li class="timeline-line"></li>
                    <li class="timeline-item">
                        <div class="timeline-badge"><i class="badge-icon bg-danger text-white i-Love-User"></i></div>
                        <div class="timeline-card card">
                            <div class="card-body">
                                <div class="mb-1"><strong class="mr-1">New followers</strong>
                                    <p class="text-muted">2 days ago</p>
                                </div>
                                <p><a href="#">Henry krick</a> and 16 others followed you</p>
                                <div class="mb-3"><a class="mr-1" href="#">Like</a><a href="#">Comment</a></div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Write comment" aria-label="comment">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="button-comment3" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge"><i class="badge-icon bg-primary text-white i-Cloud-Picture"></i></div>
                        <div class="timeline-card card">
                            <div class="card-body">
                                <div class="mb-1"><strong class="mr-1">Timothy Carlson</strong> added a new photo
                                    <p class="text-muted">2 days ago</p>
                                </div><img class="rounded mb-2" src="../../dist-assets/images/photo-wide-2.jpg" alt="">
                                <div class="mb-3"><a class="mr-1" href="#">Like</a><a href="#">Comment</a></div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Write comment" aria-label="comment">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="button-comment4" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="timeline clearfix">
                    <li class="timeline-line"></li>
                    <li class="timeline-group text-center">
                        <button class="btn btn-icon-text btn-warning"><i class="i-Calendar-4"></i> Joined
                            in 2013
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="ul-widget__head v-margin">
                                <div class="ul-widget__head-label">
                                    <h3 class="ul-widget__head-title">Status Pembayaran wifi</h3>
                                </div>
                                <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                <div class="dropdown-menu mr-5" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <ul class="nav nav-pills" id="myPillTab" role="tablist">
                                        <li class="dropdown-item"><a class="nav-link active" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="true">multi insert Lunas</a></li>
                                        <li class="dropdown-item"><a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false">multi insert Panding</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="myPillTabContent">
                                <div class="tab-pane m--2 fade show active" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Managed</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form action="{{ route('super.generate-status-1')}}" method="POST">
                                                @csrf
                                                    @foreach( $userwifi as $user)
                                                    <tr>
                                                        <th scope="row">
                                                            <label class="checkbox checkbox-outline-info">
                                                                <input type="checkbox" name="user[]" value="{{$user->user_id}}"/><span class="checkmark"></span>
                                                                <input type="hidden" name="status1" value="1"/>
                                                            </label>
                                                        </th>
                                                        <td>{{$user->name}}</td>
                                                        <td>
                                                            <span>
                                                                <div class="ul-widget_user-card">
                                                                    <div class="ul-widget4__img"><img id="userDropdown" src="{{ asset('theme/images/faces/'.$user->profile_photo )}}" alt="" /></div>
                                                                </div>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            @if( $user->status == "0")
                                                            <span class="badge badge-pill badge-outline-danger p-2 m-1">Pendding</span>
                                                            @else
                                                            <span class="badge badge-pill badge-outline-success p-2 m-1">Lunas</span>
                                                            @endif
                                                        </td>
                                                        <td><a class="ul-widget4__title color-white d-block" href="">{{$user->kecepatan}}</a><span>{{$user->harga}}</span></td>
                                                        <td>
                                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item ul-widget__link--font" href="{{ route('super.ubah-status',['1',''.$user->id])}}"><i class="i-Folder-Download"></i> Sudah Bayar</a>
                                                                <a class="dropdown-item ul-widget__link--font" href="{{ route('super.ubah-status',['0',''.$user->id])}}"><i class="i-Gears-2"></i> Belum Bayar</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    <button type="submit" class="btn btn-sm btn-primary mb-2">Lunas</button>
                                                </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Managed</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form action="{{ route('super.generate-status-0')}}" method="POST">
                                                @csrf
                                                    @foreach( $userwifi as $user)
                                                    <tr>
                                                        <th scope="row">
                                                            <label class="checkbox checkbox-outline-info">
                                                                <input type="checkbox" name="user[]" value="{{$user->user_id}}"/><span class="checkmark"></span>
                                                                <input type="hidden" name="status0" value="0"/>
                                                            </label>
                                                        </th>
                                                        <td>{{$user->name}}</td>
                                                        <td>
                                                            <span>
                                                                <div class="ul-widget_user-card">
                                                                    <div class="ul-widget4__img"><img id="userDropdown" src="{{ asset('theme/images/faces/'.$user->profile_photo )}}" alt="" /></div>
                                                                </div>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            @if( $user->status == "0")
                                                            <span class="badge badge-pill badge-outline-danger p-2 m-1">Pendding</span>
                                                            @else
                                                            <span class="badge badge-pill badge-outline-success p-2 m-1">Lunas</span>
                                                            @endif
                                                        </td>
                                                        <td><a class="ul-widget4__title color-white d-block" href="">{{$user->kecepatan}}</a><span>{{$user->harga}}</span></td> 
                                                        <td>
                                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                                <a class="dropdown-item ul-widget__link--font" href="{{ route('super.ubah-status',['1',''.$user->user_id])}}"><i class="i-Folder-Download"></i> Sudah Bayar</a>
                                                                <a class="dropdown-item ul-widget__link--font" href="{{ route('super.ubah-status',['0',''.$user->user_id])}}"><i class="i-Gears-2"></i> Belum Bayar</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    <button type="submit" class="btn btn-sm btn-primary mb-2">Belum Lunas</button>
                                                </form>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- end::exclusive datatable plugin-->
            </div>
            <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends-tab">
                <div class="row mb-4">
                    <div class="col-md-4 col-lg-4">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">INCOME</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">1.000.000</h2>
                                    </div>
                                </div>
                                <div id="basicArea-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">OUT</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">500.000</h2>
                                    </div>
                                </div>
                                <div id="basicArea-chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card mb-4 o-hidden">
                            <div class="card-body ul-card__widget-chart">
                                <div class="ul-widget__chart-info">
                                    <h5 class="heading">SALDO</h5>
                                    <div class="ul-widget__chart-number">
                                        <h2 class="t-font-boldest">500.000</h2>
                                    </div>
                                </div>
                                <div id="basicArea-chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Datatables -->
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="multicolumn_ordering_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kas masuk/keluar</th>
                                <th>Keterangan</th>
                                <th>Barang</th>
                                <th>harga</th>
                                <th>Total pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>masuk</td>
                                <td>Acara tahun baru 2021</td>
                                <td>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                </td>
                                <td>48.000</td>
                            </tr>
                            <tr>
                                <td>masuk</td>
                                <td>Acara tahun baru 2021</td>
                                <td>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                </td>
                                <td>48.000</td>
                            </tr>
                            <tr>
                                <td>masuk</td>
                                <td>Acara tahun baru 2021</td>
                                <td>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                </td>
                                <td>48.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
            <div class="row">
                    <!-- ICON BG-->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Coins"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">INCOME</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">1.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Financial"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">OUT</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">500.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><i class="i-Money-2"></i>
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">PROFIT</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">500.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="display table table-striped table-bordered" id="alternative_pagination_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kas masuk/keluar</th>
                                <th>Keterangan</th>
                                <th>Barang</th>
                                <th>harga</th>
                                <th>Total pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>masuk</td>
                                <td>Acara tahun baru 2021</td>
                                <td>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                </td>
                                <td>48.000</td>
                            </tr>
                            <tr>
                                <td>masuk</td>
                                <td>Acara tahun baru 2021</td>
                                <td>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                </td>
                                <td>48.000</td>
                            </tr>
                            <tr>
                                <td>masuk</td>
                                <td>Acara tahun baru 2021</td>
                                <td>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                    <p>12.000</p>
                                </td>
                                <td>48.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

                
@endsection

@section('js')
<script src="{{ asset('theme/js/plugins/echarts.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/echart.options.min.js')}}"></script>
<script src="{{ asset('theme/js/plugins/datatables.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/datatables.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/dashboard.v4.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/dashboard.v1.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/dashboard.v2.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/widgets-statistics.min.js')}}"></script>
<script src="{{ asset('theme/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/apexSparklineChart.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/customizer.script.min.js')}}"></script>
@endsection