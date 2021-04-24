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

			<!-- Header 
				<header id="header">
				<h1 id="logo"><a href="index.php">V-will</a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php" class="button">Welcome</a></li>
							<li class="submenu">
								<a href="#" class="button">What we do?</a>
								<ul>
									<li><a href="left-sidebar.php">Street Cleaning</a></li>
									<li><a href="right-sidebar.php">Native Tree Planting</a></li>
									<li><a href="no-sidebar.php">Beach Cleanup</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="guideline.php">Guidelines</a></li>
								</ul>
							</li>
							<li><a href="ulogin.php" class="button">Login</a></li>
						</ul>
					</nav>
				</header>--> 

			<!-- Main -->
				<article id="main">
					<header class="special container">
						<span class="icon solid fa-book"></span>
						<h1>All volunteers should review guidelines prior to the clean event to ensure that it is an enjoyable experience for all.</h1>
						<strong>If you are cleaning a park or a creek please remember that this is a place where a variety of animals, insects and unusual plants live. Please observe, but do not disturb. </strong>
					</header>

					<!-- One -->

					<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
									<h1>Agenda for the Day</h1>
                                        <ul>
                                                <li>Meet at pre-arranged spot before the cleanup.</li>
                                                <li>Sign liability waivers (every volunteer must sign).</li>
												<li>Distribute cleanup supplies.</li>
												<li>Go over safety tips and project instructions.</li>
												<li>Complete cleanup project.</li>
												<li>Return to meeting place with bags and supplies.</li>
												<li>Place bags in the pre-assigned location for pick-up (if applicable) and place ONE yellow Volunteer Cleanup sticker on each bag left for pick-up (if applicable).</li>
												<li>All volunteers check out with group leader.</li>
												

                                        </ul>
									</section>
									
								</div>
								
						</section>

                       <!--Section 2--> 
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
									<h1>What to Wear/Bring</h1>
                                        <ul>
                                                <li>Wear sturdy garden gloves.</li>
                                                <li>Wear thick soled, closed-toe shoes.</li>
												<li>Wear a hat and light coloured Shirt.</li>
												<li>Wear long pants and long-sleeved shirts to avoid contact with poison ivy.</li>
												<li>Wear safety vests at all times (for youth groups and cleanups near roads)</li>
												<li>Wear sunscreen and bug repellant.</li>
												<li>Bring a reusable water bottle and a light snack. Be sure to dispose of your trash properly.</li>
												<li>Bring a camera to take photos.</li>
												

                                        </ul>
									</section>
									
								</div>
								
						</section>


                        <!--Section 3--> 
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
									   <h1>Imporatant Tips</h1>
                                        <ol>
										        <li>As our volunteer, you represent the City of Mangalore. Please be respectful of natural vegetation, wildlife and other park visitors.</li>
                                                
                                                <li>Never cut or remove any natural vegetation from parks or creeks. These areas are home to many wildlife species. Please be respectful of their natural habitat.</li> 
                                                <li>You should know the location of the nearest emergency facility/hospital and dial 108 or 100 to quickly summon an ambulance or the police.</li>
                                                <li>Do not pick up dangerous items (guns, knives, etc.) or hazardous materials such as hypodermic needles, sharp objects, old car batteries, animal carcasses or other unidentified, questionable objects.</li>
                                                <li>Always work in groups of two or more and exchange contact numbers if your group decides to separate.</li>
                                                <li>Always wash your hands after a cleanup. The water is not safe to drink and your hands should be washed, especially before eating anything.</li>
                                                <li>A community cleanup can be hard work, but still fun at the same time! Have a contest to see who can find the strangest littered item or who can collect the most bags. You might be surprised at what you see.</li>

                                        </ol>
									</section>
									
								</div>
								
						</section>

						
						<ul class="buttons" style="padding-left: 35rem;">
								<li><a href="user.php" class="button">Go Back</a></li>
							</ul>
					     
						
						
						
						

					<!-- Two
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>This is Something</h3>
										</header>
										<strong>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</strong>
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
										<strong>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</strong>
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
										<strong>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</strong>
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
				
					<!--<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>-->

					

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