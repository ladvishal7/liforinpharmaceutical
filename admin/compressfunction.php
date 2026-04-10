<?php  
// Header('Content-type: image/png');
function compress($folder) { 
	$image_temp=$_FILES['file']['tmp_name'];
	//echo "<script>alert(".$image_temp.");</script>";
	$allowedExts = array("gif","GIF", "jpeg","JPEG", "jpg", "JPG", "png", "PNG", "pjpeg", "PJPEG", "x-png", "X-PNG");
	$temp1 = explode(".", $_FILES["file"]["name"]);
	$extension1 = end($temp1);
	
	// REMOVE EXTRA CHARACTER OR SYMBOLE FROM FILE NAME 
						
	$basename=basename($_FILES['file']['name']);

	$filename=pathinfo($basename,PATHINFO_FILENAME);
	$ext=pathinfo($basename,PATHINFO_EXTENSION);

	//replace all these characters with an hyphen
	$repar=array(".",","," ",";","_","'","\\","\"","/","(",")","?");

	$repairedfilename=str_replace($repar,"-",$filename);
		$cleanfilename=$repairedfilename.".".strtolower($ext);
	
	// IMAGE COMPRESSER

	$ext = pathinfo($cleanfilename, PATHINFO_EXTENSION); // Getting image extension

	if((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png") && in_array($extension1, $allowedExts)))// checking image extension
	{
		if( $ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='JPEG'|| $ext=='pjpeg'|| $ext=='PJPEG')
		{
			$src=imagecreatefromjpeg($image_temp);
		}
		if( $ext=='png' || $ext=='PNG'|| $ext=='x-png'|| $ext=='X-PNG')
		{
			$src = imagecreatefrompng($image_temp);
			// imagealphablending ($src, false);
			// imagesavealpha ($src, true);
			// imagecolortransparent ($src);
		}
		if( $ext=='gif' || $ext=='GIF')
		{
			$src=imagecreatefromgif($image_temp);
		}
		list($width_min,$height_min)=getimagesize($image_temp);	//fetching original image width and height
			
		$newwidth_min=2000;	// set compressing image width
		
		$newheight_min=($height_min / $width_min) * $newwidth_min;	//equation for compressed image height
		
		$tmp_min = imagecreatetruecolor($newwidth_min, $newheight_min);	// create frame for compress image
		
		imagecopyresampled($tmp_min, $src, 0,0,0,0,$newwidth_min, $newheight_min, $width_min, $height_min);	// compressing image	
		$filename1 = date("YmdHis").$cleanfilename;
		imagejpeg($tmp_min,$folder.''.$filename1, 80);	//copy image in folder
		return $filename1;
	}
}




function compress_multiple($folder,$key) { 
	$image_temp=$_FILES['file']['tmp_name'][$key];
	//echo "<script>alert(".$image_temp.");</script>";
	$allowedExts = array("gif","GIF", "jpeg","JPEG", "jpg", "JPG", "png", "PNG", "pjpeg", "PJPEG", "x-png", "X-PNG");
	$temp1 = explode(".", $_FILES["file"]["name"][$key]);
	$extension1 = end($temp1);
	
	// REMOVE EXTRA CHARACTER OR SYMBOLE FROM FILE NAME 
						
	$basename=basename($_FILES['file']['name'][$key]);

	$filename=pathinfo($basename,PATHINFO_FILENAME);
	$ext=pathinfo($basename,PATHINFO_EXTENSION);

	//replace all these characters with an hyphen
	$repar=array(".",","," ",";","_","'","\\","\"","/","(",")","?");

	$repairedfilename=str_replace($repar,"-",$filename);
		$cleanfilename=$repairedfilename.".".strtolower($ext);
	
					// IMAGE COMPRESSER

	$ext = pathinfo($cleanfilename, PATHINFO_EXTENSION); // Getting image extension

	if((($_FILES["file"]["type"][$key] == "image/gif") || ($_FILES["file"]["type"][$key] == "image/jpeg") || ($_FILES["file"]["type"][$key] == "image/jpg") || ($_FILES["file"]["type"][$key] == "image/pjpeg") || ($_FILES["file"]["type"][$key] == "image/x-png") || ($_FILES["file"]["type"][$key] == "image/png") && in_array($extension1, $allowedExts)))// checking image extension
	{
		if( $ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='JPEG'|| $ext=='pjpeg'|| $ext=='PJPEG')
		{
			$src=imagecreatefromjpeg($image_temp);
		}
		if( $ext=='png' || $ext=='PNG'|| $ext=='x-png'|| $ext=='X-PNG')
		{
			$src=imagecreatefrompng($image_temp);
		}
		if( $ext=='gif' || $ext=='GIF')
		{
			$src=imagecreatefromgif($image_temp);
		}
		list($width_min,$height_min)=getimagesize($image_temp);	//fetching original image width and height
		
		$image_info = getimagesize($_FILES["file"]["tmp_name"][$key]);
		$image_width = $image_info[0];
		$image_height = $image_info[1];
		
		$newwidth_min=$image_width;	// set compressing image width
		
		$newheight_min=($height_min / $width_min) * $newwidth_min;	//equation for compressed image height
		
		$tmp_min = imagecreatetruecolor($newwidth_min, $newheight_min);	// create frame for compress image
		
		imagecopyresampled($tmp_min, $src, 0,0,0,0,$newwidth_min, $newheight_min, $width_min, $height_min);	// compressing image	
		$filename1 = date("YmdHis").$cleanfilename;
		imagejpeg($tmp_min,$folder.''.$filename1, 80);	//copy image in folder
		return $filename1;
	}
}


function image_png($folder){
	// $target_dir = "images/";
	$target_file = $folder.basename($_FILES["file"]["name"]);
	move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
	return basename($_FILES["file"]["name"]);
}
function file2($folder){
	// $target_dir = "images/";
	$target_file = $folder.basename($_FILES["file2"]["name"]);
	move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
	return basename($_FILES["file2"]["name"]);
}
function icon($folder){
	// $target_dir = "images/";
	$target_file = $folder.basename($_FILES["icon"]["name"]);
	move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file);
	return basename($_FILES["icon"]["name"]);
}

?>					