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