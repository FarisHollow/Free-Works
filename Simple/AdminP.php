<?php 
	session_start();
	if(isset($_COOKIE['status'])){
		$file = fopen('admin.txt', 'r');
	
		while (!feof($file)) {
			$data = fgets($file);
			$user = explode("|", $data); 
			 
				$userName = trim($user[0]);
				
				
				break;
			}

				
		
?>


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

					<td width="50%">&nbsp;</td>

					<td>
           	   	  
           	          <a href="Profile.php"> Profile </a>
           	    
           	        </td>
					   <td>
           	   	  
					   <a href="addmember.html">Add Members</a>
				  
					  </td>

					   <td>
           	   	  
						<a href="Productlist.html"> Orders </a>
				  
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
 
	
			 
			
					
						 <h1 align="center">
							
							 Welcome back, Mr <?php echo '<h2 align="center">' . $userName . '!!</h2>'; ?>
						
						</h1>
						 
						<h2 align="center">To Admin panel</h2>
					
					
						
					   
					
			
		 
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
			
				<td>View Admin Members:</td>
			    
				<td>
					<a href="viewadmem.html"><input type="Button" name="" value="Press"></a>
				</td>
			</tr>
		  </table>
		  <table border="1" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>View Users:</td>
			    
				<td>
					<a href="viewuser.html"><input type="Button" name="" value="Press"></a>
				</td>
			</tr>
		  </table>
		  <table border="0" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
			
			    
				<td>
				<a href="main.php"> <input type="button" name="button" value="Back to Main Menu"></a>
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
