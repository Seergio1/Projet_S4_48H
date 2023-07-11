<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/Login1.css";?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/fontawesome-5/css/all.css";?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<script src="<?php echo base_url() . "assets/js/jquery-3.7.0.js";?>"></script>
	<script src="<?php echo base_url() . "assets/js/parsley.min.js";?>"></script>
	<script src="<?php echo base_url() . "assets/js/xhr.js";?>"></script>
	<p id="url" value="<?php echo base_url(); ?>"></p>
	<div class="container">
		<div class="forms-container">
		  <div class="signin-signup">
			<form id="demo-form_1"  class="sign-in-form" data-parsley-validate="">
			  <h2 class="title">Sign in</h2>
			  <div class="input-field">
				<i class="fas fa-user"></i>
				<input name="mail" type="email" placeholder="E-mail" class="form-control" data-parsley-trigger="change" required=""/>
			  </div>
			  <div class="input-field">
				<i class="fas fa-lock"></i>
				<input name="pass" type="password" placeholder="Password" class="form-control" data-parsley-minlength="6"  data-parsley-minlength-message="Mot de passe trop court!" required=""/>
			  </div>
			  <input id="btn_log_front_office" type="button" value="Login" class="btn solid log" />
			</form>
		  </div>
		</div>
  
		<div class="panels-container">
		  <div class="panel left-panel">
			<div class="content">
			  <h1>Vous etes l'un des notres?</h1>
			  <p>
				Ravie de vous revoir
			  </p>
			  
			</div>
			<img src="<?php echo base_url() . "assets/image/pic.png";?>" class="image" alt="" />
		  </div>
		  
		</div>
	  </div>


	
	<!-- <script type="text/javascript">
		$(function () {
				$('#demo-form_1').parsley().on('field:validated', function () {
					var ok = $('.parsley-error').length === 0;
				})
					.on('form:submit', function () {
						return false; // Don't submit form for this demo
					});
			});
		</script> -->
    <script type="text/javascript" src="<?php echo base_url() . "assets/js/Login.js";?>"></script>
</body>
</html>
