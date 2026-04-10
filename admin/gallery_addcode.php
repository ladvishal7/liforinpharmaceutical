<?php
session_start();
include "connect.php";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$type = $_SESSION['catid'];
	$description = $_POST['ab_description'];
	include "compressfunction.php";	
	$folder="../images/";
	$filename2= compress($folder);	
	$date=date("Y-m-d h:i:s");
	$query=mysqli_query($conn,"insert into image_master(name,description,img,type,is_active,is_delete,insert_at)values('$name','$description','$filename2','$type',0,0,'$date')")or die(mysqli_error($conn));
	 
	if($query)
		{	
			$_SESSION['msg']= "success";
			header('location:gallery_index.php');
		   
		} else 
		{
			$_SESSION['msg']= "not success";
		  
		}	
}
?>