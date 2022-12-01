<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit1'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$occu=$_POST['occu'];
$number=$_POST['number'];
$insurance=$_POST['insurance'];
$gender=$_POST['gender'];
$find=$_POST['find'];
$package=$_POST['Membership'];
$checkbox=$_POST['checkbox'];
$surgery=$_POST['surgery'];
$else=$_POST['else'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  //SMTP Settings
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "fitnessempire1998@gmail.com"; //enter you email address
  $mail->Password = 'Ashishdd@19'; //enter you email password
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  //Email Settings
  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress("fitnessempire1998@gmail.com"); //enter you email address
  $subject="MEMBERSHIP APPLICATION";
  $mail->Subject = $subject;
  $message="<b>MEMBERSHIP APPLIED DETAILS</b> <br /> <br /> NAME : ".$name."<br /><br />"."EMAIL : ".$email."<br /><br />"."PHONE : ".$number."<br /><br />"."OCCUPATION : ".$occu."<br /><br />"."INSURANCE : ".$insurance."<br /><br />"."GENDER : ".$gender."<br /><br />"."How did you find out about the gym? : ".$find."<br /><br />"."MEMBERSHIP : ".$package."<br /><br />"."EVER HAPPEND : ".$checkbox."<br /><br />".
  "Have you had surgery in the last 5 years : ".$surgery."<br /><br />"."ANYTHING ELSE : ".$else."<br /><br />";
  $mail->Body = $message;

  if ($mail->send())
  {
      $status = "success";
      $response = "Email is sent!";
      header('Location: index.php');
    }
    else {
      $status = "failed";
      $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
  }
  exit(json_encode(array("status" => $status, "response" => $response)));
}
