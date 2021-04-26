@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Pembayaran</h1>
        <ul>
            <li><a href="">Apps</a></li>
            <li>pembayaran</li>
        </ul>
    </div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')

<div class="row">
    @if ($data->isempty())
        <h5 class="m-5" style="color: red">Belum ada riwayat pembayaran</h5>
    @else
        @foreach ($data as $item)
            <div class="col-lg-4 col-xl-4 mt-3">
                <div class="card"><img class="d-block w-100 rounded rounded" src="{{ asset('assets/images/head.png')}}" alt="First slide" />
                    <div class="card-body">
                        
                        <h5 class="card-title mb-2" style="color : green">Iuran bulan {{$item->created_at->isoFormat('MMMM')}} Telah dibayarkan</h5>
                        <p class="card-text text-mute" style="color : rgb(34, 34, 34)">Tanggal Pembayaran  : {{$item->created_at->isoFormat('D MMMM Y')}} </p>
                        <p class="card-text text-mute" style="color : rgb(34, 34, 34)">Nominal  : Rp {{$detail}}.000,-  </p>
                        <p class="card-text text-mute" style="color : rgb(34, 34, 34)">Penerima : {{$item->name}}</p>
                        {{-- <button class="btn btn-success ul-btn-raised--v2 m-1">LUNAS</button> --}}
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection