<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>e-vuze | dashboard</title>
<link href="{{asset('images/favicon.ico')}}" rel="icon" type="image/png">
<link href="{{asset('images/favicon.ico')}}" rel="shortcut icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="{{asset('dashboard/css/separate/vendor/bootstrap-datetimepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/lib/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/separate/pages/calendar.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/lib/font-awesome/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/lib/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}">
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> -->
@stack('styles')
</head>
<body class="with-side-menu">

<header class="site-header">
<div class="container-fluid">

<a href="#" class="site-logo">
<img class="hidden-md-down" src="{{asset('images/logo.svg')}}" alt=""><span style="text-size:5em;font-weight: bold">E-VUZE</span>&nbsp;
<img class="hidden-lg-up" src="{{asset('images/logo.svg')}}" alt="">
</a>

<button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
<span>toggle menu</span>
</button>

<button class="hamburger hamburger--htla">
<span>toggle menu</span>
</button>
<div class="site-header-content">
<div class="site-header-content-in">
<div class="site-header-shown">
<div class="dropdown dropdown-notification notif">
<a href="#" class="header-alarm dropdown-toggle active" id="dd-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="font-icon-alarm"></i>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
<div class="dropdown-menu-notif-header">
Notifications
<span class="label label-pill label-danger">1</span>
</div>
<div class="dropdown-menu-notif-list">
<div class="dropdown-menu-notif-item">
<div class="photo">
<img src="{{asset('dashboard/img/avatar-2-64.png')}}" alt="">
</div>
<div class="dot"></div>
<a href="#">{{ Auth::user()->names }}</a> welcome to e-vuze 
<div class="color-blue-grey-lighter">{{ Auth::user()->created_at->diffForHumans() }}</div>
</div>
</div>
<div class="dropdown-menu-notif-more">
<a href="#">See more</a>
</div>
</div>
</div>

<div class="dropdown dropdown-notification messages">
<a href="#"
class="header-alarm dropdown-toggle active"
id="dd-messages"
data-toggle="dropdown"
aria-haspopup="true"
aria-expanded="false">
<i class="font-icon-mail"></i>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
<div class="dropdown-menu-messages-header">
<ul class="nav" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tab-incoming" role="tab">
Inbox
<span class="label label-pill">0</span>
</a>
</li>
</ul>
<!--<button type="button" class="create">
<i class="font-icon font-icon-pen-square"></i>
</button>-->
</div>
<div class="tab-content">
<div class="tab-pane active" id="tab-incoming" role="tabpanel">
</div>
</div>
<div class="dropdown-menu-notif-more">
<a href="#">See more</a>
</div>
</div>
</div>

<div class="dropdown dropdown-lang">
<button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="flag-icon flag-icon-rw"></span>
</button>
<div class="dropdown-menu dropdown-menu-right">
<div class="dropdown-menu-col">
</div>
<div class="dropdown-menu-col">
<a class="dropdown-item" href="#"><span class="flag-icon flag-icon-rw"></span>Kinyarwanda</a>
<a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
<a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
</div>
</div>
</div>

<div class="dropdown user-menu">
<button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img src="{{asset('dashboard/img/avatar-2-64.png')}}" alt="">
</button>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{route('backend.logout')}}"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
</div>
</div>

<button type="button" class="burger-right">
<i class="font-icon-menu-addl"></i>
</button>
</div><!--.site-header-shown-->

<div class="mobile-menu-right-overlay"></div>
<div class="site-header-collapsed">
<div class="site-header-collapsed-in">
@if(Auth::user()->roles->first() && Auth::user()->roles->first()->name != "user")
<a class="btn btn-nav btn-rounded btn-inline btn-success-outline">
You're logged in as : <em> {{Auth::user()->roles->first()->description}}</em>
</a>
@endif
<div class="site-header-search-container">
<form class="site-header-search closed">
<input type="text" placeholder="Search"/>
<button type="submit">
<span class="font-icon-search"></span>
</button>
<div class="overlay"></div>
</form>
</div>
</div><!--.site-header-collapsed-in-->
</div><!--.site-header-collapsed-->
</div><!--site-header-content-in-->
</div><!--.site-header-content-->
</div><!--.container-fluid-->
</header><!--.site-header-->
<div class="mobile-menu-left-overlay"></div>
