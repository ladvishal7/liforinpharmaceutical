<?php
	session_start();
	include "connect.php";

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$description = str_replace("'","&#39;",$_POST['ab_description']);
		include "compressfunction.php";
		$folder = "images/";
		$filename2 = compress($folder);
		$date = date("Y-m-d h:i:s");
		$query = mysqli_query($conn,"insert into sub_menu_master(menu_id, name, link, is_active, is_deleted, insert_at) values(2,'$name','about.php',0,0,'$date')")or die(mysqli_error($conn));

		$l_id = mysqli_query($conn,"select MAX(id) as last from sub_menu_master")or die(mysqli_error($conn));
		$l_id_fetch = mysqli_fetch_assoc($l_id);
		$last = $l_id_fetch['last'];

		$query = mysqli_query($conn,"insert into about_us_page(sub_menu_id, name, description, img, is_active, is_deleted, insert_at) values('$last','$name','$description','$filename2',0,0,'$date')")or die(mysqli_error($conn));

		if($query)
		{
			$_SESSION['msg1']= "success";
			header('location:about_page_index.php');
		} else
		{
			$_SESSION['msg1']= "not success";
		}
	}
?>