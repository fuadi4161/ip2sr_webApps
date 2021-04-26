@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Keuangan</h1>
        <ul>
            <li><a href="">Pemuda</a></li>
            <li> Manajement kas</li>
        </ul>
    </div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-12 col-xl-3 mb-2">
        <!-- start::widget tasks-->
        <div class="card">
            <div class="card-body">
                <div class="ul-widget-notification">
                    <div class="ul-widget-notification-item-div"><a class="ul-widget-notification-item" href="#" data-toggle="modal" data-target=".form-modal-kas1">
                            <div class="ul-widget-notification-item-icon" style="color:red"><i class="i-Folder-Download"></i></div>
                            <div class="ul-widget-notification-item-details">
                                <div class="ul-widget-notification-item-title">Buat Laporan Kas Keluar</div>
                                <div class="ul-widget-notification-item-time"></div>
                            </div>
                        </a>
                    </div>
                    <div class="ul-widget-notification-item-div"><a class="ul-widget-notification-item" href="#" data-toggle="modal" data-target=".form-modal-kas2">
                            <div class="ul-widget-notification-item-icon" style="color:green"><i class="i-Folder-Download"></i></div>
                            <div class="ul-widget-notification-item-details">
                                <div class="ul-widget-notification-item-title">Buat Laporan Kas Masuk</div>
                                <div class="ul-widget-notification-item-time"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::widget tasks-->
        
    </div>
    <div class="col-xl-4 col-md-12 mb-4">
        <!-- start::widget tasks-->
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head v-margin pb-20">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">History Kas Keluar</h3>
                    </div>
                    
                </div>
                <div class="ul-widget__body">
                    <div class="ul-widget3">
                        @foreach($kaskeluar as $item)
                        <div class="ul-widget3-item">
                            <div class="ul-widget3-header">
                                <div class="ul-widget3-img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                                <div class="ul-widget3-info">
                                <a class="__g-widget-username" href="#"><span class="t-font-bolder">{{$item->judul_kegiatan}}</span></a>
                                <br>
                                <span class="ul-widget-notification-item-time">{{$item->created_at->format('d/m/Y')}} 2 hrs ago</span>
                            </div>
                            <span class="ul-widget3-status text-success t-font-bolder">Terbaru</span>
                            </div>
                            <div class="ul-widget3-body">
                                <p class="ul-widget3-text text-mute">
                                    @foreach( $item->barang as $barang)
                                    <div class="row p-1">
                                    <div class="col-md">{{$barang->item}} {{$barang->qty}}</div>
                                    <div class="col-md">Rp.{{$barang->harga}},-</div>
                                    </div>
                                    @endforeach
                                    <div class="row p-1">
                                    <div class="col-md"><strong>Total :</strong></div>
                                    <div class="col-md"><strong>Rp {{$item->jumlah_dana}},-</strong></div>
                                    </div>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end::widget tasks-->
    </div>
    <div class="col-xl-4 col-md-12 mb-4">
        <!-- start::widget tasks-->
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head v-margin pb-20">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">History Kas Masuk</h3>
                    </div>
                    
                </div>
                <div class="ul-widget__body">
                    <div class="ul-widget3">
                        @foreach($kasmasuk as $masuk)
                        <div class="ul-widget3-item">
                            <div class="ul-widget3-header">
                                <div class="ul-widget3-img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                                <div class="ul-widget3-info">
                                <a class="__g-widget-username" href="#"><span class="t-font-bolder">{{$masuk->deskripsi}}</span></a>
                                <br>
                                <span class="ul-widget-notification-item-time">{{$masuk->created_at->format('d/m/Y')}} 2 hrs ago</span>
                            </div>
                            <span class="ul-widget3-status text-success t-font-bolder">Terbaru</span>
                            </div>
                            <div class="ul-widget3-body">
                                <p class="ul-widget3-text text-mute">
                                    <div class="row p-1">
                                    <div class="col-md">{{$masuk->sumber}}</div>
                                    <div class="col-md">Rp.{{$masuk->nominal}},-</div>
                                    </div>
                                    <div class="row p-1">
                                    <div class="col-md"><strong>Total :</strong></div>
                                    <div class="col-md"><strong>Rp {{$masuk->nominal}} ,-</strong></div>
                                    </div>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end::widget tasks-->
    </div>
</div>

<!-- ======================= -->
<!-- SESION MODAL MULTIINPUT -->
<!-- ======================= -->

