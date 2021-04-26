@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
        <h1>Edit</h1>
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
        @role('super-admin')
        <form  action="{{ route('super.update-note','' .$notes->id )}}" method="post" enctype="multipart/form-data">
        @endrole  
        @role('admin')
        <form  action="{{ route('admin.update-note','' .$notes->id )}}" method="post" enctype="multipart/form-data">
        @endrole  
        @method('patch')
            @csrf
                <div class="col-md-12 mb-3">
                    <label for="validationCustom01">Judul Pertemuan/Kegiatan</label>
                    <input class="form-control" id="validationCustom01" name="judul_pertemuan" value="{{$notes->judul_pertemuan}}" type="text" placeholder="Judul Kegiatan"  required="required" />
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
                            <option value="{{$notes->kas_keluar}}">Rp {{$notes->kas_keluar}},-</option>
                            @foreach ($kaskeluar as $item)
                            <option value="{{$item->jumlah_dana}}">{{ $item->judul_kegiatan}}  Rp {{$item->jumlah_dana}},-</option>
                            @endforeach
                            
                        </select>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom02">Note</label>
                    <section id="editor">
                        <textarea id="edit" name="note">{{$notes->note}}</textarea>
                    </section>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="file">File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file" required="required">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                

                <div class="col-md-12 mb-3 text-right">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
    </div>
</div>

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