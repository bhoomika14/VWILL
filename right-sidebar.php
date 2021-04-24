<?php
   include("database.php");
   error_reporting(0);
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
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
				<h1 id="logo"><a href="index.php">V-will</a></h1>
					<nav id="nav">
						<ul>
						<li class="current"><a href="index.php" class="button">Home</a></li>
							<li class="submenu">
								<a href="#" class="button">What we do?</a>
								<ul>
									<li><a href="left-sidebar.php">Street Cleaning</a></li>
									<li><a href="right-sidebar.php">Native Tree Planting</a></li>
									<li><a href="no-sidebar.php">Beach Cleanup</a></li>
									<li><a href="#main1" class="scrolly">Any suggestions?</a></li>
									
								</ul>
							</li>
							<li class="submenu">
							  <a href="" class="button">Login</a>
							     <ul>
									<li><a href="ulogin.php">User Login</a></li>
									<li><a href="alogin.php">Admin Login</a></li>
								 </ul>
							 </li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-leaf"></span>
						<h1>Adopt a <strong>Tree!</strong></h1>
						<p>The best time to plant a tree was 20 years ago. The second best time is now!</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-8 col-12-narrower">

									<!-- Content -->
										<div class="content">
											<section>
											
												<img src="images\saplings.jpg" class="image featured" width=700 height=400>
											 
												<header>
													<h3>While developing Mangaluru into a Smart City, we need to keep in mind that we also need a Green Mangaluru!</h3>
												</header>
												<p>
												The green cover is reducing over the years. In 2011, the cover was 21%, now it has reduced to 18%. In some wards, it is less than 2%. 
												While developing Mangaluru into a Smart City, we need to keep in mind that we also need a Green Mangaluru. 
												<br><br>To be mindful of the greenery and create a beautiful society to live in is what we should aim for.
												<br><br>
												The younger generations, especially the school children are the only hope in protecting our environment in case we need a secured future. 
												Planting a sapling individually and nurturing it by each of the child, can definitely change the face of our earth and protect from deteriorating situation of depleting ozone layer.</p>
												<footer class="major">
													<ul class="buttons">
														<li><a href="index.php" class="button">Go Back</a></li>
													</ul>
											     </footer>
											</section>
										</div>

								</div>
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
											
												<p>People usually blame builders for deforestation, but this is a wrong notion, as housing is a basic necessity and the demand grows everyday. Every time a tree is cut to build something, however, it is mandated to plant three in place of it. This is where builders are failing.</p>
												<!--<footer>
													<ul class="buttons">
														<li><a href="#" class="button small">Learn More</a></li>
													</ul>
												</footer>-->
											</section>

											<section>
											
												<img src="images\plantgiving.jpg" class="image featured" width=350 height=250>
											  
												
												<p>
												Global warming is a highly discussed issue and it is the collective responsibility of citizens of the world to help deal with this situation. We have a responsibility of preserving it for the generations to come. We must unite and carry out this task right now. </p>
												<!--<footer>
													<ul class="buttons">
														<li><a href="#" class="button small">Learn More</a></li>
													</ul>
												</footer>-->
											</section>
										</div>

								</div>
							</div>
						</section>

					<!-- Two 
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>This is Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Also Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Probably Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
							</div>
						</section>-->

				</article>

			<!-- Footer -->
			<?php
				$sql="SELECT * FROM admin";
				$res=$db->query($sql);
				$users=mysqli_fetch_all($res,MYSQLI_ASSOC);
			?>
			<?php foreach($users as $user) : ?>
			<footer id="footer">
			    <table id="main1">
					
					<p style="margin:0;">Contact Admin</p>
				        <tr>
					     <th>Feel free to give your Suggestions</th>  
						 </tr>
		              <tr>
					     <td class="icon solid fa fa-phone-alt"> <?php echo $user['AMOB']; ?></td> 
					  </tr>
					  <tr>
					    <td class="icon solid fa fa-envelope"> <?php echo $user['AMAIL']; ?></td>  
					  </tr>
					  <tr>
					    <td class="icon solid fa fa-map-marker"> <?php echo $user['AADD']; ?></td>  
					  </tr>
				</table>
			     <?php endforeach;?>

					<!--<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>-->

					<ul class="copyright">
					<li>Copyrights&copy; 2020</li><li>All rights reserved by V-Will.org</li>
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