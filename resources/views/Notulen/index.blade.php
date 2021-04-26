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
    <!-- content goes here-->
    <section class="widget-card">
        <div class="row">
            <div class="col-lg-8 col-xl-8 mt-3">
                <div class="form-group ul-form-group d-flex align-items-center">
                        <input class="form-control ul-form-input" width="100%" type="text" placeholder="Masukkan judul kegiatan....." />
                        <a class="ml-2"><button class="btn btn-primary" type="button">Search</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 mt-3">
                <button class="btn btn-light btn-icon" type="button" data-toggle="modal" data-target=".bd-example-modal-lg-note">
                    <span class="ul-btn__icon"><i class="i-Add-File"></i></span><span class="ul-btn__text"> Add Note</span>
                </button>
            </div>
            
            @foreach ($notes as $note)
            <div class="col-lg-3 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body"><a href="{{ route('super.detail-note','' .$note->id ) }}"><img class="d-block w-100 rounded" src="{{ asset('theme/images/products/notes-3.png')}}" alt="Second slide"></a>
                        <a href="{{ route('super.detail-note','' .$note->id ) }}">
                            <h5 class="card-title mt-4 mb-2">{{$note->judul_pertemuan}}</h5>
                        </a>
                        <p class="card-text text-mute">{!!$note->note!!}</p>
                        <div class="col-md-12 text-right tex p-0">
                            <a class="ul-link-action text-success"  width="15px" href="{{ route('super.edit-note','' .$note->id ) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="i-Edit"></i></a>
                            <a class="ul-link-action text-danger mr-1" href="{{ route('super.hapus-note', ''.$note->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Want To Delete !!!"><i class="i-Eraser-2"></i></a>
                        </div>
                        <div class="ul-widget-card__info"><span>
                                <p class="text-mute">Dana Pertemuan</p>
                                <p>Rp{{$note->kas_keluar}},-</p>
                            </span><span>
                                <p class="text-mute m-0">Tanggal</p>
                                <p>{{$note->created_at->format('d/m/Y')}}</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section><!-- end of main-content -->

    <div class="modal fade bd-example-modal-lg-note" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Notulen</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    @role('super-admin')
                    <form  action="{{ route('super.add-note')}}" method="POST" enctype="multipart/form-data">
                    @endrole  
                    @role('admin')
                    <form  action="{{ route('admin.add-note')}}" method="POST" enctype="multipart/form-data">
                    @endrole  
                        @csrf
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Judul Pertemuan/Kegiatan</label>
                                <input class="form-control" id="validationCustom01" name="judul_pertemuan" type="text" placeholder="Judul Kegiatan"  required="required" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    wajib diisi!
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="picker1">Pilih pengeluaran kas</label>
                                    <select class="form-control form-control-rounded" name="kas_keluar">
                                        @foreach ($kaskeluar as $item)
                                        <option value="{{$item->jumlah_dana}}">{{ $item->judul_kegiatan}}  Rp {{$item->jumlah_dana}},-</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="validationCustom02">Note</label>
                                <section id="editor">
                                    <textarea id="edit" name="note"></textarea>
                                  </section>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group ml-3">
                                    <label for="file">File</label>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 text-right">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ========================= --}}
    {{-- SECTION JAVASCRIP ADD ROW --}}
    {{-- ========================= --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

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

@section('js')
<script src="{{ asset('theme/js/scripts/form.validation.script.min.js')}}"></script>
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="{{ asset ('editor/js/froala_editor.min.js')}}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/align.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/code_beautifier.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/code_view.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/colors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/draggable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/emoticons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/font_size.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/font_family.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/image.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/file.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/image_manager.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/line_breaker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/link.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/lists.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/paragraph_format.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/paragraph_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/table.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/url.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/entities.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/char_counter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/inline_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/save.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/fullscreen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/quick_insert.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('editor/js/plugins/quote.min.js') }}"></script>

<script>
    (function () {
    new FroalaEditor("#edit", {
        theme: 'dark'
    })
    })()

</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset ('editor/css/froala_editor.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/froala_style.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/code_view.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/colors.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/emoticons.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/image_manager.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/image.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/line_breaker.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/table.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/char_counter.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/video.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/fullscreen.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/quick_insert.css')}}">
<link rel="stylesheet" href="{{ asset ('editor/css/plugins/file.css')}}">

<link rel="stylesheet" href="{{ asset ('editor/css/themes/dark.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
@endsection