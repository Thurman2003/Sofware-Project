<?php include('config.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title> Welcome to the Login Page </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
</head>
<body>
<?php include 'master.php';?>
	<div class="container text-center">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<input type="text" placeholder="Username" name="username" >
		</div>
		<div class="input-group">
			<input type="password" placeholder="Password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet enrolled? <a href="registration.php">Sign up</a>
		</p>
	</form>

<?php include 'footer.php';?>
</body>
</html>