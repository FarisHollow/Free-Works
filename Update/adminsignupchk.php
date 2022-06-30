<?php 
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
    $phno = $_POST['phonenumber'];
   
    
	if($username == null || $password == null || $email == null|| $phno ==null ){
		echo "Enter username/password/email";
	}else{

		$user = $username."|".$password."|".$email."|".$phno."\r\n";
		$file = fopen('admin.txt', 'a');
		fwrite($file, $user);
		header('location: adminlogin.html');
	}




?>