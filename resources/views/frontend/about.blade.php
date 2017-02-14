@extends('frontend.theme')
@section('content')
<div class="page-title page-title-about bg-pattern" data-bgcolor="5295BD">
    <div class="page-title-overlay">
        <div class="container">

            <h1>ABOUT US</h1>
            <p>Our System will facilitate Health Organisations to unify service.</p>

        </div>
    </div>
</div>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            
            <ol class="breadcrumb">
                <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">About us</li>
            </ol>
            
        </div>
    </div>
</div>

<div class="history">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 history-images">
                <div class="image-carousel">

                    <div class="owl-image-carousel" id="owl-image-carousel">
                                    
                        <div class="image-carousel-item">
                            <img src="images/history1.jpg" alt="" />
                        </div>
						
                    </div>
                                
                    <div class="carousel-btn carousel-next" id="next-image-carousel"><i class="fa fa-angle-right"></i></div>
                    <div class="carousel-btn carousel-prev" id="prev-image-carousel"><i class="fa fa-angle-left"></i></div>
                                
                </div>
            </div>
            
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 history-text">
                <h3>HISTORY</h3>
                <p>This, system started as initiative to interconnect hospitals network let doctor diagnose patient based on his medical records no matter which hospital they priviously used.</p>
                <p>And Provide unified reports & statistics to Ministry of health .</p>
            </div>
            
        </div>
    </div>
</div>        
<div class="make">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 make-text">
                <h2>MAKE AN APPOINTMENT</h2>
                <p>You will find list of hospital currently working with us and list will be updated shortly.</p>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 make-button">
                <a href="#bookform1" class="fancybox-2 btn btn-default"><span class="plus">+</span> MAKE AN APPOINTMENT</a>
            </div>
            
        </div>
    </div>
</div>
@endsection()