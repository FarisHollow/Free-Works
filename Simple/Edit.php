<?php

if(isset($_COOKIE['status'])){



$file = fopen('Admin.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 

			$userName = trim($user[0]);
			$userPass = trim($user[1]);
			
			$email = trim($user[2]);
			$phnNum = trim($user[3]);
			
			$DOB = trim($user[4]);
			$gender = trim($user[5]);
			
			break;
		
	}

?>


<html>
<head>

	<title>Edit Profile</title>
	
</head>
<body align="center">
		<?php echo '<h1>Change your profile</h2>'; ?>
		<br>
		<form action="Edit.php" method="post">
			<table border="1" align="center">
					<tr>
					<th colspan = "2">PROFILE</th>
					</tr>
				<tr>
					<td>Name  </td>
					<td><input type="text" name="name" value="<?php echo $userName; ?>"></td>
				</tr>
				
				<tr>
					<td>Reset Password  </td>
					<td><input type="text" name="password" value="<?php echo $userPass; ?>"></td>
				</tr>
				<tr>
					<td>E-mail  </td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td>Phone No </td>
					<td><input type="text" name="phnNum" value="<?php echo $phnNum; ?>"></td>
				</tr>
				
				<tr>
					<td>DOB  </td>
					<td><input type="text" name="DOB" value="<?php echo $DOB; ?>"></td>
				</tr>
				<tr>
					<td>Gender  </td>
					<td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
				</tr>
				
			</table>
				<p>Do you want to change profile info?</p>
				<input type="submit" name="submit" value="Change" >
				<input type="submit" name="cancel" value="Cancel" >
		</form>

<?php 

		if(isset($_POST['submit'])){

			
			$userName = $_REQUEST['name'];
			$password = $_REQUEST['password'];
			$email = $_REQUEST['email'];
			$phnNum = $_REQUEST['phnNum'];
			$DOB = $_REQUEST['DOB'];
			$gender = $_REQUEST['gender'];
		

			$user = $userName."|".$password."|".$email."|".$phnNum."|".$DOB."|".$gender."|"."\r\n";

			$file = fopen('admin.txt', 'w');
			fwrite($file, $user);
			header('location: Profile.php');

		}elseif(isset($_POST['cancel'])){
			header('location: Profile.php');
		}

?>

</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>