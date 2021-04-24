<?php
   session_start();
   include("database.php");
   
?>
<?php
   if(!isset($_SESSION["AID"]))
   {
	   header("Location: alogin.php");
   }
  
?>
<?php
	$sql="SELECT * FROM post ORDER BY PID DESC";
	$result=mysqli_query($db,$sql);
	$posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
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
								<li>Upcoming Activities.</li>
							</ul>
						</nav>
						<!--<nav class="main">
							<ul>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>--> 
					</header> 

				<!-- Menu -->
					<!--<section id="menu">
							
						
							<section>
								<ul class="links">
									<li>
										<a href="user.php">
											<h3>HOME</h3>
											
										</a>
									</li>
									<li>
										<a href="guideline.php">
											<h3>Guidelines</h3>
											
										</a>
									</li>
									<li>
										<a href="contact.php">
											<h3>Contact</h3>
											
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Profile</h3>
											
										</a>
									</li>
									<li><a href="logout.php"><h3 class="button large fit" style="padding-bottom:5px;">Log Out</h3></a></li>
									
								</ul>
							</section>

						<!-- Actions 
							<section>
								<ul class="actions stacked">
									
								</ul>
							</section>

					</section>--> 
                    <?php if(!empty($posts)) : ?>
					<?php foreach($posts as $post): ?> 
					
				<!-- Main -->
				
					<div id="main">
					       
					             
						<!-- Post -->
						
							<article class="post">
								<header>
								
									<div class="title">		
									    <h2>
										   <?php echo $post['PTITLE']; ?>
										</h2>									
									</div>
									<div class="meta">
										<time class='published'><h2>Event Date</h2>
										  <?php echo $post['PDATE']; ?>
										</time>
									</div>
								</header>
								<img src="<?php echo $post['PIMAGE']; ?>" class="image featured" width=600 height=400>
								<h3>Location:
								   <a href="<?php echo $post['PLOC']; ?>" target="_blank"><?php echo $post['PLOC']; ?></a>
								</h3> 
								<p>
								   <?php echo $post['PBIO']; ?>
								</p>

								<!--<footer>
								
								  <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>">

								  <a href="user.php?id=<?php echo $post['PID']; ?>" class="button large">JOIN</a>

								  </form>
								  
								  
								 </footer>
								
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
												<h2>Activities are yet to be posted</h2>
											</div>
											
										</header>
									</article>
							 </div>
					 </div>
					</div>';} ?>
						 <?php endif; ?>	
							<?php 
								if(isset($_GET['id']))
								{
								$sql="INSERT INTO vjoin(PID,ID,LOGS) VALUES({$_GET["id"]}, {$_SESSION["UID"]}, now())";
									$db->query($sql);
								echo '<script>
								swal(
									"Good job!",
									"You have successfully joined to take part in the upcoming activity.",
									"success"
								  )
								</script>';
							    header("refresh:3; url=user.php");					
									
								}								   
																																
							?>
							
							
							     
								
								

						<!-- Post
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Euismod et accumsan</a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">October 22, 2015</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								
								 <a href="#" class="image featured"><img src="images/pic03.jpg"></a>
                                
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

						 Post 
						<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Euismod et accumsan</a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">October 22, 2015</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								
								 <a href="#" class="image featured"><img src="images/pic03.jpg"></a>
                                
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>-->

						
							
						<!-- Pagination -->
							<ul class="actions pagination">
								
								<li><a href="admin.php" class="button large next">Go Back</a></li>
							</ul>

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
								<p class="copyright">&copy;2020. All rights reserved.</p>
							</section> 

					<!--</section>-->

			</div>

		<!-- Scripts -->
		
			<script src="user/asset/js/jquery.min.js"></script>
			<script src="user/asset/js/browser.min.js"></script>
			<script src="user/asset/js/breakpoints.min.js"></script>
			<script src="user/asset/js/util.js"></script>
			<script src="user/asset/js/main.js"></script>
			<script>
				function on() {
				document.getElementById("overlay").style.display = "block";
				}

				function off() {
				document.getElementById("overlay").style.display = "none";
				}
			 </script>

			
	</body>
</html>