<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 11 Custom User Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <style type="text/css">
    body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    background-image: url('../images/home.jpg');
    background-size: cover;
    background-position: center;
    }
  </style>
</head>
<body>

<section class="py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-7 col-xxl-6">
        <div class="card border border-light-subtle rounded-3 shadow-sm mt-5">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="#!">
                <img src="{{asset('images/logo.png')}}" alt="BootstrapBrain Logo" width="250" style="width: 100px; height: 100px;">
              </a>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
            <form method="POST" action="{{ route('login.post') }}">
              @csrf

              @session('error')
                  <div class="alert alert-danger" role="alert">
                      {{ $value }}
                  </div>
              @endsession

              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                  </div>
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                      <label class="form-check-label text-secondary" for="rememberMe">
                        Keep me logged in
                      </label>
                    </div>
                    <a href="#!" class="link-primary text-decoration-none">{{ __('forgot password?') }}</a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">{{ __('Login') }}</button>
                  </div>
                </div>
                <div class="col-12">
                  <p class="m-0 text-secondary text-center">Don't have an account? <a href="{{ route('register') }}" class="link-primary text-decoration-none">Sign up</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
