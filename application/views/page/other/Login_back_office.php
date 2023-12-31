<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/Login_back_office.css";?>">
    <title>Login back office</title>
</head>
<body>
    <script src="<?php echo base_url()."assets/js/jquery-3.7.0.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/parsley.min.js";?>"></script>
    <div class="box_login">
        <div class="circle_user">Admin</div>
        <form id="form_back_office" action="">
            <div class="log_item">
                <label for="email">E-mail</label>
                <input placeholder="Entrez votre Email" type="email" name="email" id="email" class="form-control" data-parsley-trigger="change" required="">
            </div>
            <div class="log_item">
                <label for="password">Password</label>
                <input placeholder="Entrez votre mot de passe" type="password" name="password" id="password" class="form-control" data-parsley-minlength="20" data-parsley-maxlength="100"  data-parsley-minlength-message="Mot de passe trop court!(min 20)" data-parsley-maxlength-message="Mot de passe trop long!" required="">
            </div>
            <div class="log_item">
                <input type="submit" value="Login" id="btn_log_back_office" >
            </div>
        </form>
    </div>
    <!-- <script type="text/javascript">
        $(function () {
				$('#form_back_office').parsley().on('field:validated', function () {
					var ok = $('.parsley-error').length === 0;
				})
					.on('form:submit', function () {
						return false; // Don't submit form for this demo
					});
			});
    </script> -->
    <script src="<?php echo base_url()."assets/js/traitement_login.js";?>"></script>
    <script src="<?php echo base_url()."assets/sweetalert2/dist/sweetalert2.all.js";?>"></script>
</body>
</html>