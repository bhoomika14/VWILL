<?php
   session_start();
   include("database.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>v-will.org</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">

	<link rel="stylesheet" type="text/css" href="login/css/style.css">
   
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
<!--===============================================================================================-->
</head>
<body>




 
	<div class="limiter p-t-0 m-t-0">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/img-01.png" alt="IMG">
				</div>
			   <?php
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;
                    
                    require 'PHPMailer/src/Exception.php';
                    require 'PHPMailer/src/PHPMailer.php';
                    require 'PHPMailer/src/SMTP.php';
                    require 'database.php';

				   if(isset($_POST["submit"]))
				   {
					   $sql="SELECT * FROM admin WHERE AMAIL='{$_POST["amail"]}'";
					   $res=$db->query($sql);
					   if($res->num_rows>0)
					   {
						   $row=$res->fetch_assoc();
						   $_SESSION["AID"]=$row["AID"];
						   $_SESSION["AMAIL"]=$row["AMAIL"];
                           $emailTo=$_SESSION["AMAIL"];
                           $code=uniqid(true);
                           $query=mysqli_query($db, "INSERT INTO resetpass(code,email) VALUES ('$code', '$emailTo')");
                           if(!$query){
                               exit("Error");
                           }
                       
                       $mail = new PHPMailer(true);

                        try {
                            
                            $mail->isSMTP();                                            // Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                            $mail->Username   = 'bhoomikauday1997@gmail.com';                     // SMTP username
                            $mail->Password   = 'googlemail@1';                               // SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                        
                            //Recipients
                            $mail->setFrom('bhoomikauday1997@gmail.com', 'V-WILL');
                            $mail->addAddress($emailTo);     // Add a recipient
                            $mail->addReplyTo('no-reply@gmail.com','No-reply');
                            
                            $url="http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/a_resetPass.php?code=$code";
                        
                            // Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = 'Your password Reset Link';
                            $mail->Body    = "<h1>To reset your password </h1><a href='$url'>Click Here</a>";
                            
                            $mail->send();
                            echo '<script>
                            alert("Password reset link has been sent");
                            </script>';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    }
					else{
						   echo '<script>swal("Invalid Email/Password")</script>';
					   }
				   }

			   ?>    
               
				<form method="post" class="login100-form validate-form">
		
					<span class="login100-form-title h1">
						Enter Your Email-ID
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="amail" placeholder="Email" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Send Mail
						</button>
					</div>

					

					<div class="text-center p-t-50">
						<a class="txt2 h1" href="alogin.php">
							GO BACK
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>