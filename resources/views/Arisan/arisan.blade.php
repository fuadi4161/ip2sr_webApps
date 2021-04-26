@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Arisan</h1>
        <ul>
            <li><a href="">Apps</a></li>
            <li>Arisan</li>
        </ul>
    </div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="ul-widget__head v-margin">
            <div class="ul-widget__head-label">
                <h3 class="ul-widget__head-title">Table Arisan</h3>
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
                                <th scope="col">Tanggal</th>
                                <th scope="col">Daftar Hadir</th>
                                <th scope="col">Nominal</th>
                                <th scope="col">Keterangan</th>
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
                                <td>11/28/2016</td>
                                <td>23 Anggota</td>
                                <td><a class="ul-widget4__title d-block" href="">Rp 25.000</a><span>Anggota </span></td>
                                <td><a href="{{ route('super.arisan-detail','1')}}"><span class="badge badge-pill badge-outline-danger p-2 m-1">Detail</span></a></td>
                                <td>
                                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a>
                                        <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Hapus</a>
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