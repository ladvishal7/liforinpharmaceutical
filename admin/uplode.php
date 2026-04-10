<?php 
//logo Insert code
    include("connect.php");
    // include("function.php");
    session_start();
    if(isset($_POST["btnsubmit"])){
        $logo = $_FILES["logo_img"]["name"];   
        $logo_type = $_FILES["logo_img"]["type"];   
        $logo_size = $_FILES["logo_img"]["size"];   
        $logo_tmp = $_FILES["logo_img"]["tmp_name"];
        move_uploaded_file($logo_tmp,"images/".$logo);
        $date=date("Y-m-d h:i:s");
        $update = mysqli_query($conn,"UPDATE rasco_logo SET logo_img = '$logo',social_category = 'logo' WHERE logo_id = '".$_SESSION['id']."'");
         // $i = mysqli_query($conn,"INSERT INTO uplode_master(logo_img) VALUES('$logo')")or die(mysqli_error($conn));
        if($update){
         header("location:general_index.php");
            // echo "Inserted ";
        }else{

            echo "Error";
        }
    }
	//social media insert code

    if(isset($_POST['submit'])){

        $sname = $_POST['s_name'];
        $surl = $_POST['s_url'];
        $sicon = $_POST['logo_img'];
    
         $date = date('Y-m-d');

        $insert_social = mysqli_query($conn,"INSERT INTO rasco_logo(logo_img,social_name,social_category,social_url,is_active,is_delete,insert_at) VALUES('$sicon','$sname','social','$surl',0,0,$date)")or die(mysqli_error($conn));

        if($insert_social){
            
            header("location:general_index.php");
        }else{
            echo "Error";
        }
       
    }
//delete social media 
		include("connect.php");
		$a=$_GET['id'];
		$delete=mysqli_query($conn,"update rasco_logo set is_active=1,is_delete=1 where logo_id = '$a'")or die(mysqli_error($conn));
		$_SESSION['social'] = "Deleted";
		header('Location: general_index.php');
    
 //insert contact details
    if(isset($_POST['btncontact'])){

        $cname = $_POST['c_name'];
        $cmap = $_POST['c_map'];
        $cphn = $_POST['c_phno'];
        $cmob = $_POST['c_mobno'];
        $cemail = $_POST['c_email'];
        $cadd = $_POST['c_address'];

        $date = date('Y-m-d');


        $insert_contact = mysqli_query($conn,"INSERT INTO rasco_contact1(c_name,c_map,c_phno,c_mno,c_email,c_address,is_active,is_delete,insert_at) VALUES('$cname','$cmap','$cphn','$cmob','$cemail','$cadd',0,0,'$date')")or die(mysqli_error($conn));

        if($insert_contact){

            // echo "Successfully Run..!!!";
            header("location:general_index.php");
        }else{
            echo "Error";
        }
    }
//contact edit
    if(isset($_POST['btncontactedit'])){
        $cid = $_POST['c_id'];
        $cname = $_POST['c_name'];
        $cmap = $_POST['c_map'];
        $cphn = $_POST['c_phno'];
        $cmob = $_POST['c_mobno'];
        $cemail = $_POST['c_email'];
        $cadd = $_POST['c_address'];

        $date = date('Y-m-d');


        $update_contact = mysqli_query($conn,"UPDATE rasco_contact1 SET c_name = '$cname' ,c_map = '$cmap' ,c_phno = '$cphn',c_mno = '$cmob',c_email = '$cemail',c_address = '$cadd',is_active = 0 ,is_delete = 0 , insert_at = '$date' WHERE c_id = '".$cid."'")or die(mysqli_error($conn));

        if($update_contact){

            // echo "Successfully Run..!!!";
            echo '<script>location.replace("contact_index.php");</script>';
        }else{
            echo "Error";
        }
    }


    //contact details delete
    
     // if(isset($_GET['cid'])){

        // $tbl = "tbl_contact1";
        // $field = "c_id";
        // $tid = $_GET['cid'];

        // delete($tbl,$field,$tid);
        // header("location:general_index.php");
    // }else{

      // echo "Error";
    // }
	include("connect.php");
	$a=$_GET['cid'];
	$delete=mysqli_query($conn,"update rasco_contact1 set is_active=1,is_delete=1 where c_id = '$a'")or die(mysqli_error($conn));
	header('Location: general_index.php');

?>