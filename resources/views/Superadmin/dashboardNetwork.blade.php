@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
	<h1 class="mr-2">Dashboard Administrator</h1>
	<ul>
		<li><a href="">Dashboard</a></li>
		<li>Network</li>
	</ul>
</div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body ul-card__widget-chart">
                <div class="ul-widget__chart-info">
                    <h5 class="heading">IN</h5>
                    <div class="ul-widget__chart-number">
                        <h2 class="t-font-boldest">Rp 1.000.000</h2>
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
                        <h2 class="t-font-boldest">Rp 500.000</h2>
                    </div>
                </div>
                <div id="basicArea-chart4"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body ul-card__widget-chart">
                <div class="ul-widget__chart-info">
                    <h5 class="heading">SALDO</h5>
                    <div class="ul-widget__chart-number">
                        <h2 class="t-font-boldest">Rp 500.000</h2>
                    </div>
                </div>
                <div id="basicArea-chart2"></div>
            </div>
        </div>
    </div>
    <!-- finance-->
    <!-- table-->
    <div class="col-lg-8 col-xl-8 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head v-margin">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Daftar semua user</h3>
                    </div>
                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <div class="ul-widget-body">
                    <div class="ul-widget3">
                        <div class="ul-widget6__item--table">
                            <table class="table">
                                <thead>
                                    <tr class="ul-widget6__tr--sticky-th">
                                        <th scope="col">#</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Managed By</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/10.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/12.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/13.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-primary p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/15.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/16.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-warning p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-warning p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/4.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/5.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/9.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>11/28/2016</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xl-4 mt-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Users</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget4-tab1-content" role="tab" aria-selected="true">Lunas</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget4-tab2-content" role="tab" aria-selected="false">Panding</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="__g-widget4-tab1-content">
                            <div class="ul-widget1">
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-danger m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-success m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-warning m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-success m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/5.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-info m-1" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="__g-widget4-tab2-content">
                            <div class="ul-widget1">
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-danger m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-success m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-warning m-1" type="button">Detail</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/4.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-info m-1" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mask-form-->
    <!-- sales-status-->
</div>
<div class="row">
    <div class="col-lg-6 col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head __g-support v-margin">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Aktivitas Users</h3>
                    </div>
                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">10:00</span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-warning ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna
                            </div>
                        </div>
                    </div>
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">16:00 </span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-danger ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna elit enim at
                                minim<br /> veniam quis nostrud
                            </div>
                        </div>
                    </div>
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">13:00</span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-primary ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna
                            </div>
                        </div>
                    </div>
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">08:00</span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-success ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6 mt-4">
        <div class="card o-hidden mb-4">
            <div class="card-header d-flex align-items-center">
                <h3 class="w-50 float-left card-title m-0">Users Baru</h3>
                <div class="dropdown dropleft text-right w-50 float-right">
                    <button class="btn bg-gray-100" id="dropdownMenuButton_table1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table1"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
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
                                <td>Smith Doe</td>
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
    <!-- end of col-->
</div>
<!-- end of row-->
<!-- end of main-content -->
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