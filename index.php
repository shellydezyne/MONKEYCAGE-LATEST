<!DOCTYPE html>



<?php

include("admin/db.php");

$show_query = "SELECT * FROM main";

$run_query = mysql_query($show_query, $conn);

$get_value=  mysql_fetch_array($run_query);


$pdf = $get_value['pdf'];

$title =$get_value['title'];
$content =$get_value['content'];
$tf1 = $get_value['tf1'];
$tc1 = $get_value['tc1'];
$tf2 = $get_value['tf2'];
$tc2 = $get_value['tc2'];
$tf3 = $get_value['tf3'];
$tc3 = $get_value['tc3'];
$to1 = $get_value['to1'];
$co1 = $get_value['co1'];
$to2 = $get_value['to2'];
$co2 = $get_value['co2'];
$to3 = $get_value['to3'];
$co3 = $get_value['co3'];
$to4 = $get_value['to4'];
$co4 = $get_value['co4'];
$fn1 = $get_value['pic1'];

$fn2 = $get_value['pic2'];
$fn3 = $get_value['pic3'];
$fn4 = $get_value['pic4'];
$fn5 = $get_value['pic5'];
$fn6 = $get_value['pic6'];
//prices
$a1day = $get_value['a1day'];

$a1day= str_replace(".",",",$a1day );

$ah1day = $get_value['ah1day'];

$ah1day= str_replace(".",",",$ah1day );

$a1month = $get_value['a1month'];

$a1month= str_replace(".",",",$a1month );

$a3month= $get_value['a3month'];

$a3month= str_replace(".",",",$a3month );


$a6month = $get_value['a6month'];

$a6month= str_replace(".",",",$a6month );

$ayear = $get_value['ayear'];

$ayear= str_replace(".",",",$ayear );

$ayyear = $get_value['ayyear'];

$ayyear = str_replace(".",",",$ayyear );



$s1day = $get_value['s1day'];

$s1day= str_replace(".",",",$s1day );

$sh1day = $get_value['sh1day'];

$sh1day= str_replace(".",",",$sh1day );

$s1month = $get_value['s1month'];

$s1month= str_replace(".",",",$s1month );

$s3month= $get_value['s3month'];

$s3month= str_replace(".",",",$s3month );

$s6month = $get_value['s6month'];

$s6month= str_replace(".",",",$s6month );

$syear = $get_value['syear'];

$syear= str_replace(".",",",$syear );

$syyear = $get_value['syyear'];

$syyear= str_replace(".",",",$syyear );

$k1day = $get_value['k1day'];


$k1day= str_replace(".",",",$k1day );

$kh1day = $get_value['kh1day'];

$kh1day= str_replace(".",",",$kh1day );

$k1month = $get_value['k1month'];

$k1month= str_replace(".",",",$k1month );

$k3month= $get_value['k3month'];

$k3month= str_replace(".",",",$k3month );

$k6month = $get_value['k6month'];

$k6month= str_replace(".",",",$k6month );

$kyear = $get_value['kyear'];

$kyear = str_replace(".",",",$kyear );
$kyyear = $get_value['kyyear'];

$kyyear= str_replace(".",",",$kyyear);

$f1day = $get_value['f1day'];

$f1day= str_replace(".",",",$f1day );

$fh1day = $get_value['fh1day'];

$fh1day= str_replace(".",",",$fh1day );

$kk1day = $get_value['kk1day'];

$kk1day= str_replace(".",",",$kk1day );

$kkh1day = $get_value['kkh1day'];

$kkh1day= str_replace(".",",",$kkh1day );

$eel = $get_value['eel'];

$eel= str_replace(".",",",$eel );

$eec = $get_value['eec'];

$eec= str_replace(".",",",$eec );

$eeb = $get_value['eeb'];

$eeb= str_replace(".",",",$eeb );


$ekl= $get_value['ekl'];

$ekl= str_replace(".",",",$ekl );
$ekc = $get_value['ekc'];

$ekc= str_replace(".",",",$ekc );
$ekb=$get_value['ekb'];

$ekb= str_replace(".",",",$ekb );




?>

