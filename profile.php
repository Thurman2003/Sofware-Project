<?php include('config.php') ?>

<?php
$stmt = $db->prepare('SELECT password, email, firstname, lastname, course,phone, gender  FROM course_enrollment WHERE username = ?');
$stmt->bind_param('s', $_SESSION['username']);
$stmt->execute();
$stmt->bind_result($password, $email, $firstname, $lastname, $course, $phone, $gender);
$stmt->fetch();
$stmt->close();
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
	<h1>Welcome to the Profile Page</h1>
	</div>
	
	<div class="container text-center">
	<h3>Personal Information | <? php       
{ ?>            <a href="update_profile.php?user=<?php echo $_SESSION['username'] ?>">Edit Profile</a> 


	</div>

	<div class="content">
			
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['username']?></td>
						
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>FirstName:</td>
						<td><?=$firstname?></td>
					</tr>
					<tr>
						<td>LastName:</td>
						<td><?=$lastname?></td>
					</tr>
					<tr>
						<td>Course:</td>
						<td><?=$course?></td>
						
					</tr>
					
					<tr>
						<td>Phone:</td>
						<td><?=$phone?></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><?=$gender?></td>
					</tr>
					
					
				</table>
			</div>
		</div>
		
	</body>
</html>	


<?php include 'footer.php';?>