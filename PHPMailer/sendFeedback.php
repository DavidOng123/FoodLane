<?php
use PHPMailer\PHPMailer\PHPMailer;


require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'p20012446@student.newinti.edu.my'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'LeeZC228811'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('p20012446@student.newinti.edu.my'); // Gmail address which you used as SMTP server
    $mail->addAddress('p20012446@student.newinti.edu.my'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (FeedBack Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for giving us feedback.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      