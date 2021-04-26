@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
    <h1>Users</h1>
    <ul>
        <li><a href="href">Apps</a></li>
        <li>User</li>
    </ul>
</div>
    
@endsection

@section('content')

<div class="separator-breadcrumb border-top"></div>
<section class="ul-contact-page">
    <div class="row">
        <div class="col-lg-4 col-md-8 mb-4">
            <div class="form-group ul-form-group d-flex align-items-center">
                <input class="form-control ul-form-input" width="100%" type="text" placeholder="Enter your name....." />
                <a class="ml-2"><button class="btn btn-primary" type="button">Search</button></a>
                
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
            <div class="navbar-collapse collapse mt-2" id="navbar-filter"  id="pills-tab" role="tablist">
                <ul class="nav nav-pills navbar-nav flex-wrap nav-fill mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item"><p>Show in:</p></li>
                    <li class="nav-item"><a class="navbar-nav-link ml-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="i-Time-Window"></i> Grid</a></li>
                    <li class="nav-item"><a class="navbar-nav-link ml-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="i-Bar-Chart-2"></i> List</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    
    <div class="tab-content ul-tab__content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
        @foreach ($user as $us)
        <div class="col-lg-4 col-xl-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="ul-contact-page__profile">
                       @if($us->profile_photo == null)
                        <div class="user-profile"><img class="profile-picture mb-2" width="100px" src="{{ asset('assets/images/avatars/default.png' )}}" alt="alt" /></div>
                        @else
                        <div class="user-profile"><img class="profile-picture mb-2" width="100px" src="{{ asset('assets/images/avatars/'. $us->profile_photo )}}" alt="alt" /></div>
                        @endif
                        <div class="ul-contact-page__info">
                            <p class="m-0 text-24">{{$us->name}}</p>
                            <p class="text-muted m-0">{{$us->email}}</p>
                            <p class="text-muted mt-3">NO: {{$us->created_at}}</p>
                            <div class="col-md-12 p-0">
                                <a class="ul-link-action text-success"  width="50%" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="i-Edit"></i></a>
                                <a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yakin Hapus !!!"><i class="i-Eraser-2"></i></a>
                                <a class="ul-link-action text-primary mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disposisikan User !!!"><i class="text-20 i-Left disposisi" user-id="{{ $us->id }}"> </i></a>
                                <a class="ul-link-action text-primary mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disposisikan User !!!"><i class="text-20 i-Left promosi" user-id="{{ $us->id }}"> </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                        @foreach ($user as $us)
                        <tr>
                            <td><a href="">
                                    @if($us->profile_photo == null)
                                    <div class="ul-widget-app__profile-pic"><img class="profile-picture avatar-sm mb-2 rounded-circle img-fluid mr-2" src="{{ asset('assets/images/avatars/default.png' )}}" alt="" />{{$us->name}}</div>
                                @else
                                    <div class="ul-widget-app__profile-pic"><img class="profile-picture avatar-sm mb-2 rounded-circle img-fluid mr-2" src="{{ asset('assets/images/avatars/'. $us->profile_photo )}}" alt="" />{{$us->name}}</div>
                                @endif
                                </a></td>
                            <td>{{$us->email}}</td>
                            <td>{{$us->kontak}}</td>
                            @if ( count($us->posision) == 0 )
                            <td><a class="badge badge-primary m-2 p-2" href="#">Pengunjung</a></td>
                            @else
                            <td>
                                @foreach ($us->posision as $item)
                                    @if ( $item->name == 'user pemuda')
                                    <a class="badge badge-warning m-2 p-2" href="#">{{$item->name}}</a>
                                    @else
                                    <a class="badge badge-danger m-2 p-2" href="#">{{$item->name}}</a>
                                    @endif
                                @endforeach
                            </td>
                            @endif
                            <td>{{$us->created_at}}</td>
                            <td>
                                <a class="ul-link-action text-success"  width="50%" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="i-Edit"></i></a>
                                <a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yakin Hapus !!!"><i class="i-Eraser-2"></i></a>
                                <a class="ul-link-action text-primary mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disposisikan User !!!"><i class="text-20 i-Left disposisi" user-id="{{ $us->id }}"> </i></a>
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
    
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/iziToast.css')}}">
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
    <script src="{{ asset('js/iziToast.js')}}"></script>
    <script src="{{ asset('js/iziToast.min.js')}}"></script>

    <script type="text/javascript">
		$('.disposisi').click(function(){

			var user_id = $(this).attr('user-id');

			iziToast.question({
			timeout: 20000,
			close: false,
			overlay: true,
			displayMode: 'once',
			id: 'question',
			zindex: 999,
			title: 'Hey',
			message: 'Anda akan disposisikan user ini ke?',
			// position: 'bottomRight',bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
			position: 'center',
			buttons: [
				['<button><b>Pemuda</b></button>', function (instance, toast) {
		
					instance.hide({ transitionOut: 'fadeOut' }, toast, 'button', window.location = "/superadmin/users/"+ user_id +"/pemuda ");
		
				}, true],
				['<button><b>Wifi</b></button>', function (instance, toast) {
		
					instance.hide({ transitionOut: 'fadeOut' }, toast, 'button', window.location = "/superadmin/users/"+ user_id +"/wifi ");
		
				}],
				['<button>cancle</button>', function (instance, toast) {
		
					instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
		
				}],
			]
			});
		});
		
    </script>
    <script type="text/javascript">
        $('.promosi').click(function(){

            var user_id = $(this).attr('user-id');

            iziToast.question({
            timeout: 20000,
            close: false,
            overlay: true,
            displayMode: 'once',
            id: 'question',
            zindex: 999,
            title: 'Hey',
            message: 'Promote user ini ke?',
            // position: 'bottomRight',bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
            position: 'center',
            buttons: [
                ['<button><b>Pemuda</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button', window.location = "/superadmin/promote/"+ user_id +"/admin-wifi ");
        
                }, true],
                ['<button><b>Wifi</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button', window.location = "/superadmin/promote/"+ user_id +"/bendahara ");
        
                }],
                ['<button><b>Wifi</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button', window.location = "/superadmin/promote/"+ user_id +"/admin ");
        
                }],
                ['<button><b>Wifi</b></button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button', window.location = "/superadmin/promote/"+ user_id +"/sekertaris ");
        
                }],
                ['<button>cancle</button>', function (instance, toast) {
        
                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
        
                }],
            ]
            });
        });
        
    </script>

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
@endsection