<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		//$event_icon = $_POST['event_icon'];
		//$event_description = $_POST['event_description'];
		if(empty($_FILES['file']['name'])){		
			$filename1 = $_POST['file_old'];
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			// $filename1= compress($folder);
			$filename1 = image_png($folder);
		}
		//update query
			 $date=date("Y-m-d h:i:s");	
			 $eve = "UPDATE event_master SET event_name='$name', event_img='$filename1', event_description = '$type' WHERE id = '".$id."'"; 
                $run = mysqli_query($conn,$eve);
                print_r($run);
                if ($run)
				{	
					$_SESSION['msg2']= "success";
                   header('Location: event_index.php?type='.$type);
                   
				} else 
				{
					$_SESSION['msg2']= "not success";
                   header('Location: event_update.php?type='.$type);
                  
				}	
		}
		
?>	
