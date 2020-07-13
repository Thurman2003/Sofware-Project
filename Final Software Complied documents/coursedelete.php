<?php include('config.php') ?>
<?php

$remove = "DELETE FROM course_enrollment WHERE  course='$_GET[CS]' and username='$_GET[username]'";

$results=mysql_query($remove) or die(mysql_error());

echo " COURSE SUCESSFULLY REMOVED<br/><a href='default.php'>Back</a>";



?>