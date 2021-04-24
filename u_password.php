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
<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>v-will.org</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="user\asset\css\main.css">
		<link rel="stylesheet" href="user\asset\css\style.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
						<h1><a href="user.php">V-will</a></h1>
						<nav class="links">
							<ul>
								<li>Change Password</li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header> 
						
				<!-- Menu -->
					<section id="menu">
							
						<!-- Links -->
						<section>
								<ul class="links">
									<li>
										<a href="user.php">
											<h3>HOME</h3>
											
										</a>
									</li>
									<li>
										<a href="u_guideline.php">
											<h3>Guidelines</h3>
											
										</a>
									</li>
									<li>
										<a href="u_enquire.php">
											<h3>Enquire</h3>
											
										</a>
									</li>
									<li>
										<a href="single.php">
											<h3>Completions</h3>
											
										</a>
									</li>
									<li>
										<a href="u_password.php">
											<h3>Change Password</h3>
											
										</a>
									</li>
									<li><a href="logout.php"><h3 class="button large fit" style="padding-bottom:5px;">Log Out</h3></a></li>
									
								</ul>
							</section>

						<!-- Actions 
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Log In</a></li>
								</ul>
							</section>-->

					</section>

				<!-- Main -->
				<div class="row off-6">
			    	<div class="col-6">
						<div id="main" style="margin-left: 20em;">

							<!-- Post -->
							
									<article class="post">
										<!--<header>
											<div class="title">
												<h2>Change Password</h2>
											</div>
											
										</header>--> 
								 <?php
                                    if(isset($_POST["submit"]))
                                    {
										
                                        $sql="SELECT * FROM users WHERE UPASS='{$_POST["opass"]}' AND UID='{$_SESSION["UID"]}'";
                                        $res=$db->query($sql);
                                        if($res->num_rows>0)
                                        {
                                            $s="UPDATE users SET UPASS='{$_POST["npass"]}' WHERE UID=".$_SESSION["UID"];
                                            $db->query($s);
                                            
                                            echo '<script>
											swal(
											  "Success!",
											  "Password has been successfully changed.",
											  "success"
										 
											  )
											</script>';
                                            
                                            
                                        }
                                        else
                                        {
                                            echo '<script>swal("Oops!", "Could not change password.Try Again!", "error")</script>';
                                        }
                                    }
                               ?>   
										
										<form action="u_password.php" method="post">
											
													<label for="opass">Enter Old Password</label>
													<input type="password" name="opass" placeholder="old password" id="myInput" required autocomplete="off"><span class="fa fa-eye" onclick="myFunction()">Show Password</span>
													<label for="npass" style="margin-top: 1rem;">Enter New Password</label>
													<input type="password" name="npass" id="myInput1" placeholder="new password" required autocomplete="off"><span class="fa fa-eye" onclick="myFunction1()">Show Password</span>
													
													<button class="button large fit" type="submit" name="submit" style="margin-top: 1rem;">SAVE</button>			
										</form>
										<footer>
											<ul class="stats">
												<li><a href="user.php" class="icon solid">Go Back</a></li>
											</ul>
										 </footer>
										
									</article>
							 </div>
					 </div>
				 </div>

				<!-- Footer -->
					<section id="footer">
						<!--<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>--> 
						<p class="copyright">Copyrights&copy; 2020.All rights reserved by V-Will.org</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="user/asset/js/jquery.min.js"></script>
			<script src="user/asset/js/browser.min.js"></script>
			<script src="user/asset/js/breakpoints.min.js"></script>
			<script src="user/asset/js/util.js"></script>
			<script src="user/asset/js/main.js"></script>
			<script>
				function myFunction() {
				var x = document.getElementById("myInput");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
				}
             </script>
            <script>
				function myFunction1() {
				var x = document.getElementById("myInput1");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
				}
			</script>
            
	</body>
</html>