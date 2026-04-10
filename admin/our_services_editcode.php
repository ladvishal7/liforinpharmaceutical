<?php
session_start(); 
	include 'connect.php';
	// if(!isset($_SESSION['a_id']))
	// {
	// 	header('Location: index.php');
	// }
	
	if(isset($_POST['submit'])){
		$id = $_POST['ser_id'];
		$name = ucwords($_POST['name']);
		$slag = str_replace(' ','_',str_replace("'", "&apos;", str_replace("&", "_", strtolower($_POST['name']))));
		
		$parent_id = $_POST['parent_id']?? 0;
		$video = $_POST['video'] ?? '';
		$text = str_replace("&apos;", "'", $_POST['text']);
		$level = $_POST['level'] ?? 1;
		
		if(!empty($level) && $level == 2){
			$level = 3;
		}elseif(!empty($level)){
			$level = 2;
		}else{
			$level = 1;
		}
		
		if(empty($_FILES['file']['name'])){
			$filename1 = $_POST['image'];
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$filename1= compress($folder);
		}	
		//update query
				 $date=date("Y-m-d h:i:s");	
				$eve = "UPDATE menu_master set name = '$name', slag = '$slag' , parent_id = '$parent_id' ,img = '$filename1',level= '$level' , text = '$text' , video = '$video' , is_active = '0' ,is_deleted = 0 , insert_at = '$date' WHERE id= '".$id."'";
                $run = mysqli_query($conn,$eve);
                // print_r($run);
                if ($run)
				{	
				   $_SESSION['msgg']= "success";		
					header("Location: menu.php?id=$parent_id&level=2");
                   
				} else 
				{
                   $_SESSION['msgg']= "not success";
				   header("location:menu.php?id=$parent_id&level=2");
                  
				}	
}
		
?>	
