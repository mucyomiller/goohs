<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>GOOHS</title>
		
		<!-- Bootstrap -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		
		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		
		<!-- Template CSS Files  -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
		<link href="{{asset('js/plugins/camera/css/camera.css')}}" rel="stylesheet">
		<link href="{{asset('js/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="images/fav.png">
		
	</head>
	<body>
	<!-- Header Starts -->
		<header class="main-header">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Top Bar Starts -->
				<div class="top-bar hidden-sm hidden-xs">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<span>Opening Hours:</span>  Mon To Fri - 7:00 - 18:00, Sat &amp; Sun - 08:00 - 12:00
						</div>
						<div class="col-sm-6 col-xs-12">
							<ul class="list-unstyled list-inline">
								<li><a href="mailto:care@yourhosptialsname.com">
									<i class="fa fa-envelope-o"></i>
									care@goohs.com
								</a></li>
								<li><i class="fa fa-phone"></i> Call Us: (250)-788-XXX-XXX</li>
							</ul>
						</div>
					</div>
				</div>
			<!-- Top Bar Ends -->
			<!-- Navbar Starts -->
				<nav id="nav" class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
					<!-- Navbar Header Starts -->
						<div class="navbar-header">
						<!-- Collapse Button Starts -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<!-- Collapse Button Ends -->
						<!-- Logo Starts -->
							<a href="index.html" class="navbar-brand">
								<i class="fa fa-heartbeat"></i>
								Goohs
							</a>
						<!-- Logo Ends -->
						</div>
					<!-- Navbar Header Ends -->
					<!-- Navbar Collapse Starts -->
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="{{ route('index')}}">Home</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">make Appointment</a></li>
								<li><a href="{{ route('about')}}">About</a></li>
								<li><a href="{{ route('contact')}}">Contact</a></li>
							</ul>
						</div>
					<!-- Navbar Collapse Ends -->
					</div>
				</nav>
			<!-- Navbar Ends -->
			</div>
		<!-- Nested Container Ends -->
		</header>
	<!-- Header Ends -->