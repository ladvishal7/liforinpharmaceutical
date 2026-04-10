<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$offie_address ='';
		$contact_name = '';
		$map = '';
		$contact_name = '';
		$id = $_POST['id'] ?? '';
		$contact_name = $_POST['contact_name']?? '';
		$contact_details =  str_replace("'","&#39;",$_POST['contact_details'] ?? '');
		$offie_address = (!empty($_POST['offie_address']))?str_replace("'","&#39;", $_POST['offie_address']): '';
		$business_hour =  str_replace("'","&#39;",$_POST['business_hour'] ?? '');
		$map =  (!empty($_POST['map']))? str_replace("'","&#39;",$_POST['map']) : '';
		//update query
				 $date=date("Y-m-d h:i:s");	
				$eve = "UPDATE contact_master SET name='$contact_name', description='$contact_details', offie_address = '$offie_address' , business_hour = '$business_hour', map = '$map' WHERE id = '".$id."'";
                $run = mysqli_query($conn,$eve);
                // print_r($run);
                if ($run)
				{	
					$_SESSION['msg2']= "successfully updated!";
                   //header('Location: contact_index.php');
                   echo '<script>location.replace("contact_index.php");</script>';
				} else 
				{
					$_SESSION['msg2']= "not update";
                   header('Location: contact_update.php');
                  
				}	
		}
		
?>	
