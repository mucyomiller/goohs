@extends('frontend.theme')
@section('content')
<!-- Slider Section Starts -->
<section class="slider clearfix">
<div id="camera_wrap_1" class="camera_wrap camera_white_skin">
<!-- Slide #1 Starts -->
	<div data-src="images/slider/slider-img1.jpg">
		<div class="camera_caption fadeFromLeft hidden-sm hidden-xs">
			<h2>One Stop Solution</h2>
			<h2>For All Your <span>Medical Needs</span></h2>
			<p>
				Register yourself today to start using this system.
			</p>
			<a href="{{ url('/reg_patient')}}" class="btn btn-secondary">register now</a>
		</div>
	</div>
<!-- Slide #1 Ends -->
<!-- Slide #2 Starts -->
	<div data-src="images/slider/slider-img2.jpg">
		<div class="camera_caption fadeIn hidden-sm hidden-xs">
			<h2>Take Test</h2>
			<h2><span>Come to us</span></h2>
			<p>
				we are waiting for you to deliver great service.
			</p>
			<a href="#" class="btn btn-secondary">Read More</a>
		</div>
	</div>
<!-- Slide #2 Ends -->
<!-- Slide #3 Starts -->
	<div data-src="images/slider/slider-img3.jpg">
		<div class="camera_caption fadeIn hidden-sm hidden-xs">
			<h2>Main Heading</h2>
			<h2><span>Some Caption</span> Here</h2>
			<p>
				Lorem Ipsum is simply dummy text printer took a galley of type and scrambled it to make a type specimen book.
			</p>
			<a href="#" class="btn btn-secondary">Read More</a>
		</div>
	</div>
<!-- Slide #3 Ends -->
</div>
</section>
<!-- Slider Section Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
<!-- Notification Boxes Starts -->
<div class="notification-boxes row">
<!-- Box #1 Starts -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="box">
			<i class="fa fa-user-md"></i>
			<h4>Qualified Doctors</h4>
			<p>
				We have so many qaulified Doctors.
			</p>
			<a href="#" class="btn btn-transparent">Read More</a>
		</div>
	</div>
<!-- Box #1 Ends -->
<!-- Box #2 Starts -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="box">
			<i class="fa fa-stethoscope"></i>
			<h4>Regular Checkup</h4>
			<p>
				Come to us to make regular test!.
			</p>
			<a href="#" class="btn btn-transparent">Read More</a>
		</div>
	</div>
<!-- Box #2 Ends -->
<!-- Box #3 Starts -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="box">
			<i class="fa fa-flask"></i>
			<h4>Lab Test</h4>
			<p>
				Lab Test is quiecker than ever with sms results!.
			</p>
			<a href="#" class="btn btn-transparent">Read More</a>
		</div>
	</div>
<!-- Box #3 Ends -->
<!-- Box #4 Starts -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="box">
			<i class="fa fa-comments-o"></i>
			<h4>Hospital Announcement</h4>
			<p>
				Realtime notifications.
			</p>
			<a href="#" class="btn btn-transparent">Read More</a>
		</div>
	</div>
<!-- Box #4 Ends -->
</div>
<!-- Notification Boxes Ends -->
<!-- Welcome Section Starts -->
<section class="welcome-area">
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<h2 class="main-heading1 lite">We Offer Fast &amp; Reliable</h2>
			<h2 class="main-heading2">Medical &amp; Healthcare Needs</h2>
			<p>
				It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content.
			</p>
			<p>
				Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
			</p>
		</div>
		<div class="col-md-6 col-xs-12">
			<img src="images/image1.jpg" alt="image" class="img-responsive img-style1">
		</div>
	</div>
