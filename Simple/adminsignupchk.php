<?php 

$userName = $_POST['name'];
$password = $_POST['password'];
$cPassword = $_POST['cPassword'];
$email = $_POST['email'];
$phnNum = $_POST['phnNum'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];



if($password == null || $userName == null){
	echo "null password/name...";
}elseif ($password != $cPassword) {
    echo "Password Doesn't Match";
}
else{
		$user = $userName."|".$password."|".$email."|".$phnNum."|".$DOB."|".$gender."\r\n";
		$file = fopen('admin.txt', 'a');
		fwrite($file, $user);
		header('location: adminlogin.html');					
    
}


?>