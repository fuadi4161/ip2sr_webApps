@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
    <h1>Todo List</h1>
    <ul>
        <li><a href="">UI Kits</a></li>
        <li>Todo List</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
                <!-- content goes here-->
                <section class="ul-todo-list-content">
                    <div class="ul-todo-sidebar">
                        <div class="row">
                            <div class="col mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pr-3 pb-3"><i class="todo-sidebar-close i-Close pb-3 text-right" data-sidebar-toggle="main"></i>
                                            <!-- Large modal-->
                                            <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg11">Add Berita</button>
                                            <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg12">Add Card Payment</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pr-3 pb-3"><i class="todo-sidebar-close i-Close pb-3 text-right" data-sidebar-toggle="main"></i>
                                            <!-- Large modal-->
                                            <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg13">Add Event</button>
                                            <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg16">Add Event detail</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pr-3 pb-3"><i class="todo-sidebar-close i-Close pb-3 text-right" data-sidebar-toggle="main"></i>
                                            <!-- Large modal-->
                                            <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg14">Add Moto</button>
                                            <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg15">Add gallery</button>
                                            {{-- <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add Event</button> --}}
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    {{-- sessions Modal --}}
                    <div class="modal fade bd-example-modal-lg11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="{{route('super.addberita')}}" method="POST" enctype="multipart/form-data">
                            {{-- @method('PATCH') --}}
                            @csrf
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add Berita</div>
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="judul" aria-describedby="Add Judul berita....." placeholder="Add Judul berita....." />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" name="deskripsi" placeholder="Add Description...." rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="link" aria-describedby="Add link..... (opsional)" placeholder="Add link..... (opsional)" />
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile01" type="file" name="file" aria-describedby="inputGroupFileAddon01" />
                                                <label class="custom-file-label file-name" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="images" aria-describedby="Add background link..... (opsional)" placeholder="Add background link..... (opsional)" />
                                        </div>
                                        <script>
                                            const fileName = document.querySelector(".file-name");
                                            const defaultBtn = document.querySelector("#inputGroupFile01");
                                            const customBtn = document.querySelector("#custom-btn");
                                            const img = document.querySelector("#image");
                                            let regEXP = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
                                            // function defaultBtnActive(){
                                            //   defaultBtn.click();
                                            // }
                                            defaultBtn.addEventListener("change", function(){
                                              const file = this.files[0];
                                                if(file){
                                                  const reader = new FileReader();
                                                  reader.onload = function(){
                                                    const result = reader.result;
                                                    img.src = result;
                                                  }

                                                  reader.readAsDataURL(file);
                                                }
                                                if(this.value){
                                                  let valueStore = this.value.match(regEXP);
                                                  fileName.textContent = valueStore;
                                                }
                                            });

                                        </script>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade bd-example-modal-lg12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add Card payment</div>
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="title" aria-describedby="emailHelp" placeholder="Write your new task name" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" name="description" placeholder="Add Description...." rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="developer" name="developer">
                                                <option value="0">Select Developer</option>
                                                <option value="1">Jack</option>
                                                <option value="2">Jones</option>
                                                <option value="3">Smith</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade bd-example-modal-lg13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add Event</div>
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="title" aria-describedby="emailHelp" placeholder="Write your new task name" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" name="description" placeholder="Add Description...." rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="developer" name="developer">
                                                <option value="0">Select Developer</option>
                                                <option value="1">Jack</option>
                                                <option value="2">Jones</option>
                                                <option value="3">Smith</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade bd-example-modal-lg14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add Moto</div>
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="title" aria-describedby="emailHelp" placeholder="Write your new task name" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" name="description" placeholder="Add Description...." rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="developer" name="developer">
                                                <option value="0">Select Developer</option>
                                                <option value="1">Jack</option>
                                                <option value="2">Jones</option>
                                                <option value="3">Smith</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade bd-example-modal-lg15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="{{route('super.addgalery')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add gallery</div>
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="caption" aria-describedby="emailHelp" placeholder="Write your new task name" />
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile03" type="file" name="file" aria-describedby="inputGroupFileAddon01" />
                                                <label class="custom-file-label file-names" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade bd-example-modal-lg16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add Events detail</div>
                                    <div>
                                        <div class="form-group">
                                            <input class="form-control mb-3" id="title" type="text" name="title" aria-describedby="emailHelp" placeholder="Write your new task name" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" name="description" placeholder="Add Description...." rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="developer" name="developer">
                                                <option value="0">Select Developer</option>
                                                <option value="1">Jack</option>
                                                <option value="2">Jones</option>
                                                <option value="3">Smith</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- end Modals --}}
                    <div class="ul-todo-content-right">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Table Berita</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Judul</th>
                                                        <th scope="col">Diskripsi</th>
                                                        <th scope="col">Images</th>
                                                        <th scope="col">Link</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($berita as $beritas)
                                                    <tr>
                                                        <th scope="row">{{$beritas->id}}</th>
                                                        <td>{{$beritas->judul}}</td>
                                                        <td><textarea class="form-control" style="width: 300px" id="description" name="description" placeholder="Add Description...." rows="3">{{$beritas->deskripsi}}</textarea></td>
                                                        
                                                        <td><img class=" " src="{{$beritas->images}}" alt="" /></td>
                                                        <td>{{$beritas->link}}</td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <a href="{{route('super.deleteberita',''.$beritas->id)}}"><button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Table Card Payment</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Smith Doe</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                                        <td>Smith@gmail.com</td>
                                                        <td><span class="badge badge-success">Active</span></td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                                        <td>Jhon@gmail.com</td>
                                                        <td><span class="badge badge-info">Pending</span></td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Alex</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                                        <td>Otto@gmail.com</td>
                                                        <td><span class="badge badge-warning">Not Active</span></td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Table gallery</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Caption</th>
                                                        <th scope="col">foto</th>
                                                        <th scope="col">url</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($galery as $item)
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>{{$item->caption}}</td>
                                                        <td><img style="width: 200px" src="{{asset('assets/images/news/'.$item->foto)}}" alt="" /></td>
                                                        <td>{{$item->url}}</td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <a href="{{ route('super.deletegalery',''.$item->id)}}"><button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Event front end</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Avatar</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Smith Doe</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                                        <td>Smith@gmail.com</td>
                                                        <td><span class="badge badge-success">Active</span></td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                                        <td>Jhon@gmail.com</td>
                                                        <td><span class="badge badge-info">Pending</span></td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Alex</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt="" /></td>
                                                        <td>Otto@gmail.com</td>
                                                        <td><span class="badge badge-warning">Not Active</span></td>
                                                        <td>
                                                            <button class="btn btn-success" type="button"><i class="nav-icon i-Pen-2"></i></button>
                                                            <button class="btn btn-danger" type="button"><i class="nav-icon i-Close-Window"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </section>

@endsection


@section('css')
<link rel="stylesheet" href="{{ asset('css/iziToast.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/iziToast.css')}}">
@endsection




@section('js')
<script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/iziToast.js')}}"></script>
<script src="{{ asset('js/iziToast.min.js')}}"></script>
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