<?php 
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
    $phno = $_POST['phonenumber'];
   
    
	if($username == null || $password == null || $email == null|| $phno ==null ){
		echo "Please enter information";
	}else{

		$user = $username."|".$password."|".$email."|".$phno."\r\n";
		$file = fopen('admin.txt', 'a');
		fwrite($file, $user);
		echo "Information changed successfully";
	}




?>