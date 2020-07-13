<?php
	error_reporting(E_ALL ^ E_NOTICE);
	

?>


<?php

	// Database connection
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	
	if (!$db) {
    die('error connecting to database');
}

// variable declaration
	$username = "";
	$email    = "";
	$firstname = '';
	$lastname = '';
	$address = '';
	$phone = '';
	$salary = '';
	$ssn = '';
	$errors = array(); 
	$_SESSION['success'] = "";
	
if(isset($_POST['update_user'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$salary = mysqli_real_escape_string($db, $_POST['salary']);
		$ssn = mysqli_real_escape_string($db, $_POST['ssn']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		

		// form validation
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($firstname)) { array_push($errors, "Fisrt name is required"); }
		if (empty($lastname)) { array_push($errors, "Last name is required"); }
		if (empty($address)) { array_push($errors, "Address name is required"); }
		if (empty($phone)) { array_push($errors, "Phone name is required"); }
		if (empty($salary)) { array_push($errors, "salary name is required"); }
		if (empty($ssn)) { array_push($errors, "SSN name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		
		
	    //Update DB
        $db = "UPDATE users SET username='username', firstname='firstname', lastname='lastname', address='address', phone='phone', salary='salary', ssn='ssn', email='email' WHERE username = 'tpeele'";
        //Create Debug Message
        if(!$db){
            die("Failed to update database");
        }
        //If query is good, head back to desired page.
        header("Location: profile.php");
        exit;
    }else{
        //Create Empty Error Message
        $error = "Error! No Changes Made";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title> Profile Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>
<div class="container text-center">
		<h2>Please Update Profile Information</h2>								  
	</div>
	<form method="post" action="update_profile.php">

		

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
			<input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="phone" placeholder="Phone" value="<?php echo $phone; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="salary" placeholder="Salary" value="<?php echo $salary; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="ssn" placeholder="SSN" value="<?php echo $ssn; ?>">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="update_user">Update Profile</button>
		</div>
		
	</form>
	</body>
	</html>





