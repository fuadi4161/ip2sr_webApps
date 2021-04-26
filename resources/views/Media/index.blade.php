@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Manajement Media</h1>
        <ul>
            <li><a href="">Apps</a></li>
            <li>Media</li>
        </ul>
    </div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')

<div class="col-lg-4 col-xl-4 mt-3">
    <div class="card">
        <div class="card-body">
            <h5 class="ul-widget-card__title">Event</h5>
            <p class="card-text text-mute">Mengubah tampilan event pada landing page.</p>
            <img class="d-block w-100 rounded" src="{{ asset('theme/images/products/headphone-1.jpg')}}" alt="Second slide" />
            <div class="ul-widget-card__rate-icon --version-2"><span><a href=""><i class="i-Like text-success"></i></a> 576</span><span><a href=""><i class="i-Speach-Bubble-3 text-primary"></i></a> 350</span><span><a href=""><i class="i-Heart1 text-danger"></i></a> 255</span></div>
        </div>
    </div>
</div>

@endsection