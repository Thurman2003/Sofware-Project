<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title> Add Course </title>
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
	<h1>Add New Courses For Enrollment</h1>
	</div>
	<form method="post" action="add_course.php">

		<?php include('errors.php'); ?>
<!--Header-end-->

	<div class="input-group">
		<input type="course" list="courses" placeholder=" Add more Courses" value="<?php echo $course; ?>">
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
			<button type="submit" class="btn" name="reg_user">Submit</button>
		</div>										<!--Php code for Database Retrieval -->
									
		</div>

		</body>

		</html>