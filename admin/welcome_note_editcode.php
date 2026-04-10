<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['ab_id'];
		$title = $_POST['title'];
		$link = $_POST['link'];
		$text = str_replace("'","&#39;",$_POST['text']);
		$filename1 = [];
		//  print_r($_FILES['file']['name'][0] );
		if($_FILES['file']['name'][0] != ''){
		
			// print_r($_FILES['file']['name']); exit;
			include "compressfunction.php";	
			foreach($_FILES['file']['name'] as $key=>$file){
				$folder="../images/";
				$filename1[] = compress_multiple($folder,$key);
				
			}
			$filename1 = json_encode($filename1);
			$eve = "UPDATE welcome_note_master set title = '$title', text = '$text', img = '$filename1' , link = '$link' , is_active = 0 ,is_deleted = 0 WHERE id= '".$id."'";
			$run = mysqli_query($conn,$eve);
		}else{
			// $filename1[] = $_POST['image'];	
			$eve = "UPDATE welcome_note_master set title = '$title', text = '$text', link = '$link',  is_active = 0 ,is_deleted = 0 WHERE id= '".$id."'";
			$run = mysqli_query($conn,$eve);
		}
		
		//$filename1 = json_encode($filename1);
		
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header('Location: welcome_note.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: welcome_note.php');
		  
		}	
	}
?>	
