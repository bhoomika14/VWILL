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
    $sql="SELECT * FROM admin";
    $res=$db->query($sql);
    $users=mysqli_fetch_all($res,MYSQLI_ASSOC);
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
		<script src="sweetalert\sweetalert2.all.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Poppins:500|Roboto&display=swap" rel="stylesheet">
		

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

				<!-- Menu 
					<section id="menu">
							
						<!-- Links 
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

								<footer>
								
								  <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
									
								  <a href="p_del.php?id=<?php echo $post['PID'];?>" class="button large" id="btn-del">DELETE</a>
								   
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
							
                            <ul class="actions pagination">
								
								<li><a href="admin.php" class="button large next">GO BACK</a></li>
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
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section> 

					<!--</section>-->

			</div>

		<!-- Scripts -->
			<script src="user/asset/js/jquery.min.js"></script>
			<script src="user/asset/js/browser.min.js"></script>
			<script src="user/asset/js/breakpoints.min.js"></script>
			<script src="user/asset/js/util.js"></script>
			<script src="user/asset/js/main.js"></script>
			<script src="sweetalert\jquery-3.4.1.min.js"></script>
			<script src="sweetalert\sweetalert2.all.min.js"></script>
			<script>
				function on() {
				document.getElementById("overlay").style.display = "block";
				}

				function off() {
				document.getElementById("overlay").style.display = "none";
				}
			 </script>
			 <script>
				 $('btn-del').on('click', function(e){
					 e.preventDefault();
					 const href=$(this).attr('href')
					 Swal.fire({
						 title: 'Are you sure?',
						 text: 'Record will be deleted permenantely!',
						 type: 'warning',
						 showCancelButton: true,
						 confirmButtonColor: '#3085d6',
						 cancelButtonColor: '#d33',
						 confirmButtonText: 'Delete Record',
					 }).then((result)=>{
						 if(result.value){
							 document.location.href="p_del.php?id=<?php echo $posts['PID']?>";
						 }
					 })
				 })
			 </script>
			 
	</body>
</html>                             
