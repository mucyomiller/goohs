@extends('frontend.theme')
@section('content')
<!-- =========================
     HEADER SLIDER
============================== --> 
<div id="slider" class="slider">
<div class="sp-slides" style="color:white;">

<!-- HEADER SLIDER ITEM -->
<div class="sp-slide">
<img class="sp-image" src="{{asset('css/images/blank.gif')}}" alt=""
data-src="{{asset('images/surgical.jpg')}}" />
<div class="container">
<h3 class="sp-layer slider-welcome" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-370" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="0" data-hide-delay="0">
    Welcome to E-VUZE Platform
</h3>

<h1 class="sp-layer slider-title" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-230" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="200" data-hide-delay="200">
    It is quite simple!
</h1>

<h2 class="sp-layer slider-subtitle" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-120" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="400" data-hide-delay="400">
    You start by registration!
</h2>

<p class="sp-layer slider-text" 
    data-position="leftCenter" data-horizontal="15" data-vertical="80" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="600" data-hide-delay="600">
    then Get Online and Offline Health Services
</p>

<p class="sp-layer slider-button" 
    data-position="leftCenter" data-horizontal="15" data-vertical="300" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="800" data-hide-delay="800">
</p>

</div>
</div>

<!-- HEADER SLIDER ITEM -->
<div class="sp-slide">
<img class="sp-image" src="{{asset('css/images/blank.gif')}}" alt=""
data-src="{{asset('images/skull.jpg')}}" />
<div class="container">
<h3 class="sp-layer slider-welcome" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-370" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="0" data-hide-delay="0">
    Health Nation
</h3>

<h1 class="sp-layer slider-title" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-230" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="200" data-hide-delay="200">
    Our concern
</h1>

<h2 class="sp-layer slider-subtitle" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-120" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="400" data-hide-delay="400">
    Privide good services
</h2>

<p class="sp-layer slider-text" 
    data-position="leftCenter" data-horizontal="15" data-vertical="80" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="600" data-hide-delay="600">
</p>

<p class="sp-layer slider-button" 
    data-position="leftCenter" data-horizontal="15" data-vertical="300" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="800" data-hide-delay="800">
</p>

</div>
</div>

<!-- HEADER SLIDER ITEM -->
<div class="sp-slide">
<img class="sp-image" src="{{asset('css/images/blank.gif')}}" alt=""
data-src="{{asset('images/umusambi.jpg')}}" />
<div class="container">

<h3 class="sp-layer slider-welcome" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-370" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="0" data-hide-delay="0">
    We Care Good health
</h3>

<h1 class="sp-layer slider-title" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-230" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="200" data-hide-delay="200">
</h1>

<h2 class="sp-layer slider-subtitle" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-120" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="400" data-hide-delay="400">
</h2>

<p class="sp-layer slider-text" 
    data-position="leftCenter" data-horizontal="15" data-vertical="80" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="600" data-hide-delay="600">
    We Want tobe part of a community
    Which likes for the wellfare of others
</p>

<p class="sp-layer slider-button" 
    data-position="leftCenter" data-horizontal="15" data-vertical="300" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="800" data-hide-delay="800">

</p>

</div>
</div>
</div>
</div>
<!-- =========================
END HEADER SLIDER
============================== -->
<!-- =========================
SERVICES
============================== -->
<div class="services" id="services">
<div class="container-fluid">
<div class="row">

<!-- SERVICES ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-primary-2">
<div class="service-icon">
<i class="flaticon-medical-1"></i>
</div>
<div class="service-title">
<h3>teeth whitening</h3>
</div>
<div class="service-text">
Tooth whitening can be a very effective way of lightening the natural colour of your teeth without removing any of the tooth surface.
</div>
</div>

<!-- SERVICES ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-2">
<div class="service-icon">
<i class="flaticon-medical-2"></i>
</div>
<div class="service-title">
<h3>implants</h3>
</div>
<div class="service-text">
Dental implants may be an option for people who have lost a tooth or teeth due to periodontal disease, an injury, or some other reason.
</div>
</div>

<!-- SERVICES ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-3">
<div class="service-icon">
<i class="flaticon-tool"></i>
</div>
<div class="service-title">
<h3>extractions</h3>
</div>
<div class="service-text">
In orthodontics if the teeth are crowded, sound teeth may be extracted to create space so the rest of the teeth can be straightened.
</div>
</div>

<!-- SERVICES ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-4">
<div class="service-icon">
<i class="flaticon-medical"></i>
</div>
<div class="service-title">
<h3>gum disease</h3>
</div>
<div class="service-text">
Plaque is the primary cause of gum disease. However, other factors can contribute to periodontal disease. 
</div>
</div>

</div>
</div>
</div>
<!-- =========================
END SERVICES
============================== -->

<!-- =========================
ABOUT
============================== -->    
<div class="about">
<div class="container">
<div class="row">

<!-- ABOUT TEXT -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-text">
<h2 class="section-title"><span class="bold700">ABOUT</span> E-VUZE</h2>
<p>E-vuze is a electronic system that will provide health service from interconnecting hospitals,work with extisting system to provide a unified system where most of health service can be derivered.</p>
<ul class="text-list">
<li>We started with UR CMHS  Polyclinic.</li>
<li>we are working hard to be able to provide  good health service </li>
</ul>
</div>

<!-- ABOUT BACKGROUND -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-bg">
</div>

</div>
</div>
</div>
<!-- =========================
END ABOUT
============================== -->
@endsection()