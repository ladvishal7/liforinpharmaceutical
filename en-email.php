<?php
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require_once "vendor/autoload.php";
// session_start();
// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"]?? '';
    $email = $_POST["email"]??'';
    $phone = $_POST['phone']??'';
    $message = $_POST["message"]??'';
    $service = $_POST['service']??"";
    $location = $_POST["location"]??''; 
    
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $special_hours = $_POST['special_hours'] ?? '';
    $address = $_POST['address'] ?? '';
    $city = $_POST['city'] ?? '';
    $zip = $_POST['zip'] ?? '';

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
        $mail->setFrom("info@liforinpharmaceutical.com", "website"); // your email  
        $mail->addAddress('info@liforinpharmaceutical.com', 'Website Enquiry from');                                       
        $mail->Subject = 'Email fom website';
        $mail->Body    = "From : $email <br/>";
        $mail->Body    .= "Name : $name <br/>";
        if(!empty($phone)){
        	$mail->Body    .= "Phone : $phone <br/>";
        }
        if(!empty($service)){
            $mail->Body    .= "Service : $service <br/>";
        }
        if(!empty($location)){
            $mail->Body    .= "Location : $location <br/>";
        }
        if(!empty($date) || !empty($time)){
            $mail->Body    .= "Date : $date Time : $time <br/>";
        }
        if(!empty($special_hours)){
            $special_hours = $special_hours ?? [];
            // convert array to string
            $special_hours_text = implode(', ', $special_hours);
            $mail->Body    .= "Special Hours and Access : $special_hours_text  <br/>";
        }
        if(!empty($address)){
            $mail->Body    .= "Address : $address  <br/>";
        }
        if(!empty($city)){
            $mail->Body    .= "City : $city  <br/>";
        }
        if(!empty($zip)){
            $mail->Body    .= "Zip : $zip  <br/>";
        }
        $mail->Body    .= "Additional Details : $message <br/>";

        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            // $_SESSION['message'] = 'Mail not send!';
            // return  500;
        } else {
            //echo "Message has been sent successfully";
            //$_SESSION['message'] = 'Mail successfully send!';
			echo '<script>alert("Thank you for contact.");
				location.href="index";
				</script>';
            // return  200;
        }
   }catch(Exception $e){
       $_SESSION['message'] = 'Mail not send!';
   }

    
}

?>