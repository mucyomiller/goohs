@extends('frontend.theme')
@section('content')
<!-- =========================
     HEADER SLIDER
============================== --> 
<div id="slider" class="slider">
<div class="sp-slides">

<!-- HEADER SLIDER ITEM -->
<div class="sp-slide">
<img class="sp-image" src="{{asset('css/images/blank.gif')}}" alt=""
data-src="{{asset('images/slide_01.jpg')}}" />
<div class="container">
<h3 class="sp-layer slider-welcome" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-370" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="0" data-hide-delay="0">
    Welcome GOOHS 
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
    You choose convenient time!
</h2>

<p class="sp-layer slider-text" 
    data-position="leftCenter" data-horizontal="15" data-vertical="80" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="600" data-hide-delay="600">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-<br>trud exercitation ullamco laboris.
</p>

<p class="sp-layer slider-button" 
    data-position="leftCenter" data-horizontal="15" data-vertical="300" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="800" data-hide-delay="800">
    <a href="#" class="btn btn-primary">READ MORE</a>
</p>

</div>
</div>

<!-- HEADER SLIDER ITEM -->
<div class="sp-slide">
<img class="sp-image" src="{{asset('css/images/blank.gif')}}" alt=""
data-src="{{asset('images/slide_02.jpg')}}" />
<div class="container">
<h3 class="sp-layer slider-welcome" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-370" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="0" data-hide-delay="0">
    Healthy kids
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
    Discount for children $99
</h2>

<p class="sp-layer slider-text" 
    data-position="leftCenter" data-horizontal="15" data-vertical="80" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="600" data-hide-delay="600">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-<br>trud exercitation ullamco laboris.
</p>

<p class="sp-layer slider-button" 
    data-position="leftCenter" data-horizontal="15" data-vertical="300" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="800" data-hide-delay="800">
    <a href="#" class="btn btn-primary">READ MORE</a>
</p>

</div>
</div>

<!-- HEADER SLIDER ITEM -->
<div class="sp-slide">
<img class="sp-image" src="{{asset('css/images/blank.gif')}}" alt=""
data-src="{{asset('images/slide_03.jpg')}}" />
<div class="container">

<h3 class="sp-layer slider-welcome" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-370" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="0" data-hide-delay="0">
    A beautiful smile is our task!
</h3>

<h1 class="sp-layer slider-title" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-230" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="200" data-hide-delay="200">
    Dental services
</h1>

<h2 class="sp-layer slider-subtitle" 
    data-position="leftCenter" data-horizontal="15" data-vertical="-120" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="400" data-hide-delay="400">
    Healthy teeth - healthy body
</h2>

<p class="sp-layer slider-text" 
    data-position="leftCenter" data-horizontal="15" data-vertical="80" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="600" data-hide-delay="600">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-<br>trud exercitation ullamco laboris.
</p>

<p class="sp-layer slider-button" 
    data-position="leftCenter" data-horizontal="15" data-vertical="300" 
    data-show-transition="left" data-hide-transition="left"
    data-show-delay="800" data-hide-delay="800">
    <a href="#" class="btn btn-primary">READ MORE</a>
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
<h2 class="section-title"><span class="bold700">ABOUT</span> GOOHS</h2>
<p>We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious or have an underlying developmental or medical condition that may add complexity to the management of their oral health.</p>
<ul class="text-list">
<li>General Dentistry - preventative and restorative dental care.</li>
<li>Specialized dental care to straighten crooked teeth in children and adults. </li>
<li>Treat diseases of the gums and the placement of dental implants.</li>
</ul>
<p>We are committed to helping you maintain your oral health as an integral part of your overall health and wellness. <a href="#">Read more ></a></p>
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


<!-- =========================
CERTIFICATES
============================== --> 
<div class="certs">
<div class="container">
<div class="row">

<h3>Certificates of completion</h3>
<div class="certs-container">
<div class="owl-certs" id="owl-certs">
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert1-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert1.jpg')}}" alt="" /></a>
</div>
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert2-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert2.jpg')}}" alt="" /></a>
</div>
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert3-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert3.jpg')}}" alt="" /></a>
</div>
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert4-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert4.jpg')}}" alt="" /></a>
</div>
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert5-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert5.jpg')}}" alt="" /></a>
</div>
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert1-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert1.jpg')}}" alt="" /></a>
</div>
<!-- CERTIFICATES ITEM -->
<div class="certs-item">
    <a href="{{asset('images/cert2-b.jpg')}}" class="fancybox"><img src="{{asset('images/cert2.jpg')}}" alt="" /></a>
