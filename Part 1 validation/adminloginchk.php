<?php 
	session_start();

	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username;

	if($username == null || $password == null){
		echo "Enter your Username & Password";
	}else{
		if($username == "Faris" && $password == "42241"){
			$_SESSION['status'] = true;
			header('location: AdminP.php');
		}else{
			echo "invalid user";
		}
	}

	


?>