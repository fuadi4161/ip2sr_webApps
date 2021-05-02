<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ikatan Pemuda Pemudi Sido Rukun</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="web/css/style-starter.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/iziToast.min.css">
    <link rel="stylesheet" href="css/iziToast.css">

  </head>
  <body>
<!--header-->

@include('theme.header')

<!--/header-->
<!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-lg-6 col-sm-12">
                <h2 class="mb-4">Ikatan Pemuda Pemudi Sido Rukun</h2>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->

@include('theme.event')
<!-- /bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
      <h3 class="title-big mb-lg-5 mb-4 text-center">Agenda</h3>
        <div class="grids-area-hny main-cont-wthree-fea row">
          @foreach ($agenda as $item)
            <div class="col-lg-4 col-md-6 grids-feature">
              <div class="area-box">
                
                  {{-- <img src="web/images/burger.png" alt="burger logo" width="35px"> --}}
                  <h4><a href="#feature" class="title-head">{{$item->title}}</a></h4>
                  <p class="mb-3">{{$item->deskripsi}}</p>
                  <p class="mb-3">Dilaksanakan : {{$item->start}}</p>
                  <a class="btn btn-text">Tanggal Upload : {{$item->created_at}}</a>
              </div>
            </div>
          @endforeach
            
        </div>
    </div>
</section>
<!-- //bottom-grids-->

<!-- /mobile section --->
@include('theme.sosial')

<!-- //mobile section --->
<!-- middle -->
<div class="middle py-5" id="call">
    <div class="container py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3 mt-5 mb-5">
          @foreach ($moto as $motos)
          <h3>{{$motos->title}}</h3>
          <h4 style="color: white;">"{{$motos->deskripsi}}" </h4>
          @endforeach
        </div>
    </div>
</div>
<!-- //middle -->
<!--  Work gallery section -->
<div class="w3l-gallery2" id="gallery">
    <div class="burger galleryks py-5">
      <div class="container py-lg-4 py-md-3">
        <h3 class="title-big mb-lg-5 mb-4 text-center">Gallery</h3>
        <div class="row no-gutters masonry">
          @foreach ($galery as $photo)
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{url('galery/'. $photo->foto)}}" class="js-img-viwer d-block" data-caption="Galery ikatan pemuda pemudi ip2sr"
              data-id="lion">
              <img src="{{url('galery/'. $photo->foto)}}" class="img-fluid radius-image-full" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <span class="fa fa-plus" aria-hidden="true"></span>
                <h4>View Images Gallery</h4>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!--  //Work gallery section -->

<section class="w3l-bottom-grids-6 py-5">
  <div class="container py-lg-5 py-md-4 py-2">
    <h3 class="title-big mb-lg-5 mb-4 text-center">Team Member</h3>
      <div class="grids-area-hny main-cont-wthree-fea row">
        @foreach ($organisasi as $pejabat)
        <div class="col-lg-3 col-md-6 mb-5 grids-feature">
            <div class="area-box">
                <img src="{{asset('assets/images/organisasi/'.$pejabat->foto)}}" alt="burger logo" width="70%">
                <h4><a href="#feature" class="title-head">{{$pejabat->pangkat}}</a></h4>
            </div>
        </div>
        @endforeach
      </div>
  </div>
</section>
<!-- //features -->

<!-- footer -->
 @include('theme.footer')
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center py-4">
  <p>© 2020 IP2SR | Develope by <a href="https://www.instagram.com/fuadz_fh/">Fuadz_fh</a> with Laravel 7</a> </p>
</div>
<!-- //copyright -->

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>

<script src="web/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="web/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<script src="web/js/owl.carousel.js"></script><!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="web/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="web/js/counter.js"></script>

<!-- gallery popup js -->
<script src="web/js/smartphoto.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sm = new SmartPhoto(".js-img-viwer", {
      showAnimation: false
    });
    // sm.destroy();
  });
</script>
<!-- //gallery popup js -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="web/js/bootstrap.min.js"></script>
<script src="js/iziToast.js"></script>
<script src="js/iziToast.min.js"></script>
<!-- //bootstrap-->

@auth
<script>
  
  iziToast.info({
    title: 'Hello',
    message: 'Welcome! {{ Auth::user()->name}} ',
    position: 'topRight'
    
  });

</script>
@else
<script>
  
  iziToast.info({
    title: 'Hello',
    message: 'Welcome!',
    position: 'topRight'
    
  });

</script>
@endif


</body>
</html>