</div>
</div>
<!-- CERTIFICATES BUTTONS -->
<div class="carousel-btn carousel-next" id="next-certs"><i class="fa fa-angle-right"></i></div>
<div class="carousel-btn carousel-prev" id="prev-certs"><i class="fa fa-angle-left"></i></div>
</div>

</div>
</div>
</div>
<!-- =========================
END CERTIFICATES
============================== -->


<!-- =========================
DOCTORS
============================== -->
<div class="doctors">
<div class="container">
<div class="row">

<h2 class="section-title">MEET <span class="bold700">OUR DOCTORS</span></h2>
<p class="section-subtitle">All staff members of Dental Clinic are licensed professionals. Our staff consists of licensed general dentists, hygienists, dental assis-<br>tants, an endodontist, a periodontist, and an oral surgeon.</p>

<div class="doctors-container">
<div class="owl-doctors" id="owl-doctors">

<!-- DOCTORS ITEM -->
<div class="doctors-item">
    <div class="doctors-item-container">
        <div class="doctors-item-image">
            <img src="{{asset('images/doctor1.jpg')}}" alt="" />
        </div>
        <div class="doctors-item-name">Wyatt Esmond</div>
        <div class="doctors-item-position">General Dentist</div>
    </div>
    <div class="doctors-item-social">
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-skype"></i></a> 
    </div>
    <div class="doctors-item-button">
        <a href="#bookform2" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
    </div>
</div>

<!-- DOCTORS ITEM -->
<div class="doctors-item">
    <div class="doctors-item-container">
        <div class="doctors-item-image">
            <img src="{{asset('images/doctor2.jpg')}}" alt="" />
        </div>
        <div class="doctors-item-name">Arnie Alban</div>
        <div class="doctors-item-position">Pedodontics</div>
    </div>
    <div class="doctors-item-social">
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-skype"></i></a> 
    </div>
    <div class="doctors-item-button">
        <a href="#bookform3" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
    </div>
</div>

<!-- DOCTORS ITEM -->
<div class="doctors-item">
    <div class="doctors-item-container">
        <div class="doctors-item-image">
            <img src="{{asset('images/doctor3.jpg')}}" alt="" />
        </div>
        <div class="doctors-item-name">Dustin Callahan</div>
        <div class="doctors-item-position">Orthodontist</div>
    </div>
    <div class="doctors-item-social">
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-skype"></i></a> 
    </div>
    <div class="doctors-item-button">
        <a href="#bookform4" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
    </div>
</div>

<!-- DOCTORS ITEM -->
<div class="doctors-item">
    <div class="doctors-item-container">
        <div class="doctors-item-image">
            <img src="{{asset('images/doctor4.jpg')}}" alt="" />
        </div>
        <div class="doctors-item-name">Kristin Weaver</div>
        <div class="doctors-item-position">Hygienist</div>
    </div>
    <div class="doctors-item-social">
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-skype"></i></a> 
    </div>
    <div class="doctors-item-button">
        <a href="#bookform5" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
    </div>
</div>

<!-- DOCTORS ITEM -->
<div class="doctors-item">
    <div class="doctors-item-container">
        <div class="doctors-item-image">
            <img src="{{asset('images/doctor5.jpg')}}" alt="" />
        </div>
        <div class="doctors-item-name">Leslie Adams</div>
        <div class="doctors-item-position">Prosthodontics</div>
    </div>
    <div class="doctors-item-social">
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-skype"></i></a> 
    </div>
    <div class="doctors-item-button">
        <a href="#bookform6" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
    </div>
</div>


</div>
<!-- DOCTORS BUTTONS -->
<div class="carousel-btn carousel-next" id="next-doctors"><i class="fa fa-angle-right"></i></div>
<div class="carousel-btn carousel-prev" id="prev-doctors"><i class="fa fa-angle-left"></i></div>
</div>

</div>
</div>
</div>
<!-- =========================
END DOCTORS
============================== -->


