<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['ab_id'] ?? null;
		$title = str_replace(' ','_',strtolower($_POST['heading']));
		$heading = ucwords($_POST['heading']);
		$category = $_POST['category'] ?? null;
		$text = str_replace("'","&#39;",$_POST['text'] ?? null);
		$location = str_replace("'","&#39;",$_POST['location'] ?? null);
		/* $pdate = date('Y-m-d',strtotime($_POST['date']));
		$fabrics = $_POST['fabrics'];
		$size = $_POST['size']; */
		
		// pdf & docx file upload code
		/*if(empty($_FILES['pdf']['name'])){
			$pdf = $_POST['pdf_old'] ?? null ;
		}else{
			$allowedExts = array("pdf");
			$extension = end(explode(".", $_FILES["pdf"]["name"]));
			$pdf = $_FILES["pdf"]["name"];
			
			if (($_FILES["pdf"]["type"] == "application/pdf") && ($_FILES["pdf"]["size"] < 5000000) && in_array($extension, $allowedExts))
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
			}
		}*/

		/*if(empty($_FILES['docx']['name'])){
			$docx = $_POST['docx_old'] ?? null;
		}else{
			$allowedExts = array( "doc", "docx");
			$extension = end(explode(".", $_FILES["docx"]["name"]));
			$docx = $_FILES["docx"]["name"];
			if (($_FILES["docx"]["size"] < 5000000) && in_array($extension, $allowedExts))
			{
				if ($_FILES["docx"]["error"] > 0)
				{
					//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
					$_SESSION['msg1']= "Return Code: " . $_FILES["docx"]["error"] . "<br>";
					header('Location: project.php');
				}
				else
				{
					move_uploaded_file($_FILES["docx"]["tmp_name"], "../images/".$_FILES["docx"]["name"]);
				}
			}else {
				//echo "File size exceeds 5 MB limit.";
				$_SESSION['msg1']= "Docx File size exceeds 5 MB limit.<br>";
				echo '<script>location.replace("project.php");</script>';
			}
		}*/
	
		if(empty($_FILES['file']['name'])){
			$filename1 = $_POST['image'];
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$filename1= compress($folder);
		}


		if(empty($_FILES['file2']['name'])){
			$filename2 = $_POST['file2_old'] ?? '';
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$filename2 = file2($folder);
		}

		if(empty($_FILES['icon']['name'])){
			$icon = $_POST['icon_old']?? '';
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$icon = icon($folder);
		}

		$docx = '';
		$eve = "UPDATE activitie_master set  name = '$title', heading = '$heading', description = '$text', location = '$location', fabrics = '$filename2' , size = '$docx' , fichimg = '$filename1' , category = '$category', is_active = '0', url = '$icon' , is_deleted = 0 WHERE id= '".$id."'";
		// echo $eve; exit;
		$run = mysqli_query($conn,$eve);
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header('Location: activitie.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: activitie.php');
		  
		}	
	}
?>	
