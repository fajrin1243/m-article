<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="M-Article">
	<meta name="author" content="M-article Dev">

	<link rel="stylesheet" type="text/css" href="<?= base_url();?>../m-article/assets/responsive-css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>../m-article/assets/responsive-css/scrolling-nav.css">
	
	<title>M-Articlenian <?php echo $username;?></title>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden">
						<a class="page-scroll" href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#services">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- Intro Section -->
	<section id="intro" class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>HOME</h1>
					selamat datang <?php echo $username;?> !
					<a href="cuser/logout">Logout</a>
					<a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
				</div>
			</div>
		</div>
	</section>

	<!-- About Section -->
	<section id="about" class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Section</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section id="services" class="services-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Services Section</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section id="contact" class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact Section</h1>
				</div>
			</div>
		</div>
	</section>
	<script src="../assets/rese-js/jquery-1.11.1.min.js"></script>
	<script src="../assets/rese-js/jquery-1.11.1.min.map"></script>
	<script src="../assets/rese-js/bootstrap.min.js"></script>
	<script src="../assets/rese-js/jquery-1.11.0.js"></script>
	<script src="../assets/rese-js/jquery.easing.min.js"></script>
	<script src="../assets/rese-js/scrolling-nav.js"></script>
</body>
</html>