<!-- =========================
BOOKING FORM
============================== -->
<div class="booking">
<div class="container">
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form">
<h2 class="section-title"><span class="bold700">OUR DOCTORS</span></h2>
<form>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
        <input type="text" name="name" id="name" data-validation="required" placeholder="Your name" />
        <div class="help help-sm help-red">!</div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item phone">
        <input type="text" name="phone" id="phone" data-validation="required" placeholder="Phone" />
        <div class="help help-sm help-red">!</div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item email">
        <input type="text" name="email" id="email" placeholder="E-mail" />
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
        <input type="text" class="datepicker-f" id="datepicker" name="date" data-validation="required" placeholder="Date" />
        <div class="help help-sm help-red">!</div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
        <input type="text" class="timepicker-f" id="timepicker" name="time" data-validation="required" placeholder="Time" />
        <div class="help help-sm help-red">!</div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
        <textarea name="message" id="message" placeholder="Your message.."></textarea>
    </div>
</div>

<div class="row latest-row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 booking-form-item">
        <button class="btn btn-primary">SUBMIT</button>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 booking-form-item">
        <div class="help t-tooltip t-left">
            ?
            <div class="tt-row-item-active-hover"></div>
            <div class="t-tooltip-text">
                <div class="t-tooltip-text-body">
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
                </div>
                <div class="t-tooltip-text-hover"></div>
            </div>
        </div>
    </div>
</div>

</form>
</div>

</div>
</div>
</div>
<!-- =========================
END BOOKING FORM
============================== -->


<!-- =========================
NUMBERS
============================== -->
<div class="numbers" id="numbers">
<div class="numbers-overlay">
<div class="container">
<div class="row">

<h2 class="section-title"><span class="bold700">GOOHS</span> in numbers</h2>
<p class="section-subtitle">We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.<br> But you can read the following facts in order to make sure of all pluses of our clinic:</p>

<!-- NUMBERS ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 numbers-item">
<div id="num1" class="numbers-item-number">12</div>
<div class="numbers-item-title">YEARS<br>OF EXPEREANCE</div>
</div>

<!-- NUMBERS ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 numbers-item">
<div id="num2" class="numbers-item-number">1000</div>
<div class="numbers-item-title">HAPPY PATIENTS</div>
</div>

<!-- NUMBERS ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 numbers-item">
<div id="num3" class="numbers-item-number">84</div>
<div class="numbers-item-title">QUALIFIED STUFF</div>
</div>

<!-- NUMBERS ITEM -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 numbers-item">
<div id="num4" class="numbers-item-number">67</div>
<div class="numbers-item-title">MASTER<br>CERTIFICATIONS</div>
</div>

</div>
</div>
</div>
</div>
<!-- =========================
END NUMBERS
============================== -->


<!-- =========================
STORIES
============================== -->
<div class="stories">
<div class="container">
<div class="row">

<h2 class="section-title"><span class="bold700">SUCCESS</span> STORIES</h2>
<p class="section-subtitle">Happy patients stories</p>

<div class="certs-container">
<div class="owl-stories" id="owl-stories">

<!-- STORIES ITEM -->
<div class="stories-item">
    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
        <div class="stories-item-name">
            Jeanette Evvie
        </div>
        <div class="stories-item-position">
            Student
        </div>
        <div class="stories-item-rating">
            <select id="stories-rating-1" name="stories-rating-1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="stories-item-text">
            <div class="stories-item-text-quote"><img src="{{asset('images/quote.png')}}" alt="" /></div>
            My visits to Dental clinic is always more than just a pleasant experience! I had my cleaning done by Arnie Alban and she did an absolutely impeccable job!! She meticulously and patiently removed the most stubborn stains without causing any discomfort! If you are seeking perfection, then I highly recommend Arnie!
        </div>
        <div class="stories-item-desc">
            Tooth whitening can be a very effective way of lightening the natural colour of your teeth without removing any of the tooth surface. 
            <ul>
                <li>Teeth whitening</li>
                <li>Teeth cleaning</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
        <div class="stories-item-before">
            <img src="{{asset('images/stories1.jpg')}}" alt="" />
            <div class="stories-item-before-title">
                BEFORE
            </div>
        </div>
        <div class="stories-item-after">
            <img src="{{asset('images/stories2.jpg')}}" alt="" />
            <div class="stories-item-after-title">
                AFTER
            </div>
        </div>
    </div>
