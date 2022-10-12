<?php

ob_start();

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$origin = $_POST['origin'];
$email =$_POST['email'];

/*$destination = $_POST['destination'];
$date = $_POST['date'];

$telephone = $_POST['telephone'];
$message = $_POST['message']; */



$to = "ruby.dosanjh814@gmail.com";
$subject ="Mail From Portfolio";
$body ="First Name =". $fname . "\r\n Last Name = " . $lname . "\r\n Origin =" . $origin . "\r\n Email =" . $email;
$headers = "From: ruby@rupinderportfolio.com" . "\r\n";

if($email!=NULL)
{
    mail($to,$subject,$body,$headers);

}
else{
header("Location: thank-you.php");
}
ob_end_flush();
 ?>