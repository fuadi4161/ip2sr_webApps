<!DOCTYPE html>
<html lang="en" dir="">

<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Dashboard IP2SR</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
	<link href="{{ asset('theme/css/themes/lite-purple.css')}}" rel="stylesheet" />
	<link href="{{ asset('theme/css/plugins/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('theme/css/plugins/fontawesome-5.css')}}" />
    <link href="{{ asset('theme/css/plugins/metisMenu.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('theme/css/plugins/sweetalert2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/css/plugins/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('src/main.css') }}" />
    <link href="{{ asset('css/inputimage.css')}}" rel="stylesheet"></head>
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/iziToast.css')}}">
	@yield('css')
</head>

<body class="text-left">
	@guest
	<div class="app-admin-wrap">
		@else
		<div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
			<!-- ====================== -->
            <!--      Side bar menu     -->
            <!-- ====================== -->
            @role('super-admin')
            @include('Superadmin.sidebar.sidebar')
            @endrole
            @role('admin')
            @include('Admin.sidebar.sidebar')
            @endrole
            @role('pemuda')
            @include('Pemuda.sidebar.sidebar')
            @endrole
            @role('bendahara')
            @include('Bendahara.sidebar.sidebar')
            @endrole
            @role('sekertaris')
            @include('Sekertaris.sidebar.sidebar')
            @endrole
            @role('user')
            @include('User.sidebar.sidebar')
            @endrole
            @role('admin-wifi')
            @include('Wifi.sidebar.sidebar')
            @endrole
            @role('wifi')
            @include('Wifi.sidebar.sidebar')
            @endrole
            @endguest
            <!-- ====================== -->
            <!--      Side bar menu     -->
            <!-- ====================== -->
			<div class="switch-overlay" style="display:none"></div>
			<div class="main-content-wrap mobile-menu-content bg-off-white m-0">
                <!-- ====================== -->
                <!--      Header menu       -->
                <!-- ====================== -->
				@auth
                @role('super-admin')
                @include('Superadmin.header.header')
                @endrole
                @role('admin')
                @include('Admin.header.header')
                @endrole
                @role('pemuda')
                @include('Pemuda.header.header')
                @endrole
                @role('bendahara')
                @include('Bendahara.header.header')
                @endrole
                @role('sekertaris')
                @include('Sekertaris.header.header')
                @endrole
                @role('user')
                @include('User.header.header')
                @endrole
                @role('admin-wifi')
                @include('Wifi.header.header')
                @endrole
                @role('wifi')
                @include('Wifi.header.header')
                @endrole
                @endauth
                <!-- ====================== -->
                <!--      Header menu       -->
                <!-- ====================== -->
				<!-- ============ Body content start ============= -->
				<div class="main-content pt-4">
					@yield('breadcrumb')
					@yield('content')
				</div>
				<div class="sidebar-overlay open"></div><!-- Footer Start -->
				@include('layouts.footer')
                <!-- fotter end -->
			</div>
			</div>
		</div>
		<script src="{{ asset('theme/js/plugins/jquery-3.3.1.min.js')}}"></script>
		<script src="{{ asset('theme/js/plugins/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('theme/js/plugins/perfect-scrollbar.min.js')}}"></script>
		<script src="{{ asset('theme/js/scripts/tooltip.script.min.js')}}"></script>
		<script src="{{ asset('theme/js/scripts/script.min.js')}}"></script>
		<script src="{{ asset('theme/js/scripts/script_2.min.js')}}"></script>
		<script src="{{ asset('theme/js/scripts/sidebar.large.script.min.js')}}"></script>
		<script src="{{ asset('theme/js/plugins/feather.min.js')}}"></script>
		<script src="{{ asset('theme/js/plugins/metisMenu.min.js')}}"></script>
        <script src="{{ asset('theme/js/scripts/layout-sidebar-vertical.min.js')}}"></script>
        <script src="{{ asset('theme/js/plugins/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('theme/js/plugins/sweetalert2.script.min.js') }}"></script>
        <script src="{{ asset('theme/js/plugins/toastr.min.js') }}"></script>
        <script src="{{ asset('theme/js/script/toastr.script.min.js') }}"></script>
        <script src="{{ asset('theme/js/main.js') }}"></script>
        <script src="{{ asset('js/iziToast.js')}}"></script>
        <script src="{{ asset('js/iziToast.min.js')}}"></script>
		@yield('js')

		<script>
			$('.switch-overlay').on('click', function() {
				$(this).hide();
			});
			$(document).on('click', '.menu-toggle', function() {
				$('.switch-overlay').show();
			});
		</script>
</body>

</html>

