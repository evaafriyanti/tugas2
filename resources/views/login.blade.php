<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Eva Afriyanti Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="{ssets/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<script src="assets/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="{{url('login')}}" method="post">
				@csrf
					<span class="login100-form-title p-b-49">
						A D M I N
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username Kosong">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukan Username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password Kosong">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukan Password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					

					
					<div class="container-login100-form-btn"></br>
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					 <br>
					 <br>
					 <div class="container-login100-form-btn"></br>
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								<a href="{{url('home')}}"> Dashboard User</a>
							</button>
						</div>
					</div>					
					</div>
					

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="assets/vendor/animsition/js/animsition.min.js"></script>

	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets/vendor/select2/select2.min.js"></script>

	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

	<script src="assets/vendor/countdowntime/countdowntime.js"></script>

	<script src="assets/js/main.js"></script>
	<script>
		@if (session('login_error')){
				swal("Username dan Password yang anda masukan Salah!")
		}
		@endif
	</script>

</body>
</html>