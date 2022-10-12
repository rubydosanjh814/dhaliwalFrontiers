<?php
$user = 'root';
$pass = '';
$db ='customers';

$db = new mysqli('localhost',$user,$pass,$db) or die();
mysqli_select_db($db,'customers');

//echo"done";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </-- stylesheets -->
    <link rel= "stylesheet"  type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <title>Contact Us | DhaliwalFrontiers.com</title>
</head>


<body>
    
<div class="site">
    <?php include 'header.php'; ?> 
    <main>
    <div class="inner-page-sub-header">
        <h1>Contact Us</h1>

    </div>

    <div class="contact-us">


    <div class ="contact-us-left">
    <img src="contact-us.jpg">

    </div>

    
    <div class ="contact-us-right">
    <?php
    if(isset($_GET['error'])){
   if($_GET['error']=="emptyinput"){
	   echo'<p class ="error-msg">*Please fill all fields.</p>';
   }
   elseif($_GET['error']=="invalidmail"){
	echo'<p class ="error-msg">*Please enter valid email</p>';
   }
   elseif($_GET['error']=="sqlerror2"){
	echo'<p class ="error-msg">*Something went wrong.</p>';
   }
   elseif($_GET['error']=="sucess"){
	echo'<p class ="error-msg">*Message sent.</p>';
   }

}
?>
<div class="contact-us-form">
    <form action = "contact-us.php" method="post">

      <p>  <lable for="fname" class="form-lable">First Name<span class="required">*</span>:</lable>
        <input type="text"  class="form-fields" id ="fname" name ="firstname" placeholder="Your Name.."></p>
   
        <p><lable>Last Name:</lable>
   <input type="text" class="form-fields"  name ="lastname" placeholder="Your Last Name.."></p>
   
  <p> <lable>Origin<span class="required">*</span>:</lable>
   <input type="text"  name ="origin"  class="form-fields" Placeholder= "Origin of load.."></p>

  <p> <lable>Destination<span class="required">*</span>:</lable>
   <input type="text"  name ="destination" class="form-fields" Placeholder= "Destination of load.."></p>

   <p> <lable>Date<span class="required">*</span>:</lable>
   <input type="Date"  name ="date" class="form-fields" Placeholder= "Date of delivery.."></p>


   <p> <lable>Email<span class="required">*</span>:</lable>
   <input type="email"  name ="email" class="form-fields" Placeholder= "your email.."></p>

   <p><lable>Telephone<span class="required">*</span>:</lable>
   <input type="tel"  name="telephone"   class="form-fields" Placeholder= "xxx-xxx-xxxx"></p>

  <p> <label>Message:</label>
   <textarea  name ="message" class="form-fields" placeholder ="Tell us your worries about load..."
   style ="height:150px"></textarea></p>

   <p><input class="submit" type="submit"  name="submit-btn" value ="Submit">
   
   </p>
    </form>
    </div>
     <?php

    if(isset($_POST['submit-btn']))
    {

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$date = $_POST['date'];
$email =$_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];



$to = "kaur.dosanjh123@gmail.com";
$subject ="text";
$body ="gytt";
// $body ="";
//$body .= "From: ".$fname. "\r\n";
//$body .= "Phone: ".$telephone. "\r\n";
//$body .= "Origin: ".$origin. "\r\n";
//$body .= "Destination: ".$destination. "\r\n";
//$body .= "Message: ".$message. "\r\n";
//$header = "From: kaur.dosanjh123@gmail.com";

if($fname=="" ||  $origin=="" || $destination=="" ||$telephone==""||$email=="" ||$date="")
{
    header("Location: ./contact-us.php?error=emptyinput&telephone=".$telephone,"&Email=".$email);
    echo"* Please fill  required fields"; 
    exit();     
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location: ./contact-us.php?error=invalidmail&email=".$email);
    exit();
}




else
{
/*$query="insert into customer_data  values('$fname','$lname','$origin','$destination','$date','$email','$telephone','$message')";
$query_run=mysqli_query($db,$query);*/


$sql="INSERT INTO customer_data (fname,lname,origin,destination,date,email,telephone,message) VALUES(?,?,?,?,?,?,?,?)";
$stmt= mysqli_stmt_init($db);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ./contact-us.php?error=sqlerror2");
    exit();
   }
   else{    
    mysqli_stmt_bind_param($stmt,"ssssssss",$fname,$lname,$origin,$destination,$date,$email,$telephone,$message);
    mysqli_stmt_execute($stmt);
    header("Location: ./contact-us.php?error=sucess");
    exit();
   }
}


/*if(mail($to,$subject,$body,$header))
{
echo"mail sent";
}
else{
    echo"data not sent";
}

if($query_run)
{
    echo"Message Sent";
}
else{
    echo"Error";
}*/

}
     ?>
     </div>
     </div>
    </main>
    
    <?php include 'footer.php'; ?>
    </div>

</body>
</html>