</div>

<!-- STORIES ITEM -->
<div class="stories-item">
    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
        <div class="stories-item-name">
            Candice Heath
        </div>
        <div class="stories-item-position">
            Office Manager
        </div>
        <div class="stories-item-rating">
            <select id="stories-rating-2" name="stories-rating-2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="stories-item-text">
            <div class="stories-item-text-quote"><img src="{{asset('images/quote.png')}}" alt="" /></div>
            I just recently had my braces taken off and to my amazement, underneath was the most beautiful smile I ever could have dreamed possible. I just wanted to thank you for giving me so much to smile about!
        </div>
        <div class="stories-item-desc">
            Orthodontics can give you the straight teeth and proper bite that will help you chew better, smile more often, and keep your teeth longer.
            <ul>
                <li>Orthodontic treatment</li>
                <li>Bite correction</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
        <div class="stories-item-before">
            <img src="{{asset('images/stories3.jpg')}}" alt="" />
            <div class="stories-item-before-title">
                BEFORE
            </div>
        </div>
        <div class="stories-item-after">
            <img src="{{asset('images/stories4.jpg')}}" alt="" />
            <div class="stories-item-after-title">
                AFTER
            </div>
        </div>
    </div>
</div>

</div>
<div class="carousel-btn carousel-next" id="next-stories"><i class="fa fa-angle-right"></i></div>
<div class="carousel-btn carousel-prev" id="prev-stories"><i class="fa fa-angle-left"></i></div>
</div>

</div>
</div>
</div>
<!-- =========================
END STORIES
============================== -->


<!-- =========================
REVIEW
============================== -->
<div class="review">
<div class="container">
<div class="row">

<h2 class="section-title"><span class="bold700">TESTIMONIALS</span></h2>
<p class="section-subtitle">Many of our patients are our friends now, and they recommend our Dental clinic to their friends and come with their children and<br> senior parents to us. We are very proud that you entrust the health of your relatives to us!  </p>

<div class="review-container">
<div class="owl-review" id="owl-review">

<!-- REVIEW ITEM -->
<div class="review-item">
    <div class="review-item-image">
        <img src="{{asset('images/review1.jpg')}}" alt="" />
    </div>
    <div class="review-item-text">This was my first dental treatment in many years and Dr. Callahan made me feel relaxed and calm. It was completely painless and issue free. I thoroughly recommend both Dr. Callahan and Dental clinic. Excellent caring staff! </div>
    <div class="review-item-name">Caetlin Madyson</div>
    <div class="review-item-position">Comprehensive Cleaning</div>
    <div class="review-item-quote"><img src="{{asset('images/quote.png')}}" alt="" /></div>
</div>

<!-- REVIEW ITEM -->
<div class="review-item">
    <div class="review-item-image">
        <img src="{{asset('images/review2.jpg')}}" alt="" />
    </div>
    <div class="review-item-text">I would like to say a big thank you to all the team at Dental Clinic, from the charming and efficient reception staff to all the dental team. Dr Wyatt's is a truly first class outfit that are the epitome of professionalism. Satisfied with the service. </div>
    <div class="review-item-name">James Mitchell</div>
    <div class="review-item-position">General Dentistry</div>
    <div class="review-item-quote"><img src="{{asset('images/quote.png')}}" alt="" /></div>
</div>

<!-- REVIEW ITEM -->
<div class="review-item">
    <div class="review-item-image">
        <img src="{{asset('images/review3.jpg')}}" alt="" />
    </div>
    <div class="review-item-text">I'm new to Dental Clinic and I have got to say that I am rather impressed with their team's professionalism. I booked online through their website, and I immediately got a call from Diana, their receptionist, confirming my appointment. </div>
    <div class="review-item-name">Tracey Todd</div>
    <div class="review-item-position">Teeth Whitening</div>
    <div class="review-item-quote"><img src="{{asset('images/quote.png')}}" alt="" /></div>
</div>

