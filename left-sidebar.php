<?php
   include("database.php");
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
	<body class="left-sidebar is-preload">
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
									<li><a href="#main1" class="scrolly">Any Suggestions?</a></li>
									
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
						<span class="icon solid fa fa-users"></span>
						<h2>It is heartening to see Number of <b>Volunteers</b> work towards swachh Mangaluru every Sunday for the past few years.</h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<header>
													<h3>Every situation is now an opportunity</h3>
												</header>
												<p>At different phases over the last five-years to its credit, scores of volunteers in complete anonymity have swept the streets, removed unauthorized banner, re-painted graffiti from the public walls, identified over 300 garbage black-spots and monitored such areas. </p>
											</section>

											<section>
											  
												<img src="images\pmcleaning.jpg" class="image featured" width=300 height=200 ></a>
											 
												<header>
													<h3>Clean India Corpus</h3>
												</header>
												<p>It’s not just the honourable Minister who thought so, for majority of us till few years ago cleanliness was a matter of tokenism for occasions such as World Environment day, or probably for debates and discussion – that usually ended quoting famed phrase of Mahatma Gandhi ‘Cleanliness is next to Godliness’. </p>
											</section>
										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												
												 <img src="assets\css\images\swachh.jpg" class="image featured" width=700 height=400>
												
												<header>
													<h3>Earlier, we would see some spot and say this cannot be cleaned or this issue cannot be resolved. But now we look for ways to do it.</h3>
												</header>
												<p>
												<!--Although, very highly popular it was not for the first time that a program like Swachh Bharath Abhiyan was launched in the country. Right from 1956, the centrally - aided government sanitation campaign did exist in the country and are packaged and re-packaged time and again under different names. 
												By 1986, it was called as Central Rural Sanitation Programme, Total Sanitation Campaign in 1999 and Nirmal Bharat Abhiyan in 2012. 
												However Swachh Bharath Mission has been landed across the national and International platforms for its aggressive and pragmatic approach in encouraging people to adopt a healthy and hygienic lifestyle.
												<br><br>--> 
												Irrespective of which side of the political realm people identified themselves with, it’s a fact that young, old, genders, professionals, businessmen, government officials, groups have extended their hands in support of the Swachh Barath Mission and city like Mangaluru is no alien to it. 
												Be it educational institutions, bank authorities, customs department, private hospitals, cyclist clubs, journalists, techies or Non-Governmental Organisations, everyone has made it a point to take-forward the Swachh Barath Mission in their own way.
												<br><br>
												Every weekend and even other days, the volunteers were seen by the way of ‘Shramdaan’ toiling at various points of the city. At different phases over the last five-years to its credit, 
												scores of volunteers complete anonymity have swept the streets, removed unauthorized banner, re-painted graffiti from the public walls, cleaned directional signage, extracted debris from bus shelters, beautified stench-ridden areas, identified over 300 garbage black-spots and monitored such areas.
												</p>
												<footer class="major">
													<ul class="buttons">
														<li><a href="index.php" class="button">Go Back</a></li>
													</ul>
											     </footer>
											</section>
										</div>

								</div>
							</div>
							
						</section>
                        
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