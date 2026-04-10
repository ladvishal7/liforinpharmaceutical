<?php
session_start();
include "connect.php";
if(isset($_POST['submit'])){
	$name = ucwords(str_replace("'", "&apos;", $_POST['name']));
	$slug = str_replace(' ','_',str_replace("'", "&apos;", str_replace("&", "_", strtolower($_POST['name']))));
	$parent_id = $_POST['parent_id']?? 0;
	$video = $_POST['video'] ?? '';
	$level = $_POST['level'] ?? 1;
	$text = str_replace("&apos;", "'", $_POST['text']);
	
	// if(!empty($level) && $level == 2){
	// 	$level = 3;
	// }elseif(!empty($level)){
	// 	$level = 2;
	// }else{
	// 	$level = 1;
	// }


	include "compressfunction.php";	
	$folder="../images/";
	$filename1= compress($folder);

	$date=date("Y-m-d h:i:s");
	$query=mysqli_query($conn,"insert into menu_master (name , link , slag , parent_id , img , level , is_active , is_deleted , insert_at,video,text)values('$name' , 'sub-category.php' , '$slug' , '$parent_id'  ,'$filename1' ,'$level' , 0 , 0 , '$date','$video','$text')");
	 
	if($query)
		{	
			$_SESSION['msg']= "success";
			header("location:menu.php?id=$parent_id&level=2");
		   
		} else 
		{
			$_SESSION['msgg']= "not success";
			header("location:menu.php?id=$parent_id&level=2");
		  
		}	
}
?>