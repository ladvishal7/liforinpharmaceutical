<?php
session_start();
	if(!isset($_SESSION['a_id']))
	{
		header('Location: index.php');
		return;
	}
	include("connect.php");
	if(isset($_GET['id'])){
		
	
		$bmid=$_GET['id'];
		// $sid=$_GET['s_id'];
		$eve="update about_us_page set is_active = 1 , is_deleted = 1 where id= $bmid";
		$re = mysqli_query($conn, $eve);
		
		$eve1="update sub_menu_master set is_active = 1 , is_deleted = 1 where id= $bmid";
		$re1 = mysqli_query($conn, $eve1);
	}
	
	if(isset($_GET['id1']) && isset($_GET['status'])){
		
		$bmid = $_GET['id1'];
		if($_GET['status'] == 0){
			$eve="update about_us_page set is_active = 1  where about_id= $bmid";
		}else{
			$eve="update about_us_page set is_active = 0  where about_id= $bmid";
		}
		$re = mysqli_query($conn, $eve);
	}
		header('Location: about_page_index.php');
?>