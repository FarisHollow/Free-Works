<?php

if(isset($_COOKIE['status'])){



$file = fopen('admin.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		 
			$userName = trim($user[0]);
			$email = trim($user[2]);
			$phnNum = trim($user[3]);
			$DOB = trim($user[4]);
			$gender = trim($user[5]);
			break;
			
	}

?>


<html>
<head>

	<title>Profile</title>
	
</head>
<body align="center">
		<?php echo '<h1>What is in your mind&nbsp;' . $userName . '?</h1>'; ?>
		<br>
		<table border="1" align="center">
			
<?php

			echo '<tr>';
			echo '<th colspan = "2">PROFILE</th>';
			echo '</tr>';
			echo'<tr>';
			echo '<td>Name  </td>';
			echo'<td>'.$userName.'</td>';
			echo'</tr>';
		
			echo'<tr>';
			echo '<td>E-mail  </td>';
			echo'<td>'.$email.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Phone No </td>';
			echo'<td>'.$phnNum.'</td>';
			echo'</tr>';
			
		
			echo'<tr>';
			echo '<td>DOB  </td>';
			echo'<td>'.$DOB.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Gender  </td>';
			echo'<td>'.$gender.'</td>';
			echo'</tr>';

?>
		</table>
<br>

<a href="Edit.php"> <input type="button" value="Edit Profile"></a> <br>
<a href="AdminP.php"> <input type="button" value="Back"></a> <br>

</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>