<!--  Large Modal kas keluar -->
<div class="modal fade bd-example-modal-lg form-modal-kas1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Laporan kas Keluar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div id="task-manager-list">
                    <!--  content area -->
                    <div class="content">
                        <!--  task manager table -->
                        <div class="card" id="card">
                            <form action="{{ route('super.keuangan-pemuda-out')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body" id="card-body">
                                    <div class="search ul-task-manager__search-inline">
                                        <nav class="navbar">
                                            <p>Judul kegiatan</p>
                                            <input class="form-control mr-sm-2" id="filterInput" name="judul_kegiatan" type="text" placeholder="inputkan judul kegiatan">
                                            <input name="author_id" type="hidden" value="{{Auth::user()->id}}">
                                        </nav>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered custom-sm-width" id="names">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Harga/pcs</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Harga total</th>
                                                    <th scope="col"><a href="#" class="addRow" style="color: green"><i class="i-Add"></i></a></th>
                                                </tr>
                                            </thead>
                                            <tbody id="names">
                                                <!-- --------------------------- tr1 -------------------------------------------->
                                                
                                                <tr id="names">
                                                    <td><input type="text" name="item[]" class="form-control" required=""></td> 
                                                    <td><input type="text" name="harga[]" class="form-control budget"></td>
                                                    <td><input type="text" name="qty[]" class="form-control quantity" required=""></td>
                                                    <td><input type="text" name="total[]" class="form-control amount"></td>
                                                    <td><a href="#" style="color:red" class="remove"><i class="i-Close-Window"></i></a></td>
                                                </tr>
                                                <!-- ------------------------------ end of tr1 -------------------------------------->
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td style="border: none"></td>
                                                <td style="border: none"><input type="hidden" name="jumlah_dana" class="jumlah"></td>
                                                <td style="border: none">Total</td>
                                                <td style="border: none">: Rp <b name="jumlah_dana" class="total"></b></td>
                                            </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <div class="row align-items-center">
                                        <div class="col-8">

                                        </div>
                                        <div class="col text-right">
                                        <button class="btn btn-success" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--  end of task manager table -->
                    </div>
                    <!--  end of content area -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Large Modal kas Masuk -->
<div class="modal fade bd-example-modal-lg form-modal-kas2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Laporan kas Masuk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('super.keuangan-pemuda-in')}}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="ul-form__label" for="inputEmail4">Deskripsi:</label>
                            <input class="form-control" id="inputtext4" name="deskripsi" type="text" placeholder="Enter deskripsi"><small class="ul-form__text form-text" style="color:red" >Deskripsi wajib di isi !</small>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="ul-form__label" for="inputEmail4">Nominal Dana masuk:</label>
                            <input class="form-control" id="inputtext4" name="nominal" type="number" placeholder="10000000"><small class="ul-form__text form-text" style="color:red" >Nominal wajib diisi !</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="ul-form__label" for="inputEmail5">Sumber Dana:</label>
                            <div class="ul-form__radio-inline">
                                <label class="ul-radio__position radio radio-warning form-check-inline">
                                    <input type="radio" name="sumber" value="donatur"><span class="ul-form__radio-font">Donatur</span><span class="checkmark"></span>
                                </label>
                                <label class="ul-radio__position radio radio-success">
                                    <input type="radio" name="sumber" value="iuran"><span class="ul-form__radio-font">Iuran</span><span class="checkmark"></span>
                                </label>
                                <label class="ul-radio__position radio radio-danger ml-2">
                                    <input type="radio" name="sumber" value="lain-lain"><span class="ul-form__radio-font">Lain-lain</span><span class="checkmark"></span>
                                </label>
                            </div><small class="ul-form__text form-text" style="color:red">
                                Wajib diisi !
                            </small>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="mc-footer">
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-primary m-1" type="submit">Submit</button>
                                <button class="btn btn-outline-secondary m-1" type="button">Cancel</button>
                                <button class="btn btn-danger m-1 footer-delete-right" type="button">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

    <script type="text/javascript">

        $('tbody').delegate('.quantity,.budget','keyup',function(){
            var tr=$(this).parent().parent();
            var budget=tr.find('.budget').val();
            var quantity=tr.find('.quantity').val();
            var amount=(quantity*budget);
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
        
        }
        $('.addRow').on('click',function(){
            addRow();
        });
        function addRow()
        {
            var tr='<tr>'+
            '<td><input type="text" name="item[]" class="form-control" required=""></td>'+
            '<td><input type="text" name="harga[]" class="form-control budget"></td>'+
            '<td><input type="text" name="qty[]" class="form-control quantity" required=""></td>'+
            ' <td><input type="text" name="total[]" class="form-control amount"></td>'+
            '<td><a href="#" style="color:red" class="remove"><i class="i-Close-Window"></i></a></td>'+
            '</tr>';
            $('tbody').append(tr);
        };

        $('.remove').live('click',function(){
            var last=$('tbody tr').length;
            if(last==1){
                iziToast.show({
                theme: 'dark',
                icon: 'icon-person',
                title: 'Hey',
                message: 'Anda tidak boleh menghapus baris terakhir!!',
                position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: 'rgb(0, 255, 184)',
                buttons: [
                    ['<button>Ok</button>', function (instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOutUp',
                            onClosing: function(instance, toast, closedBy){
                                console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                            }
                        }, toast, 'buttonName');
                    }, true], // true to focus
                    
                ],
                onOpening: function(instance, toast){  
                    console.info('callback abriu!');
                },
                onClosing: function(instance, toast, closedBy){
                    console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
                }
            });
            }
            else{
                $(this).parent().parent().remove();
            }
        
        });
    </script>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/iziToast.css')}}">
@endsection

@section('js')
    <script src="{{asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/contact-list-table.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/datatables.script.min.js')}}"></script>
	<script src="{{asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/tooltip.script.min.js')}}"></script>
    <script src="{{asset('js/iziToast.js')}}"></script>
    <script src="{{asset('js/iziToast.min.js')}}"></script>


        <script>
		@if(Session::has('success'))

			iziToast.success({
				title: 'OK',
				message: '{{ session('success') }}',
				position: 'topRight',
				transitionIn: 'fadeInUp',
			});
		@endif	
	</script>
@endsection