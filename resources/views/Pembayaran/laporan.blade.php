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
<div class="row">
    <div class="col-lg-6 mb-2">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Pembayaran yang di inputkan</h4>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="scroll_vertical_dynamic_height_table harga" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>internet</th>
                                <th>Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($data as $item)
                                @if ($item->author_id == Auth::user()->id)
                                    @if ($item->cek == $cekdate)    
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->kecepatan}}</td></td>
                                            <td id="harga">{{$item->harga}}.000,-</td>
                                            <td class="amount"> 
                                            @if ($item->status == false)
                                                <a href="{{ route('admin-wifi.accpayment',[''.$item->id,''.$item->user_id])}}"><button class="btn btn-success" type="button">Accept</button></a>
                                            @else
                                            Lunas
                                            @endif
                                        </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Total:</th>
                                <th id="hasil"> Rp{{$harga_total}}.000,-</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-2">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Data pembayaran bulan ini</h4>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="alternative_pagination_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>internet</th>
                                <th>Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                @if ($item->cek == $cekdate)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->kecepatan}}</td></td>
                                    <td class="harga">{{$item->harga}}.000,-</td>
                                    <td>Lunas</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script>
    var table = document.getElementById("harga"), sumHsl = 0;
    for(var t = 1; t < table.rows.length; t++)
    {
        sumHsl = sumHsl + parseInt(table.rows[t].cells[3].innerHTML);
    }
    document.getElementById("hasil").innerHTML = sumHsl;
    
</script>
{{-- <script>
    $('tbody').delegate('.quantity,.budget','keyup',function(){
            var tr=$(this).parent().parent();
            var harga=tr.find('.harga').val();
            var quantity= 1;
            var amount=(quantity*harga);
            tr.find('.amount').val(amount);
            total();
        });
        function total(){
            var total=0;
            $('.amount').each(function(i,e){
                var amount=$(this).val()-0;
            total +=amount;
        });

        $('.total').html(total+",-");   
        $('.jumlah').val(total);  
    });
</script> --}}
@endsection