@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="">Pages</a></li>
        <li>User Profile</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
@if ($profile->isempty())
    <h5 style="color: red">Lengkapi Profile anda untuk menampilkan halaman Dashboard .. </h5><button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">-> Lanjutkan..</button>
@else
    <section class="ul-contact-detail">
        <div class="row">
            <div class="col-md-12">
                        <div class="alert alert-card alert-warning text-center" role="alert">Untuk download Aplikasi klick tombol download! ->>
                            <a href="https://drive.google.com/drive/folders/1SLcKTkhA25NaQgxVu6uYX1FC_B9O4UxY?usp=sharing"><button class="btn btn-rounded btn-warning ml-3">Download</button></a>
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
            <div class="col-lg-4 col-xl-4">
                @foreach ($user as $profil)
                    <div class="card bg-dark text-white o-hidden mb-2 "><img style="height: 210px" class="card-img" src="{{asset('assets/images/Card.png')}}" alt="Card image">
                        <div class="card-img-overlay">
                            @foreach ($inet as $net)
                            
                            <h5 class="card-title  text-center text-white">Iuran Bulan {{$bulan}}</h5>
                            @if ($author->isempty())
                    
                            @else
                                @if ($profil->status == true)
                                <p class="text-white text-center">Dibayarkan ke {{$detail}} - {{$profil->updated_at->isoFormat('dddd, D MMMM Y')}}</p>
                                @endif
                            @endif
                            <p class="text-white text-center">Rp {{$net->harga}}.000,- ( {{$net->kecepatan}} )</p>
                            @endforeach
                            @if ($payment == null)
                            <p class="text-center"><button  class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalCenter">Bayar</button></p>
                            @else
                                @foreach ($payments as $pay)
                                    @if ($pay->status == true)
                                    <p class="text-center"><button  class="btn btn-success" type="button">Lunas</button></p>
                                    @elseif($pay->status == false)
                                    <p class="text-center"><button  class="btn btn-warning" type="button">Mengunggu Konfirmasi</button></p>
                                    @endif
                                @endforeach
                            @endif
                            <p class="text-center">Iuran min tanggal 5 , melebihi tanggal tersebut bandwidth kami kurangi 50%</p>
                            <p class="text-center">Max tanggal 10 melebihi tanggal tersebut wifi OFF</p>
                        </div>
                    </div>
                @endforeach

                <div class="card user-profile o-hidden mb-4">
                    <div class="header-cover" style="background-image: url({{ asset('theme/images/photo-wide-4.jpg')}})"></div>
                    @if( Auth::user()->profile_photo == null)
                    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/default.png')}}" alt="" />
                    @else
                    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="" />
                    @endif

                    @if( $profile->isempty())

                    <p class="m-0 text-24">....</p>
        
                    <p class="text-muted m-0">  -= {{ Auth::user()->name}} =-</p>
                    <p class="text-muted m-0">....</p>
                    @else
                        @foreach ($profile as $profil)
                            
                        <p class="m-0 text-24">{{ $profil->nama}}</p>
                        @endforeach
        
                    <p class="text-muted m-0">  -= {{ Auth::user()->name}} =-</p>
                    <p class="text-muted m-0">{{ $profil->deskripsi}}</p>
                    @endif
                    </div>

                    
                    @if( $profile == '[]')
                    <div class="card-body">
                        <div class="ul-contact-detail__info">
                            <div class="row">
                                
                                <div class="col-6 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Email</h5><span>{{ Auth::user()->email}}</span>
                                    </div>
                                    <div class="ul-contact-detail__info-1">
                                        <h5>jenkel</h5><span>...</span>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Tanggal Lahir</h5><span>...</span>
                                    </div>
                                    <div class="ul-contact-detail__info-1">
                                        <h5>kontak</h5><span>...</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Alamat</h5><span>...</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="ul-contact-detail__social">
                                        <div class="ul-contact-detail__social-1">
                                            <button class="btn btn-facebook btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Facebook-2"></i></span></button><span class="t-font-boldest ul-contact-detail__followers"></span>
                                        </div>
                                        <div class="ul-contact-detail__social-1">
                                            <button class="btn btn-twitter btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Twitter"></i></span></button><span class="t-font-boldest ul-contact-detail__followers"></span>
                                        </div>
                                        <div class="ul-contact-detail__social-1">
                                            <button class="btn btn-dribble btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Dribble"></i></span></button><span class="t-font-boldest ul-contact-detail__followers"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card-body">
                        <div class="ul-contact-detail__info">
                            @foreach ($profile as $item)
                                
                            <div class="row">
                                <div class="col-6 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Email</h5><span>{{ Auth::user()->email}}</span>
                                    </div>
                                    <div class="ul-contact-detail__info-1">
                                        <h5>jenkel</h5><span>{{ $item->jenkel}}</span>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Tanggal Lahir</h5><span>{{ $item->tanggal_lahir}}</span>
                                    </div>
                                    <div class="ul-contact-detail__info-1">
                                        <h5>kontak</h5><span>{{ $item->kontak}}</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Alamat</h5><span>{{ $item->alamat}}</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="ul-contact-detail__social">
                                        <div class="ul-contact-detail__social-1">
                                            <button class="btn btn-facebook btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Facebook-2"></i></span></button><span class="t-font-boldest ul-contact-detail__followers"></span>
                                        </div>
                                        <div class="ul-contact-detail__social-1">
                                            <button class="btn btn-twitter btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Twitter"></i></span></button><span class="t-font-boldest ul-contact-detail__followers"></span>
                                        </div>
                                        <div class="ul-contact-detail__social-1">
                                            <button class="btn btn-dribble btn-icon m-1" type="button"><span class="ul-btn__icon"><i class="i-Dribble"></i></span></button><span class="t-font-boldest ul-contact-detail__followers"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div><!-- end of main-content -->
            </div>
            <div class="col-lg-8 col-xl-8">
                <!--  begin::basic-tab -->
                <div class="card mb-4">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                {{-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                <a class="nav-item nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos</a> --}}
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Edit Profil</a></div>
                        </nav>
                        <div class="tab-content ul-tab__content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="ul-contact-detail__timeline">
                                    <h6>History Segera Hadir</h6>
                                    {{-- <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="ul-contact-detail__timeline-row">
                                                <div class="row">
                                                    <div class="col-lg-1">
                                                        <div class="ul-contact-detail__left-timeline"> 
                                                            @if( Auth::user()->profile_photo == null)
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/default.png')}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @else
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <div class="ul-contact-detail__right-timeline"><a class="ul-widget4__title d-block" href="href">{{Auth::user()->name}}</a><small class="text-mute">10 minutes</small>
                                                            <p>assign a new task <a href="#">Weblayout</a></p>
                                                            <div class="ul-contact-detail__timeline-image"><img class="d-block" src="{{ asset('theme/images/products/iphone-1.jpg')}}" alt="First slide" /><img class="d-block" src="{{ asset('theme/images/products/iphone-1.jpg')}}" alt="First slide" /><img class="d-block" src="{{ asset('theme/images/products/iphone-1.jpg')}}" alt="First slide" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-contact-detail__timeline-row">
                                                <div class="row">
                                                    <div class="col-lg-1">
                                                        <div class="ul-contact-detail__left-timeline">
                                                            @if( Auth::user()->profile_photo == null)
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/default.png')}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @else
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <div class="ul-contact-detail__right-timeline"><a class="ul-widget4__title d-block" href="href">{{Auth::user()->name}}</a><small class="text-mute">10 minutes</small>
                                                            <div class="ul-contact-detail__timeline-image-2 mt-3"><img class="d-block" src="{{ asset('theme/images/products/iphone-1.jpg')}}" alt="First slide" />
                                                                <div class="ul-contact-detail__timeline-image-info">
                                                                    <p style="width:80%">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
                                                                    <button class="btn btn-primary btn-lg m-1" type="button">Weblayout</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-contact-detail__timeline-row">
                                                <div class="row">
                                                    <div class="col-lg-1">
                                                        <div class="ul-contact-detail__left-timeline">
                                                            @if( Auth::user()->profile_photo == null)
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/default.png')}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @else
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="ul-contact-detail__right-timeline"><a class="ul-widget4__title d-block" href="href">{{Auth::user()->name}}</a><small class="text-mute">10 minutes</small>
                                                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ul-contact-detail__timeline-row">
                                                <div class="row">
                                                    <div class="col-lg-1">
                                                        <div class="ul-contact-detail__left-timeline">
                                                            @if( Auth::user()->profile_photo == null)
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/default.png')}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @else
                                                            <div class="ul-widget3-img"><img class="img-fluid" id="userDropdown" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <div class="ul-contact-detail__right-timeline"><a class="ul-widget4__title d-block" href="href">{{Auth::user()->name}}</a><small class="text-mute">10 minutes</small>
                                                            <p>assign a new task <a href="#">Weblayout</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="ul-contact-dwtail__profile-swcription">
                                            <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <h4 class="card-title mb-3">Skills</h4>
                                        <div class="custom-separator"></div><span>Wordpress</span>
                                        <div class="progress mb-3 mt-2">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                        </div><span>HTML 5</span>
                                        <div class="progress mb-3 mt-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div><span>React.js</span>
                                        <div class="progress mb-3 mt-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div><span>Photoshop</span>
                                        <div class="progress mb-3 mt-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Photo section --}}
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card text-white o-hidden mb-3"><img class="card-img" src="{{ asset('theme/images/products/headphone-1.jpg')}}" alt="" />
                                            <div class="card-img-overlay">
                                                <div class="p-1 text-left card-footer font-weight-light d-flex"><span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>12</span><span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-white o-hidden mb-3"><img class="card-img" src="{{ asset('theme/images/products/headphone-2.jpg')}}" alt="" />
                                            <div class="card-img-overlay">
                                                <div class="p-1 text-left card-footer font-weight-light d-flex"><span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>12</span><span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-white o-hidden mb-3"><img class="card-img" src="{{ asset('theme/images/products/headphone-3.jpg')}}" alt="" />
                                            <div class="card-img-overlay">
                                                <div class="p-1 text-left card-footer font-weight-light d-flex"><span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>12</span><span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-white o-hidden mb-3"><img class="card-img" src="{{ asset('theme/images/products/iphone-1.jpg')}}" alt="" />
                                            <div class="card-img-overlay">
                                                <div class="p-1 text-left card-footer font-weight-light d-flex"><span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>12</span><span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-white o-hidden mb-3"><img class="card-img" src="{{ asset('theme/images/products/iphone-2.jpg')}}" alt="" />
                                            <div class="card-img-overlay">
                                                <div class="p-1 text-left card-footer font-weight-light d-flex"><span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i>12</span><span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card text-white o-hidden mb-3"><img class="card-img" src="{{ asset('theme/images/products/watch-1.jpg')}}" alt="" />
                                            <div class="card-img-overlay">
                                                <div class="p-1 text-left card-footer font-weight-light d-flex"><span class="mr-3 d-flex align-items-center"><i class="i-Speach-Bubble-6 mr-1"></i> 12</span><span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>03.12.2018</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Photho --}}

                            {{-- Section form input profil --}}
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                @role('admin-wifi')
                                <form action="{{ route('admin-wifi.update-profil',''.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                @endrole
                                @role('wifi')
                                <form action="{{ route('wifi.update-profil',''.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                @endrole
                                    @method('PATCH')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 mt--2">
                                            <div class="drop-zone">
                                                  <div class="image">
                                                        @if( Auth::user()->profile_photo == null)
                                                            <img id="image" alt="" src="{{ asset('assets/images/avatars/default.png')}}">
                                                        @else
                                                            <img id="image" alt="" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}">
                                                        @endif
                                                  </div>        
                                            </div>
                                            <input id="default-btn" class="mt-2"  name="file" type="file" >
                                            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                                            <script>
                                                const fileName = document.querySelector(".file-name");
                                                const defaultBtn = document.querySelector("#default-btn");
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
                                        </div>
                                        <div class="col-md-8 mt-2">
                                            <div class="col-md-12 form-group mb-3">
                                                <label for="firstName2">Username</label>
                                            <input class="form-control form-control-rounded" name="name" id="username" type="text" value="{{ Auth::user()->name }}" placeholder="Enter your Username">
                                            </div>
                                            <div class="col-md-12 form-group mb-3">
                                                <label for="firstName2">Email</label>
                                            <input class="form-control form-control-rounded" name="email" id="firstName2" type="email" value="{{ Auth::user()->email }}" placeholder="Enter your Email">
                                            </div>
                                            <div class="col-md-12 form-group mb-3">
                                                <label for="lastName2">Password</label>
                                                <input class="form-control form-control-rounded" name="password" type="password" placeholder="Enter your Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-sm-11">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="heading text-primary">Lengkapi profil anda</h5>
                                        <a class="text-default collapsed" href="#collapse-icon" data-toggle="collapse" aria-expanded="false"><i class="i-Arrow-Down-2 t-font-boldest"></i></a>
                                    </div>
                                    @foreach ($profile as $prof)
                                        <div class="collapse" id="collapse-icon">
                                            <div class="mt-3">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputtext">Nama Lengkap:</label>
                                                            <input class="form-control" id="inputtext" name="namalengkap" type="text" placeholder="Enter full name" value="{{$prof->nama}}" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your full name
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputE">Nomor Hp/Wa:</label>
                                                            <input class="form-control" id="inputEmail1" name="wa" type="number" placeholder="Enter Contact Number" value="{{$prof->kontak}}" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail">Telegram:</label>
                                                            <input class="form-control" id="inputEmail2" name="tele" type="number" placeholder="Enter Contact Number" value="{{$prof->telegram}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="custom-separator"></div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputtext4">Bio:</label>
                                                            <input class="form-control" id="inputtext4" name="bio" type="text" placeholder="Enter contact number " value="{{$prof->deskripsi}}" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your contact
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail5">Tanggal Lahir:</label>
                                                            <div class="input-right-icon">
                                                                <input class="form-control" id="inputEmail5" name="ttl" type="date" placeholder="Fax Number" /><span class="span-right-input-icon"></span>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your Fax
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail6">Alamat:</label>
                                                            <div class="input-right-icon">
                                                                <input class="form-control" id="inputEmail6" name="alamat" type="text" placeholder="Enter your address" value="{{$prof->alamat}}"/><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your address
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="custom-separator"></div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail18">Jenis Kelamin:</label>
                                                            <div class="ul-form__radio-inline">
                                                                @if ($prof->jenkel == 'L')
                                                                <label class="ul-radio__position radio radio-primary form-check-inline">
                                                                    <input type="radio" name="kelamin"  value="L" checked/><span class="ul-form__radio-font" >L</span><span class="checkmark"></span>
                                                                </label>
                                                                <label class="ul-radio__position radio radio-primary">
                                                                    <input type="radio" name="kelamin" value="P" /><span class="ul-form__radio-font">P</span><span class="checkmark"></span>
                                                                </label>
                                                                @else
                                                                <label class="ul-radio__position radio radio-primary form-check-inline">
                                                                    <input type="radio" name="kelamin"  value="L" /><span class="ul-form__radio-font" >L</span><span class="checkmark"></span>
                                                                </label>
                                                                <label class="ul-radio__position radio radio-primary">
                                                                    <input type="radio" name="kelamin" value="P" checked/><span class="ul-form__radio-font">P</span><span class="checkmark"></span>
                                                                </label>
                                                                    
                                                                @endif
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please select user group
                                                            </small>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    
                                        <div class="collapse" id="collapse-icon">
                                            <div class="text-center">
                                                <h5 class="heading text-primary">Media Sosial anda</h5>
                                            </div>
                                            <div class="mt-3">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputtext11">Facebook:</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-transparent"><i>url</i></div>
                                                                </div>
                                                                <input class="form-control" name="fb" id="inlineFormInput" type="text" placeholder="https://www.facebook.com/kunthet.suu/" value="{{$prof->facebook}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail12">Twitter:</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-transparent"><i>url</i></div>
                                                                </div>
                                                                <input class="form-control" name="twit" id="inlineFormInputG" type="text" placeholder="@ Username" value="{{$prof->twitter}}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmai">Instagram:</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-transparent"><i>url</i></div>
                                                                </div>
                                                                <input class="form-control" name="ins" id="inlineFormInputGr" type="text" placeholder="https://www.instagram.com/ip2sr.01/" value="{{$prof->instagram}}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row text-right">
                                                        <div class="col-sm-11">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>
                                                    </div>  
                                                    @endforeach
                                            </div>
                                        </div>
                                    </form>  
                                    {{-- Form untuk simpan semua --}}
                                              
                                </div>
                        </div>
                    </div>
                </div>
                <!--  end::basic-tab -->
            </div>
        </div>
    </section>
    <!--  content goes here -->
@endif

<!--  Large Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Lengkapi Profil</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                @role('wifi')
                <form action="{{ route('wifi.detail-profil',''.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                @endrole
                @role('admin-wifi')
                <form action="{{ route('admin-wifi.detail-profil',''.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                @endrole
                        @method('PATCH')
                        @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputtext11">Nama Lengkap:</label>
                                        <input class="form-control" id="inputtext11" name="namalengkap" type="text" placeholder="Enter full name" required /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                            Please enter your full name
                                        </small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputEmail12">Nomor Hp/Wa:</label>
                                        <input class="form-control" id="inputEmail12" name="wa" type="number" placeholder="Enter Whatsapp Number" required/>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputEmail12">ID chat Telegram:</label>
                                        <input class="form-control" id="inputEmail12" name="tele" type="number" placeholder="Enter Chat ID Telegram" required/>
                                    </div>
                                </div>
                                <div class="custom-separator"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputtext14">Bio:</label>
                                        <input class="form-control" id="inputtext14" name="bio" type="text" placeholder="Enter Bio  " required /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                            Please enter your contact
                                        </small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputEmail15">Tanggal Lahir:</label>
                                        <div class="input-right-icon">
                                            <input class="form-control" id="inputEmail15" name="ttl" type="date" placeholder="Fax Number" required /><span class="span-right-input-icon"></span>
                                        </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                            Please enter your Born
                                        </small>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputEmail16">Alamat:</label>
                                        <div class="input-right-icon">
                                            <input class="form-control" id="inputEmail16" name="alamat" type="text" placeholder="Beteng, Rt01/Rw09" required/><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
                                        </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                            Please enter your address
                                        </small>
                                    </div>
                                </div>
                                <div class="custom-separator"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="ul-form__label" for="inputEmail18">Jenis Kelamin:</label>
                                        <div class="ul-form__radio-inline">
                                            <label class="ul-radio__position radio radio-primary form-check-inline">
                                                <input type="radio" name="kelamin" value="L" required/><span class="ul-form__radio-font">L</span><span class="checkmark"></span>
                                            </label>
                                            <label class="ul-radio__position radio radio-primary">
                                                <input type="radio" name="kelamin" value="P" required/><span class="ul-form__radio-font">P</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-primary ladda-button example-button m-1" data-style="expand-left">
                                <span class="ladda-label">Submit</span><span class="ladda-spinner">
                                    </span><div class="ladda-progress" style="width: 0px;"></div>
                            </button>
                    </form> {{-- Form untuk simpan semua --}}  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle-2">Pilih penerima !</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            @role('wifi')
            <form action="{{ route('wifi.payment')}}" method="POST">
            @endrole
            @role('admin-wifi')
            <form action="{{ route('admin-wifi.payment')}}" method="POST">
            @endrole
            
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-5">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="picker1">Select Penerima</label>
                                    <select class="form-control" name="name">
                                        @foreach ($penerima as $items)
                                        <option value="{{$items->id}}">{{$items->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  Verify Modal content -->
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/iziToast.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/iziToast.css')}}">
@endsection

@section('js')
<script src="{{ asset('theme/js/plugins/datatables.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/dashboard.v4.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/widgets-statistics.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/customizer.script.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/inputimage.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/inputimage.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/js/plugins/feather.min.js')}}"></script>

<script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/iziToast.js')}}"></script>
<script src="{{ asset('js/iziToast.min.js')}}"></script>

    @if(Session::has('berhasil'))
        <script>
                iziToast.success({
                    title: 'OK',
                    message: '{{ session('berhasil') }}',
                    position: 'topRight',
                    transitionIn: 'fadeInUp',
                });
        </script>
    @endif	
@endsection

