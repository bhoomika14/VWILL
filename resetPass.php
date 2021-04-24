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
    include("database.php");
    if(!isset($_GET["code"])){
        exit("Can't Find Page!");
    }
    $code=$_GET["code"];
    $getEmail=mysqli_query($db,"SELECT email FROM resetpass WHERE code='$code'");
    if(mysqli_num_rows($getEmail)==0){
        exit("Can't Find Page!");
    }
    if(isset($_POST["submit"])){
        $pw=$_POST["upass"];
        $pw=md5($pw);
        $row=mysqli_fetch_array($getEmail);
        $email=$row["email"];
        $query=mysqli_query($db,"UPDATE users SET UPASS='$pw' WHERE UMAIL='$email'");
        if($query){
            $query=mysqli_query($db, "DELETE FROM resetpass WHERE code='$code'");
            exit('<script>
            swal(
              "Success!",
              "Password has been successfully changed.",
              "success"
         
              )
			</script>');
			header("refresh: 2; url=ulogin.php");
        }
        else{
            exit('<script>
			alert("Something went wrong");
			</script>');
        }
    }
?>
    <form method="post" class="login100-form validate-form">
		
					<span class="login100-form-title h1">
						Enter new password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="upass" placeholder="New Password" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Reset Password
						</button>
					</div>

					

					<!--<div class="text-center p-t-50">
						<a class="txt2 h1" href="ulogin.php">
							GO BACK
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>--> 
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