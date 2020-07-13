<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration Page </title>
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
		<h2>Welcome to the Registration Page</h2>								  
	</div>
	<form method="post" action="registration.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="firstname" placeholder="First name" value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="lastname" placeholder="Last name" value="<?php echo $lastname; ?>">
		</div>
		<div class="input-group">
            <input id="course" list="courses" placeholder="Courses" name="course">
					<datalist id="courses">
					<option value="CPT 200">FUNDAMENTALS OF PROGRAMMING LANGUAGES</option>
					<option value="CST 310">SOFTWARE DEVELOPMENT</option>
					<option value="CST 313">SOFTWARE TESTING</option>
					<option value="CST 316">INFORMATION SECURITY MANAGEMENT</option>
					<option value="CHEM 141">GENERAL CHEMISTRY I</option>
					<option value="MATH 131">COLLEGE ALGEBRA</option>
					<option value="ENGL 131">ENGLISH COMPOSITION</option>
					<option value="GEN 499">GENERAL EDUCATION CAPSTONE</option>
					</datalist>
		  </div>
		<div class="input-group">
			<input type="text" name="gender" placeholder="Gender" value="<?php echo $gender; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="phone" placeholder="Phone" value="<?php echo $phone; ?>">
		</div>
		<div class="input-group">
			<input type="password" placeholder="Password" name="password_1">
		</div>
		<div class="input-group">
			<input type="password" placeholder="Confirm Password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a student? <a href="login.php">Sign in</a>
		</p>
	</form>
<?php include 'footer.php';?>
</body>
</html>