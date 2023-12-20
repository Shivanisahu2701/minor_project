<?php 

use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    //Load Composer's autoloader
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    require 'phpmailer/src/Exception.php';
    
    //Create an instance; passing true enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
                          
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'shivanisahu2701@gmail.com';                     //SMTP username
        $mail->Password   = 'jdwe mypb pogy kcxe';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
    
        //Recipients
        $mail->setFrom('shivanisahu2701@gmail.com', 'visit schedule');
        $mail->addAddress('shivanisahu2701@gmail.com');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = ' Hostel Visit Scedule Form';
        $mail->Body    = "Sender Name- $name<br> Sender Email-$email<br> Sender Subject-$subject<br> Sender Message-$message";
        $mail->send();
        echo 
        "
        <script>
        alert('Sent Successfully');
        document.location.href='index.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }

?>