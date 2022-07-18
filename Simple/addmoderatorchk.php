<?php 
	session_start();

	$email = $_POST['email'];
	$username = $_POST['username'];
	$phonenumber= $_POST['number'];


	if($email == null|| $username == null|| $phonenumber== null)
	{
		echo "null username/email/usertype/phonenumber";
	}
	else 
	{
		

		$user = $username."||".$email."||".$phonenumber.";"."\r\n";
	
		$file = fopen('moderator.php', 'a');
		
		fwrite($file, $user);
		
		header('location: moderator.php');
	   
		
	}
	




?>