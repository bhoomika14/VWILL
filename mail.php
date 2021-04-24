<?php
   session_start();
   include("database.php");
   
?>
<?php
   $sql="SELECT * FROM users";
   $result=mysqli_query($db,$sql);
   $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<title>v-will.org</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
	</head>
<body>
<?php 
	if(isset($_POST["sendmessage"]))
{ 
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer(true);
	
	$mail ->isSMTP();
	$mail ->SMTPDebug = 0;
	$mail ->SMTPAuth = true;
	$mail ->SMTPSecure = 'tsl';
	$mail ->Host = "smtp.gmail.com";
	$mail ->Port = 587;
	$mail ->isHTML($isHtml = true);
	$mail ->Username = "bhoomikauday1997@gmail.com";
	$mail ->Password = "gmailgmailgmail@1";
	$mail ->setFrom = $_SESSION["UMAIL"];
	$mail ->Subject = $_POST["sub"];
	$mail ->Body = $_POST["msg"];
    $mail ->addAddress("bhoomikauday1997@gmail.com");
    
    
        if($mail ->Send())
        {				
                $sql="INSERT INTO inbox(UID,MAIL,SUB,MSG)VALUES({$_SESSION["UID"]}, '{$_POST["uemail"]}', '{$_POST["sub"]}', '{$_POST["msg"]}')";
                $db->query($sql); 
                                
            echo '<script>
            swal(
                "Success",
                "Your mail has been successfully sent!",
                "success"

            )
            </script>';
            header("refresh: 2; url=u_enquire.php");
        }
        else{
            echo '<script>swal("Oops!", "Could notsend mail.Try Again!", "error")</script>';
        }
}
?>
</body>
</html>