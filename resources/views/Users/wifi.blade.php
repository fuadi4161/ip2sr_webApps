@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
    <h1>Users</h1>
    <ul>
        <li><a href="href">Wifi</a></li>
        <li>User</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')

<section class="ul-contact-page">
        <ul class="nav nav-pills" id="myPillTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="true"><i class="nav-icon i-Home1 mr-1"></i> Box</a></li>
            <li class="nav-item"><a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Grid</a></li>
        </ul>
        <div class="tab-content" id="myPillTabContent">
            <div class="tab-pane fade show active" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                <div class="row">
                    <div class="col-lg-4 col-md-8 mb-4">
                        <div class="form-group ul-form-group d-flex align-items-center">
                            <input class="form-control ul-form-input" width="100%" type="text" placeholder="Enter your name....." />
                            <a class="ml-2"><button class="btn btn-primary" type="button">Search</button></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 mb-4">
                        <button class="btn btn-light btn-sm btn-icon"  type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <span class="ul-btn__icon"><i class="i-Add-UserStar"></i></span><span class="ul-btn__text"> Add User</span>
                        </button>
                        <button class="btn btn-success btn-sm btn-icon ml-5" type="button" data-toggle="modal" data-target=".bd-example-modal-sm">
                            <span class="ul-btn__icon"><i class="i-Betvibes"></i></span><span class="ul-btn__text"> Lunas</span>
                        </button>
                        <button class="btn btn-danger btn-sm btn-icon" type="button" data-toggle="modal" data-target=".bd-example-modal-sm2">
                            <span class="ul-btn__icon"><i class="i-Betvibes"></i></span><span class="ul-btn__text"> Panding</span>
                        </button>
                    </div>
                </div>

                <div class="row">
                    @foreach ($userwifi as $us)
                    <div class="col-lg-3 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="user-profile mb-4">
                                    <div class="ul-widget-card__user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/'. $us->profile_photo )}}" alt="">
                                        <p class="m-0 text-24">{{$us->name}}</p>
                                        <p class="text-muted m-0">{{$us->email}}</p>
                                        <p class="text-muted m-0">{{$us->kontak}}</p>
                                        <p class="text-muted m-0">Bandwidth 2Mbps</p>
                                    </div>
                                </div>
                                <div class="ul-widget-card--line mt-2">
                                    @if( $us->status == "0")
                                    <button class="btn btn-danger ul-btn-raised--v2 m-1" type="button" data-toggle="dropdown">Panding</button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                        @role('super-admin')
                                        <a class="dropdown-item ul-widget__link--font" href="{{ route('super.ubah-status',['1',''.$us->id])}}"><i class="i-ID-3"> </i> Lunas</a>
                                        @endrole
                                        @role('admin-wifi')
                                        <a class="dropdown-item ul-widget__link--font" href="{{ route('admin-wifi.ubah-status',['1',''.$us->id])}}"><i class="i-ID-3"> </i> Lunas</a>
                                        @endrole
                                    </div>
                                    @else
                                    <button class="btn btn-success ul-btn-raised--v2 m-1" type="button" data-toggle="dropdown">Lunas</button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                        @role('super-admin')
                                        <a class="dropdown-item ul-widget__link--font" href="{{ route('super.ubah-status',['0',''.$us->id])}}"><i class="i-Email"> </i> panding</a>
                                        @endrole
                                        @role('admin-wifi')
                                        <a class="dropdown-item ul-widget__link--font" href="{{ route('admin-wifi.ubah-status',['0',''.$us->id])}}"><i class="i-Email"> </i> panding</a>
                                        @endrole
                                    </div>
                                    @endif

                                    <button class="btn btn-outline-warning ul-btn-raised--v2 m-1 float-right" type="button">Preview</button>
            
                                    <!-- <button class="btn btn-outline-success ul-btn-raised--v2 m-1 float-right" type="button">Preview</button> -->
                                </div>
                                <div class="ul-widget-card__rate-icon">
                                    <span><i class="i-Add-UserStar text-warning"></i> 5.0</span>
                                    <span>
                                        <div class="col-md-12 content-right p-0">
                                            @role('super-admin')
                                            <a class="ul-link-action text-success"  width="50%" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="i-Edit"></i></a>
                                            <a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Want To Delete !!!"><i class="i-Eraser-2"></i></a>
                                            <a class="ul-link-action text-primary mr-1" href="{{ route('super.hapus-user-pemuda',''.$us->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Undisposisi !!!"><i class="i-right"></i></a>
                                            @endrole
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table" id="ul-contact-list" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userwifi as $us)
                                    <tr>
                                        <td><a href="">
                                                <div class="ul-widget-app__profile-pic"><img class="profile-picture avatar-sm mb-2 rounded-circle img-fluid mr-2" src="{{ asset('assets/images/avatars/'. $us->profile_photo )}}" alt="" />{{$us->name}}</div>
                                            </a></td>
                                        <td>{{$us->email}}</td>
                                        <td>{{$us->kontak}}</td>
                                        <td><a class="badge badge-warning m-2 p-2" href="#">{{$us->posision->name}}</a></td>
                                        <td>{{$us->created_at}}</td>
                                        <td>
                                            <a class="ul-link-action text-success"  width="50%" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="i-Edit"></i></a>
                                            <a class="ul-link-action text-primary mr-1" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Undisposisi !!!"><i class="i-right"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
