<?php
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require_once "vendor/autoload.php";
// session_start();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["fname"] .' '. $_POST["lname"];
    $email = $_POST["email"]??'';
    $phone = $_POST['phone']??'';
    $message = $_POST["message"]??'';
    $project_name = $_POST['projectname']??"";

    $subject = $_POST["subject"]??''; 
    
    $type = $_POST['type'] ?? '';

    try{
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com"; // Your SMTP server address
        $mail->SMTPAuth = true;
        $mail->Username = "not.replay2015@gmail.com";//your user name
        $mail->Password = "fwxxzpaighbdkltq";//your password
        $mail->SMTPSecure = "tls"; // 'ssl' if using SSL encryption
        $mail->Port = 587; // Use the appropriate SMTP port
		$mail->isHTML(true); // Set email format to HTML
        $mail->setFrom("lad.vishal7@gmail.com", "website"); // your email  lad.vishal7@gmail.com
        $mail->addAddress('lad.vishal7@gmail.com', 'Website Contact from');                                       
        $mail->Subject = 'Email fom website';
        $mail->Body    = "From : $email <br/>";
        $mail->Body    .= "Name : $name <br/>";
        if(!empty($phone)){
        	$mail->Body    .= "Phone : $phone <br/>";
        }
        if(!empty($project_name)){
            $mail->Body    .= "Person : $project_name <br/>";
        }
        if(!empty($type)){
            $mail->Body    .= "Website Type : $type <br/>";
        }
        if(!empty($subject)){
            $mail->Body    .= "Subject : $subject <br/>";
        }
        $mail->Body    .= "Message : $message <br/>";

        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            // $_SESSION['message'] = 'Mail not send!';
            // return  500;
        } else {
            //echo "Message has been sent successfully";
            //$_SESSION['message'] = 'Mail successfully send!';
			echo '<script>alert("Thank you for contact.");
				location.href="index.html";
				</script>';
            // return  200;
        }
   }catch(Exception $e){
       $_SESSION['message'] = 'Mail not send!';
   }

    
}

?>