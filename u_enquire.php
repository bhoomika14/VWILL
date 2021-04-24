<?php
   session_start();
   include("database.php");
   
?>
<?php
   if(!isset($_SESSION["UID"]))
   {
	   header("Location: ulogin.php");
   }
  
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
	<?php
	if(isset($_POST["sendmessage"]))
{
	require 'PHPMailerAutoload.php';
    require 'credential.php';
$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'EMAIL';                 // SMTP username
$mail->Password = 'PASS';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['uemail'], 'VWILL');
$mail->addAddress('bhoomikauday1997@gmail.com');     // Add a recipient(To:)
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($_POST['uemail']);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['sub'];
$mail->Body    = $_POST['msg'];
//$mail->AltBody = ;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
	
}
?>
	<body class="contact is-preload">
		<div id="page-wrapper">

			

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-envelope"></span>
						<h2>Have any queries regarding any activities?</h2>
						<p>We would love to hear from you!</p>
					</header>
					<?php
                        if(isset($_POST["sendmessage"]))
                        { 
                            $sql="INSERT INTO inbox(UID,MAIL,SUB,MSG)VALUES({$_SESSION["UID"]}, '{$_POST["uemail"]}', '{$_POST["sub"]}', '{$_POST["msg"]}')";
                            $db->query($sql);
                            echo '<script>
							swal(
							  "Success!",
							  "Mail has been Sent",
							  "success"
						 
							  )
							</script>';
                            header("refresh: 2; url=user.php");
                
                        }
                       

			         ?>    
					
					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form action="u_enquire.php" method="POST">
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="uname" placeholder="Name" autocomplete="off">
											</div>
											<div class="col-6 col-12-mobile">
												<input type="email" name="uemail" placeholder="your email" autocomplete="off">
											</div>
											<div class="col-12">
												<input type="text" name="sub" placeholder="Post Title" autocomplete="off"/>
											</div>
											<div class="col-12">
												<textarea name="msg" placeholder="Questions" rows="7"></textarea>
											</div>
											<div class="col-12">
												<ul class="buttons">
													<li><button type="submit" name="sendmessage" class="btn btn--radius-2 btn--green">Send Message</button></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
								
						</section>

						<ul class="buttons" style="padding-left: 38rem; margin-top: 0px;">
								<li><a href="user.php" class="button">Go Back</a></li>
							</ul>
				</article>
				  
			<!-- Footer -->
				<footer id="footer">

					<!--<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>-->

					<ul class="copyright">
						<li>Copyrights&copy;2020.All rights reserved.</li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>