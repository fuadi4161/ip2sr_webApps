<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="web/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="web/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img style="width:150px;" src="web/images/logo_login.png">
              </div>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
              <p class="login-card-description">Masuk dengan akun anda</p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Masuk">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Belum punya akun? <a href="{{ route('register') }}"  class="text-reset">Daftar Disini</a></p>
                <br>
                <p> all password = password</p>
                <p>Super Admin  : superadmin@superadmin.com</p>
                <p>Admin Pemuda : admin@admin.com</p>
                <p>User Pemuda  : pemuda@pemuda.com</p>
                <p>Bendahara    : bendahara@pemuda.com</p>
                <p>Sekertaris   : sekertaris@pemuda.com</p>
                <p>Admin Wifi   : adminwifi@adminwifi.com</p>
                <p>User Wifi    : userwifi@adminwifi.com</p>
                <p>Pengunjung   : user@user.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>