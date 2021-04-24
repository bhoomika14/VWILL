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

        <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Poppins:500|Roboto&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="assets/css/main.css" />

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	   
		<link rel="stylesheet" href="assets/css/custom.css">

	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
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
										
										<!--<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>--> 
									
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

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>V-will</h2>
						</header>
						<p>Make a <strong>Difference!</strong><br>
							From being a part of the complainants we are now part of the solution, <br>and that has changed the way we look at everything.
						
						</p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="#main" class="button scrolly">Tell Me More</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">
                    
					<header class="special container" style="border:none;outline:0 solid transparent;">
						<span class="icon solid fa-handshake"></span>
						<h2>Six years ago, on 25 September 2014, Prime Minister Narendra Modi called on the country to join hands for a ‘Clean India’. 
						<br>Many organisations received a request from the Prime Minister’s Office to join the movement and “sweep the streets clean every Sunday for the next five years”.</h2>
						<p>
						Among those who took the initiative seriously are the <strong>Volunteers</strong> 
						<br>who has not only heralded a cleanliness ‘revolution’ but also altered the visual landscape of the city.
						</p>
					</header>
				

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2>
											Numbers tell a great deal about the transformative effort that has changed the way the city looks, feels and smells by the sheer power of 
											<strong>‘Volunteerism!’</strong>
                                        </h2>
									</header>
									<p style="color:blue;">
										Wouldn't it be great if there was a platform where people could build teams, communicate with each other, and organize their own events? 
										<br>How about a place where a volunteer could find a local cleanup and volunteer a couple hours of their time? 
										<br><br>
										<strong style="color:green;">V-WILL.org</strong> provides such a platform where cleanups are organized by a variety of third party partners, non-profits, local businesses or individual volunteer leaders in & around Mangalore.
									</p>
									<footer>
										<ul class="buttons">
											<li><a href="register.php" class="button primary">GET REGISTERED</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">
								  <img src="assets\css\images\volunteers.jpg" width=350 height=350 style="margin-top:9rem;">
									<!--<ul class="featured-icons">
										<li><span class="icon fa-clock"><span class="label">Feature 1</span></span></li>
										<li><span class="icon solid fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon solid fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon solid fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon solid fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>-->

								</div>
							</div>
						</section>

					<!-- Two -->
					<div id="scroll">
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-road"></span>
										<header>
											<h3>Mangaluru is obsessed with cleanliness. Cleanliness drive is slowly attracting more and more good citizens.
												But it wasn’t too long back, you could dump your garbage almost anywhere in the city.</h3>
										</header>
										<footer>
											<ul class="buttons">
												<li><a href="left-sidebar.php" class="button small">Learn More</a></li>
											</ul>
										</footer>
										
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-tree"></span>
										<header>
											<h3>While the city corporation is engaged in cutting down trees in an effort to turn all the city roads into concrete ones, 
												people effort to keep the city green by nurturing plants in public places.</h3>
										</header>
										<footer>
											<ul class="buttons">
												<li><a href="right-sidebar.php" class="button small">Learn More</a></li>
											</ul>
										</footer>
										
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon solid featured fa-tint"></span>
										<header>
											<h3>
											The ocean covers 71% of the Earth. The ocean helps produce the water we drink.
											It lessens the effect of global warming.
											To not have clean beaches, we believe, is a threat to our freedom.
											</h3>
										</header>
										<footer>
											<ul class="buttons">
												<li><a href="no-sidebar.php" class="button small">Learn More</a></li>
											</ul>
										</footer>
										
									</section>

								</div>
							</div>
						</section>
					</div>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Welcome to our city, clean city Mangalore!!</h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<img src="images/kottara.jpg" class="image featured" width=500 height=350>
										<!--<header>
											<h3>A Really Fast Train</h3>
										</header>-->
										<p>Members of Kumar Gym Friends and others, who had been cleaning the pillars of Kottara Chowki Flyover since two days, gave a fresh coat of paint to them. Along with painting, they also inscribed messages about environment protection.</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
									<img src="images/statebank.jpg" class="image featured" width=500 height=350>
									   <p>Mrs Sudheeksha Kiran Suvarna with her 1year son,  volunteering in Swachh Mangaluru abhiyan conducted by Sri Ramakrishna Mission Mangalore lead with example for many people in joining hands for SwacchMangalore.</p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<img src="images/plantation.jpg" class="image featured" width=500 height=350>
										<p>Plantation of medicinal plants organized by KIOCL's Swachh Bharat Committee at Govt ZPHP School, Mangalore. Children were informed about the importance of clean and green city. With the proper guidance of the members, children were tought to plant the saplings.</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										 <img src="images/sdm.jpg" class="image featured" width=500 height=350>
										<p>Students from SDM college Mangaluru took it upon themselves to attempt to clean up the small coastal city, starting with the beach. They organized themselves into a group of volunteers and turned up at Thannir Bhavi beach early in the morning.</p>
									</section>

								</div>
							</div>

							<!--<footer class="major">
								<ul class="buttons">
									<li><a href="ulogin.php" class="button">Take Part</a></li>
								</ul>
							</footer>--> 

						</section>

				</article>

			<!-- CTA -->
				<section id="banner">
					

					
						<h2>Ready to do <strong>something</strong>?</h2>
						<p>Remember to read the GUIDELINES before taking part</p>
						<h2>Activities Awaiting!!</h2>
					
					<footer>
						<ul class="buttons">
							<li><a href="ulogin.php" class="button primary">Join in Volunteering</a></li>
							<!--<li><a href="#" class="button primary">LOL Wut</a></li>-->
						</ul>
					</footer>
				
				</section>

			<!-- Footer--> 
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
					     <td class="icon solid fa fa-phone-alt"><a href="tel:<?php echo $user['AMOB']; ?>"> <?php echo $user['AMOB']; ?></td> 
					  </tr>
					  <tr>
					    <td class="icon solid fa fa-envelope"><a href="mailto:<?php echo $user['AMAIL']; ?>"> <?php echo $user['AMAIL']; ?></a> </td>  
					  </tr>
					  <tr>
					    <td class="icon solid fa fa-map-marker"><a href="http://maps.google.com/?q=<?php echo $user['AADD']; ?>" target="_blank"> <?php echo $user['AADD']; ?></td>  
					  </tr>
				</table>
			     <?php endforeach;?>
					<ul class="copyright">
						<li>Copyrights&copy; 2020</li><li>All rights reserved by V-Will.org</li>
					</ul>

				</footer>
				
					
					<!--<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>--> 
				 
				
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>