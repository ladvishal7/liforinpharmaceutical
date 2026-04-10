<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'] ?? '';
		//$event_icon = $_POST['event_icon'];
		$event_description = $_POST['event_description'];
		
		include "compressfunction.php";	
		if(empty($_FILES['file']['name'])){		
			$filename1 = $_POST['file_old'] ?? '';
		}else{	
			$folder="../images/";
			$filename1= compress($folder);
		}
		
		if(empty($_FILES['icon']['name'])){		
			$icon = $_POST['icon_old'] ?? '';
		}else{	
			$folder="../images/";
			$icon = icon($folder);
		}
		//update query
			 $date=date("Y-m-d h:i:s");	
			 $eve = "UPDATE news_master SET news_name='$name' , news_description = '$event_description', news_img='$filename1' ,news_caption = '$icon' WHERE id = '".$id."'";
			//  print_r($eve); exit;	
                $run = mysqli_query($conn,$eve);
                if ($run)
				{	
					$_SESSION['msg2']= "success";
                   header('Location: service_index.php');
                   
				} else 
				{
					$_SESSION['msg2']= "not success";
                   header('Location: service_update.php');
                  
				}	
		}
		
?>	
