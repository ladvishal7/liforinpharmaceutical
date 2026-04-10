<?php 
    session_start();
	if(!empty($_SESSION['a_id']))
    {
        header('Location: dashboard.php');
    }
    include('connect.php');
    if(isset($_POST['submit'])){
        $username = filter_var(trim(strip_tags($_POST['a_name'])),FILTER_SANITIZE_STRING);
        $password = filter_var(trim(strip_tags($_POST['a_password'])),FILTER_SANITIZE_STRING);
         $loginquery = mysqli_query($conn,"SELECT * FROM admin_master WHERE a_name = '$username' AND a_password= '$password'  ")or die(mysqli_error($conn));
        //print_r($select_login);
        if(mysqli_num_rows($loginquery) > 0){
			header("location:dashboard.php");
  
            while($f = mysqli_fetch_assoc($loginquery)){
					$_SESSION['a_id'] = $f['a_id'];
					$_SESSION['a_name'] = $f['a_name'];
					$_SESSION['a_type1'] = $f['a_category'];
					header("location:dashboard.php");
            }
        }else{
			
          echo "<script>alert('Invalid UserName & Password!'); location.href='index.php';</script>";
        }
		/*if($_SESSION['a_type1']=='admin')
		{
			header("location:dashboard.php");
		}
		else if($_SESSION['a_type1']=='super'){
			header("location:general_index.php");
		}*/
       
    }
    

?>