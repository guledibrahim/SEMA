<?php session_start(); //start the session
include 'signup.php'; 

//$_SESSION['user'] = 'adam';

if ($_SESSION['user']!='') { //navigation menu depending if the user is logged in or not.
    echo <<<EOD
	<!DOCTYPE html>
	<html>
		<head>
			<title>SEMA</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		</head>
		<body>
			<!--Navbar-->
			<div class="navigation">
				<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="sema.php">
						<img src="http://market.designmodo.com/wp-content/uploads/2015/06/flat-ui-logo.png" width="40" height="33" class="d-inline-block align-top">
						SEMA
					</a>
					<h5 class="h5">SEMA</h5>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" id="SemaPRO" href="#">SemaPRO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.php"><button type="button" id="loginbtn" class="btn btn-success">Login</button></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--download the app-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<h1 class="h1 text-white float-left" style="margin-top: 250px;">Welcome to SEMA, an <strong>ad-free</strong> social network built for creators and people like you</h1>
						<button style="margin-top: 10px;" id="appbtn" class="btn btn-success">DOWNLOAD APP</button>
					</div>
					<!--sign up-->
					<div class="col-md-6">
						<form style="margin-top:100px;" class="form-group" method="post" name="signup-form" >	
							<label style="margin-right: 5px;" class=" control-label">USERNAME</label>
							<input class="form-control text-white" type="text" name="username">
							<label style="margin-right: 5px;" class=" control-label">EMAIL</label>
							<input class="form-control text-white" type="email" name="email">
							<label style="margin-right: 5px;" class=" control-label">PASSWORD</label>
							<input class="form-control" type="password" name="password"> 
							<button style="margin-top: 10px; border-radius: 10px;" class="btn btn-success">Create an account</button>
						</form>
					</div>
				</div>
			</div>
		</body>
	</html>
EOD;
} else {
    header("location: home.php");
}
