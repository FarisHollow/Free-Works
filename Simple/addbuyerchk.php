<?php 
	session_start();

	$email = $_POST['email'];
	$username = $_POST['username'];
	$phonenumber= $_POST['number'];
	//$usertype = $_POST['type'];//

	if($email == null|| $username == null|| $phonenumber== null)
	{
		echo "null username/email/usertype/phonenumber";
	}
	else 
	{
		

		$user = $username."||".$email."||".$phonenumber.";"."\r\n";
		$file = fopen('buyer.php', 'a');
		fwrite($file, $user);
		header('location: buyer.php');
	   
		echo "invalid user"; 
	}
	




?>