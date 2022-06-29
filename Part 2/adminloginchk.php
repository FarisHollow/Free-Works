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
		}
		else{
			$file = fopen('admin.txt', 'r');
		
	      	while (!feof($file)) {
			$data=fgets($file);
			$admin = explode('|', $data);
			if($username == trim($admin[0]) && $password == trim($admin[1])){
				$_SESSION['status'] = true;
			
				header('location: AdminP.php');
			}
		
	    	
		}
		echo "invalid user"; 

	}

	}
	
?>