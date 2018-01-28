<?php 
include ("php/config.php");


$uname = $_POST["uname"]; 
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$website = $_POST["website"];
$twitter = $_POST["twitter"];
$contact_no = $_POST["contact_no"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (username, name, address, email, website, twitter, contact_no, pwd) VALUES ('$uname', '$name', '$address', '$email', '$website', '$twitter', '$contact_no','$pwd')"));
//  Insert the verification pending page here.
header("location:index.php");


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'projecttestbot@gmail.com';                 // SMTP username
    $mail->Password = 'SAN24ka1996lpprojectbot';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@Evefy.com', 'Evefy Admin');
     $mail->addAddress($email, $name);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thankyou for Registering with Evefy';
    $mail->Body    = '
 
Thanks for signing up!<br>
Your Evefy account has been created, you can login with the registered credentials after your credentials have been verifed by our team. Once your credentials have been verified we will let you know through this email address.<br>
 See you on the other side soon<br>';
 
    $mail->send();
    echo 'An Email has been sent to your email address. Please read it!';
} catch (Exception $e) {
    echo 'Oops! Something broke on our end. We are trying to fix it now.', $mail->ErrorInfo;
}
header("Refresh:5 location:login.php");
?>


 ?>