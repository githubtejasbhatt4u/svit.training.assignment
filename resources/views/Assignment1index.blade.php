<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Verti by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
				
					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">Tejas Bhatt</a></h1>
							<span>Laravel</span>
						</div>
					
					<!-- Nav -->
						 <nav id="nav">
							<ul>
							<li class="current"><a href="{{url('/')}}">Home</a></li>

								<li class="current"><a href="{{url('/Achievement')}}">Achievement</a></li>
									
								
								
							</ul>
						</nav>
					
				</header>
			</div>
		
		<!-- Banner -->
			<div id="banner-wrapper">
				<div id="banner" class="box container">
					<div class="row">
						<div class="7u">
							<h2>Hi. Tejas Bhatt's Assignment 1.</h2>
							<p>Learning Laravel with Basic</p>
						</div>
						<div class="5u">
							
						</div>
					</div>
				</div>
			</div> 
		
		<!-- Features -->
			@yield('achieve')

		<!-- Main -->
			 

		<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						
						</div>
					</div> 
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Laravel  </li><li>Course By:- <a href="http://html5up.net">Mr.Pranav Trivedi </a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>