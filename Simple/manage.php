
<!DOCTYPE html>
 
 <head>
	 <title>Manage Account</title>
 </head>
  
 <body align="center">
	
		 <h1>Add New Admin</h1><br>
		 
  <center>
		 <form action="managechk.php" method="POST" enctype="">
			 <fieldset>
				 <legend align="center" >Manage here </legend>
				 <table>
					
					 
					 <tr>
						 <td> 
						   
								 Enter New Username:  
								 <input type="text" name="username" placeholder="Enter your Username">
								
								 <br><br>
						   
						 </td>
					 </tr>
  
					 <tr>
						 <td>
							 Date of Birth: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 <input type="date" name="" value="" >
							 
							 <br><br>
						 </td>
					 </tr>
  
					 <tr>
						 <td>
							 Phone Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 <input type="phonenumber" name="phonenumber" placeholder="Enter your phone number">
							 
							 <br><br>
						 </td>
					 </tr>
  
					 <tr>
						 <td>
							 Email: &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 <input type="email" name="email" placeholder="Enter your email">
						  
							 <br><br>
						 </td>
					 </tr>
  
					 <tr>
						 
						 <td>
							 Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								 <input type="radio" name="gender" value="" > Male
								 <input type="radio" name="gender" value="" > Female
								 <input type="radio" name="gender" value="" > other
						 </td>
					 </tr>
  
  
					 <tr>
						 <td>
							 Password:
							 <input type="password" name="password" placeholder="Enter a new password">
				             <input type="password" name="" placeholder="Confirm password">
							 <br><br>
						 </td>
					 </tr>
  
  
  
					 <tr>
						 <td>
						  <input type="submit"  name="submit" value="Submit">
						  <input type="reset"  name="Reset" value="Reset">
						  <a href="adminlogin.html"><input type="Button"  name="Button" value="Check login"></a>
						 </td>
					 </tr>
  
				 </table>
			
		 </fieldset>
			
		 </form>
	 </center>
 </body>
  
 </html>