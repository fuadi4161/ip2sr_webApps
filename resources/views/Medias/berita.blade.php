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
                        <div class="card">
                            <div class="card-body">
                                <div class="pr-3 pb-3"><i class="todo-sidebar-close i-Close pb-3 text-right" data-sidebar-toggle="main"></i>
                                    <!-- Large modal-->
                                    <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add Berita</button>
                                    <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add Card Payment</button>
                                    <button class="btn btn-primary btn-block mb-4" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add Event</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <form id="addUser" action="">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content p-3">
                                    <div class="card-title" id="todo-list-validate">Add Task</div>
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
                    <div class="ul-todo-content-right">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Table Berita</h4>
                                        
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

{{-- @section('js')
<script src="{{ asset('theme/js/plugins/datatables.min.js')}}"></script>
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
    <script src="{{ asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{ asset('theme/js/scripts/datatables.script.min.js')}}"></script>
    <script src="{{ asset('theme/js/scripts/customizer.script.min.js')}}"></script>
@endsection --}}