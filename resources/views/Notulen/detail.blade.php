@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Detail</h1>
        <ul>
            <li><a href="">Apps</a></li>
            <li>Notes</li>
        </ul>
    </div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <h6 style="opacity: 0.7">Judul Pertemuan</h6>
        <h5 class="card-title">{{ $notes->judul_pertemuan}}</h5>
        <h6 style="opacity: 0.7">Catatan</h6>
        <p class="card-text">Dana yang dikeluarkan untuk pertemuan ini Rp {{$notes->kas_keluar}},-</p>
        <p class="card-text">{!! $notes->note !!}</p>
        <iframe width="100%" height="1000px" src="{{ asset ('file/dokumen/'. $notes->document)}}"></iframe>
    </div>
</div>
@endsection