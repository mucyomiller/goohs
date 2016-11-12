@extends('frontend.theme')
@section('content')
<!-- Main Banner Starts -->
		<div class="main-banner five">
			<div class="container">
				<h2><span>Contact Us</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>		
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
		<div class="container main-container">
		<!-- Contact Info Section Starts -->
			<div class="contact-info-box">
				<div class="row">
					<div class="col-md-5 col-xs-12 hidden-sm hidden-xs">
						<div class="box-img">
							<img src="images/contact/contact-info-box-img1.png" alt="Image" />
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="info-box">
							<h3>We'd love to hear from you</h3>
							<h5>
								Fusce convallis diam vitae velit tempus rutrum. Donec nisl nisl, vulputate eu sapien sed, adipiscing vehicula massa. Mauris eget commodo neque, id molestie enim.
							</h5>
							<div class="row">
								<h4 class="col-sm-6 col-xs-12">Tel: 1-800-999-1234</h4>
								<h4 class="col-sm-6 col-xs-12">Fax: 1-800-999-1234</h4>
							</div>
							<h4>Email: <a href="mailto:info@goohs.com">info@goohs.com</a></h4>
						</div>
					</div>
					<div class="col-md-1 col-xs-12 hidden-sm hidden-xs"></div>
				</div>
			</div>
		<!-- Contact Info Section Ends -->
		<!-- Contact Content Starts -->
			<div class="contact-content">
				<div class="row">
				<!-- Contact Form Starts -->
					<div class="col-sm-8 col-xs-12">
						<h3>Get in touch by filling the form below</h3>
						<div class="status alert alert-success contact-status"></div>
						<form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="{{ route('contactSend') }}" role="form">
							<div class="row">
							<!-- Name Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Name </label>
										<input type="text" class="form-control" name="name" id="name" required="required">
										{{ csrf_field() }}
									</div>
								</div>
							<!-- Name Field Ends -->
							<!-- Email Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email Address </label>
										<input type="text" class="form-control" name="email" id="email" required="required">
									</div>
								</div>
							<!-- Email Field Ends -->
							<!-- Phone No Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="phoneno">Contact Number </label>
										<input type="text" class="form-control" name="phoneno" id="phoneno" required="required">
									</div>
								</div>
							<!-- Phone No Field Ends -->
							<!-- Subject Field Starts -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="subject">Subject </label>
										<input type="text" class="form-control" name="subject" id="subject" required="required">
									</div>
								</div>
							<!-- Subject Field Ends -->
							<!-- Message Field Starts -->
								<div class="col-xs-12">
									<div class="form-group">
										<label for="message">Your Comments: </label>
										<textarea class="form-control" rows="8" name="message" id="message" required="required"></textarea>
									</div>
								</div>
							<!-- Message Field Ends -->
								<div class="col-xs-12">
									<input type="submit" class="btn btn-black text-uppercase" name="submit" value="Submit">
								</div>
							</div>
						</form>
					</div>
				<!-- Contact Form Ends -->
				<!-- Address Starts -->
					<div class="col-sm-4 col-xs-12">
					<!-- Box #1 Starts -->
						<div class="cblock-1">
							<span class="icon-wrap"><i class="fa fa-car"></i></span>
							<h4>Come and Visit</h4>
							<ul class="list-unstyled">
								<li>#rue de l'armee Street, Kigali,</li>
								<li>Nyarugenge, Kigali, Rwanda.</li>
								<li>250-xx-xxx-xxx</li>
							</ul>
						</div>
					<!-- Box #1 Ends -->
					<!-- Box #2 Starts -->
						<div class="cblock-1">
							<span class="icon-wrap red"><i class="fa fa-ambulance"></i></span>
							<h4>Emergency Care?</h4>
							<ul class="list-unstyled">
								<li>If you're having a medical emergency,</li>
								<li>do not wait to contact us.</li>
								<li>Call 250-xxx-xxx-xxx</li>
								<li>or visit the closest emergency center.</li>
							</ul>
						</div>
					<!-- Box #2 Ends -->
					</div>
				<!-- Address Ends -->
				</div>
			</div>
		<!-- Contact Content Ends -->
		</div>
	<!-- Main Container Ends -->
	<!-- Google Map Starts -->
		<div class="map"></div>
	<!-- Google Map Ends -->	
@endsection()