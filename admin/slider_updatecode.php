<?php
	session_start(); 
	
	include 'connect.php';
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$header = $_POST['header']?? '';;
		// $description = $_POST['description'] ?? '';
		$caption = $_POST['caption'] ?? '';
		$youtube = $_POST['youtube'] ?? '';
		$link = $_POST['link'] ?? '';
		
		if(empty($_FILES['file']['name'])){	
		 	$filename1 = $_POST['image'];
		}else{	
			include "compressfunction.php";	
			/*$destination_url = "../images/";
			$folder="../images/";
			$filename1 = image_png($folder);*/
			$folder = "../images/";
			$filename1= compress($folder);
       }
		//update query
				 $date=date("Y-m-d h:i:s");	
				$eve = "UPDATE slider_master SET img='$filename1', header='$header',  caption='$caption', youtube = '$youtube' , link='$link', is_active = '0' , is_deleted = 0 , insert_at= '$date' WHERE id = '".$id."'";
                $run = mysqli_query($conn,$eve);
                // print_r($run);
                if ($run)
				{	
					$_SESSION['msg2']= "success";
                 //  header('Location: slider_index.php');
                    echo '<script>location.replace("slider_index.php");</script>';  
                   
				} else 
				{
					$_SESSION['msg2']= "not success";
                   header('Location: slider_update.php');
                  
				}	
		}
		
?>	
