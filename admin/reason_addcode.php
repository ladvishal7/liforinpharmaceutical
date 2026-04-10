<?php
session_start(); 
include "connect.php";
if(isset($_POST['submit'])){
	$heading = $_POST['heading'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$description = $_POST['ab_description'];
	$date=date("Y-m-d h:i:s");
	//insert query
	$query=mysqli_query($conn,"insert into reason_master(heading, name , description , is_active , is_deleted , insert_at)values('$heading' ,'$name' , '$description' , 0 , 0 , '$date')")or die(mysqli_error($conn));
	if($query)
	{	
		$_SESSION['msg1']= "success";
		header('location:reason_index.php');
	} else 
	{
		$_SESSION['msg1']= "not success";
		header('location:reason_add.php');
	}	
}
?>	
