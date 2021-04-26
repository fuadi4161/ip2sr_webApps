@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Notulen</h1>
        <ul>
            <li><a href="">Apps</a></li>
            <li>Notes</li>
        </ul>
    </div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="ul-widget__head v-margin">
            <div class="ul-widget__head-label">
                <h3 class="ul-widget__head-title">Exclusive datatable plugin</h3>
            </div>
            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(480px, 51px, 0px);"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/10.jpg" alt=""></div>
                                        </div>
                                    </span></td>
                                <td>11/28/2016</td>
                                <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processing</span></td>
                                <td><a class="ul-widget4__title d-block" href="">UI Lib</a><span>Angular 2,Vue.js </span></td>
                                <td class="">
                                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(448px, 251px, 0px);"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                    </div>
                                </td>
                            </tr>
                            <!-- end tr-->
                            <!-- start tr-->
                            <tr>
                                <th scope="row">
                                    <label class="checkbox checkbox-outline-info">
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/12.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/13.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/15.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/16.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/4.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/5.jpg" alt=""></div>
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
                                        <input type="checkbox" checked=""><span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><span>
                                        <div class="ul-widget_user-card">
                                            <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/9.jpg" alt=""></div>
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
    @endsection