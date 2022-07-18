<?php 

$username = $_POST['name'];
$password = $_POST['password'];

if($username == null || $password == null){
	echo "null Account Number/Password...";
}else{
	
	$file = fopen('admin.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($username == trim($user[0]) && $password == trim($user[1])) {
			setcookie('status', 'true', time()+3600, '/');
			header('location: AdminP.php');
		}	
	}

	echo "Invalid username/password";
}

?>