
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

	<!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <style>
        .aut-bg-img{
            background-image: url("assets/images/custom/5.jpg");
            background-repeat: no-repeat !important; 
            background-size: 83% !important;
            background-attachment: fixed !important;
        }
    </style>
</head>

<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
                <img src="{{asset('assets/images/auth/logo/logo-2.png')}}" alt="AMPos" class="img-fluid" width="170" height="80">
                <div class="" style="padding-top: 40%;">
                    <h1 style="color:#4680ff;font-size:40px; text-shadow:1px 2px 2px white" class=" my-4">Selamat Datang!</h1>
                    <h4 style="color:#4680ff;font-size:40px; text-shadow:1px 2px 2px white" class=" font-weight-normal">Aplikasi Point Of Sale.<br/>Mudah dalam bertransaksi.</h4>
                </div>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<!-- <center><img style="padding-bottom: 40px;" src="{{asset('assets/images/auth/logo.png')}}" alt="AMPos" class="img-fluid" width="150" height="80"></center> -->
                <h3 class="mb-4 f-w-400">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group mb-3">
                        <label class="floating-label" for="username">Username</label>
                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="floating-label" for="Password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                        <label class="custom-control-label" for="remember">Remember Me</label>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-primary mb-4">Login</button>
                </form>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ripple.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
</body>
</html>
