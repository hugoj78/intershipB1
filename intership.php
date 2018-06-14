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
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section-blog">My <span>intership</span> blog</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- intro section end -->


	<!-- page section start -->
	<div class="page-section">
		<div class="container">
			<div class="row mb-5">

				<?php
				require 'function.php';

					try {
						$aff = new AffArticle;
						$aff->AffBlog();

					} catch (Exception $e) {
						echo "Message d\'erreur : ", $e->getMessage();
					}
				?>

				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img style="max-width: 558px; max-height: 371px;" src="img/blog/1.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>SamCloud Presentation</h2>
							<div class="blog-meta">June 10, 2018</div>
							<p>SamCloud imagines innovative solutions for SME and the world of the hotel business.
								SAMCloud meets the challenges of tomorrow by imagining for you turnkey delivered innovative solutions:
								Cloud, Hosting, Networks (Wi-Fi, Telephony IP, Video surveillance) With an experience of more than 10 years
								in Cloud Computing, SamCloud accompany companies in its digital processing with a unique model IT completely
								in the request.</p>
							<a href="blog.php" class="read-more">Read More</a>
						</article>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="img/blog/2.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>First day : The discovery of the company</h2>
							<div class="blog-meta">June 15, 2018</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet pharetra nisl. Vestibulum sollicitudin leo non purus vestibulum placerat. Curabitur ac erat sollicitudin, blandit quam vitae.</p>
							<a href="" class="read-more">Read More</a>
						</article>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="img/blog/3.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>Second day : ...</h2>
							<div class="blog-meta">June 18, 2018</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet pharetra nisl. Vestibulum sollicitudin leo non purus vestibulum placerat. Curabitur ac erat sollicitudin, blandit quam vitae.</p>
							<a href="" class="read-more">Read More</a>
						</article>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="img/blog/4.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>Top 10 best digital assets in January</h2>
							<div class="blog-meta">January 29, 2018</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet pharetra nisl. Vestibulum sollicitudin leo non purus vestibulum placerat. Curabitur ac erat sollicitudin, blandit quam vitae.</p>
							<a href="" class="read-more">Read More</a>
						</article>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="img/blog/5.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>Top 10 best digital assets in January</h2>
							<div class="blog-meta">January 29, 2018</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet pharetra nisl. Vestibulum sollicitudin leo non purus vestibulum placerat. Curabitur ac erat sollicitudin, blandit quam vitae.</p>
							<a href="" class="read-more">Read More</a>
						</article>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="img/blog/6.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>Top 10 best digital assets in January</h2>
							<div class="blog-meta">January 29, 2018</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet pharetra nisl. Vestibulum sollicitudin leo non purus vestibulum placerat. Curabitur ac erat sollicitudin, blandit quam vitae.</p>
							<a href="" class="read-more">Read More</a>
						</article>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn btn-fade">Load More</button>
			</div>
		</div>
	</div>
	<!-- page section end -->

	<!-- footer section start -->
	<footer class="footer-section text-center">
		<div class="container">
			<h2 class="section-title mb-5">Let’s work together</h2>
			<a href="" class="site-btn">Get in touch</a>
			<div class="social-links">
				<a href=""><span class="fa fa-pinterest"></span></a>
				<a href=""><span class="fa fa-linkedin"></span></a>
				<a href=""><span class="fa fa-instagram"></span></a>
				<a href=""><span class="fa fa-facebook"></span></a>
				<a href=""><span class="fa fa-twitter"></span></a>
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