<!-- REVIEW ITEM -->
<div class="review-item">
    <div class="review-item-image">
        <img src="{{asset('images/review4.jpg')}}" alt="" />
    </div>
    <div class="review-item-text">Hands down the best dental clinic I've been to. You'll pay a little more than other clinics but you'll get it right the first time. From the reception to the coffee and down to the dentists; simply awesome! Great customer service. Very satisfied. </div>
    <div class="review-item-name">William Murphy</div>
    <div class="review-item-position">Crown, Root Canal</div>
    <div class="review-item-quote"><img src="{{asset('images/quote.png')}}" alt="" /></div>
</div>

</div>
<!-- REVIEW BUTTONS -->
<div class="carousel-btn carousel-next" id="next-review"><i class="fa fa-angle-right"></i></div>
<div class="carousel-btn carousel-prev" id="prev-review"><i class="fa fa-angle-left"></i></div>
</div>

</div>
</div>
</div>
<!-- =========================
END REVIEW
============================== -->


<!-- =========================
BLOG
============================== -->
<div class="blog">
<div class="container">
<div class="row">

<h2 class="section-title">LATEST <span class="bold700">NEWS</span></h2>
<p class="section-subtitle">We will always keep you informed about fresh news of our Dental clinic. Moreover, you will find useful articles about dental care,<br> the newest technologies in the treatment, oral hygiene, and interesting events related to dentistry and medicine in general. </p>

<div class="blog-container">
<div class="owl-blog" id="owl-blog">

<!-- BLOG ITEM -->
<div class="blog-item">
    <div class="blog-item-image">
        <img src="{{asset('images/blog1.jpg')}}" alt="" />
        <div class="blog-item-date"><i class="fa fa-calendar-o"></i> 03.10.2016</div>
        <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 7</div>
    </div>
    <div class="blog-item-title"><h3><a href="#">The Importance of Routine<br>Dental Exams</a></h3></div>
    <div class="blog-item-author"><a href="#">by Dr. Kaeden Bernard</a></div>
    <div class="blog-item-text">Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth.</div>
    <div class="blog-item-button"><a href=# class="btn btn-primary-1">READ MORE</a></div>
</div>

<!-- BLOG ITEM -->
<div class="blog-item">
    <div class="blog-item-image">
        <img src="{{asset('images/blog2.jpg')}}" alt="" />
        <div class="blog-item-date"><i class="fa fa-calendar-o"></i> 03.10.2016</div>
        <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 12</div>
    </div>
    <div class="blog-item-title"><h3><a href="#">We are giving each of our patients<br>the healthy smile!</a></h3></div>
    <div class="blog-item-author"><a href="#">by Dr. Kaeden Bernard</a></div>
    <div class="blog-item-text">Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth.</div>
    <div class="blog-item-button"><a href=# class="btn btn-primary-1">READ MORE</a></div>
</div>

<!-- BLOG ITEM -->
<div class="blog-item">
    <div class="blog-item-image">
        <img src="{{asset('images/blog3.jpg')}}" alt="" />
        <div class="blog-item-date"><i class="fa fa-calendar-o"></i> 03.10.2016</div>
        <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 7</div>
    </div>
    <div class="blog-item-title"><h3><a href="#">Protect Your Child's Teeth with Dental Sealants</a></h3></div>
    <div class="blog-item-author"><a href="#">by Dr. Kaeden Bernard</a></div>
    <div class="blog-item-text">Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth.</div>
    <div class="blog-item-button"><a href=# class="btn btn-primary-1">READ MORE</a></div>
</div>

<!-- BLOG ITEM -->
<div class="blog-item">
    <div class="blog-item-image">
        <img src="{{asset('images/blog2.jpg')}}" alt="" />
        <div class="blog-item-date"><i class="fa fa-calendar-o"></i> 03.10.2016</div>
        <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 12</div>
    </div>
    <div class="blog-item-title"><h3><a href="#">We are giving each of our patients<br>the healthy smile!</a></h3></div>
    <div class="blog-item-author"><a href="#">by Dr. Kaeden Bernard</a></div>
    <div class="blog-item-text">Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth.</div>
    <div class="blog-item-button"><a href=# class="btn btn-primary-1">READ MORE</a></div>
</div>

</div>
<!-- BLOG BUTTONS -->
<div class="carousel-btn carousel-next" id="next-blog"><i class="fa fa-angle-right"></i></div>
<div class="carousel-btn carousel-prev" id="prev-blog"><i class="fa fa-angle-left"></i></div>
</div>

