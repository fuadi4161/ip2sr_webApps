@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumb">
    <h1>User Profile</h1>
    <ul>
        <li><a href="">Pages</a></li>
        <li>User Profile</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
@endsection

@section('content')
    <section class="ul-contact-detail">
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card user-profile o-hidden mb-4">
                    <div class="header-cover" style="background-image: url({{ asset('theme/images/photo-wide-4.jpg')}})"></div>
                    @if( Auth::user()->profile_photo == null)
                    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/default.png')}}" alt="" />
                    @else
                    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="" />
                    @endif

                    @if( $profil == null)

                    <p class="m-0 text-24">....</p>
        
                    <p class="text-muted m-0">  -= {{ Auth::user()->name}} =-</p>
                    <p class="text-muted m-0">....</p>
                    @else
                    
                    <p class="m-0 text-24">{{ $profil->nama}}</p>
        
                    <p class="text-muted m-0">  -= {{ Auth::user()->name}} =-</p>
                    <p class="text-muted m-0">{{ $profil->deskripsi}}</p>
                    @endif
                    </div>
                    @if( $profil == null)
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
                            <div class="row">
                                <div class="col-6 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Email</h5><span>{{ Auth::user()->email}}</span>
                                    </div>
                                    <div class="ul-contact-detail__info-1">
                                        <h5>jenkel</h5><span>{{ $profil->jenkel}}</span>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Tanggal Lahir</h5><span>{{ $profil->tanggal_lahir}}</span>
                                    </div>
                                    <div class="ul-contact-detail__info-1">
                                        <h5>kontak</h5><span>{{ $profil->kontak}}</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="ul-contact-detail__info-1">
                                        <h5>Alamat</h5><span>{{ $profil->alamat}}</span>
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
                    @endif
                </div><!-- end of main-content -->
            </div>
            <div class="col-lg-8 col-xl-8">
                <!--  begin::basic-tab -->
                <div class="card mb-4">
                    <div class="card-header bg-transparent">Basic Tabs</div>
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                <a class="nav-item nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Edit Profil</a></div>
                        </nav>
                        <div class="tab-content ul-tab__content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="ul-contact-detail__timeline">
                                    <div class="row">
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
                                    </div>
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
                                <form action="{{ route('super.update-profil',''.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-4 mt--2">
                                                <div class="drop-zone">
                                                   <!--  @if( Auth::user()->profile_photo == null)
                                                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                                    @else
                                                    <img class="drop-zone__prompt" style="border-radius: 10px" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}" alt="">
                                                    @endif
                                                    <input type="file" name="file" class="drop-zone__input"> -->

                                                    <div class="wrapper">
                                                      <div class="image">
                                                            @if( Auth::user()->profile_photo == null)
                                                                <img id="image" alt="" src="{{ asset('assets/images/avatars/default.png')}}">
                                                            @else
                                                                <img id="image" alt="" src="{{ asset('assets/images/avatars/'. Auth::user()->profile_photo)}}">
                                                            @endif
                                                      </div>
                                                      <div class="content">
                                                          <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                          <div class="text">No file chosen, yet!</div>
                                                      </div>
                                                          <!-- <div id="cancle-btn"><i class="fas fa-times"></i></div> -->
                                                          <div class="file-name">File name here</div>
                                                    </div>            
                                                  <input id="default-btn" class="mt-2"  name="file" type="file" >
                                                  <!-- <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button> -->
                                                </div>
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
                                            <div class="col-md-8">
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
                                    </form>
                                    <div class="text-center">
                                        <h5 class="heading text-primary">Lengkapi profil anda</h5>
                                        <a class="text-default collapsed" href="#collapse-icon" data-toggle="collapse" aria-expanded="false"><i class="i-Arrow-Down-2 t-font-boldest"></i></a>
                                    </div>
                                    <form>
                                        <div class="collapse" id="collapse-icon">
                                            <div class="mt-3">
                                                <form action="action">
                                                    <!--  start card 2 Columns Horizontal Form Layout-->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputtext11">Nama Lengkap:</label>
                                                            <input class="form-control" id="inputtext11" type="text" placeholder="Enter full name" /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your full name
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail1">Nomor Hp/Wa:</label>
                                                            <input class="form-control" id="inputEmail12" type="text" placeholder="Enter Contact Number" />
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail12">Telegram:</label>
                                                            <input class="form-control" id="inputEmail12" type="text" placeholder="Enter Contact Number" />
                                                        </div>
                                                    </div>
                                                    <div class="custom-separator"></div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputtext14">Bio:</label>
                                                            <input class="form-control" id="inputtext14" type="text" placeholder="Enter contact number " /><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your contact
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail15">Tanggal Lahir:</label>
                                                            <div class="input-right-icon">
                                                                <input class="form-control" id="inputEmail15" type="text" placeholder="Fax Number" /><span class="span-right-input-icon"></span>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please enter your Fax
                                                            </small>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail16">Alamat:</label>
                                                            <div class="input-right-icon">
                                                                <input class="form-control" id="inputEmail16" type="text" placeholder="Enter your address" /><span class="span-right-input-icon"><i class="ul-form__icon i-Map-Marker"></i></span>
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
                                                                    <input type="radio" name="radio" value="L" /><span class="ul-form__radio-font">L</span><span class="checkmark"></span>
                                                                </label>
                                                                <label class="ul-radio__position radio radio-primary">
                                                                    <input type="radio" name="radio" value="P" /><span class="ul-form__radio-font">P</span><span class="checkmark"></span>
                                                                </label>
                                                            </div><small class="ul-form__text form-text" id="passwordHelpBlock">
                                                                Please select user group
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row text-right">
                                                        <div class="col-sm-11">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                    <!--  end card 2 Columns Horizontal Form Layout-->
                                                </form>
                                            </div>
                                        </div>
                                    
                                        <div class="collapse" id="collapse-icon">
                                            <div class="text-center">
                                                <h5 class="heading text-primary">Media Sosial anda</h5>
                                            </div>
                                            <div class="mt-3">
                                                <form action="action">
                                                    <!--  start card 2 Columns Horizontal Form Layout-->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputtext11">Facebook:</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-transparent"><i>url</i></div>
                                                                </div>
                                                                <input class="form-control" id="inlineFormInput" type="text" placeholder="https://www.facebook.com/kunthet.suu/" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail12">Twitter:</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-transparent"><i>url</i></div>
                                                                </div>
                                                                <input class="form-control" id="inlineFormIntGroup" type="text" placeholder="@ Username" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label class="ul-form__label" for="inputEmail13">Instagram:</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-transparent"><i>url</i></div>
                                                                </div>
                                                                <input class="form-control" id="inlineFormInpGroup" type="text" placeholder="https://www.instagram.com/ip2sr.01/" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row text-right">
                                                        <div class="col-sm-11">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                    <!--  end card 2 Columns Horizontal Form Layout-->
                                                </form>
                                                
                                            </div>
                                            <button class="btn btn-warning ladda-button example-button m-1" data-style="expand-left">
                                                <span class="ladda-label">Submit</span><span class="ladda-spinner">
                                                    </span><div class="ladda-progress" style="width: 0px;"></div>
                                            </button>
                                        </div>
                                    </form> {{-- Form untuk simpan semua --}}
                                </div>               
                        </div>
                    </div>
                </div>
                <!--  end::basic-tab -->
            </div>
        </div>
    </section>
    <!--  content goes here -->
@endsection

@section('js')
<script src="{{ asset('theme/js/plugins/echarts.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/echart.options.min.js')}}"></script>
<script src="{{ asset('theme/js/plugins/datatables.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/dashboard.v4.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/widgets-statistics.min.js')}}"></script>
<script src="{{ asset('theme/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/apexSparklineChart.script.min.js')}}"></script>
<script src="{{ asset('theme/js/scripts/customizer.script.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/inputimage.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/inputimage.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/js/plugins/ladda.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/js/plugins/ladda.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/js/scripts/ladda.script.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/js/plugins/feather.min.js')}}"></script>
@endsection