</section>
<!-- Welcome Section Ends -->
</div>
<!-- Main Container Ends -->
<!-- Meet Our Doctors Section Starts -->
<section class="featured-doctors">
<!-- Nested Container Starts -->
<div class="container">
	<h2><span class="lite">Meet Our</span> Doctors</h2>
	<p>
		Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.
	</p>
	<div class="row">
	<!-- Doctor Bio #1 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="bio-box">
				<div class="profile-img">
					<img src="images/doctors/doctor-bio-img1.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
					<div class="overlay">
						<ul class="list-unstyled list-inline sm-links">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="inner">
					<h5>Dr. Tom Smith Bert</h5>
					<p class="designation">Surgeon</p>
					<p class="divider"><i class="fa fa-plus-square"></i></p>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
					</p>
				</div>							
				<a href="doctor-profile.html" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
			</div>
		</div>
	<!-- Doctor Bio #1 Ends -->
	<!-- Doctor Bio #2 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="bio-box">
				<div class="profile-img">
					<img src="images/doctors/doctor-bio-img2.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
					<div class="overlay">
						<ul class="list-unstyled list-inline sm-links">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="inner">
					<h5>Dr. Tom Smith Bert</h5>
					<p class="designation">Surgeon</p>
					<p class="divider"><i class="fa fa-plus-square"></i></p>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
					</p>
				</div>							
				<a href="doctor-profile.html" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
			</div>
		</div>
	<!-- Doctor Bio #2 Ends -->
	<!-- Doctor Bio #3 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="bio-box">
				<div class="profile-img">
					<img src="images/doctors/doctor-bio-img3.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
					<div class="overlay">
						<ul class="list-unstyled list-inline sm-links">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="inner">
					<h5>Dr. Tom Smith Bert</h5>
					<p class="designation">Surgeon</p>
					<p class="divider"><i class="fa fa-plus-square"></i></p>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
					</p>
				</div>							
				<a href="doctor-profile.html" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
			</div>
		</div>
	<!-- Doctor Bio #3 Ends -->
	<!-- Doctor Bio #4 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="bio-box">
				<div class="profile-img">
					<img src="images/doctors/doctor-bio-img4.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
					<div class="overlay">
						<ul class="list-unstyled list-inline sm-links">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="inner">
					<h5>Dr. Tom Smith Bert</h5>
					<p class="designation">Surgeon</p>
					<p class="divider"><i class="fa fa-plus-square"></i></p>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since type specimen book.
					</p>
				</div>							
				<a href="doctor-profile.html" class="btn btn-transparent inverse text-uppercase">Book An Appointment</a>
			</div>
		</div>
	<!-- Doctor Bio #4 Ends -->
	</div>
</div>
<!-- Nested Container Ends -->
</section>
<!-- Meet Our Doctors Section Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
<!-- Medical Services Section Starts -->
<section class="medical-services">
	<h2 class="main-heading1 lite">Our Best</h2>
	<h2 class="main-heading2">Medical Services</h2>
<!-- Medical Services List Starts -->
	<ul class="list-unstyled row text-center">
		<li class="col-md-2 col-sm-4 col-xs-12">
			<div class="icon">
				<img src="images/icons/band-aid.png" alt="Band Aid">
			</div>
			<h5>First Aid</h5>
			<p>Lorem Ipsum is simply dummy text ...</p>
		</li>
		<li class="col-md-2 col-sm-4 col-xs-12">
			<div class="icon">
				<img src="images/icons/tooth.png" alt="Dental Care">
			</div>
			<h5>Dental Care</h5>
			<p>Lorem Ipsum is simply dummy text ...</p>
		</li>
		<li class="col-md-2 col-sm-4 col-xs-12">
			<div class="icon">
				<img src="images/icons/ambulance.png" alt="24x7 Ambulance">
			</div>
			<h5>24x7 Ambulance</h5>
			<p>Lorem Ipsum is simply dummy text ...</p>
		</li>
		<li class="col-md-2 col-sm-4 col-xs-12">
			<div class="icon">
				<img src="images/icons/nurse.png" alt="Qualified Doctors">
			</div>
			<h5>Qualified Doctors</h5>
			<p>Lorem Ipsum is simply dummy text ...</p>
		</li>
		<li class="col-md-2 col-sm-4 col-xs-12">
			<div class="icon">
				<img src="images/icons/saline-bottle.png" alt="Medical Pharmacy">
			</div>
			<h5>Medical Pharmacy</h5>
			<p>Lorem Ipsum is simply dummy text ...</p>
		</li>
		<li class="col-md-2 col-sm-4 col-xs-12">
			<div class="icon">
				<img src="images/icons/stethoscope.png" alt="Pulmonary">
			</div>
			<h5>Pulmonary</h5>
			<p>Lorem Ipsum is simply dummy text ...</p>
		</li>
	</ul>
<!-- Medical Services List Ends -->
</section>
<!-- Medical Services Section Ends -->
<!-- Content Starts -->
<div class="row">
<!-- Latest News Section Starts -->
<section class="col-md-8 col-xs-12">
<div class="main-block1">
<h2 class="main-heading1 lite">Latest</h2>
<h2 class="main-heading2">Tips &amp; News</h2>
<!-- Latest News Carousel Starts -->
<div id="news-carousel" class="news-carousel carousel slide" data-ride="carousel">
<!-- Wrapper for Slides Starts -->
<div class="carousel-inner">
<!-- Slide #1 Starts -->
<div class="item active">
<div class="row">
<div class="col-sm-6 col-xs-12">
<!-- News Post Starts -->
	<div class="news-post-box">
		<img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
		<div class="inner">
			<h5>
				<a href="#">Latest News Post Heading</a>
			</h5>
			<ul class="list-unstyled list-inline post-meta">
				<li>
					<i class="fa fa-calendar"></i> Sept 25, 2015
				</li>
				<li><a href="#">
					<i class="fa fa-comments-o"></i> 10
				</a></li>
			</ul>
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
			</p>
			<a href="#" class="btn btn-secondary">
				<i class="fa fa-arrow-circle-right"></i>
				Read More
			</a>
		</div>
	</div>