</div>
</div>
</div>
<!-- =========================
END BLOG
============================== -->


<!-- =========================
TIPS AND FAQ
============================== -->
<div class="tipsfaq">
<div class="container">
<div class="row">

<!-- TIPS -->
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 tips">
<h2 class="section-title"><span class="bold700">TOP TIPS</span> FROM DOCTORS</h2>
<!-- TIPS NAVS -->
<div class="tips-tabs">
<ul class="nav nav-tabs tabs-carousel">
    <li class="active"><a href="#tips1" data-toggle="tab">Teeth whitening</a></li>
    <li><a href="#tips2" data-toggle="tab">Oral exams</a></li>
    <li><a href="#tips3" data-toggle="tab">Fillings and bridges</a></li>
    <li><a href="#tips4" data-toggle="tab">Root canals</a></li>
    <li><a href="#tips5" data-toggle="tab">Oral exams</a></li>
    <li><a href="#tips6" data-toggle="tab">Root canals</a></li>
</ul>
<div class="tips-btn tips-next" id="next-tips"><i class="fa fa-angle-right"></i></div>
<div class="tips-btn tips-prev" id="prev-tips"><i class="fa fa-angle-left"></i></div>
</div>
<!-- TIPS ITEMS -->
<div class="tips-content">
<div class="tab-content">
    
    <!-- TIPS ITEM -->
    <div class="tab-pane fade active in tips-content-item" id="tips1">
        <div class="tips-content-item-text">
            <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
            <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
            <div class="tips-content-item-btn">
                <a href=# class="btn btn-primary-1">READ MORE</a>
            </div>
        </div>
        <div class="tips-content-item-image">
            <img src="{{asset('images/blog_author1.jpg')}}" alt="" />
            <div class="tips-content-item-name">
                <a href="#">Wyatt Esmond</a>
            </div>
            <div class="tips-content-item-position">
                General Dentist
            </div>
        </div>
    </div>
    
    <!-- TIPS ITEM -->
    <div class="tab-pane fade tips-content-item" id="tips2">
        <div class="tips-content-item-text">
            <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
            <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
            <div class="tips-content-item-btn">
                <a href=# class="btn btn-primary-1">READ MORE</a>
            </div>
        </div>
        <div class="tips-content-item-image">
            <img src="{{asset('images/blog_author2.jpg')}}" alt="" />
            <div class="tips-content-item-name">
                <a href="#">Arnie Alban</a>
            </div>
            <div class="tips-content-item-position">
                Pedodontics
            </div>
        </div>
    </div>

    <!-- TIPS ITEM -->
    <div class="tab-pane fade tips-content-item" id="tips3">
        <div class="tips-content-item-text">
            <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
            <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
            <div class="tips-content-item-btn">
                <a href=# class="btn btn-primary-1">READ MORE</a>
            </div>
        </div>
        <div class="tips-content-item-image">
            <img src="{{asset('images/blog_author3.jpg')}}" alt="" />
            <div class="tips-content-item-name">
                <a href="#">Dustin Callahan</a>
            </div>
            <div class="tips-content-item-position">
                Orthodontist
            </div>
        </div>
    </div>
    
    <!-- TIPS ITEM -->
    <div class="tab-pane fade tips-content-item" id="tips4">
        <div class="tips-content-item-text">
            <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
            <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
            <div class="tips-content-item-btn">
                <a href=# class="btn btn-primary-1">READ MORE</a>
            </div>
        </div>
        <div class="tips-content-item-image">
            <img src="{{asset('images/blog_author4.jpg')}}" alt="" />
            <div class="tips-content-item-name">
                <a href="#">Kristin Weaver</a>
            </div>
            <div class="tips-content-item-position">
                Hygienist
            </div>
        </div>
    </div> 
    
    <!-- TIPS ITEM -->
    <div class="tab-pane fade tips-content-item" id="tips5">
        <div class="tips-content-item-text">
            <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
            <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
            <div class="tips-content-item-btn">
                <a href=# class="btn btn-primary-1">READ MORE</a>
            </div>
        </div>
        <div class="tips-content-item-image">
            <img src="{{asset('images/blog_author5.jpg')}}" alt="" />
            <div class="tips-content-item-name">
                <a href="#">Leslie Adams</a>
            </div>
            <div class="tips-content-item-position">
                Prosthodontics
            </div>
        </div>
    </div>
    
    <!-- TIPS ITEM -->
    <div class="tab-pane fade tips-content-item" id="tips6">
        <div class="tips-content-item-text">
            <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
            <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
            <div class="tips-content-item-btn">
                <a href=# class="btn btn-primary-1">READ MORE</a>
            </div>
        </div>
        <div class="tips-content-item-image">
            <img src="{{asset('images/blog_author6.jpg')}}" alt="" />
            <div class="tips-content-item-name">
                <a href="#">Helen Edwards</a>
            </div>
            <div class="tips-content-item-position">
                Pediatric Dentistry
            </div>
        </div>
    </div>
    
