<?php 

    setcookie('status', 'true', time()-100, '/');
	header('location: userlogin.html');
?>