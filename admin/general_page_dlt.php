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
		
		$select = mysqli_query($conn,"SELECT * FROM general_pages where id = '".$bmid."' ")or die(mysqli_error($conn));
		$f = mysqli_fetch_assoc($select);
		$sm_id = $f['sub_menu_id'];
		
		$eve="update menu_master set is_active = 1 , is_deleted = 1 where id= $sm_id";
		$re = mysqli_query($conn, $eve);
		
		$eve1="update general_pages set is_active = 1 , is_deleted = 1 where sub_menu_id = $sm_id";
		$re1 = mysqli_query($conn, $eve1);
	}
	
	if(isset($_GET['id1']) && isset($_GET['status'])){
		
		$bmid = $_GET['id1'];
		if($_GET['status'] == 0){
			$eve="update menu_master set is_active = 1  where about_id= $sm_id";
			$eve="update general_pages set is_active = 1  where about_id= $sm_id";
		}else{
			$eve="update menu_master set is_active = 0  where about_id= $sm_id";
			$eve="update general_pages set is_active = 0  where about_id= $sm_id";
		}
		$re = mysqli_query($conn, $eve);
	}
		header('Location: general_page_index.php');
?>