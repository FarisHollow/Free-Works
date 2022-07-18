<?php 
	session_start();

	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if($username == null || $password == null){
		echo "Enter your Username & Password";
	}else{
		
			$file = fopen('user.txt', 'r');
		
	      	while (!feof($file)) {
			$data=fgets($file);
			$admin = explode('|', $data);
			if($username == trim($admin[0]) && $password == trim($admin[1])){
				
                setcookie('status', 'true', time()+86400*30, '/');
			
				header('location: main.php');
			}
		
	    	
		}
		echo "invalid user"; 

	}


	
?>