<html lang="en">
	<head>

		<!-- Title -->
		<title>Monkey Cage</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Responsive One Page HTML5 Website Template">
		<meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, One Page, Template, Theme, Website" />
		<meta name="author" content="themetorium.net">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google font (https://www.google.com/fonts) -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Mono:400,300,500,700' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'> <!-- Alternative font -->

		<!-- Bootstrap CSS (http://getbootstrap.com) -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/vendor/animate.min.css"> <!-- Animations CSS (more info: http://daneden.github.io/animate.css) -->
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css"> <!-- Font Icons (more info: http://fortawesome.github.io/Font-Awesome) -->
		<link rel="stylesheet" href="assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css"> <!-- Owl Carousel CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.plugins.css"> <!-- Owl Carousel plugins CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.theme.default.css"> <!-- Owl Carousel default theme CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
		<link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css"> <!-- Magnific Popup CSS (more info: http://dimsemenov.com/plugins/magnific-popup/) -->

		<!-- Theme master CSS -->
		<link rel="stylesheet" href="assets/css/helper.css">
		<link rel="stylesheet" href="assets/css/theme.css">

		<!-- Theme styles CSS (comment or uncomment below lines to enable/disable styles) -->
		<!-- <link rel="stylesheet" media="screen" title="blue-theme" href="assets/css/styles/blue.css"> -->
		<!-- <link rel="stylesheet" media="screen" title="brown-theme" href="assets/css/styles/brown.css"> -->
		<!-- <link rel="stylesheet" media="screen" title="green-theme" href="assets/css/styles/green.css"> -->
		<!-- <link rel="stylesheet" media="screen" title="purple-theme" href="assets/css/styles/purple.css"> -->
		<!-- <link rel="stylesheet" media="screen" title="yellow-theme" href="assets/css/styles/yellow.css"> -->

		<!-- Theme custom CSS (all your CSS customizations) -->
		<link rel="stylesheet" href="assets/css/custom.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script src="jim/dist/instagram.min.js"></script>




		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	   <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	   <![endif]-->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





	</head>




	<!-- Additional information
	============================
	* You are free to use extra helper classes to customize your website (look into "helper.css" file).
	* To use scrolling animations please read more information here: http://mynameismatthieu.com/WOW/index.html.
	-->


	<!-- =================
	///// Begin body /////
	======================
	* Add class="boxed" to use boxed layout (example: <body class="boxed" data-spy="scroll" data-target="#scrollspy">).
	* Use backgroun classes to change boxed layout background color. example: <body class="boxed bg-dark" data-spy="scroll" data-target="#scrollspy"> (look into "helper.css" file for more info).
	-->
	<body data-spy="scroll" data-target="#scrollspy">

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Begin preloader -->
		<div id="preloader">
			<div class="pulse"></div>
		</div>
		<!-- End preloader -->

		<!-- Begin body content -->
		<div id="body-content">


			<!-- ============================
			///// Begin top sliding bar /////
			=================================
			* Add class "slidingbar-fixed" to enable fixed slidingbar.
			-->
			<section id="top-slidingbar-wrapper" class="slidingbar-fixed">
				<div id="top-slidingbar">
					<div class="container">
						<div class="row">

							<!--<div class="col col-md-4">
								<h4 class="top-slidingbar-heading text-gray-2">Impressum</h4>
								<hr class="hr-width-1 hr-double margin-top-15">
								<p class="small">Hallo Sportsfreunde,
wir freuen uns euch, nachdem die Ger&#220chtek&#220che in der Aschaffenburger Boulderszene nun schon seit Wochen flei&#223ig gek&#214chelt hat, offiziell ein bisschen Input zur geplanten Boulderhalle geben zu k&#214nnen.</p>
							</div> <!-- /.col -->

							<div class="col col-md-8">
								<h4 class="top-slidingbar-heading text-gray-2">Impressum</h4>
								<hr class="hr-width-1 hr-double margin-top-15">
								<ul class="list-unstyled small">
									<li><i class="fa fa-home"></i> &nbsp Sitz der Gesellschaft:
                                                                         Monkey Cage GmbH
                                                                         Liebigstr. 4<br>
                                                                         63743 Aschaffenburg</li>
                                   <li>Fax +49 6021 445 2930</li>                                      
									<li><i class="fa fa-phone"></i> &nbsp +49 6021 445 2929</li>
									<li><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">info@monkey-cage.de</a></li>
									<li><i class="fa fa-building-o"> </i> &nbspAmtsgericht Aschaffenburg</li>
									<li><a href="#"> HRB 13773 </a></li>
									<li><i class="fa fa-briefcase"> </i>  &nbsp Geschäftsführung</li>
									<li><a href="#">Leandro Diels</a></li>
									<li><a href="#">Kai Peter Brand</a></li>
									<li><i class="fa fa-briefcase"> </i>  &nbsp Finanzamt Aschaffenburg</li>
									<li><a href="#">USt-IdNr: DE306530625</a></li>
									
								</ul>
							</div> <!-- /.col -->

							<div class="col col-md-4">

								<h4 class="top-slidingbar-heading text-gray-2"></h4>
								<hr class="hr-width-1 hr-double margin-top-15">

								<!-- Begin thumbnail list 
								==========================
								* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
								* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
								-->
								
									<a  href="assets/img/vertical1.png"><img src="assets/img/vertical1.png" alt="Monkey-Cage" width="300" height="75" >  </a>
									
								
								<!-- End thumbnail list -->

							</div> <!-- /.col -->

						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-slidingbar -->

				<!-- top-top-slidingbar trigger -->
				<div class="top-slidingbar-trigger-wrapper"><span class="top-slidingbar-trigger">+</span></div>

			</section>
			<!-- End top sliding bar -->


			<!-- ==============
			///// Begin header 
			=================== -->
			<header id="header-wrap">

				<!-- Begin Header content 
				==========================
				* Use class "show-hide-on-scroll" to hide header on scroll down and show on scroll up.
				* Use class "fixed-top" to set header to fixed position.
				* Use class "transparent" for transparent header.
				* Use class "transparent-border" to enable bottom border on transparent header (class "transparent" is still required).
				* Use class "semi-transparent" for semi-transparent header.
				* Use class "header-fluid" for full width header.
				* Use class "header-dark" for dark header.
				* Use class "header-color" for header custom background color. By default theme main color is used, but you ca use custom background color classes (class "header-color" is still required!). Look into "helper.css" file for more info.
				* Use class "header-shadow" to enable header bottom shadow.
				* Use class "header-md", "header-lg" or "header-xlg" to change header size.
				-->
				<div id="header" class="header-md fixed-top header-dark transparent">
					<div id="scrollspy" class="container header-container">

						<!-- Begin logo  -->
						<div class="logo font-alter-1">
						<a href="index.php" style="color: white; " ><h2><img src="assets/img/vertical1.png" width="150" height="40" ></h2></a>
						</div>
						<!-- End logo -->

						<!-- Begin navbar 
						================== -->
						<nav class="navbar pull-right">

							<!-- Begin toggle button (get grouped for better mobile display) -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main" aria-expanded="false">
								  <span class="sr-only">Toggle navigation</span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								</button>
							</div>
							<!-- End toggle button-->

							<!-- Begin nav main
							====================
							* Use class "nav-separator" to enable nav links separators.
							* Use class "nav-uppercase" to enable nav uppercase letters.
							* Use class "mob-navbar-collapse-dark" to enable dark mobile menu.
							* Use class "mob-navbar-align-center" to enable dark mobile menu.
							* Note-1: class "mlc" in menu links = close mobile menu when clicking menu link (for one page template version only).
							* Note-2: class "sm-scroll" in menu links = enable smooth scrolling when clicking menu link (for one page template version only).
							-->
							<div id="nav-main" class="collapse navbar-collapse mob-navbar-collapse-dark">

								<!-- Begin navbar-nav 
								======================
								* Use class "nav-pills" to enable nav pills.
								* Use class "pills-rounded", "pills-rounded-2x", "pills-rounded-3x" or "pills-rounded-4x" for rounded pills (class "nav-pills" is required).
								* Use class "pills-gradient" to enable gradient pills (class "nav-pills" is required).
								* Use class "nav-border-bottom" to enable menu links with bottom border (class "nav-pills" is required).
								-->
								<ul class="nav navbar-nav navbar-right nav-pills pills-rounded">
									
									
									<li><span class="nav-link-separator">/</span></li>

									<!-- Begin dropdown 
									====================
									* Use class "dropdown-hover" to make navigation toggle on desktop hover.
									* Use class "dropdown-uppercase" to enable dropdown menu uppercase letters.
									* Use class "dropdown-menu-dark" to enable dark dropdown menu.
									* Use class "dropdown-menu-color" to enable custom colored dropdown menu.
									* Use class "dropdown-menu-right" to right align the dropdown menu.
									-->
								<!--	<li class="dropdown dropdown-menu-dark dropdown-hover">
										<a href="#0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											eTWA<span class="caret-2"><i class="fa fa-angle-down"></i></span>
										</a>
										<ul class="dropdown-menu">
											<li><a class="mlc sm-scroll" href="#section-1">About Us</a></li>
											<li><a class="mlc sm-scroll" href="#section-5">Our Team</a></li>
											<li><a class="mlc sm-scroll" href="#section-9">Video Promo</a></li>
											<li><a class="mlc sm-scroll" href="#section-7">Testimonials</a></li>
											<li><a class="mlc sm-scroll" href="#section-10">Our Clients</a></li>

											<!-- Begin dropdown (submenu)
											==============================
											* Use class "dropdown-hover" to make navigation toggle on desktop hover.
											* Use class "dropdown-uppercase" to enable dropdown menu uppercase letters.
											* Use class "dropdown-menu-dark" to enable dark dropdown menu.
											* Use class "dropdown-menu-color" to enable custom colored dropdown menu.
											* Use class "dropdown-submenu" for dropdown submenu.
											
											<li class="dropdown dropdown-menu-dark dropdown-submenu dropdown-hover">
												<a href="#0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													Submenu<span class="caret-2 margin-left-10"><i class="fa fa-angle-right"></i></span>
												</a>
												<ul class="dropdown-menu">
													<li><a class="mlc" href="#">Submenu Link 1</a></li>
													<li><a class="mlc" href="#">Submenu Link 2</a></li>
													<li><a class="mlc" href="#">Submenu Link 3</a></li>
													<li><a class="mlc" href="#">Submenu Link 4</a></li>
													<li><a class="mlc" href="#">Submenu Link 5</a></li>

													<!-- Begin dropdown (submenu)
													==============================
													* Use class "dropdown-hover" to make navigation toggle on desktop hover.
													* Use class "dropdown-uppercase" to enable dropdown menu uppercase letters.
													* Use class "dropdown-menu-dark" to enable dark dropdown menu.
													* Use class "dropdown-menu-color" to enable custom colored dropdown menu.
													* Use class "dropdown-submenu" for dropdown submenu.
													
													<li class="dropdown dropdown-menu-dark dropdown-submenu dropdown-hover">
														<a href="#0" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
															3 Level Submenu<span class="caret-2 margin-left-10"><i class="fa fa-angle-right"></i></span>
														</a>
														<ul class="dropdown-menu">
															<li><a class="mlc" href="#">Submenu Link 1</a></li>
															<li><a class="mlc" href="#">Submenu Link 2</a></li>
															<li><a class="mlc" href="#">Submenu Link 3</a></li>
															<li><a class="mlc" href="#">Submenu Link 4</a></li>
															<li><a class="mlc" href="#">Submenu Link 5</a></li>
														</ul> <!-- /.dropdown-menu 
													</li>
													<!-- End dropdown 

												</ul> <!-- /.dropdown-menu
											</li>
											<!-- End dropdown -

										</ul> <!-- /.dropdown-menu 
									</li>
									<!-- End dropdown -->

									<li><span class="nav-link-separator">/</span></li>
									<li><a class="mlc sm-scroll" href="#section-2">Newsfeed</a></li>
									<li><span class="nav-link-separator">/</span></li>
									<li><a class="mlc sm-scroll" href="#section-3">Unsere Angebote</a></li>
									<li><span class="nav-link-separator">/</span></li>
									<li><a class="mlc sm-scroll" href="#section-4">Eintrittspreise & Verleih</a></li>
									<li><span class="nav-link-separator">/</span></li>
									<li><a class="mlc sm-scroll" href="#section-7">Social Media</a></li>
									<li><a class="mlc sm-scroll" href="#section-8">Anfahrt und Kontakt</a></li>
									<li><a class="mlc sm-scroll" href="#section-9">Galerie</a></li>
									<li><a class="mlc sm-scroll" href="admin/admin_pdf/<?php echo $pdf; ?>">Essen und Trinken</a></li>

								</ul>
								<!-- End navbar-nav -->

							</div>
							<!-- End nav main -->

						</nav>
						<!-- End navbar -->

					</div> <!-- /.container -->
				</div>
				<!-- End header content -->

			</header>
			<!-- End header -->


			<!-- ==========================
			///// Begin intro section /////
			===============================
			* Use class "full-height" to full screen intro.
			* Use class "angle-left-bottom" or "angle-right-bottom" to change intro bottom angle.
			* Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
			-->
			<section id="intro" class=" bg-image-parallax" style="background-image: url(assets/img/bgintro1.png); width: auto; ; ">
				
				<div class="intro-inner">
				
					<!-- Element cover
					===================
					* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info. 
					-->
					<span class="cover bg-transparent-2-dark bg-transparent-gradient-2"></span>

					<!-- Begin intro caption -->
					<div class="intro-caption vertical-align-center text-center text-white">
						<h2 class="intro-title font-alter-1">
							<span class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="0.5s">MONKEY</span>
						<!--	<span class="wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="0.5s"></span>-->
							<span class="wow bounceIn" data-wow-delay="1.6s">-</span>
							<span class="wow fadeInDown" data-wow-delay="0.8s" data-wow-duration="0.5s">CAGE</span>
							<!--<span class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="0.5s">OM</span>-->
						</h2>
						<p class="intro-description wow fadeIn" data-wow-delay="2.2s"></p>
						<div class="margin-top-30">
						<!--	<a href="#section-2" class="btn btn-white-bordered btn-rounded sm-scroll wow bounceIn" data-wow-delay="0.8s">Our Services</a> 
							<a href="#section-8" class="btn btn-primary btn-rounded sm-scroll margin-top-10 wow bounceIn" data-wow-delay="1s">Hire Us Now!</a>
						</div>-->
					</div>
					<!-- End intro caption -->

					<!-- Made with love :) -->
					<div class="made-with-love hidden-xs">
						<p class="text-gray" <span class="text-main"><i></i></span></p>
					</div>

					<!-- Scroll down arrow -->
					<a class="scroll-down-arrow sm-scroll text-center text-white" href="#section-1"></a>

				</div>

			</section>
			<!-- End intro section -->


			<!-- ===================================
			///// Begin call to action section /////
			========================================
			* Use class "angle-left-bottom" or "angle-right-bottom" to change intro bottom angle.
			* Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
			* Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
			* Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
			-
			<section class="call-to-action-section angle-left-bottom bg-dark bg-pattern" style="background-image: url(assets/img/intro.png);">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.  
				
				<span class="cover bg-transparent-4-5-dark"></span>

				<div class="container">	
					

						<!-- Left column -
						<div class="col-lg-1 col-xs-4">

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; " >SAMSTAG</h1>
                             	<b class="week" >Closed <br></b>
						</div>

						<div class="col-lg-1 col-xs-4 ">

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; ">SONNTAG</h1>
                             	<b class="week" >Closed <br></b>
						</div>
						<div class="col-lg-1 col-xs-4">

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; ">MONTAG</h1>
                             	<b class="week" >Appt<br>Only <br></b>
						</div>
						<div class="col-lg-1 col-xs-4">

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; ">DIENSTAG</h1>
                             	<b class="week" >10:00<br>17:00 <br></b>
						</div>
						<div class="col-lg-1 col-xs-4" >

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; ">MITTWOCH</h1>
                             	<b class="week" >09:00<br>17:00 <br></b>
						</div>

						<div class="col-lg-1 col-xs-4" >

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; ">DONNERSTAG</h1>
                             	<b class="week" >09:00<br>17:00<br></b>
						</div>
						<div class="col-lg-1 col-xs-4"  >

							<h1 class="call-to-action-title text-gray-2" style="font-size: 14px; ">FREITAG</h1>
                             	<b class="week" >09:00<br>17:00 <br></b>
						</div>

					

						</div>

								<div  >
							<h2 class="call-to-action-title text-gray-2 right "></h2>
						<!--	<p class="lead call-to-action-text text-gray">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore.
							</p>
							<p class="call-to-action-text lead text-gray margin-top-30"><strong>  </strong></p>
							
						

						<!-- Right column -->
						<!--<div class="col-md-4 text-center">

							<a href="https://creativemarket.com/Themetorium" target="_blank" class="btn btn-primary-bordered btn-xlg btn-block"><i class="fa fa-shopping-cart"></i> Buy This Template</a>
							<br>
							<a href="#" class="small text-gray">Or Learn More.. <i class="fa fa-graduation-cap"></i></a>
							
						</div> <!-- /.col 
					</div><!-- /.row 
				</div> <!-- /.container 
			</section>
			<!-- End call to action section -->


			<!-- =================================
			///// Begin section 1 (about us) /////
			================================== -->
		<!--	<section id="section-1" class="about-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							
							<div class="heading heading-lg heading-hover wow fadeIn">
								<span class="heading-title-ghost">About Us</span>
								<h2 class="heading-title">About Us</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider -->

								<!--<p class="heading-tescription lead"> <a href="#"</a>
								</p>
							</div>
							<!-- End heading 

						</div> <!-- /.col 
					</div> <!-- /.row 
				</div> <!-- /.container 

				<div class="container margin-top-20">
					<div class="row wow fadeIn" data-wow-delay="0.3s">

						<div class="col-sm-6 col-md-3">
							<!-- Begin info box-1 -
							<div class="info-box info-box-1">
								<span class="info-box-icon"><i class="fa fa-clone"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">Fully Responsive</h4>
									<p class="info-box-text">
										Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
									</p>
								</div>
							</div>
							<!-- End info box-1 
						</div> <!-- /.col -

						<div class="col-sm-6 col-md-3">
							<!-- Begin info box-1 
							<div class="info-box info-box-1">
								<span class="info-box-icon"><i class="fa fa-diamond"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">Clean Code</h4>
									<p class="info-box-text">
										Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
									</p>
								</div>
							</div>
							<!-- End info box-1 
						</div> <!-- /.col 

						<div class="col-sm-6 col-md-3">
							<!-- Begin info box-1 
							<div class="info-box info-box-1">
								<span class="info-box-icon"><i class="fa fa-television"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">One Page</h4>
									<p class="info-box-text">
										Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
									</p>
								</div>
							</div>
							<!-- End info box-1 
						</div> <!-- /.col 

						<div class="col-sm-6 col-md-3">
							<!-- Begin info box-1 
							<div class="info-box info-box-1">
								<span class="info-box-icon"><i class="fa fa-bicycle"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">Awesome Icons</h4>
									<p class="info-box-text">
										Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.
									</p>
								</div>
							</div>
							<!-- End info box-1 -->
						</div> <!-- /.col -->

					</div> <!-- /.row -->
				</div> <!-- /.container -->

			</section>
			<!-- End section 1 -->


			<!-- =================================
			///// Begin section 2 (services) /////
			======================================
			* Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
			* Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
			* Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
			* Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
			-->
			<section id="section-2" class="services-section bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url(assets/img/misc/bg-4.jpg); padding: 80px 0px  140px 0px; ">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.  
				-->
				<span class="cover bg-transparent-9-dark"></span>

				<div class="container">	
					<div class="row">

						<!-- Left column -->
						<div class="col-md-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg text-white heading-hover wow fadeIn" data-wow-delay="0.2s">
								<span class="heading-title-ghost"></span>
								<h2 class="heading-title"><?php echo $title; ?></h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider -->

								<p class="heading-tescription lead text-gray-2" style="text-align: justify;" >
									<?php echo $content; ?>

								</p>
								
								<!--<a href="#" target="_blank" class="btn btn-white-bordered btn-rounded"><i class="fa fa-external-link"></i> </a>-->
							</div>
							<!-- End heading -->

						</div> <!-- /.col -->

						<!-- Right column -->
						<div class="col-md-6">

							<div class="row">
								<div class="col-md-12">
									<!-- Begin info box-4 -->
									<div class="info-box info-box-4 info-box-white wow fadeIn">
										<span class="info-box-icon rounded-icon bg-main text-white"><img class="icon icons8-Skydiving" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAADo0lEQVRoQ+2ai5ENQRSG/42AjQARIAJEwEaACBABImAjQASIgI0AESACREB9U3O2+vbtmX6cs8Nu6aqtrTt3pk9/593T90AXbBxcMB4B9EzSLUlPJH0+p4A3JL2QdALQD0mXJX2TdO2cAn2VdFXST4CwyvUZ5KGk14FQjyQ9kIQGGch6KelNoAw87Ok832QhBCCYgZVuQuoUiMU/JCD5dIDdCZKDdZDHOAbonqS3icTnc1x5mD6twNi8QKE8z0itwzxHAEFHHNnAOsTSqJUezwHaslCPixMzKM6sg7xDS9vvJN1NVnAsiYWNjBbrRFiJWL+fLPA93mZABO6rbPW4w0ga/92phZFaeHuO0VTUZG2bLHc7bvw4B27n+rQFEAkHqHQcWtq2i7kJuT7i42kZqCnjS0PyyOcoxShlAC+bOgUbJTOOJIizTAp4Upqmbe2UADxqB4jP1KErmUpO6WvqTr5vsdKIdSgvlJl0fJ+7hOlaHpCl5MB9pxpohEKTaMw6kPwxYPCIntKQ10ubkx6U5qAIZD3dpWwFWA4o/vcMFIQLGhggCO9tr0o1h3X8sh5uCYjraSuULh5tUq/4I+ef9UC57AJQSu5mJnuvXpZqANog8GoDlyJWAJ0CUhL+3GtF5BG3ANDE8pn/1tCurYOOZkfeUlErpfAa4NbfF5PVEhBaQvt5LG296CV5xA4W3POGtbYDF8BSaY/3LwARv8RVMUO29FEEJIkir09bwxGfZEyS0uJoAbKH0Qr7j63BAEFuU6rvATIwLAbcWbsirgXEqkVyU40A2RzEGC5g+/koF2THjIv3dBGnsj1ATFLadnjBpm3A6CReIOTmu93RtfDctOv0TBABtNTQjqxrZP+1IycCqLVVagHca2VaHkrviQBivpb9T21tI/ujvTmjgHp2qUtgO/uaGv3S91FAEW7ndjcgo4C8bhfibpFAEfXIVX/MBaMsFJG63Sk70kIRxdVdVKOAItzNPMbtdhEuF5GyDcjtdhFAPacNtfLiPjPyArGvByhyuOqRF2jpHV4OaO/xWjaFnrMpd2G1E/Q1C6Wvm1pej7EXIjkMDY+Flt41pwspvTtrgTrq3XpHFNZa7TkpHEqZ3NqzwzXJY6E1d6udLtROJ4bdzgOE0NKb1RqMWWkNaufMpyeYPED5bwSQ2wpTgxr+rYQHiEWRtkkOaJu4oGvofWPDszaPHdmM/qTAnbZ7vGGTe70W2mSRPUL+A/Vo62/c+wfkI7hUuYn1CwAAAABJRU5ErkJggg==" width="52" height="52"></span>
										<div class="info-box-info">
											<h4 class="info-box-title"><?php echo $tf1; ?> </h4>
											<p class="info-box-text text-gray-2" style="text-align: justify;">
												<?php echo $tc1; ?>
											</p>
										</div>
									</div>
									<!-- End info box-4 -->
								</div> <!-- /.col -->

								<div class="col-md-12">
									<!-- Begin info box-4 -->
									<a href="https://icons8.com"></a>
									<div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.2s">
										<span class="info-box-icon rounded-icon bg-main text-white"><img class="icon icons8-Sports-Mode-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADmklEQVRoQ92ZgbGNMRBGv1cBKkAFqAAVoAJUgApQASrgVYAKUAEqQAd0YM7Mnzu5udlkN2//MWNnzJ15cpM92c3ul9wz7WdPJN2XdHNb4pukd5LO91jybIdJcfy9pGvG3D8lPZAEWJplg+D8V0mXJx7+lnRLElAplg3ySdIdp2efJd11jp0OywQhGj+mKx4PuJ4VlUyQp5JeBUGeSXod/E53eCbIC0nPg069lMT3LmyZIP9NRCi7VKyIUblSynBmRACgEt12knwJVLjplNkgRAWYS5OV/2wQKdFgrWwQ5pzBpEPsBcK8dHYO/yNJV7fo/Nq0FuWWzp5qF4kIO08K8Um+p6XJhPDhtlEf62Y6A8FJdpRPdplPOngrCJEanI09jbXfVmr6SK+1IMhuiIvDXsd6G8Ic97ZdI2IXEYikKKqhFaOHhlo7AATyO2rkfhuhXnPkLsLCESAcBwCQnh0yoQZZkRhM3vaDmXj0ArWp1IJwQTsA1iDIb2R41FoQ74aMgKxUKr6daLQ2tz9seR2BaUGiKdoCkUqkpmWPtzJ+9P8tCDlJGS21vx5MuWPR0gPIdSvf+XtvjtEGMTfpVO74vbFdCAZa1aYn/iI3OpwhulEYCxQ1QJSA7ZrVRyxJHlGrpbsz10x7jSLlkjSjhgg9PaW2o0oROEgcXopANEIuCCu1in/sKOl0o3H4SnVOGINs5/x4jEJAhDxS//tWXl3SZyZR6AlMVKdGLUdKqaUAEME3zoZHqSdKbcTLZgDBGLe4nIEwMQcXJ4kMC9RVhVeTtqsTRe+LIt8FqD5HlHMi54aYpVabKuwQ0SkL4AAizrISJc6VJz1wHqPahc0TEWvSXjSssYBwD+EshXbaS7QKEu3exR8g2HHOkidKXo7lq27kadRyhu7PA91SKrWTrkRkVVxaQCmXshWQjGjUUCmvjVGQ2V3DndPVQFMIRiaLgvRkS2S9duyq5DlZMwKSGQ2aHptiqtno7kRA6AP8LrhiKAI6fvmX3ku8IIhDGuDsJ7UCyYNEcZrymu74avmd3cOR27XjkZeSlQgvnRFPNPiVNqWxrVJ5UmsmDpEbo8eCVd9C3/OAjMRh+N4Q8i4weAYyi0bkDh9wKz50BsJrivU8k/aLbNzt02+MQEbiMPVns71BrFdHSi1dfvfeEAG0IjKSIymyO+KkZ6wFYqVViuT2OBYdE4lImlKNOukZPzrs3MsRinR2VOo/b3ojoL9xWb4zotMUKgAAAABJRU5ErkJggg==" width="50" height="50"></span>
										<div class="info-box-info">
											<h4 class="info-box-title"><?php echo $tf2; ?></h4>
											<p class="info-box-text text-gray-2">
												<?php echo $tc2; ?>
																						</p>
										</div>
									</div>
									<!-- End info box-4 -->
								</div> <!-- /.col -->

								<div class="col-md-12">
									<!-- Begin info box-4 -->
									<div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.4s">
										<span class="info-box-icon rounded-icon bg-main text-white"><img class="icon icons8-Spa-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACeklEQVRoQ+2a4VEcMQyFPyoIqYB0AFRAqCB0AB0AFQQqSFJBkgqACoAKgAqACggVwLwdm1mOy1nPw+ytmfWfu5t7kvUsWWtZu4I3joB9YBO4C4i6eKmskWElYEwf8gfYBX4BBwFZFy+VNTI2kR3gBLgEvgaIuHiprJGxiawCD8A/4HOAiIuXyhoZm8gGcAU8pglLXFy89NXI2ERct7v4wULrFPgGHAI/S+4AXLxU1shYHvkC3CbjtT+0TxYNFy9dNTKdDU76lQf0DPkL7AW84eKlskbGJnIBbAHbgL6XhouXvhoZm8hTsjzqRRcv9TUy1UQi+6NvVBRfK2MTcbOJi6/OWO5m15HkPGUr7ZPrwibp46OHTHeOFxOi8Z4F8oFOJGRcabh46auRsdKvJtE5KGcsHSVKw8XXzGHvkZLRS/3fDa2lGrto8onI2FyTPfIjVWY6tLU0dG+gLHcsIvmg1hKBWVs7IipdlSZbHnciorriU8ssgHsR0T3S98aJdKGlITIqltYaI3SfNvvR9BwZm+f6HsnV2dhsLNnTcZiIlJZpwP8njwy42KGpJo+ElmlA0OSRARc7NNXH9YiqrRYPjV1V23+y54uxkD9HAnppcfSJ5N7dSGwMmaHbzu7qdvYY31L9/qrXP68eaSHE3nTN/ldYqWLUmw1jq+XVFlfUyL5XY1GFqJsVlb+68xrDUCdZ0TK3CRspdavbYe/EPjR/iUhuF6vIX9YtZL6uWtjCK4XW73SVepY+32mRLTW5haewUniFQ0vvmvSbONpg+h15P8uyMAhWJOhZ0U88bzpm8zwi0Hp6cUbdKWWvZZHIXEVG2Uo9RhG6mVlsngEOJpnymuSdEwAAAABJRU5ErkJggg==" width="50" height="50"></span>
										<div class="info-box-info">
											<h4 class="info-box-title"><?php echo $tf3;  ?></h4>
											<p class="info-box-text text-gray-2">
												<?php echo $tc3; ?>
											</p>
										</div>
									</div>
									<!-- End info box-4 -->
								</div> <!-- /.col -->

                                  
							</div><!-- /.row -->
						</div> <!-- /.col -->
                    
                      <div class="container">
                      	<div class="col-lg-12 col-md-12">
                      		<div  class="col-lg-6 col-md-8">

                      			<img src="admin/admin_img/<?php echo $fn1; ?>">

                      		</div>
                      		<div  class="col-lg-6 col-md-8">

                      			<img src="admin/admin_img/<?php echo $fn2; ?>">

                      		</div>
 
  
                              </div>

					</div><!-- /.row -->
				</div> <!-- /.container -->
			</div>

			</section>
			<!-- End section 2 -->


			<!-- ==================================
			///// Begin section 3 (portfolio) /////
			=================================== -->
			<section id="section-3" class="portfolio-section" class="bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url(assets/img/bg22.jpg);">

				<div class="container">
					<div class="row wow fadeIn">

						<!-- Left column -->
						<div class="col-md-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg heading-hover">
								<span class="heading-title-ghost"></span>
								<h2 class="heading-title " style="color:white;">Unsere Angebote</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider -->

							</div>
							<!-- End heading -->

						</div> <!-- /.col -->

						<!-- Right column -->
						<div class="col-md-6">

							

						</div> <!-- /.col -->

					</div> <!-- /.row -->
				</div> <!-- /.container -->


				<div class="container">

					<!-- Begin isotope
					===================
					* Use classes "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
					* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
					-->
					<div class="isotope popup-gallery gutter-2 col-3">

						<!-- Begin isotope filter 
						=========================== 
						<div class="isotope-filter">

							<!-- Begin isotope filter toggle button 
							<div class="navbar-header">
							
							</div>


							<!-- End isotope filter toggle button -->

							<!-- Begin isotope filter links 
							==================================
							* Use class "text-center" or "text-right" to align isotope filter links.
							* Note: class "mlc" = close filter menu when clicking filter link.
							
							<div class="isotope-filter-links collapse navbar-collapse no-padding wow fadeIn" id="isotope-filter-collapse">
								<a class="active" href="#" data-filter="*" style="color:white;">Gym</a>
								<a href="#" data-filter=".photography" style="color:white;">Coaches</a>
							<!--	<a href="#" data-filter=".web-design">Gallery</a>
								<a href="#" data-filter=".graphics">Graphics</a>
								<a href="#" data-filter=".branding, .web-design">Mockups</a>
							</div>
							<!-- End isotope filter links 

						</div>
						<!-- End isotope filter -->

						<div class="col-lg-6" style="padding: 10px 10px 10px 10px;">

						<div style="border-style: solid;border-color: white; padding: 10px 10px 10px 10px; background-color:#F05165; color: white; ">

								<h3> <?php echo $to1; ?> </h3>
								<p><?php echo $co1; ?> </p>
								

							</div>

							</div>


							<div class="col-lg-6" style="padding: 10px 10px 10px 10px;">

						<div style="border-style: solid;border-color: white; padding: 10px 10px 10px 10px; background-color:#F05165; color: white;">

								<h3> <?php echo $to2; ?> </h3>
								<p><?php echo $co2; ?> </p>
								

							</div>

							</div>
							



								<div class="col-lg-6" style="padding: 10px 10px 10px 10px;">

						<div style="border-style: solid;border-color: white; padding: 10px 10px 10px 10px; background-color:#F05165; color: white;">

								<h3> <?php echo $to3; ?> </h3>
								<p><?php echo $co3; ?> </p>
								

							</div>

							</div>	



								<div class="col-lg-6" style="padding: 10px 10px 10px 10px;">

						<div style="border-style: solid;border-color: white; padding: 10px 10px 10px 10px; background-color:#F05165; color: white;">

								<h3> <?php echo $to4; ?> </h3>
								<p><?php echo $co4; ?> </p>
								

							</div>

							</div>




						<!-- Begin isotope items
						==========================
						* Note: For grid layout make sure that your images are the same dimensions.
						* Note: For masonry layout make sure that your images are the different dimensions.
						-->
						<div class="isotope-items-wrap">

							<!-- Grid sizer (do not remove!!!) 
							<div class="grid-sizer"></div>


							<!-- //////////////////
							// Begin isotope item. Note: use class "width2" for alternative item width (works best on first item)
							/////////////////////// --

							<div class="isotope-item photography wow fadeInUp">
								
								<!-- Begin portfolio item 
								<div class="portfolio-item-wrap">
									<div class="portfolio-item">
										<a class="item-link inline-popup-trigger" >
											<span class="cover bg-transparent-9-main"></span>
											<img class="item-img"  src="admin/admin_img/<?php echo $fn3; ?>" alt="image">
											<div class="item-info text-white">
												<h3 class="item-info-title"> <?php echo $to1; ?> </h3>
												<p class="item-info-text"></p><?php echo $co1; ?> </p>
											</div>
										</a>
									</div>

									<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden 
									<div id="portfolio-1" class="inline-popup mfp-hide">
										<div class="inline-popup-inner">

											<div class="inline-popup-image bg-image" style="background-image: url(assets/img/portfolio/big/1.png); background-position: 50% 50%;"></div>

											<div class="row margin-top-40">
												<div class="col-md-8 margin-bottom-20">
													<h2 class="no-margin-top">Portfolio Single Item 1</h2>
													<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p> 

													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>
												</div>
												<div class="col-md-4 margin-bottom-20 padding-left-40">
													<ul class="list-unstyled">
														<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>
														<li>Date: <strong><a href="#" target="_blank">01 jan, 2016</a></strong></li>
														<li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>
														<li>Copyright ©2016, All Rights Reserved</li>
													</ul>
													<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>
												</div>
											</div> <!-- /.row 

										</div> <!-- /.inline-popup-inner 

										<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>

									</div>
									<!-- End inline popup content 

								</div>
								<!-- End portfolio item 

							</div>
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope ite
							/////////////////////// 
							<div class="isotope-item branding wow fadeInUp">

								<!-- Begin portfolio item 
								<div class="portfolio-item-wrap">
									<div class="portfolio-item">
										<a class="item-link inline-popup-trigger" >
											<span class="cover bg-transparent-9-main"></span>
											<img class="item-img" src="admin/admin_img/<?php echo $fn4; ?>" alt="image">
											<div class="item-info text-white">
												<h3 class="item-info-title"><?php echo $to2; ?> </h3>
												<p class="item-info-text"> <?php echo $co2; ?>  </p>
											</div>
										</a>
									</div>

									<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden 
									<div id="portfolio-2" class="inline-popup mfp-hide">
										<div class="inline-popup-inner">

											<div class="inline-popup-image bg-image" style="background-image: url(assets/img/portfolio/big/portfolio-img-2.jpg); background-position: 50% 50%;"></div>

											<div class="row margin-top-40">
												<div class="col-md-8 margin-bottom-20">
													<h2 class="no-margin-top">Portfolio Single Item 2</h2>
													<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p> 

													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>
												</div>
												<div class="col-md-4 margin-bottom-20 padding-left-40">
													<ul class="list-unstyled">
														<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>
														<li>Date: <strong><a href="#" target="_blank">03 jan, 2016</a></strong></li>
														<li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>
														<li>Copyright ©2016, All Rights Reserved</li>
													</ul>
													<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>
												</div>
											</div> <!-- /.row 

										</div> <!-- /.inline-popup-inner 

										<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>

									</div>
									<!-- End inline popup content 

								</div>
								<!-- End portfolio item 

							</div>
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item 
							/////////////////////// 
							<div class="isotope-item web-design wow fadeInUp">

								<!-- Begin portfolio item 
								<div class="portfolio-item-wrap">
									<div class="portfolio-item">
										<a class="item-link inline-popup-trigger" >
											<span class="cover bg-transparent-9-main"></span>
											<img class="item-img" src="admin/admin_img/<?php echo $fn5; ?>" alt="image">
											<div class="item-info text-white">
												<h3 class="item-info-title"><?php echo $to3; ?></h3>
												<p class="item-info-text"><?php echo $co3; ?></p>
											</div>
										</a>
									</div>

									<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden 
									<div id="portfolio-3" class="inline-popup mfp-hide">
										<div class="inline-popup-inner">

											<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
											====================================================================
											* Use class "nav-outside" for outside nav.
											* Use class "nav-outside-top" for outside top nav.
											* Use class "nav-rounded" for rounded nav.
											* Use class "dots-outside" for outside dots.
											* Use class "dots-left" or "dots-right" to align dots.
											* Use class "dots-rounded" for rounded dots.
											* Available carousel data attributes:
													data-items="5".......................(items visible on desktop)
													data-tablet-landscape="4"............(items visible on mobiles)
													data-tablet-portrait="3".............(items visible on mobiles)
													data-mobile-landscape="2"............(items visible on tablets)
													data-mobile-portrait="1".............(items visible on tablets)
													data-loop="true".....................(true/false)
													data-margin="10".....................(space between items)
													data-center="true"...................(true/false)
													data-start-position="0"..............(item start position)
													data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
													data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
													data-mouse-drag="false"..............(true/false)
													data-touch-drag="false"..............(true/false)
													data-autoheight="true"...............(true/false)
													data-autoplay="true".................(true/false)
													data-autoplay-timeout="5000".........(milliseconds)
													data-autoplay-hover-pause="true".....(true/false)
													data-autoplay-speed="800"............(milliseconds)
													data-drag-end-speed="800"............(milliseconds)
													data-lazy-load="true"................(true/false)
													data-nav="true"......................(true/false)
													data-nav-speed="800".................(milliseconds)
													data-dots="false"....................(true/false)
													data-dots-speed="800"................(milliseconds)
											-
											<div class="owl-carousel portfolio-single-carousel dots-outside" data-items="1" data-nav="true">
												
												<!-- Begin carousel item 
												========================= 
												<div class="cc-item">
													<div class="inline-popup-image bg-image" style="background-image: url(assets/img/portfolio/big/portfolio-img-3.jpg); background-position: 50% 50%;"></div>
												</div>
												<!-- End carousel item -->
												
												<!-- Begin carousel item 
												========================= 
												<div class="cc-item">
													<div class="inline-popup-image bg-image" style="background-image: url(assets/img/portfolio/big/portfolio-img-4.jpg); background-position: 50% 50%;"></div>
												</div>
												<!-- End carousel item -->
												
												<!-- Begin carousel item 
												========================= 
												<div class="cc-item">
													<div class="inline-popup-image bg-image" style="background-image: url(assets/img/portfolio/big/portfolio-img-5.jpg); background-position: 50% 50%;"></div>
												</div>
												<!-- End carousel item 
												
											</div>
											<!-- End content carousel

											<div class="row margin-top-80">
												<div class="col-md-8 margin-bottom-20">
													<h2 class="no-margin-top">Portfolio Single Item 3</h2>
													<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p> 

													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>
												</div>
												<div class="col-md-4 margin-bottom-20 padding-left-40">
													<ul class="list-unstyled">
														<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>
														<li>Date: <strong><a href="#" target="_blank">04 jan, 2016</a></strong></li>
														<li>Category <strong><a href="#" target="_blank">Photography</a></strong></li>
														<li>Copyright ©2016, All Rights Reserved</li>
													</ul>
													<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>
												</div>
											</div> <!-- /.row

										</div> <!-- /.inline-popup-inner

										<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>

									</div>
									<!-- End inline popup content 

								</div>
								<!-- End portfolio item 

							</div>
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item 
							/////////////////////// 
							<div class="isotope-item graphics wow fadeInUp">

								<!-- Begin portfolio item 
								<div class="portfolio-item-wrap">
									<div class="portfolio-item">
										<a class="item-link inline-popup-trigger" >
											<span class="cover bg-transparent-9-main"></span>
											<img class="item-img" src="admin/admin_img/<?php echo $fn6; ?>" alt="image">
											<div class="item-info text-white">
												<h3 class="item-info-title"><?php echo $to4; ?></h3>
												<p class="item-info-text"> <?php echo $co4; ?> </p>
											</div>
										</a>
									</div>

									<!-- Begin inline popup content. Class "mfp-hide" is required to make dialog hidden 
									<div id="portfolio-4" class="inline-popup mfp-hide">
										<div class="inline-popup-inner">

											<div class="inline-popup-image bg-image" style="background-image: url(assets/img/portfolio/big/portfolio-img-4.jpg); background-position: 50% 50%;"></div>

											<div class="row margin-top-40">
												<div class="col-md-8 margin-bottom-20">
													<h2 class="no-margin-top">Portfolio Single Item 4</h2>
													<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show.</p> 

													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquapta. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquipter consequat adipisicing sedari.</p>
												</div>
												<div class="col-md-4 margin-bottom-20 padding-left-40">
													<ul class="list-unstyled">
														<li>Client: <strong><a href="#" target="_blank">MockCo INC</a></strong></li>
														<li>Date: <strong><a href="#" target="_blank">05 jan, 2016</a></strong></li>
														<li>Category <strong><a href="#" target="_blank">Graphics</a></strong></li>
														<li>Copyright ©2016, All Rights Reserved</li>
													</ul>
													<a href="#" target="_blank" class="btn btn-primary btn-rounded btn-lg margin-top-20">Launch Project</a>
												</div>
											</div> <!-- /.row 

										</div> <!-- /.inline-popup-inner

										<a class="inline-popup-close" href="#"><i class="fa fa-times"></i></a>

									</div>
									<!-- End inline popup content 

								</div>
								<!-- End portfolio item 

							</div>
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item 
							/////////////////////// 
							<div class="isotope-item photography wow fadeInUp">

								<!-- Begin portfolio item -->
								
								<!-- End portfolio item -->

							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item 
							/////////////////////// -->
							
								<!-- End portfolio item -->

							
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item 
							/////////////////////// -->
						
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item
							/////////////////////// -->
							
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item 
							/////////////////////// -->
							
							<!-- End isotope item -->

							<!-- //////////////////
							// Begin isotope item
							/////////////////////// -->
						
					<!-- End isotope -

					<div class="text-center wow fadeIn" data-wow-delay="0.4s">
						<a href="#" target="_blank" class="btn btn-default btn-xlg btn-block margin-top-40">View All Portfolio</a>
					</div>

				</div> <!-- /.container -->

			</section>
			<!-- End section 3 -->


			<!-- ===============================
			///// Begin section 4 (prices) /////
			====================================
			* Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
			* Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
			* Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
			* Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
			-->
			<section id="section-4" class="prices-section bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url(assets/img/misc/bg-3.jpg);  padding: 80px 0px  140px 0px; ">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.  
				-->

				<div class="container">
					<div class="row wow fadeIn">

						<!-- Left column -->
						<div class="col-md-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg heading-hover">
							
								<h2 class="heading-title " style="color:white;">Preise</h2>


								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider -->

							</div>
							<!-- End heading -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container 

				<div class="container wow fadeIn">
					<div class="row">
						<div class="col-md-4">

							<!-- Begin info box-4 
							<div class="info-box info-box-4 info-box-white wow fadeIn">
								<span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-usd"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">Consectetur Adipis</h4>
									<p class="info-box-text text-gray-2">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.
									</p>
								</div>
							</div>
							<!-- End info box-4 -->

						 <!-- /.col 

						<div class="col-md-4">

							<!-- Begin info box-4 
							<div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.2s">
								<span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-bar-chart"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">Excepteur Sint</h4>
									<p class="info-box-text text-gray-2">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.
									</p>
								</div>
							</div>
							<!-- End info box-4 

						</div> <!-- /.col 

						<div class="col-md-4">

							<!-- Begin info box-4 
							<div class="info-box info-box-4 info-box-white wow fadeIn" data-wow-delay="0.4s">
								<span class="info-box-icon rounded-icon bg-main text-white"><i class="fa fa-balance-scale"></i></span>
								<div class="info-box-info">
									<h4 class="info-box-title">Cillum Dolore</h4>
									<p class="info-box-text text-gray-2">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit minim veniam ut enim.
									</p>
								</div>
							</div>
							<!-- End info box-4 

						</div> <!-- /.col 

					</div> <!-- /.row 
				</div> <!-- /.container 

				<!-- Begin prices 
				<div class="prices wow fadeIn" data-wow-delay="0.6s">
					<div class="container">

						<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
						====================================================================
						* Use class "nav-outside" for outside nav.
						* Use class "nav-outside-top" for outside top nav.
						* Use class "nav-rounded" for rounded nav.
						* Use class "dots-outside" for outside dots.
						* Use class "dots-left" or "dots-right" to align dots.
						* Use class "dots-rounded" for rounded dots.
						* Available carousel data attributes:
								data-items="5".......................(items visible on desktop)
								data-tablet-landscape="4"............(items visible on mobiles)
								data-tablet-portrait="3".............(items visible on mobiles)
								data-mobile-landscape="2"............(items visible on tablets)
								data-mobile-portrait="1".............(items visible on tablets)
								data-loop="true".....................(true/false)
								data-margin="10".....................(space between items)
								data-center="true"...................(true/false)
								data-start-position="0"..............(item start position)
								data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
								data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
								data-mouse-drag="false"..............(true/false)
								data-touch-drag="false"..............(true/false)
								data-autoheight="true"...............(true/false)
								data-autoplay="true".................(true/false)
								data-autoplay-timeout="5000".........(milliseconds)
								data-autoplay-hover-pause="true".....(true/false)
								data-autoplay-speed="800"............(milliseconds)
								data-drag-end-speed="800"............(milliseconds)
								data-lazy-load="true"................(true/false)
								data-nav="true"......................(true/false)
								data-nav-speed="800".................(milliseconds)
								data-dots="false"....................(true/false)
								data-dots-speed="800"................(milliseconds)
						-->
			
						<!-- End prices carousel -->
	<div class="container" style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid;  overflow-x: scroll;   ">
 
  <table class="table table-bordered"  >
    <thead>
      <tr>
        <th>Eintritt (Mo-So & Feiertage)</th>
        <th>Preise </th>
        <th>Happy Hour (Mo-Fr Eintritt vor 16 Uhr)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Erwachsene</td>
        <td><?php echo $a1day; ?>&#8364</td>
        <td><?php echo $ah1day; ?>&#8364</td>
      </tr>
      <tr>
        <td>Sch&#252ler, Studenten, Senioren     </td>
        <td><?php echo $s1day; ?>&#8364</td>
        <td><?php echo $sh1day; ?>&#8364</td>
      </tr>
      <tr>
        <td>Kinder (unter 14 Jahre)</td>
        <td><?php echo $k1day; ?>&#8364</td>
        <td><?php echo $kh1day; ?>&#8364</td>
      </tr>
       <tr>
        <td>Kleinkinder (unter 4 Jahre)</td>
        <td><?php echo $kk1day; ?>&#8364</td>
        <td><?php echo $kkh1day; ?>&#8364</td>
      </tr>
       <tr>
        <td>Familienkarte</td>
        <td><?php echo $f1day; ?>&#8364</td>
        <td><?php echo $fh1day; ?>&#8364</td>
      </tr>
    </tbody>
  </table>
</div>

<br>
<br>

<div class="container ">

<div class="col-lg-12 col-xs-12" style=" border-style: solid; padding: 20px 10px 20px 10px;color: white; word-wrap: break-word; " >
<p>Wir weisen darauf hin, dass Minderj&#228hrige unter 14 nur mit Begleitperson klettern d&#252rfen und eine ausgef&#252llte Best&#228tigung vorliegen muss.</p> 
<p>Minderj&#228hrige ab 14 jahren m&#252ssen bei Eintritt eine von den Erziehungsberechtigten ausgef&#252llte Einverständniserkl&#228rung 
abgeben.</p>
<p>Familienkarten beinhalten den Eintritt von 2 x Erwachsenen + beliebig viele EIGENE Kinder unter 18 Jahren.</p>
Wichtig: Kindergruppen bitte nur nach vorab Anmeldung
</div>
</div>

<br>
<br>




<div class="container" style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid; overflow-x: scroll; ">
 
  <table class="table  table-bordered"  >
    <thead>
      <tr>
        <th>Eintrittskarten Specials</th>
        <th>11er</th>
        <th>3-Monate</th>
        <th>Halbjahr</th>
        <th>Jahr</th>
        <th>Jahr mtl. Abo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Erwachsene</td>
        <td><?php echo $a1month; ?>&#8364</td>
        <td><?php echo $a3month; ?>&#8364</td>
        <td><?php echo $a6month; ?>&#8364</td>
        <td><?php echo $ayear; ?>&#8364</td>
        <td><?php echo $ayyear; ?>&#8364</td>
      </tr>
      <tr>
        <td>Sch&#252ler, Studenten, Senioren  </td>
        <td><?php echo $s1month; ?>&#8364</td>
        <td><?php echo $s3month; ?>&#8364</td>
        <td><?php echo $s6month; ?>&#8364</td>
        <td><?php echo $syear; ?>&#8364</td>
        <td><?php echo $syyear; ?>&#8364</td>
      </tr>
      <tr>
        <td>Kinder (unter 14 Jahre)</td>
         <td><?php echo $k1month; ?>&#8364</td>
        <td><?php echo $k3month; ?>&#8364</td>
        <td><?php echo $k6month; ?>&#8364</td>
        <td><?php echo $kyear; ?>&#8364</td>
        <td><?php echo $kyyear; ?>&#8364</td>
      </tr>
    </tbody>
  </table>
</div>

					</div> <!-- /.container -->
				</div>
				<!-- End prices -->

			<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="heading heading-lg text-white heading-hover wow fadeIn">
								<span class="heading-title-ghost"></span>
								<h2 class="heading-title">Leihequipment</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider -->

							</div>


							
							</div>
							<!-- End heading -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->


					
							
						
	<div class="container" style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid;  overflow-x: scroll;  ">
 
  <table class="table table-bordered"  >
    <thead>
      <tr>
        <th>Leihequipment</th>
        <th>Erwachsene</th>
        <th>Kinder</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Leihschuhe</td>
        <td><?php echo $eel; ?>&#8364</td>
        <td><?php echo $ekl; ?>&#8364</td>
      </tr>
      <tr>
        <td>Chalkbags</td>
        <td><?php echo $eec; ?>&#8364</td>
        <td><?php echo $ekc; ?>&#8364</td>
      </tr>
      <tr>
        <td>B&#252rsten</td>
        <td><?php echo $eeb; ?>&#8364 </td>
        <td><?php echo $ekb; ?>&#8364</td>
      </tr>
    </tbody>
  </table>
</div>

							



				</div> <!-- /.container -->
			</div>
		</div>


			</section>
			<!-- End section 4 -->


			<!-- =============================
			///// Begin section 5 (team) /////
			============================== -->
			<section id="section-5" class="team-section">

				<!--<div class="container">
					<div class="row wow fadeIn">

						<!-- Left column 
						<div class="col-md-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
						<!--	<div class="heading heading-lg heading-hover">
								<span class="heading-title-ghost">The Team</span>
								<h2 class="heading-title">The Team</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider 

							</div>
							<!-- End heading 

						</div> <!-- /.col 

						<!-- Right column 
						<div class="col-md-6">

							<p class="lead">
								Aliquam id viverra dolor. Duis vel ligula non neque.Lorem ipsum dolor sit amet, 
								consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Suckamik saneta isromet.
							</p>

						</div> <!-- /.col 

					</div> <!-- /.row 
				</div> <!-- /.container -->

				<!-- Begin team -
				<div class="team wow fadeIn" data-wow-delay="0.3s">
					<div class="container">

						<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
						====================================================================
						* Use class "nav-outside" for outside nav.
						* Use class "nav-outside-top" for outside top nav.
						* Use class "nav-rounded" for rounded nav.
						* Use class "dots-outside" for outside dots.
						* Use class "dots-left" or "dots-right" to align dots.
						* Use class "dots-rounded" for rounded dots.
						* Available carousel data attributes:
								data-items="5".......................(items visible on desktop)
								data-tablet-landscape="4"............(items visible on mobiles)
								data-tablet-portrait="3".............(items visible on mobiles)
								data-mobile-landscape="2"............(items visible on tablets)
								data-mobile-portrait="1".............(items visible on tablets)
								data-loop="true".....................(true/false)
								data-margin="10".....................(space between items)
								data-center="true"...................(true/false)
								data-start-position="0"..............(item start position)
								data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
								data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
								data-mouse-drag="false"..............(true/false)
								data-touch-drag="false"..............(true/false)
								data-autoheight="true"...............(true/false)
								data-autoplay="true".................(true/false)
								data-autoplay-timeout="5000".........(milliseconds)
								data-autoplay-hover-pause="true".....(true/false)
								data-autoplay-speed="800"............(milliseconds)
								data-drag-end-speed="800"............(milliseconds)
								data-lazy-load="true"................(true/false)
								data-nav="true"......................(true/false)
								data-nav-speed="800".................(milliseconds)
								data-dots="false"....................(true/false)
								data-dots-speed="800"................(milliseconds)
						
						<div class="owl-carousel team-carousel dots-outside" data-items="4" data-margin="20" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="2" data-mobile-portrait="1">

							<!-- Begin team box 
							=====================
							* Use class "team-box-hover" to enable team box hover effect.
							* Use class "team-box-rounded" to enable team box rounded image.
							
							<div class="team-box team-box-hover team-box-rounded">
								<div class="team-image">
									<img src="assets/img/team/staff-1.jpg" alt="John Doe">
								</div>

								<div class="team-info text-center">
									<h4 class="team-info-title">John Doe</h4>
									<p class="team-info-text">General Manager</p>
									
									<!-- Begin social icons 
									<ul class="social-icons">
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-dribbble"></i></a></li>
									</ul>
									<!-- End social icons 

								</div>
							</div>
							<!-- End team box -->

							<!-- Begin team box 
							=====================
							* Use class "team-box-hover" to enable team box hover effect.
							* Use class "team-box-rounded" to enable team box rounded image.
							
							<div class="team-box team-box-hover team-box-rounded">
								<div class="team-image">
									<img src="assets/img/team/staff-2.jpg" alt="Joseph Reeves">
								</div>

								<div class="team-info text-center">
									<h4 class="team-info-title">Joseph Reeves</h4>
									<p class="team-info-text">Developer</p>

									<!-- Begin social icons 
									<ul class="social-icons">
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-dribbble"></i></a></li>
									</ul>
									<!-- End social icons -

								</div>
							</div>
							<!-- End team box -->

							<!-- Begin team box 
							=====================
							* Use class "team-box-hover" to enable team box hover effect.
							* Use class "team-box-rounded" to enable team box rounded image.
							
							<div class="team-box team-box-hover team-box-rounded">
								<div class="team-image">
									<img src="assets/img/team/staff-3.jpg" alt="Henry Harrison">
								</div>

								<div class="team-info text-center">
									<h4 class="team-info-title">Miranda Harrison</h4>
									<p class="team-info-text">Designer</p>

									<!-- Begin social icons 
									<ul class="social-icons">
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-dribbble"></i></a></li>
									</ul>
									<!-- End social icons 

								</div>
							</div>
							<!-- End team box -->

							<!-- Begin team box 
							=====================
							* Use class "team-box-hover" to enable team box hover effect.
							* Use class "team-box-rounded" to enable team box rounded image.
							
							<div class="team-box team-box-hover team-box-rounded">
								<div class="team-image">
									<img src="assets/img/team/staff-4.jpg" alt="Henry Harrison">
								</div>

								<div class="team-info text-center">
									<h4 class="team-info-title">Anna Daniel</h4>
									<p class="team-info-text">Marketing</p>

									<!-- Begin social icons 
									<ul class="social-icons">
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="btn btn-social-min btn-default btn-rounded-full btn-sm" href="" target="_blank"><i class="fa fa-dribbble"></i></a></li>
									</ul>
									<!-- End social icons 

								</div>
							</div>
							<!-- End team box -->

							<!-- Begin team box 
							=====================
							* Use class "team-box-hover" to enable team box hover effect.
							* Use class "team-box-rounded" to enable team box rounded image.
							
							<div class="team-box team-box-hover team-box-rounded">
								<div class="team-image">
									<a href="#" target="_blank"><img src="assets/img/team/staff-5.jpg" alt="Henry Harrison"></a>
								</div>

								<div class="team-info text-center">
									<h4 class="team-info-title">Join Us</h4>
									<p class="team-info-text">Designer Wanted</p>
									<a href="" class="btn btn-primary btn-rounded btn-sm">Read More!</a>
								</div>
							</div>
							<!-- End team box 

						</div>
						<!-- End team carousel 

					</div> <!-- /.container 
				</div>
				<!-- End team 

			</section>
			<!-- End section 5 -->


			<!-- ====================================
			///// Begin section 9 (video promo) /////
			=========================================
			* Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
			-->

			<!-- Youtube video background
			NOTE: Replace videoURL with your own (videoURL:'your-youtube-video-URL'). 
			Do not forget to add your background image for mobile devices (because the video background doesn't work on mobile devices).
			More info about YTPlayer: https://github.com/pupunzi/jquery.mb.YTPlayer 

			<section id="section-9" class="video-section youtube-bg text-white angle-right-top angle-left-bottom" 
				style="background-image: url(assets/img/video-bg/promo-video-bg.jpg); background-position: 50% 50%;"
				data-property="{
			      videoURL: 'https://youtu.be/O7JwGfdMsCw',
			      containment: 'self',
			      startAt: 0, 
			      stopAt: 0,
			      autoPlay: true,
			      loop: true,
			      mute: true,  
			      showControls: false, 
			      showYTLogo: false,
			      realfullscreen: true,
			      addRaster: false, 
			      optimizeDisplay: true,
			      stopMovieOnBlur: true
				}">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.  
				
				<span class="cover bg-transparent-8-dark"></span>

				<div class="video-section-caption vertical-align-center">

					<!-- Begin heading 
					===================
					* Use class "heading-center" or "heading-right" to align heading.
					* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
					* Use class "heading-hover" to enable heading hover effect.
					* Use class "heading-uppercase" to enable uppercase letters.
					
					<div class="heading heading-lg heading-center heading-hover wow fadeIn">
						<span class="heading-title-ghost">Video Promo</span>
						<h2 class="heading-title">Video Promo</h2>
						<a class="video-btn bg-main" href="https://www.youtube.com/user/HQMEDIA/videos" target="_blank"><i class="fa fa-play"></i></a>
						<p class="heading-tescription lead text-gray-2">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt sumbire itkum.
						</p>
					</div>
					<!-- End heading 

				</div> <!-- /.vertical-align-center 

			</section>
			<!-- End section 7 -->


			<!-- ===========================================
			///// Begin section 6 (blog/articles list) /////
			============================================ 
			<section id="section-6" class="blog-section">

				<div class="container">
					<div class="row wow fadeIn">

						<!-- Left column 
						<div class="col-md-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							
							<div class="heading heading-lg heading-hover">
								<span class="heading-title-ghost">Articles</span>
								<h2 class="heading-title">Articles</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider 

							</div>
							<!-- End heading 

						</div> <!-- /.col 

						<!-- Right column 
						<div class="col-md-6">

							<p class="lead">
								<strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi vaimera suttis.
							</p>

						</div> <!-- /.col 

					</div> <!-- /.row
				</div> <!-- /.container

				<div class="container">

					<!-- Begin blog list
					=====================
					* Use class "blog-list-classic" to enable classic blog list layout.
					
					<div class="blog-list margin-top-80">
						<div class="blog-wrap">

							<!-- Begin blog list item 1 
							============================ 
							<div class="blog-list-item row wow fadeInUp">

								<!-- Left column 
								<div class="col col-md-6 no-padding">
									<a href="#" class="bco blog-list-image bg-image" style="background-image: url(assets/img/blog/blog-1.jpg); background-position: 50% 50%;"></a>
								</div> <!-- /.col 

								<!-- Right column 
								<div class="col col-md-6 no-padding">
									<div class="bco blog-list-info">
										<h2 class="blog-list-title"><a href="#" title="Aenean Odio Metus">Aenean Odio Metus</a></h2>
										<div class="blog-list-meta">
											<a href="#" class="article-time">29 jan 2016</a> - in
											<a href="#" class="article-category">#web design</a>
										</div>
										<p class="blog-list-desc">
											Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
											laboris nisi ut aliquip ex ea commodo consequat...
										</p>
									</div>
								</div> <!-- /.col 

							</div> 
							<!-- End blog list item 1 -->

							<!-- Begin blog list item 2 
							============================ 
							<div class="blog-list-item row wow fadeInUp">

								<!-- Left column 
								<div class="col col-md-6 col-md-push-6 no-padding">
									<a href="#" class="bco blog-list-image bg-image" style="background-image: url(assets/img/blog/blog-2.jpg); background-position: 50% 50%;"></a>
								</div> <!-- /.col -->

								<!-- Right column 
								<div class="col col-md-6 col-md-pull-6 no-padding">
									<div class="bco blog-list-info">
										<h2 class="blog-list-title"><a href="#" title="Curabitur a Sodales">Curabitur a Sodales</a></h2>
										<div class="blog-list-meta">
											<a href="#" class="article-time">12 jan 2016</a> -in
											<a href="#" class="article-category">#development</a>
										</div>
										<p class="blog-list-desc">
											Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
											laboris nisi ut aliquip ex ea commodo consequat...
										</p>
									</div>
								</div> <!-- /.col 

							</div> 
							<!-- End blog list item 2 -->

							<!-- Begin blog list item 3 
							============================ 
							<div class="blog-list-item row wow fadeInUp">

								<!-- Left column 
								<div class="col col-md-6 no-padding">

									<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
									====================================================================
									* Use class "nav-outside" for outside nav.
									* Use class "nav-outside-top" for outside top nav.
									* Use class "nav-rounded" for rounded nav.
									* Use class "dots-outside" for outside dots.
									* Use class "dots-left" or "dots-right" to align dots.
									* Use class "dots-rounded" for rounded dots.
									* Available carousel data attributes:
											data-items="5".......................(items visible on desktop)
											data-tablet-landscape="4"............(items visible on mobiles)
											data-tablet-portrait="3".............(items visible on mobiles)
											data-mobile-landscape="2"............(items visible on tablets)
											data-mobile-portrait="1".............(items visible on tablets)
											data-loop="true".....................(true/false)
											data-margin="10".....................(space between items)
											data-center="true"...................(true/false)
											data-start-position="0"..............(item start position)
											data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
											data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
											data-mouse-drag="false"..............(true/false)
											data-touch-drag="false"..............(true/false)
											data-autoheight="true"...............(true/false)
											data-autoplay="true".................(true/false)
											data-autoplay-timeout="5000".........(milliseconds)
											data-autoplay-hover-pause="true".....(true/false)
											data-autoplay-speed="800"............(milliseconds)
											data-drag-end-speed="800"............(milliseconds)
											data-lazy-load="true"................(true/false)
											data-nav="true"......................(true/false)
											data-nav-speed="800".................(milliseconds)
											data-dots="false"....................(true/false)
											data-dots-speed="800"................(milliseconds)
									
									<div class="owl-carousel dots-right" data-items="1" data-nav="true">
										
										<!-- Begin carousel item 
										========================= 
										<div class="cc-item">
											<a href="#" class="bco blog-list-image bg-image" style="background-image: url(assets/img/blog/blog-3.jpg); background-position: 50% 50%;"></a>
										</div>
										<!-- End carousel item -->
										
										<!-- Begin carousel item 
										========================= 
										<div class="cc-item">
											<a href="#" class="bco blog-list-image bg-image" style="background-image: url(assets/img/blog/blog-5.jpg); background-position: 50% 50%;"></a>
										</div>
										<!-- End carousel item -->
										
										<!-- Begin carousel item 
										========================= 
										<div class="cc-item">
											<a href="#" class="bco blog-list-image bg-image" style="background-image: url(assets/img/blog/blog-6.jpg); background-position: 50% 50%;"></a>
										</div>
										<!-- End carousel item 
										
									</div>
									<!-- End content carousel 

								</div> <!-- /.col -->

								<!-- Right column 
								<div class="col col-md-6 no-padding">
									<div class="bco blog-list-info">
										<h2 class="blog-list-title"><a href="#" title="Sed Quis Vestibulum">Sed Quis Vestibulum</a></h2>
										<div class="blog-list-meta">
											<a href="#" class="article-time">06 jan 2016</a> - in
											<a href="#" class="article-category">#development</a>
										</div>
										<p class="blog-list-desc">
											Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
											laboris nisi ut aliquip ex ea commodo consequat...
										</p>
									</div>
								</div> <!-- /.col 

							</div> 
							<!-- End blog list item 3 -->

							<!-- Begin blog list item 4 
							============================ 
							<div class="blog-list-item row wow fadeInUp">

								<!-- Left column 
								<div class="col col-md-6 col-md-push-6 no-padding">
									<a href="#" class="bco blog-list-image bg-image" style="background-image: url(assets/img/blog/blog-4.jpg); background-position: 50% 50%;"></a>
								</div> <!-- /.col -->

								<!-- Right column 
								<div class="col col-md-6 col-md-pull-6 no-padding">
									<div class="bco blog-list-info">
										<h2 class="blog-list-title"><a href="#" title="Proin Ex Dolor">Proin Ex Dolor</a></h2>
										<div class="blog-list-meta">
											<a href="#" class="article-time">03 jan 2016</a> -in
											<a href="#" class="article-category">#web design</a>
										</div>
										<p class="blog-list-desc">
											Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
											laboris nisi ut aliquip ex ea commodo consequat...
										</p>
									</div>
								</div> <!-- /.col 

							</div> 
							<!-- End blog list item 4 
						
						</div> <!-- /.blog-wrap 
					</div>
					<!-- End blog-list 

					<div class="text-center wow fadeIn" data-wow-delay="0.4s">
						<a href="#" target="_blank" class="btn btn-default btn-xlg btn-block margin-top-60">View All Articles</a>
					</div>

				</div> <!-- /.container 

			</section>
			<!-- End section 6 -->


			
			
			<section id="section-7" class="testimonials-section bg-dark angle-right-top angle-left-bottom bg-image-parallax" style="background-image: url(assets/img/misc/bg-2.jpg); padding: 80px 0px 80px 0px;"">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.-->  
				
				<span class="cover bg-transparent-9-5-dark"></span>

				<div class="container">
					<div class="row">
						<div class="col-md-12"> 

						
							
							<div class="heading heading-lg heading-hover text-white wow fadeIn">
								
								<h2 class="heading-title">Social Media</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.-->
								
								<hr class="hr-width-1 hr-5x border-main">
								

							</div>
							
						</div>  
					</div>  
				</div>  

				<div class="container">
				
						<!-- Left column -->
						
							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							
                  
						<div class="col-lg-6 ">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg heading-hover">
								<div>
									<span class="heading-title-ghost"></span>
								<h2 class="heading-title text-white"></h2>

								</div>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->


								

								<p class="heading-tescription lead text-gray-2">
									
								</p>
				
                    <div class="fb-page" data-href="https://www.facebook.com/MonkeyCage2016/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false"  data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MonkeyCage1/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MonkeyCage2016/">MonkeyCage</a></blockquote></div>
								

								
                              
							
							
							</div>
						</div>
						<div class="col-lg-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg heading-hover">
								
								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
							
								<!-- End divider -->

								<p class="heading-tescription lead text-gray-2">
									
								</p>

								                <a class="twitter-timeline" data-width="500" data-height="300" href="https://twitter.com/MonkeyCage2016">Tweets by MonkeyCage2016</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								
								


							
							
							
							</div>
						</div>
						</div>!-- /.container -->

			</section>
			<!-- End section 7 -->


			<!-- =================================
			///// Begin section 10 (clients) /////
			================================== 
			<section id="section-10" class="clients-section">

				<div class="container">
					<div class="row">

						<div class="col-md-12">
							
							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							
							<div class="heading heading-lg heading-center heading-hover wow fadeIn">
								<span class="heading-title-ghost">Our Clients</span>
								<h2 class="heading-title">Our Clients</h2>

								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								
								<hr class="hr-width-1 hr-5x border-main">
								<!-- End divider 

								<p class="heading-tescription lead max-width-800 margin-auto">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
							</div>
							<!-- End heading 

						</div> <!-- /.col -->

						<!-- Left column 
						<div class="col-md-12 margin-top-60 wow fadeIn" data-wow-delay="0.3s">

							<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
							====================================================================
							* Use class "nav-outside" for outside nav.
							* Use class "nav-outside-top" for outside top nav.
							* Use class "nav-rounded" for rounded nav.
							* Use class "dots-outside" for outside dots.
							* Use class "dots-left" or "dots-right" to align dots.
							* Use class "dots-rounded" for rounded dots.
							* Available carousel data attributes:
									data-items="5".......................(items visible on desktop)
									data-tablet-landscape="4"............(items visible on mobiles)
									data-tablet-portrait="3".............(items visible on mobiles)
									data-mobile-landscape="2"............(items visible on tablets)
									data-mobile-portrait="1".............(items visible on tablets)
									data-loop="true".....................(true/false)
									data-margin="10".....................(space between items)
									data-center="true"...................(true/false)
									data-start-position="0"..............(item start position)
									data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
									data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
									data-mouse-drag="false"..............(true/false)
									data-touch-drag="false"..............(true/false)
									data-autoheight="true"...............(true/false)
									data-autoplay="true".................(true/false)
									data-autoplay-timeout="5000".........(milliseconds)
									data-autoplay-hover-pause="true".....(true/false)
									data-autoplay-speed="800"............(milliseconds)
									data-drag-end-speed="800"............(milliseconds)
									data-lazy-load="true"................(true/false)
									data-nav="true"......................(true/false)
									data-nav-speed="800".................(milliseconds)
									data-dots="false"....................(true/false)
									data-dots-speed="800"................(milliseconds)
							
							<div class="owl-carousel clients-carousel dots-outside" data-items="5" data-margin="40" data-tablet-landscape="4" data-tablet-portrait="3" data-mobile-landscape="2" data-mobile-portrait="1">
								
								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-1.png" alt="image"></a>
								</div>
								<!-- End carousel item 
								
								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-2.png" alt="image"></a>
								</div>
								<!-- End carousel item -->
								
								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-3.png" alt="image"></a>
								</div>
								<!-- End carousel item -->

								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-4.png" alt="image"></a>
								</div>
								<!-- End carousel item -->

								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-5.png" alt="image"></a>
								</div>
								<!-- End carousel item -->

								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-6.png" alt="image"></a>
								</div>
								<!-- End carousel item -->

								<!-- Begin carousel item 
								========================= 
								<div class="cc-item">
									<a target="_blank" href="#" class="client"><img src="assets/img/clients/client-7.png" alt="image"></a>
								</div>
								<!-- End carousel item -
								
							</div>
							<!-- End content carousel 

						</div> <!-- /.col
					</div> <!-- /.row 
				</div> <!-- /.container 

			</section>
			<!-- End section 10 -->


			<!-- ================================
			///// Begin section 8 (contact) /////
			=====================================
			* Use class "angle-left-top", "angle-right-top", "angle-left-bottom", "angle-right-bottom" to change section angle.
			* Use class "bg-image-fixed" to make background image fixed (otherwise use class "bg-image").
			* Use class "bg-image-parallax" to enable background image parallax effect (otherwise use class "bg-image").
			* Use class "bg-pattern" if you use background patterns (example: http://subtlepatterns.com/). Combine with class "bg-image-fixed".
			-->
			<section id="section-8" class="contact-section bg-dark angle-right-top bg-image-parallax" style="background-image: url(assets/img/misc/bg-1.jpg); padding: 80px 0px 80px 0px;">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.  
				-->
				<span class="cover bg-transparent-9-dark bg-transparent-gradient-1"  ></span>

			
						

 <div class="container" >


 <div class="heading heading-lg heading-hover">
							<span class="heading-title-ghost"></span>
								<h2 class="heading-title text-white">Anfahrt und Kontakt</h2>

								<hr class="hr-width-1 hr-5x border-main">
							</div>

						<div class="col-md-6">

							<!-- Begin heading 
							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg heading-hover">
								<div>
									<span class="heading-title-ghost"></span>
								<h2 class="heading-title text-white">  </h2>

								</div>
								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
							
								<!-- End divider -->

								<p class="heading-tescription lead text-gray-2">
									
								</p>

								
									
								
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20525.453553890606!2d9.097298529046132!3d49.97982763243011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDU4JzQ3LjQiTiA5wrAwNic1My4zIkU!5e0!3m2!1sen!2sin!4v1471693048601" width="500" height="250" frameborder="0" style="border:1" allowfullscreen></iframe>
							

							
							
							
							
							</div>
						</div>

						<div class="col-md-6">

						
							<!-- Begin heading 

							===================
							* Use class "heading-center" or "heading-right" to align heading.
							* Use class "heading-xs", "heading-sm", "heading-md", "heading-lg" or "heading-xlg" to shange heading size.
							* Use class "heading-hover" to enable heading hover effect.
							* Use class "heading-uppercase" to enable uppercase letters.
							-->
							<div class="heading heading-lg heading-hover">
								<div>
									<span class="heading-title-ghost"></span>
								<h2 class="heading-title text-white">  </h2>

								</div>
								<!-- Begin divider 
								===================
								* Use class "hr-width-1", "hr-width-2" -> up to "hr-width-10" to shange divider width.
								* Use class "hr-1x", "hr-2x", "hr-3x", "hr-4x" or "hr-5x" to shange divider size.
								* Use class "hr-dotted", "hr-dashed" or "hr-double" to shange divider style.
								-->
							
								<!-- End divider -->

								<p class="heading-tescription lead text-gray-2">
									
								</p>
								
<div style=" border-style: solid; padding: 20px 10px 7px 10px;color: white; " >
<p>Monkey Cage – Boulderhalle Aschaffenburg</p> 
<p>Mainaschafferstr. 113</p>
<p>63741 Aschaffenburg</p>
<p>E-Mail: info@monkey-cage.de</p>
<p>Telefon: +49 6021 – 4452929</p>
<p>Fax:+49 6021 – 4452930 </p>
</div>

								
							
							
							
							
							
							</div>
						</div>

							

						
						<!-- Right column 
						<div class="col-md-5 text-gray-2 padding-left-40">

							<div class="contact-info">
								<p><i class="fa fa-home"></i> 121 King Street, Melbourne, Australia</p>
								<p><i class="fa fa-phone"></i> phone: +123 456 789 00</p>
								<p><i class="fa fa-envelope"></i> <a href="mailto:company.email@info.com" target="_blank">company.email@info.com</a></p>
							</div>

							<h5 class="margin-top-40 margin-bottom-20">Follow Us:</h5>

							<!-- Begin social icons 
							<ul class="social-icons margin-bottom-20">
								<li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								<li><a class="btn btn-social-min btn-white-bordered btn-rounded-full btn-lg" href="" target="_blank"><i class="fa fa-dribbble"></i></a></li>
							</ul>
							<!-- End social icons 

						</div> <!-- /.col 

					</div> <!-- /.row -->

					
						<div class="col-md-12">

							<!-- Begin contact form 
							========================= -->
							<div class="heading heading-lg heading-hover">
							<span class="heading-title-ghost"></span>
								<h2 class="heading-title text-white">Schreib uns</h2>
							</div>
							<form id="contact-form" class="margin-top-80 text-white wow fadeIn" data-wow-delay="0.3s" method="post" action=" " >

								<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
								<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
								<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your email address (where a message will be sent) -->
								<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
								<!-- End Hidden Required Fields -->

								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<input type="text" class="form-control" name="fname" placeholder="Vorname" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<input type="text" class="form-control" name="lname" placeholder="Nachname" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Ihre Email-Adresse" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Stadt" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<input type="text" class="form-control" name="country" placeholder="Land" required="">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<input type="text" class="form-control" name="phone" placeholder="Telefonnummer" required="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<textarea class="form-control" name="message" rows="8" placeholder="Ihre Nachricht" required=""></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4" >
									</div>
									<div class="col-lg-4">
										<button type="submit" class="btn btn-primary btn-rounded btn-block btn-lg" name="contact_submit">Nachricht senden</button>
									</div>
									<div class="col-lg-4" >
									</div>
								</div>
							</form>
							<!-- End contact form -->
							

						</div> <!-- /.col-->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

			</section>
			<!-- End section 8 -->
<section id="section-9" class="contact-section bg-dark angle-right-top bg-image-parallax" style="background-image: url(assets/img/misc/bg-1.jpg); padding: 80px 0px 80px 0px;">

				<!-- Element cover
				===================
				* Use background transparent color classes for colored opacity (example: "bg-transparent-6-dark", "bg-transparent-8-5-red" ... 1 to 95). Look into "helper.css" file for more info.  
				-->
				<span class="cover bg-transparent-9-dark bg-transparent-gradient-1"></span>

				<div class="container">
				<!-- Left column -->
						<div class="col-md-12">

						
						
							<div class="heading heading-lg heading-hover">	
								<h2 class="heading-title text-white">Galerie</h2>

								<div>

									&nbsp;

									&nbsp;

								</div>

<script async src="https://d36hc0p18k1aoc.cloudfront.net/pages/a5b5e5.js"></script><div class="tintup" data-id="saurav-rav67" data-columns="" data-mobilescroll="true"    data-infinitescroll="true" data-personalization-id="817636" style="height:300px;width:100%;"><a href="http://www.tintup.com/blog/the-best-instagram-widget" style="width:118px;height:31px;background-image:url(//d33w9bm0n1egwm.cloudfront.net/assets/logos/poweredbytintsmall.png);position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">instagram widget</a></div>


<!--<div class="col-md-12">

						
						
							<div class="heading heading-lg heading-hover">
								<span class="heading-title-ghost"></span>
								<h2 class="heading-title text-white">Galerie</h2>

								<div>

									&nbsp;

									&nbsp;

								</div>


								<div class="conatiner"  style="height:380px; overflow: scroll; "> 

<!-- LightWidget WIDGET --><!-- LightWidget WIDGET <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/97b4754fff2a5374813bd852b6e587ad.html" id="lightwidget_97b4754fff" name="lightwidget_97b4754fff"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

</div>


								</div>

							</div>-->


           <div class="container">
					<div class="row wow fadeIn">
						<div class="col-md-4">
<br>

<br>

</div>
</div>
</div>


			</section>


			<!-- ===================
			///// Begin footer /////
			========================
			* Use class "angle-left-top" or "angle-right-top" to change footer top angle.
			-->
			<footer id="footer" class="bg-dark text-white">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright small">
								<a href="#">Monkey-Cage</a>
								<p>Copyright 2016 / All rights reserved</p>
							</div>
						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</footer>
			<!-- End footer -->


			<!-- Scroll to top button -->
			<a href="#body-content" class="scrolltotop sm-scroll bg-main"><i class="fa fa-chevron-up"></i></a>

		</div>
		<!-- End body content -->






		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/jquery-1.11.1.min.js"></script> <!-- jquery JS (more info: https://jquery.com) -->
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (more info: http://getbootstrap.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<script src="assets/vendor/wow.min.js"></script> <!-- WOW animations JS (more info: http://mynameismatthieu.com/WOW/index.html) -->
		<script src="assets/vendor/owl-carousel/js/owl.carousel.js"></script> <!-- Owl Carousel JS (more info: http://www.owlcarousel.owlgraphic.com) -->
		<script src="assets/vendor/owl-carousel/js/owl.carousel.plugins.js"></script> <!-- Owl Carousel plugins JS (more info: http://www.owlcarousel.owlgraphic.com) -->
		<script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script> <!-- Magnific Popup JS (more info: http://dimsemenov.com/plugins/magnific-popup/) -->

		<script src="assets/vendor/isotope.pkgd.min.js"></script> <!-- isotope JS (more info: http://isotope.metafizzy.co) -->
		<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="assets/vendor/smoothscroll.js"></script> <!-- YTPlayer JS (more info: https://gist.github.com/theroyalstudent/4e6ec834be19bf077298) -->
		<script src="assets/vendor/jquery.easing.min.js"></script> <!-- Easing JS (more info: http://gsgd.co.uk/sandbox/jquery/easing/) -->

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>

		<!-- Theme custom JS (all your JS customizations) -->
		<script src="assets/js/custom.js"></script>

		


	   <!--==============================
	   ///// Begin Google Analytics /////
	   ============================== -->

	   <!-- Paste your Google Analytics code here. 
	   Go to http://www.google.com/analytics/ for more information. -->

	   <!--==============================
	   ///// End Google Analytics /////
	   ============================== -->



	</body>
	<!-- End body -->



<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>

 <script>
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("fast");
   
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip4").click(function(){
        $("#panel4").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip5").click(function(){
        $("#panel5").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip7").click(function(){
        $("#panel7").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip8").click(function(){
        $("#panel8").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip9").click(function(){
        $("#panel9").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip10").click(function(){
        $("#panel10").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip11").click(function(){
        $("#panel11").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip12").click(function(){
        $("#panel12").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip13").click(function(){
        $("#panel13").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip14").click(function(){
        $("#panel14").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip15").click(function(){
        $("#panel15").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip16").click(function(){
        $("#panel16").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip17").click(function(){
        $("#panel17").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip18").click(function(){
        $("#panel18").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip19").click(function(){
        $("#panel19").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip20").click(function(){
        $("#panel20").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip21").click(function(){
        $("#panel21").slideToggle("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip22").click(function(){
        $("#panel22").slideToggle("fast");
    });
});
</script>



</html>

<?php

if (isset($_POST['contact_submit'])) 
{

	$name = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
    $subject = $_POST['subject'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


  


	

}

?>