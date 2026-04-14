<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require_once "vendor/autoload.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== 0) {
            die("File upload error.");
        }

        $file = $_FILES['resume'];

        $allowedMimeTypes = [
            'application/pdf',
            'image/jpeg',
            'image/jpg',
            'image/png',
        ];

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime  = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mime, $allowedMimeTypes)) {
            die("Only PDF, JPG, PNG files are allowed.");
        }

        if ($file['size'] > 5 * 1024 * 1024) {
            die("File size must be less than 5MB.");
        }

        $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png'];
        $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($fileExt, $allowedExtensions)) {
            die("Invalid file extension.");
        }

        if (preg_match("/\.(php|php\d|phtml|phar)/i", $file['name'])) {
            die("Malicious file detected.");
        }

        $newFileName = bin2hex(random_bytes(16)) . '.' . $fileExt;

        $uploadDir = __DIR__ . '/cv_upload/';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $destination = $uploadDir . $newFileName;

        // ✅ Move uploaded file
        if (move_uploaded_file($file['tmp_name'], $destination)) {
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
                    $mail->setFrom("info@liforinpharmaceutical.com", "website"); // your email   info@liforinpharmaceutical.com
                    $mail->addAddress('info@liforinpharmaceutical.com', 'Website Careers Page');                                       
                    $mail->Subject = 'Email from Careers';
                    $mail->Body    = "Open CV : http://localhost/php/liforinpharmaceutical/cv_upload/$newFileName ";

                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                        // $_SESSION['message'] = 'Mail not send!';
                        // return  500;
                    } else {
                         echo '<script>alert("File uploaded successfully!.");
                            location.href="index";
                            </script>';
                    }
            }catch(Exception $e){
                $_SESSION['message'] = 'Mail not send!';
            }
           
        } else {
             echo '<script>alert("Failed to upload file.");
				location.href="careers";
				</script>';
        }
    }