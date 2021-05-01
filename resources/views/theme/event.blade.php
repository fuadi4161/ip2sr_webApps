<section class="w3l-mobile-content-6 py-5">
    <div class="mobile-info py-lg-3 py-md-4 py-2">
      <h3 class="title-big mb-lg-5 mb-4 mt-3 text-center">Event News</h3>
        <!-- /mobile-info-->
        @foreach ($event as $events)
        <div class="container">
          <div class="row">
            <div class="col-lg">
              <div class="row mobile-info-inn mx-lg-0">
                    
                
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    @foreach ($eventdetail as $loop => $slider)
                      @if ($event->id == $slider->event_id )
                      <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}" data-interval="3000" style="width: 380px; height:250px">
                        <img src="{{asset('galery/'.$slider->foto)}}" class="d-block w-100" alt="...">
                      </div>
                          
                          
                      @endif
                    @endforeach
                    <!-- <div class="carousel-item" data-interval="2000">
                      <img src="{{asset('assets/images/events/event2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('assets/images/events/event3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('assets/images/events/event4.jpg')}}" class="d-block w-100" alt="...">
                    </div> -->
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4 about-right-faq align-self">
              <h5 class="title-small mb-1">Our story</h5>
              <h3 class="title-big">{{$events->title}}</h3>
              <p class="mt-sm-4 mt-3">{{$events->deskripsi}}</p>
              </div>
            </div>
          </div>
          @endforeach
        <!-- //mobile-info-->
    </div>
  </section>