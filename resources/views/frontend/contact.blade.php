@extends('frontend.theme')
@section('content')
<div class="page-title page-title-contacts bg-pattern" data-bgcolor="3B4B89">
    <div class="page-title-overlay">
        <div class="container">

            <h1>CONTACT US</h1>
            <p>You can use thos provided lines to reach us.</p>

        </div>
    </div>
</div>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            
            <ol class="breadcrumb">
                <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Contact us</li>
            </ol>
            
        </div>
    </div>
</div>
    
<div class="map" id="map">
</div>
<div class="map-info-container">
    <div class="map-info" id="map-info">
        <div class="map-info-contacts">
            <div class="map-info-phone">
                <i class="fa fa-phone"></i> <span>+2507817-27018</span>
            </div>
            <div class="map-info-mail">
                <i class="fa fa-envelope"></i> <span><a href="mailto:info@e-vuze.com">info@e-vuze.com</a></span>
            </div>
            <div class="map-info-location">
                <i class="flaticon-navigation-arrow"></i> <span>Kigali Rwanda</span>
            </div>
        </div>
        <div class="map-info-socials">
            <a href="#"><i class="fa fa-facebook"></i></a> 
            <a href="#"><i class="fa fa-google-plus"></i></a> 
            <a href="#"><i class="fa fa-twitter"></i></a> 
            <a href="#"><i class="fa fa-skype"></i></a>
        </div>
    </div>
</div>

<div class="feedback">
    <div class="container">
        <div class="row">
            
            <h2 class="section-title"><span class="bold700">CONTACT US</span></h2>
            
            <p class="section-subtitle">Write you suggestion or question down here we will reach you as soon as possible..</p>
            
                <form>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                                <input type="text" name="name" id="name" data-validation="required" placeholder="Your name" />
                                <div class="help help-sm help-red">!</div>
                            </div>          
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                                <input type="text" name="phone" id="phone" data-validation="required" placeholder="Phone" />
                                <div class="help help-sm help-red">!</div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                                <input type="text" name="email" id="email" placeholder="E-mail" />
                            </div>

                        </div>
                        
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                                <textarea name="message" id="message" data-validation="required" placeholder="Your message.."></textarea>
                                <div class="help help-sm help-red">!</div>
                            </div>

                        </div>
                        
                    </div>
                    
                    <div class="row latest-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                            <button class="btn btn-primary">SEND</button>
                        </div>
                    </div>
                    
                </form>
            
        </div>
    </div>
</div>
@endsection()