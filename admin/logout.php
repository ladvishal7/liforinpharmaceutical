<?php
	session_start();
	
	unset($_SESSION['a_id']);
	unset($_SESSION['a_name']);

	session_destroy();			
	header('location:index.php');

?>