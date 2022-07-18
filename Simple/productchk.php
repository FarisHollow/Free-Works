<?php 
	session_start();

	$pname = $_POST['pname'];
	$eprice = $_POST['estd'];
	$mvalue = $_POST['market'];
    $email = $_POST['email'];
    $address = $_POST['address'];
   
    
	if($pname == null || $eprice == null || $mvalue == null || $email == null|| $address ==null ){
		echo "Enter Product info";
	}else{

		$user = $pname."|".$eprice."|".$mvalue."|".$email."|".$address."\r\n";
		$file = fopen('product.txt', 'a');
		fwrite($file, $user);
		header('location: doneorder.html');
	}




?>