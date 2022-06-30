<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIVID</title>
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
						
					    <a href="userlogout.php"> Logout-></a>
					
					</td>
			 </tr>
			 </table>
		 </td>
	</tr>
  </table>
  <!-- End Header -->

  <!-- Start Body -->
 
	
			 
			
					
						 <h1 align="center">
							
							 Welcome to Vivid
						
						</h1>
						 
						<h2 align="center">A business to consummer social media platform</h2>
					
					
						
					   
					
			
		 
		  <table border="2" width="30%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Admin: </td>
			    
				<td>
					<a href="adminlogin.html"><input type="Button" name="" value="Go"></a>
				</td>
			</tr>
		  </table>
		  <table border="2" width="20%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Moderator:</td>
			    
				<td>
					<a href=""><input type="Button" name="" value="Go"></a>
				</td>
			</tr>
		  </table>
		  <table border="1" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Buyer:</td>
			    
				<td>
                <a href=""><input type="Button" name="" value="Go"></a>
				</td>
			</tr>
		  </table>
          <table border="1" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Seller:</td>
			    
				<td>
                <a href=""><input type="Button" name="" value="Go"></a>
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
