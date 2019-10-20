<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['pass'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($uname == $password){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;

				header('location: userhome.php');

			}else{
				echo "invalid username/password";
			}
		}

	}else{
		header('location: login.html');
	}


?>