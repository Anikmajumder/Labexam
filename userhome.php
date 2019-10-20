<?php
	session_start();
	
	if(isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome<?=$_SESSION['name']?></h1> 
	<a href="uprofile.php">Profile</a><br>
	<a href="changepassword.php">changepassword</a><br>
	<a href="viewuser.php">viewuser</a><br>
	<a href="logout.php">logout</a><br>
</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>

