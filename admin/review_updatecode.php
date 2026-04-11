<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$id = $_POST['id']?? null;
		$review_name = $_POST['review_name'] ?? null;
		$review_sub = $_POST['review_sub']?? null;
		$filename1 = $_POST['file']?? null;
		$review_text = str_replace("'","&#39;",$_POST['review']?? null);
	// 	if(empty($_FILES['file']['name'])){
				
	// 	 	$filename1 = $_POST['image'];
	// 	}else{	
		
	// 		include "compressfunction.php";	
	// 		$folder="../images/";
	// 		$filename1= compress($folder);
		
    //    }
		//update query
				 $date=date("Y-m-d h:i:s");	
				$eve = "UPDATE review_master SET review_img='$filename1', review_name='$review_name',review_sub='$review_sub',  review_text='$review_text' WHERE id = '".$id."'";
                $run = mysqli_query($conn,$eve);
                // print_r($run);
                if ($run)
				{	
					$_SESSION['msg2']= "success";
                   header('Location: review_index.php');
                 //   echo '<script>location.replace("review_index.php");</script>';  
				} else 
				{
					$_SESSION['msg2']= "not success";
                   header('Location: review_update.php');
                  
				}	
		}
		
?>	