<!-- News Post Ends -->
</div>
<div class="col-sm-6 col-xs-12">
<!-- News Post Starts -->
	<div class="news-post-box">
		<img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
		<div class="inner">
			<h5>
				<a href="#">Latest Tip Post Heading</a>
			</h5>
			<ul class="list-unstyled list-inline post-meta">
				<li>
					<i class="fa fa-calendar"></i> Sept 15, 2015
				</li>
				<li><a href="#">
					<i class="fa fa-comments-o"></i> 10
				</a></li>
			</ul>
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
			</p>
			<a href="#" class="btn btn-secondary">
				<i class="fa fa-arrow-circle-right"></i> 
				Read More
			</a>
		</div>
	</div>
<!-- News Post Ends -->
</div>
</div>
</div>
<!-- Slide #1 Ends -->
<!-- Slide #2 Starts -->
<div class="item">
<div class="row">
<div class="col-sm-6 col-xs-12">
<!-- News Post Starts -->
	<div class="news-post-box">
		<img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
		<div class="inner">
			<h5>
				<a href="#">Latest News Post Heading</a>
			</h5>
			<ul class="list-unstyled list-inline post-meta">
				<li>
					<i class="fa fa-calendar"></i> Sept 25, 2015
				</li>
				<li><a href="#">
					<i class="fa fa-comments-o"></i> 10
				</a></li>
			</ul>
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
			</p>
			<a href="#" class="btn btn-secondary">
				<i class="fa fa-arrow-circle-right"></i>
				Read More
			</a>
		</div>
	</div>
<!-- News Post Ends -->
</div>
<div class="col-sm-6 col-xs-12">
<!-- News Post Starts -->
	<div class="news-post-box">
		<img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
		<div class="inner">
			<h5>
				<a href="#">Latest Tip Post Heading</a>
			</h5>
			<ul class="list-unstyled list-inline post-meta">
				<li>
					<i class="fa fa-calendar"></i> Sept 15, 2015
				</li>
				<li><a href="#">
					<i class="fa fa-comments-o"></i> 10
				</a></li>
			</ul>
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker....
			</p>
			<a href="#" class="btn btn-secondary">
				<i class="fa fa-arrow-circle-right"></i> 
				Read More
			</a>
		</div>
	</div>
<!-- News Post Ends -->
</div>
</div>
</div>
<!-- Slide #2 Ends -->
</div>
<!-- Wrapper for Slides Ends -->
<!-- Controls Starts -->
<a class="left carousel-control" href="#news-carousel" role="button" data-slide="prev">
<span class="fa fa-angle-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#news-carousel" role="button" data-slide="next">
<span class="fa fa-angle-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
<!-- Controls Ends -->
</div>
<!-- Latest News Carousel Ends -->
</div>
</section>
<!-- Latest News Section Ends -->
<!-- Medical Department aside Starts -->
<aside class="col-md-4 col-xs-12">
<div class="main-block1">
<h2 class="main-heading1 lite">Medical</h2>
<h2 class="main-heading2">Departments</h2>
<!-- Accordion Starts -->
<div class="panel-group" id="accordion">
<!-- Accordion #1 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-medkit"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				Primary Health Care
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse1" class="panel-collapse collapse in">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #1 Ends -->
<!-- Accordion #2 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-user-md"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				Diagnosis With Precise
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse2" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #2 Ends -->
<!-- Accordion #3 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-scissors"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
				Major Surgery
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse3" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #3 Ends -->
<!-- Accordion #4 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-wheelchair"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
				Outpatient Rehabilitation
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse4" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #4 Ends -->
<!-- Accordion #5 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-heartbeat"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
				Cardiac Clinic
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse5" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #5 Ends -->
<!-- Accordion #6 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-stethoscope"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
				Ophthalmology
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse6" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #6 Ends -->
<!-- Accordion #7 Starts -->
<div class="panel">
<!-- Panel Heading Starts -->
	<div class="panel-heading">
		<h5 class="panel-title">
			<i class="icon fa fa-ambulance"></i>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
				24x7 Ambulance 
			</a>
		</h5>
	</div>
<!-- Panel Heading Ends -->
<!-- Panel Body Starts -->
	<div id="collapse7" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions ...
			</p>
			<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
		</div>
	</div>
<!-- Panel Body Ends -->
</div>
<!-- Accordion #7 Ends -->
</div>
<!-- Accordion Ends -->
</div>
</aside>
<!-- Medical Department aside Ends -->
</div>
<!-- Content Ends -->
<!-- Book Appointment Box Starts -->
<div class="book-appointment-box">
	<div class="row">
		<div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
			<h4>Online Hassle Free Appointment Booking</h4>
			<h3><i class="fa fa-phone-square"></i> +250 78x xxx xxx</h3>
		</div>
		<div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
			<a href="doctor-profile.html" class="btn btn-main text-uppercase">Book your Appointment</a>
		</div>
		<div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
			<div class="box-img">
				<img src="images/appointment-booking-img1.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- Book Appointment Box Ends -->
</div>
<!-- Main Container Ends -->
@endsection()