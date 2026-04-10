<?php
session_start(); 
include "connect.php";
if(isset($_POST['submit'])){
	$title = $_POST['title'];
	$year = $_POST['year'];
	$decription = $_POST['decription'];
	$date=date("Y-m-d h:i:s");
	
	include "compressfunction.php";	
	$folder="../images/";

	$filename2= image_png($folder);

	$icon = file2($folder);
	//insert query
	$query=mysqli_query($conn,"insert into history(title, decription, icon, year, img, is_active, is_deleted, insert_at) values('$title', '$decription', '$icon', '$year', '$filename2', 0, 0, '$date')")or die(mysqli_error($conn));
	if($query)
	{	
		$_SESSION['msg1']= "success";
		header('location:history_index.php');
	} else 
	{
		$_SESSION['msg1']= "not success";
	}	
}
?>	
