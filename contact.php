<?php require 'function.php';

if (isset($_POST["send"])) {
	try {
		$user = new contact;
		$user->AddContact($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);

	}
	// Si il y a une erreur, on informe l'utilisateur
	catch (Exception $e) {
			echo 'Message d\'erreur : ', $e->getMessage();
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Intership</title>
	<meta charset="UTF-8">
	<meta name="description" content="Egu Intership">
	<meta name="keywords" content="egu, intership, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section start -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3">
					<div class="logo">
						<h2 class="site-logo">Egu Intership</h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Me</a></li>
							<li><a href="intership.php">My Intership</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
	</header>
	<!-- header section end -->

	<!-- intro section start -->
	<section class="intro-section">
		<div class="container text-center">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<h2 class="section-title">I’m a <span>Ynov Ingesup </span>student in Intership, in the Company <a href="https://www.samcloud.fr/"> SamCloud </a> </h2>
				</div>
			</div>
		</div>
	</section>
	<!-- intro section end -->


	<!-- page section start -->
	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 contect-tect">
					<h2>So, let’s talk</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet pharetra nisl. Vestibulum sollicitudin leo non purus vestibulum placerat. Curabitur ac erat sollicitudin, blandit quam vitae.</p>
				</div>
			</div>
			<form method="post" class="contact-form">
				<div class="row">
					<div class="col-md-6">
						<input name="name" type="text" placeholder="Name">
					</div>
					<div class="col-md-6">
						<input name="email" type="text" placeholder="E-mail">
					</div>
					<div class="col-md-12">
						<input name="subject" type="text" placeholder="Subject">
					</div>
					<div class="col-md-12">
						<textarea name="message" placeholder="Message"></textarea>
					</div>
				</div>
				<div class="text-center">
					<button name="send" class="site-btn">Send</button>
				</div>
			</form>
		</div>
	</section>
	<!-- page section end -->

	<!-- footer section start -->
	<footer class="footer-section text-center">
		<div class="container">
			<div class="social-links">
				<a href=""><span class="fa fa-linkedin"></span></a>
				<a href=""><span class="fa fa-facebook"></span></a>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Egu Hugo-Jean
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
