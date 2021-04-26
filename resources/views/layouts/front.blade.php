<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<title>Welcome to SISKUBIS</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{asset('assets/scripts/bootstrap/bootstrap.min.css')}}">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{{asset('assets/scripts/ionicons/css/ionicons.min.css')}}">
		<!-- Toast -->
		<link rel="stylesheet" href="{{asset('assets/scripts/toast/jquery.toast.min.css')}}">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{{asset('assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('assets/scripts/magnific-popup/dist/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/scripts/sweetalert/dist/sweetalert.css')}}">
		<!-- Custom style -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/skins/all.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
	</head>
	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="{{asset('assets/images/logo.png')}}" alt="Magz Logo">
								</a>
							</div>
						</div>
						<div class="col-md-8 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something here">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>Popular:</div>
									<ul>
										<li><a href="#">Pendidikan</a></li>
										<li><a href="#">Ekonomi</a></li>
										<li><a href="#">Covid-19</a></li>
										<li><a href="#">Android</a></li>
										<li><a href="#">Aplikasi</a></li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="{{asset('assets/images/logo.png')}}" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="/login">Login</a></li>
							<li class="for-tablet"><a href="/register">Register</a></li>
							<li><a href="/">Home</a></li>
							<li class="dropdown magz-dropdown"><a href="#">Event <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="category.html">Internet</a></li>
									<li class="dropdown magz-dropdown"><a href="category.html">Troubleshoot <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="category.html">Software</a></li>
											<li class="dropdown magz-dropdown"><a href="category.html">Hardware <i class="ion-ios-arrow-right"></i></a>
												<ul class="dropdown-menu">
													<li><a href="category.html">Main Board</a></li>
													<li><a href="category.html">RAM</a></li>
													<li><a href="category.html">Power Supply</a></li>
												</ul>
											</li>
											<li><a href="category.html">Brainware</a>
										</ul>
									</li>
									<li><a href="category.html">Office</a></li>
									<li class="dropdown magz-dropdown"><a href="#">Programming <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="category.html">Web</a></li>
											<li class="dropdown magz-dropdown"><a href="category.html">Mobile <i class="ion-ios-arrow-right"></i></a>
												<ul class="dropdown-menu">
													<li class="dropdown magz-dropdown"><a href="category.html">Hybrid <i class="ion-ios-arrow-right"></i></a>
														<ul class="dropdown-menu">
															<li><a href="#">Ionic Framework 1</a></li>
															<li><a href="#">Ionic Framework 2</a></li>
															<li><a href="#">Ionic Framework 3</a></li>
															<li><a href="#">Framework 7</a></li>
														</ul>
													</li>
													<li><a href="category.html">Native</a></li>
												</ul>
											</li>
											<li><a href="category.html">Desktop</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Pra Start Up <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Trending</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Featured Posts</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img10.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 10, 2016</div>
																	<div class="category"><a href="category.html">Healthy</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img11.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img14.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="category.html">Travel</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Start Up <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Trending</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Featured Posts</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img10.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 10, 2016</div>
																	<div class="category"><a href="category.html">Healthy</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img11.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img14.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="category.html">Travel</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Scale Up <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Trending</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Featured Posts</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img10.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 10, 2016</div>
																	<div class="category"><a href="category.html">Healthy</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img11.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="{{route('single','none')}}">
																	<img src="{{asset('assets/images/news/img14.jpg')}}" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="category.html">Travel</a></div>
																</div>
																<h2><a href="{{route('single','none')}}">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">How to Join <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="icon ion-person"></i>Tenant</a></li>
									<li><a href="#"><i class="icon ion-heart"></i>Inkubator</a></li>
									<li><a href="#"><i class="icon ion-heart"></i>Investor</a></li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">About Us <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="icon ion-person"></i>Who we are</a></li>
									<li><a href="#"><i class="icon ion-heart"></i> Contact Us</a></li>
								</ul>
							</li>
							@guest
							<li class="dropdown magz-dropdown"><a href="#">My Account <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="/login"><i class="icon ion-person"></i>Login</a></li>
									<li><a href="/register"><i class="icon ion-heart"></i>Register</a></li>
								</ul>
							</li>
							@endguest
							@auth
							<li class="dropdown magz-dropdown"><a href="#">My Account <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{{route('dashboard')}}"><i class="icon ion-person"></i>Dashboard</a></li>
									<li><a href="#"><i class="icon ion-heart"></i> Forum</a></li>
									<li><a href="#"><i class="icon ion-settings"></i> Profile</a></li>
									<li class="divider"></li>
									<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon ion-log-out"></i> Logout</a></li>
								</ul>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
							@endauth
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>
	@yield('content')
<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="{{asset('assets/images/logo-light.png')}}" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									Magz is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Bootstrap 3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Creative Mind</a></li>
									<li><a href="#">Standing On The Train</a></li>
									<li><a href="#">at 6.00PM</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<h1 class="block-title">Buletin</h1>
							<div class="block-body">
								<p>Dengan berlangganan Anda akan menerima artikel baru di email Anda.</p>
								<form class="newsletter">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="ion-ios-email-outline"></i>
										</div>
										<input type="email" class="form-control email" placeholder="Your mail">
									</div>
									<button class="btn btn-primary btn-block white">Langganan</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
                            <h1 class="block-title">Latest News</h1>
                            <div class="block-body"></div>
                            @php
                            	use App\Berita;
                            	$lastNews = Berita::with('beritaCategory')
                    						->orderBy('created_at','desc')
                    						->where('publish','=','1')
                    						->where('inkubator_id','=','0')
                    						->paginate(4);
                            @endphp
                            @forelse($lastNews as $row)
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="#">
												<img src="{{ asset('storage/berita/' . $row->foto) }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="#">{{ Str::Limit($row->tittle,30) }}</a></h1>
										</div>
									</div>
								</article>
                            @empty
								<h5>Belum ada berita</h5>
                        	@endforelse
                        </div>
                        <a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; SISKUBIS 2020. ALL RIGHT RESERVED.
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->
		<!-- JS -->
		<script src="{{asset('assets/js/jquery.js')}}"></script>
		<script src="{{asset('assets/js/jquery.migrate.js')}}"></script>
		<script src="{{asset('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="{{asset('assets/scripts/jquery-number/jquery.number.min.js')}}"></script>
		<script src="{{asset('assets/scripts/owlcarousel/dist/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/scripts/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/scripts/easescroll/jquery.easeScroll.js')}}"></script>
		<script src="{{asset('assets/scripts/sweetalert/dist/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/scripts/toast/jquery.toast.min.js')}}"></script>
		<script src="{{asset('assets/js/demo.js')}}"></script>
		<script src="{{asset('assets/js/e-magz.js')}}"></script>
	</body>
</html>