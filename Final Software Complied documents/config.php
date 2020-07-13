<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$firstname = '';
	$lastname = '';
	$course = '';
	$phone = '';
	$gender = '';
	$errors = array(); 
	$_SESSION['success'] = "";

	// Database connection
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// get all input values from the registration form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$course = mysqli_real_escape_string($db, $_POST['course']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($firstname)) { array_push($errors, "Fisrt name is required"); }
		if (empty($lastname)) { array_push($errors, "Last name is required"); }
		if (empty($course)) { array_push($errors, "Course is required"); }
		if (empty($phone)) { array_push($errors, "Phone name is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password 
			$query = "INSERT INTO course_enrollment (username, email, firstname, lastname, course, phone, gender, password) 
					  VALUES('$username', '$email','$firstname', '$lastname', '$course', '$phone', '$gender',  '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}
	
	

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM course_enrollment WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


?>