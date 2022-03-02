<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Krishna Creation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="../assets/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
<body>
	<section class="mngr-login">
	<div class="page">
		<div class="welcome">
			<h2>Welcome Back!</h2>
			<p>Hello Dear, we are web art technology. We design this Form.</p>
			<a href="{{url('/signup')}}" class="up">Sign Up</a>
			
		</div>
		<div class="sign_up">
			<form method="POST" action="{{ url('/customer/signin') }}">
            {{ csrf_field() }}
			<h2>Sign In your Account</h2>
			<input type="email" name="email" placeholder="Email" required><br>
			<input type="password" name="password" placeholder="Password" required><br>
			<input type="submit" name="sign_in" value="Sign In" class="up">
		</form>
	</div>
	</div>
</section>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../assets/js/jquery-ui.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.stellar.min.js"></script>
  <script src="../assets/js/jquery.countdown.min.js"></script>
  <script src="../assets/js/bootstrap-datepicker.min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/jquery.fancybox.min.js"></script>
  <script src="../assets/js/jquery.sticky.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>