</div>
</div>
</div>


<!-- FAQ -->
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 faq">

<h2 class="section-title"><span class="bold700">FAQ</span></h2>

<div class="panel-group" id="accordion">
<!-- FAQ ITEM -->
<div class="panel panel-default">
<div class="panel-heading">
  <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <i class="fa fa-heartbeat"></i> Surgical implant placements
          </a>
        </h4>
</div>
<div id="collapseOne" class="panel-collapse collapse in">
  <div class="panel-body">
    Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth, or provide abutments for complete dentures or partials. This topic focuses on the placement of single-tooth dental implants.
  </div>
</div>
</div>

<!-- FAQ ITEM -->
<div class="panel panel-default">
<div class="panel-heading">
  <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
            <i class="fa fa-medkit"></i> Teeth whitening
          </a>
        </h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
  <div class="panel-body">
    Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth, or provide abutments for complete dentures or partials. This topic focuses on the placement of single-tooth dental implants.
  </div>
</div>
</div>

<!-- FAQ ITEM -->
<div class="panel panel-default">
<div class="panel-heading">
  <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
            <i class="fa fa-life-bouy"></i> Teeth cleaning
          </a>
        </h4>
</div>
<div id="collapseThree" class="panel-collapse collapse">
  <div class="panel-body">
    Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth, or provide abutments for complete dentures or partials. This topic focuses on the placement of single-tooth dental implants.
  </div>
</div>
</div>

<!-- FAQ ITEM -->
<div class="panel panel-default">
<div class="panel-heading">
  <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
            <i class="fa fa-flask"></i> X-rays
          </a>
        </h4>
</div>
<div id="collapseFour" class="panel-collapse collapse">
  <div class="panel-body">
    Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth, or provide abutments for complete dentures or partials. This topic focuses on the placement of single-tooth dental implants.
  </div>
</div>
</div>

<!-- FAQ ITEM -->
<div class="panel panel-default">
<div class="panel-heading">
  <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">
            <i class="fa fa-ambulance"></i> Crowns
          </a>
        </h4>
</div>
<div id="collapseFive" class="panel-collapse collapse">
  <div class="panel-body">
    Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth, or provide abutments for complete dentures or partials. This topic focuses on the placement of single-tooth dental implants.
  </div>
</div>
</div>

</div>
</div>

</div>
</div>
</div>
<!-- =========================
END TIPS AND FAQ
============================== -->


<!-- =========================
CLIENTS
============================== -->
<div class="clients">
<div class="container">
<div class="row">

<p class="section-subtitle">PARTNER COMPANIES</p>

<div class="clients-container">
<div class="owl-clients" id="owl-clients">

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients1.jpg')}}" alt="" />
</div>

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients2.jpg')}}" alt="" />
</div>

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients3.jpg')}}" alt="" />
</div>

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients4.jpg')}}" alt="" />
</div>

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients5.jpg')}}" alt="" />
</div>

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients2.jpg')}}" alt="" />
</div>

<!-- CLIENTS ITEM -->
<div class="clients-item">
    <img src="{{asset('images/clients3.jpg')}}" alt="" />
</div>

</div>

<!-- CLIENTS BUTTONS -->
<div class="carousel-btn carousel-next" id="next-clients"><i class="fa fa-angle-right"></i></div>
<div class="carousel-btn carousel-prev" id="prev-clients"><i class="fa fa-angle-left"></i></div>
</div>

</div>
</div>
</div>
<!-- =========================
END CLIENTS
============================== -->
@endsection()