<?php 
	session_start();
	if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>

    
	<!-- Start Header -->
<table border="0" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		 <td>
			 <table border="0" width="85%" cellpadding="15%" cellspacing="0" align="center">
			 <tr>
					<td>
						  
						<h1><strong>Vivid</strong></h1>
					  
					</td>

					<td width="60%">&nbsp;</td>

					<td>
           	   	  
           	           Profile
           	    
           	        </td>
			
					<td>
						
					    <a href="Adminlogout.php"> Logout-></a>
					
					</td>
			 </tr>
			 </table>
		 </td>
	</tr>
  </table>
  <!-- End Header -->

  <!-- Start Body -->
 
	
			 <table border="2" width="85%" cellpadding="15" cellspacing="0" align="center">
			 <tr>
					
						 <h1 align="center">
							
							 Welcome back, Mr Admin 
						
						</h1>
						 
						<h2 align="center">To Admin panel</h2>
					
					
						
					   
					
			 </tr>
		 
		  <table border="2" width="30%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Manage Account: </td>
			    
				<td>
					<a href="manage.php"><input type="Button" name="" value="Press"></a>
				</td>
			</tr>
		  </table>
		  <table border="2" width="20%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>View Members:</td>
			    
				<td>
					<input type="Button" name="" value="Press">
				</td>
			</tr>
		  </table>
		  <table border="1" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Users:</td>
			    
				<td>
					<input type="Button" name="" value="Press">
				</td>
			</tr>
		  </table>
  
   <!----End Body---->
		

</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>
