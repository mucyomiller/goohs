@extends('frontend.theme')
@section('content')
<div class="page-title page-title-contacts bg-pattern" data-bgcolor="3B4B89">
    <div class="page-title-overlay">
        <div class="container">

            <h1>CONTACT US</h1>
            <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>

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
                <i class="fa fa-envelope"></i> <span><a href="mailto:office@dantal.com">care@goohs.com</a></span>
            </div>
            <div class="map-info-location">
                <i class="flaticon-navigation-arrow"></i> <span>Kigali Rwanda PO Box <br>x, KG, ST 1</span>
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
    
<div class="get">
    <div class="container">
        <div class="row">
            
            <h2 class="section-title">how to get Us</h2>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
                <div class="get-item-icon">
                    <i class="fa fa-subway"></i>
                </div>
                <h4 class="get-item-title">Subway</h4>
                <p class="get-item-text">Lorem ipsum dolor sit amet, consectetur<br>adipisicing elit, sed do eiusmod aliqua. </p>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
                <div class="get-item-icon">
                    <i class="fa fa-car"></i>
                </div>
                <h4 class="get-item-title">Car</h4>
                <p class="get-item-text">Henderson Blvd PO Box 356012,<br>Tampa, FL 54452</p>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 get-item">
                <div class="get-item-icon">
                    <i class="fa fa-bus"></i>
                </div>
                <h4 class="get-item-title">Bus</h4>
                <p class="get-item-text">Lorem ipsum dolor sit amet - 10, 12, 24, 27,<br>52, 54, 64. </p>
            </div>
            
        </div>
    </div>
</div>
    

<div class="make">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 make-text">
                <h2>MAKE AN APPOINTMENT</h2>
                <p>All staff members of Dental Clinic are licensed professionals. Our staff consists of licensed general dentists.</p>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 make-button">
                <a href="#bookform1" class="fancybox-2 btn btn-default"><span class="plus">+</span> MAKE AN APPOINTMENT</a>
            </div>
            
        </div>
    </div>
</div>

<div class="feedback">
    <div class="container">
        <div class="row">
            
            <h2 class="section-title"><span class="bold700">CONTACT US</span></h2>
            
            <p class="section-subtitle">Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            
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