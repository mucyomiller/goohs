<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-vuze online & offline health  services">
<meta name="keywords" content="e-vuze, Rwanda, Health system">
<meta name="author" content="computer geek tech">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SITE TITLE -->
<title>e-vuze - Health System</title>

<!--=========================
      FAV AND TOUCH ICONS  
========================= -->
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
<!-- === add here apple touch favicons === -->

<!--=========================
#   STYLESHEETS              #
===========================-->
<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}" />

</head>

<body data-spy="scroll" data-target=".navbar">

<div class="preloader" id="preloader">
    <img src="{{asset('images/preloader.gif')}}" alt="" />
</div>
    
<!-- =========================
     TOP BAR
============================== -->   
<div class="top-bar" id="top-bar">
    <div class="container">
        <div class="row">
			
			<!-- TOP BAR LEFT -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="top-bar-adress">
                    <i class="flaticon-navigation-arrow"></i> Kigali Rwanda
                </div>
			</div>
			
            <!-- TOP BAR RIGHT -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="top-bar-social">
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                    <a href="#"><i class="fa fa-google-plus"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a> 
                    <a href="#"><i class="fa fa-skype"></i></a> 
                </div>
                <div class="top-bar-mail">
                    <i class="fa fa-envelope"></i> <a href="#">info@e-vuze.com</a>
                </div>
			</div>
			
		</div>
	</div>
</div>
<!-- =========================
     END TOP BAR   
========================== -->
    
    
<!-- =========================
     HEADER
========================== -->    
<div class="header" id="header">
    <div class="container">
        <div class="row">
            
            <!-- HEADER LOGO -->
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="header-logo">
                    <a href="#"><img src="{{asset('images/logo.svg')}}" alt="" />
                        <span class="bold600 color-child-6">e-</span><span class="color-child-5">vuze</span>
                    </a>
                </div>
			</div>
			
            <!-- HEADER BUTTONS -->
			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
               <div class="header-button" style="padding-left: 10px;">
                    <a href="#bookform2" class="fancybox-2 btn btn-default"><span class="plus">~</span> TAKE NUMBER</a>
                </div>
                <div class="header-button">
                    <a href="#bookform1" class="fancybox-2 btn btn-default"><span class="plus">+</span> MAKE AN APPOINTMENT</a>
                </div>
                <div class="header-phone"> 
                    <i class="fa fa-phone"></i> +2507817-27018
                </div>
			</div>
			
		</div>
	</div>
</div>
<!-- =========================
     END HEADER
========================== -->
    
    
<!-- =========================
     MAIN MENU
========================== -->   
<div class="top-menu" id="top-menu">
    <div class="container">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-bar-cont">
                    <div class="top-menu-logo">
                        <a href="#"><img src="{{asset('images/logo.svg')}}" alt="" />
                            <span class="bold600 color-child-6">e-</span><span class="color-child-5">vuze</span>
                        </a>
                    </div>
                    <div class="mobile-bar">
                        <div class="show-menu" id="show-menu">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="color-sw-open-1" id="color-sw-open-1">
                            <i class="fa fa-gear"></i>
                        </div>
                    </div>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('index')}}" class="active">HOME</a></li>
                    <li><a href="{{url('login')}}">LOGIN</a></li>
                    <li><a href="{{url('register')}}">REGISTER</a></li>
                    <li><a href="{{route('about')}}">ABOUT US</a></li>
                    <li><a href="{{route('contact')}}">CONTACT US</a></li>
                </ul>
            </div>
		</div>
	</div>
</div>
<!-- =========================
     END MAIN MENU
============================== -->

<!-- =============================
     SWEET ALERT GLOBAL  MESSAGE
============================== -->

@if(request()->session()->has('message'))
<script type="text/javascript">
$(document).ready(function() {
    swal({
        title: "Thanks!",
        text: "You clicked the button!",
        type: "success",
        confirmButtonClass: "btn-success",
        confirmButtonText: "Success"
    });
});
</script>
@endif