</section>
    <!--  Small Modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle-1">Ubah status Lunas pembayaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
        @role('super-admin')
        <form action="{{  route('super.generate-status-1')}}" method="POST">
        @endrole
        @role('admin-wifi')
        <form action="{{  route('admin-wifi.generate-status-1')}}" method="POST">
        @endrole
        @csrf
            <div class="modal-body">
            @foreach ($userwifi as $us)
            @if ($us->status == false)
                <div class="ul-widget1">
                    <div class="ul-widget2__item">
                        <label class="checkbox checkbox-outline-primary">
                            <input type="checkbox" name="user[]" value="{{$us->user_id}}"/><span class="checkmark"></span>
                            <input type="hidden" name="status1" value="1"/>
                        </label>
                        <div class="ul-widget2__info"><a class="ul-widget2__title" href="#">{{$us->name}}</a></div>
                    </div>
                </div>
            @endif
            @endforeach
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-success ml-2" type="submit">Save Lunas</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- end of main-content -->

    <!--  Small Modal -->
<div class="modal fade bd-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle-1">Ubah status Panding pembayaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
        @role('super-admin')
        <form action="{{  route('super.generate-status-0')}}" method="POST">
        @endrole
        @role('admin-wifi')
        <form action="{{  route('admin-wifi.generate-status-0')}}" method="POST">
        @endrole
        @csrf
            <div class="modal-body">
            @foreach ($userwifi as $us)
                @if ($us->status == true)
                <div class="ul-widget1">
                    <div class="ul-widget2__item">
                        <label class="checkbox checkbox-outline-primary">
                            <input type="checkbox" name="user[]" value="{{$us->user_id}}"/><span class="checkmark"></span>
                            <input type="hidden" name="status0" value="0"/>
                        </label>
                        <div class="ul-widget2__info"><a class="ul-widget2__title" href="#">{{$us->name}}</a></div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-danger ml-2" type="submit">Save Panding</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- end of main-content -->

@endsection

@section('css')
<link rel="stylesheet" href="{{asset('theme/css/plugins/datatables.min.css')}}" />
@endsection

@section('js')
    <script src="{{asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/contact-list-table.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/datatables.script.min.js')}}"></script>
	<script src="{{asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/tooltip.script.min.js')}}"></script>
<script>
    $('#ul-contact-list').DataTable();
</script>
@endsection


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
