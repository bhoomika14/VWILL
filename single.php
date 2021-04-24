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
	$sql="SELECT * FROM completes ORDER BY CID DESC";
	$result=mysqli_query($db,$sql);
	$posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
	
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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>

		<link rel="stylesheet" href="user\asset\css\main.css">
		<link rel="stylesheet" href="user\asset\css\style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Poppins:500|Roboto&display=swap" rel="stylesheet">
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
								<li>Successfully Completed Activities</li>
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
									
								</ul>
							</section>-->

					</section>
					<?php if(!empty($posts)) : ?>

					<?php foreach($posts as $post): ?> 
					
				<!-- Main -->
				
					<div id="main">
					       
					             
						<!-- Post -->
						
							<article class="post">
								<header>
								
									<div class="title">		
									    <h2>
										   <?php echo $post['CTITLE']; ?>
										</h2>									
									</div>
									
								</header>
								<img src="<?php echo $post['CIMAGE']; ?>" class="image featured" width=600 height=400>
								<hr>
								

								<p>
								   <?php echo $post['CBIO']; ?>
								</p>
								 
	
								<!--<footer>
								     <ul class="actions">
										
										<li><input type="text" id="myinput"></li>
										<script type="text/javascript">
										$(document).ready(function() {
											$("myinput").emojioneArea({
												pickerPosition: "bottom"
											});
										})
									    </script>
										
									 </ul>
								  
								  
								  
								 </footer>--> 
								
                              <!-- Trigger/Open The Modal -->
									

									<!-- The Modal -->
									
									     								 											
							</article>

                            
							<?php endforeach; ?> 
					     <?php else : { echo '<div class="row off-6">
			    	<div class="col-6">
						<div id="main" style="margin-left: 20em;">

							<!-- Post -->
							
									<article class="post">
										<header>
											<div class="title">
												<h2>Activities are yet to take place</h2>
											</div>
											
										</header>
									</article>
							 </div>
					 </div>
					</div>';} ?>
						 <?php endif; ?>	
							
						
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
						<p class="copyright">Copyrights&copy; 2020. All rights reserved by V-WILL.org</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="user/asset/js/jquery.min.js"></script>
			<script src="user/asset/js/browser.min.js"></script>
			<script src="user/asset/js/breakpoints.min.js"></script>
			<script src="user/asset/js/util.js"></script>
			<script src="user/asset/js/main.js"></script>


	</body>
</html>