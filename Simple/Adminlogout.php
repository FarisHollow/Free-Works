<?php 

	
	setcookie('check', 'true', time()-100, '/');
	header('location: adminlogin.html');
?>