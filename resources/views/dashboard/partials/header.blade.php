<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>GOOHS | home</title>
<link href="{{asset('dashboard/img/favicon.png')}}" rel="icon" type="image/png">
<link href="{{asset('dashboard/img/favicon.ico')}}" rel="shortcut icon">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="{{asset('dashboard/css/lib/font-awesome/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/lib/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}">
</head>
<body class="with-side-menu">

<header class="site-header">
<div class="container-fluid">
<a href="#" class="site-logo">
<img class="hidden-md-down" src="{{asset('dashboard/img/logo-2.png')}}" alt="">
<img class="hidden-lg-up" src="{{asset('dashboard/img/logo-2-mob.png')}}" alt="">
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
<a href="#"
class="header-alarm dropdown-toggle active"
id="dd-notification"
data-toggle="dropdown"
aria-haspopup="true"
aria-expanded="false">
<i class="font-icon-alarm"></i>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
<div class="dropdown-menu-notif-header">
Notifications
<span class="label label-pill label-danger">4</span>
</div>
<div class="dropdown-menu-notif-list">
<div class="dropdown-menu-notif-item">
    <div class="photo">
        <img src="{{asset('dashboard/img/avatar-2-64.png')}}" alt="">
    </div>
    <div class="dot"></div>
    <a href="#">Mucyo</a> want to meet with you
    <div class="color-blue-grey-lighter">2 minutes ago</div>
</div>
<div class="dropdown-menu-notif-item">
    <div class="photo">
        <img src="{{asset('dashboard/img/avatar-2-64.png')}}" alt="">
    </div>
    <div class="dot"></div>
    <a href="#">Bov</a> is the next on schedule
    <div class="color-blue-grey-lighter">5 minutes ago</div>
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
<a class="nav-link active"
data-toggle="tab"
href="#tab-incoming"
role="tab">
Inbox
<span class="label label-pill label-danger">8</span>
</a>
</li>
</ul>
<!--<button type="button" class="create">
<i class="font-icon font-icon-pen-square"></i>
</button>-->
</div>
<div class="tab-content">
<div class="tab-pane active" id="tab-incoming" role="tabpanel">
<div class="dropdown-menu-messages-list">
<a href="#" class="mess-item">
<span class="avatar-preview avatar-preview-32"><img src="{{asset('dashboard/img/avatar-2-64.png')}}" alt=""></span>
<span class="mess-item-name">Mucyo Miller</span>
<span class="mess-item-txt">hello sir i was asking if we can meet tommorrow .</span>
</a>
</div>
</div>
</div>
<div class="dropdown-menu-notif-more">
<a href="#">See more</a>
</div>
</div>
</div>

<div class="dropdown dropdown-lang">
<button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="flag-icon flag-icon-us"></span>
</button>
<div class="dropdown-menu dropdown-menu-right">
<div class="dropdown-menu-col">
<a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
<a class="dropdown-item" href="#"><span class="flag-icon flag-icon-rw"></span>Kinyarwanda</a>
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
<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
</div>
</div>

<button type="button" class="burger-right">
<i class="font-icon-menu-addl"></i>
</button>
</div><!--.site-header-shown-->

<div class="mobile-menu-right-overlay"></div>
<div class="site-header-collapsed">
<div class="site-header-collapsed-in">
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