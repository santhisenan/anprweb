
<html>
<title>ANPR Web</title>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,‌​100italic,300,300ita‌​lic,400italic,500,50‌​0italic,700,700itali‌​c,900italic,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url('../styles.css');; ?>">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<span class="glyphicon glyphicon-wrench nav-glyph"></span>
									Automatic Number Plate Detection System

				</a>

			</div>
		</div>
	</nav>
	<div class="row">
	<div class="container-fluid col-md-4 col-md-offset-4 login-container">
			<div class="row login-form-container">
				<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
					<div class="row ">
						<div>
							<div class="login-head-container">
								<div class="login-head">Welcome</div>
							</div>
							<?php echo form_open('loginController/loginValidate'); ?>
							<div class="login-form-container-inner">
								<form method="POST">
									<div class = "form-group ">
										<input class = "input-login" type="text" name="username" placeholder="Enter Username">
									</div>
									<div class = "form-group">
										<input class = "input-login" type="password" name="password" placeholder="Enter Password">
									</div>
									<div class = "form-group row">
										<div class="submit-btn-div">						
											<button class="submit-btn" type="submit" name="submit" value="Login">Login</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>




</body>
</html>




		