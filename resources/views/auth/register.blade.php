<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('web/loginV3/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Selamat Datang di Pendaftaran</h2>
								<p>Apakah anda sudah punya akun?</p>
								<a href="index.html" class="btn btn-white btn-outline-white">Masuk</a>
							</div>
			      		</div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Daftar</h3>
			      		</div>
						<div class="w-100">
							<p class="social-media d-flex justify-content-end">
								<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
								<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
							</p>
						</div>
			      	</div>

                    <form method="POST" action="{{ route('register') }}" class="signin-form">	
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">Username</label>
		      			<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" required>
		      		</div>
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">Email</label>
		      			<input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" required>
		      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
		            </div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password confirm</label>
		              <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Daftar</button>
		            </div>
		          </form>

		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{asset('web/loginV3/js/jquery.min.js')}}"></script>
    <script src="{{asset('web/loginV3/js/popper.js')}}"></script>
    <script src="{{asset('web/loginV3/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/loginV3/js/main.js')}}"></script>

	</body>
</html>