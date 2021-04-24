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
	<body class="no-sidebar is-preload">
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
						<span class="icon solid fa-ship"></span>
						<h1>Keeping Our Beaches <strong>Swachh!</strong></h1>
						<p>To not have clean beaches, we believe, is a threat to our freedom.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
									
										<img src="images/mangalore1.jpg" class="image featured" width=1050 height=400>
								
										<header>
											<h3>Let’s all Take a pledge to keep the ocean clean.</h3>
										</header>
										<p>The ocean covers 71% of the Earth. The ocean helps produce the water we drink and the air we breathe. It absorbs carbon dioxide and lessens the effect of global warming. It also produces food and recreation opportunities for millions of people. 
										<br><br>Despite its importance, the ocean is still not fully explored or understood.
										<br><br>The aim of coastal cleanup is to sensitize general public to maintain cleanliness of beaches by removal of debris and collect its data to prevent such pollution in the future. </p>
									</section>
									
								</div>
								<footer class="major">
									<ul class="buttons">
								    	<li><a href="index.php" class="button">Go Back</a></li>
									</ul>
								 </footer>	
						</section>
						
						

					<!-- Two <a href="#" class="fa fa-arrow-right"></a>
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
						</section> -->

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