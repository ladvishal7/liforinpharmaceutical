<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$heading = ucwords($_POST['heading']);
		$title = str_replace(' ','_',strtolower($_POST['heading']));
		$category = $_POST['category'] ?? 0; 
		$text = str_replace("'","&#39;",$_POST['description']?? 0);
		$location = str_replace("'","&#39;",$_POST['location']?? 0);
		/* $pdate = date('Y-m-d',strtotime($_POST['date']));
		$fabrics = $_POST['fabrics'];
		$size = $_POST['size']; */
		
		// pdf & docx file upload code
		/*$allowedExts = array("pdf");
		$tmp = explode(".", $_FILES["pdf"]["name"] ?? 0);
		$extension = end($tmp);
		$fabrics = $_FILES["pdf"]["name"]?? 0;*/
		
		/* if ($_FILES["file"]["size"] < 5000000) { // 5 MB limit
			if ($_FILES["file"]["error"] > 0) {
				echo "Error: " . $_FILES["file"]["error"] . "<br>";
			} else {
				if (file_exists("../images/" . $_FILES["file"]["name"])) {
					echo $_FILES["file"]["name"] . " already exists. ";
				} else {
					move_uploaded_file($_FILES["file"]["tmp_name"], "../images/" . $_FILES["file"]["name"]);
					echo "File uploaded successfully.";
				}
			}
		} else {
			echo "File size exceeds 5 MB limit.";
		} */
		// print_r( ($_FILES["pdf"]["size"] < 5000000));exit;
		/*if (($_FILES["pdf"]["type"] == "application/pdf") && ($_FILES["pdf"]["size"] < 5000000) && in_array($extension, $allowedExts))   
		{
			if ($_FILES["pdf"]["error"] > 0)
			{
				//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
				$_SESSION['msg1']= "Return Code: " . $_FILES["pdf"]["error"] . "<br>";
				header('Location: project.php');
			}
			else
			{
				move_uploaded_file($_FILES["pdf"]["tmp_name"], "../images/".$_FILES["pdf"]["name"]);
			}
		}else {
			//echo "File size exceeds 5 MB limit.";
			$_SESSION['msg1']= "PDF File size exceeds 5 MB limit.<br>";
			echo '<script>location.replace("project.php");</script>';
		}*/

		/*$allowedExts = array( "doc", "docx");
		$extension = end(explode(".", $_FILES["docx"]["name"]));
		$size = $_FILES["docx"]["name"] ?? 0;
		if (($_FILES["docx"]["size"] < 5000000) && in_array($extension, $allowedExts))
		{
			if ($_FILES["docx"]["error"] > 0)
			{
				//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
				$_SESSION['msg1']= "Return Code: " . $_FILES["docx"]["error"] . "<br>";
				header('Location: activitie.php');
			}
			else
			{
				move_uploaded_file($_FILES["docx"]["tmp_name"], "../images/".$_FILES["docx"]["name"]);
			}
		}else {
			//echo "File size exceeds 5 MB limit.";
			$_SESSION['msg1']= "Docx File size exceeds 5 MB limit.<br>";
			echo '<script>location.replace("activitie.php");</script>';
		}*/



		include "compressfunction.php";	
		$folder="../images/";
		$filename1= compress($folder);
		$date=date("Y-m-d h:i:s");


		$folder="../images/";
		// $filename2 = file2($folder) ?? '';
		$filename2 =  '';

		// $icon = icon($folder) ?? '';
		$icon =  '';
		 $size = '';
		$eve = "INSERT INTO activitie_master ( name, heading , description , location , fabrics , size ,  fichimg , category ,url, is_active , is_deleted , insert_at)VALUES('$title' , '$heading' , '$text' ,  '$location',  '$filename2' , '$size' , '$filename1' , '$category', '$icon' , '0' , '0' , '$date') ";
		$run = mysqli_query($conn,$eve);
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
		//	header('Location: activitie.php');
		    echo '<script>location.replace("activitie.php");</script>';
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: activitie.php');
		  
		}	
	}
?>	
