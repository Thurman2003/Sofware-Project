<?php
	error_reporting(E_ALL ^ E_NOTICE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Contact Us Page </title>
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
		<h2>Welcome to the Contact Us Page</h2>								  
	</div>
	
	<form method="post" action="contact_us.php">
		<div class="input-group">
				<input type="text" id="input-name" placeholder="Name"><br>
				<input type="email" id="input-email" placeholder="Email address"><br>
				<input type="text" id="input-subject" placeholder="Subject">
			
		</div>
		<div class="input-group">
		<textarea name="message" type="text" rows="8" cols="40" id="input-message" placeholder="Message"></textarea>
		</div>
    
			<p>
				<button type="submit" class="btn" name="Submit">Sumit</button>
			</p>
	</form


<?php include 'footer.php';?>
</body>
</html>