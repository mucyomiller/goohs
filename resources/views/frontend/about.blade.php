@extends('frontend.theme')
@section('content')
<div class="page-title page-title-about bg-pattern" data-bgcolor="5295BD">
    <div class="page-title-overlay">
        <div class="container">

            <h1>ABOUT US</h1>
            <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>

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
                        
                        <div class="image-carousel-item">
                            <img src="images/history2.jpg" alt="" />
                        </div>
                        
                        <div class="image-carousel-item">
                            <img src="images/history3.jpg" alt="" />
                        </div>                            
                        
                        <div class="image-carousel-item">
                            <img src="images/history4.jpg" alt="" />
                        </div>   
						
                    </div>
                                
                    <div class="carousel-btn carousel-next" id="next-image-carousel"><i class="fa fa-angle-right"></i></div>
                    <div class="carousel-btn carousel-prev" id="prev-image-carousel"><i class="fa fa-angle-left"></i></div>
                                
                </div>
            </div>
            
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 history-text">
                <h3>HISTORY</h3>
                <p>Our Dental Clinic is dedicated to providing the most up to date general, orthodontic and family dentistry. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo.</p>
            </div>
            
        </div>
    </div>
</div>    
    
<div class="certs">
    <div class="container">
        <div class="row">
            
            <h3>Certificates of completion</h3>
            <div class="certs-container">
                <div class="owl-certs" id="owl-certs">
                    <div class="certs-item">
                        <a href="images/cert1-b.jpg" class="fancybox"><img src="images/cert1.jpg" alt="" /></a>
                    </div>
                    <div class="certs-item">
                        <a href="images/cert2-b.jpg" class="fancybox"><img src="images/cert2.jpg" alt="" /></a>
                    </div>
                    <div class="certs-item">
                        <a href="images/cert3-b.jpg" class="fancybox"><img src="images/cert3.jpg" alt="" /></a>
                    </div>
                    <div class="certs-item">
                        <a href="images/cert4-b.jpg" class="fancybox"><img src="images/cert4.jpg" alt="" /></a>
                    </div>
                    <div class="certs-item">
                        <a href="images/cert5-b.jpg" class="fancybox"><img src="images/cert5.jpg" alt="" /></a>
                    </div>
                    <div class="certs-item">
                        <a href="images/cert1-b.jpg" class="fancybox"><img src="images/cert1.jpg" alt="" /></a>
                    </div>
                    <div class="certs-item">
                        <a href="images/cert2-b.jpg" class="fancybox"><img src="images/cert2.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="carousel-btn carousel-next" id="next-certs"><i class="fa fa-angle-right"></i></div>
                <div class="carousel-btn carousel-prev" id="prev-certs"><i class="fa fa-angle-left"></i></div>
            </div>
            
        </div>
    </div>
</div>
    
    
<div class="mission">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 mission-text">
                <h3>OUR MISSION</h3>
                <p>Our Dental Clinic is dedicated to providing the most up to date general, orthodontic and family dentistry. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
                <ul class="text-list">
                    <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                    <li>orthodontic and family dentistry. </li>
                    <li>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</li>
                    <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                </ul>
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 mission-video">
                <iframe width="457" height="314" src="https://www.youtube.com/embed/2L8NM6r0XuY" allowfullscreen></iframe>
            </div>
            
        </div>
    </div>
</div>


<div class="tipsfaq">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 tips">
                <h2 class="section-title"><span class="bold700">WHY CHOOSE US?</span></h2>
                <div class="tips-tabs">
                    <ul class="nav nav-tabs tabs-carousel">
                        <li class="active"><a href="#tips1" data-toggle="tab">Experience</a></li>
                        <li><a href="#tips2" data-toggle="tab">Prices</a></li>
                        <li><a href="#tips3" data-toggle="tab">Medical equipment</a></li>
                    </ul>
                    <div class="tips-btn tips-next" id="next-tips"><i class="fa fa-angle-right"></i></div>
                    <div class="tips-btn tips-prev" id="prev-tips"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="tips-content">
                    <div class="tab-content">
                        
                        <div class="tab-pane fade active in tips-content-item" id="tips1">
                            <p>Our Dental Clinic is dedicated to providing the most up to date general, orthodontic and family dentistry. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
                            <ul class="text-list">
                                <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                                <li>orthodontic and family dentistry. </li>
                                <li>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</li>
                                <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                            </ul>
                            <div class="tips-content-item-btn">
                                <a href=# class="btn btn-primary-1">SERVICES</a>
                            </div>
                        </div>

                        <div class="tab-pane fade tips-content-item" id="tips2">
                            <p>Our Dental Clinic is dedicated to providing the most up to date general, orthodontic and family dentistry. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
                            <ul class="text-list">
                                <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                                <li>orthodontic and family dentistry. </li>
                                <li>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</li>
                                <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                            </ul>
                            <div class="tips-content-item-btn">
                                <a href=# class="btn btn-primary-1">SERVICES</a>
                            </div>
                        </div>

                        <div class="tab-pane fade tips-content-item" id="tips3">
                            <p>Our Dental Clinic is dedicated to providing the most up to date general, orthodontic and family dentistry. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
                            <ul class="text-list">
                                <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                                <li>orthodontic and family dentistry. </li>
                                <li>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</li>
                                <li>Our Dental Clinic is dedicated to providing the most up to date general</li>
                            </ul>
                            <div class="tips-content-item-btn">
                                <a href=# class="btn btn-primary-1">SERVICES</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                
                <h2 class="section-title"><span class="bold700">TESTIMONIALS</span></h2>
                
                <div class="review-container">
                    <div class="owl-review2" id="owl-review2">
                        
                        <div>

                            <div class="review-item">
                                <div class="review-item-image">
                                    <img src="images/review1.jpg" alt="" />
                                </div>
                                <div class="review-item-text">This was my first dental treatment in many years and Dr. Dustin made me feel relaxed and calm. It was completely painless and issue free. I thoroughly recommend both Dr. Dustin and Dental Clinic.</div>
                                <div class="review-item-name">Caetlin Madyson</div>
                                <div class="review-item-position">Comprehensive Cleaning</div>
                                <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                            </div>

                            <div class="review-item">
                                <div class="review-item-image">
                                    <img src="images/review2.jpg" alt="" />
                                </div>
                                <div class="review-item-text">I would like to say a big thank you to all the team at Dental Clinic, from the charming and efficient reception staff to all the dental team. Dr Wyatt's is a truly first class outfit that are the epitome of professionalism.</div>
                                <div class="review-item-name">James Mitchell</div>
                                <div class="review-item-position">General Dentistry</div>
                                <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                            </div>
                            
                        </div>
                        
                        <div>

                            <div class="review-item">
                                <div class="review-item-image">
                                    <img src="images/review3.jpg" alt="" />
                                </div>
                                <div class="review-item-text">I'm new to Dental Clinic and I have got to say that I am rather impressed with their team's professionalism. I booked online through their website, and I immediately got a call from Kristin, their receptionist. </div>
                                <div class="review-item-name">Tracey Todd</div>
                                <div class="review-item-position">Teeth Whitening</div>
                                <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                            </div>

                            <div class="review-item">
                                <div class="review-item-image">
                                    <img src="images/review4.jpg" alt="" />
                                </div>
                                <div class="review-item-text">Hands down the best dental clinic I've been to. You'll pay a little more than other clinics but you'll get it right the first time. From the reception to the coffee and down to the dentists; simply awesome!</div>
                                <div class="review-item-name">William Murphy</div>
                                <div class="review-item-position">Crown, Root Canal</div>
                                <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                            </div>
                            
                        </div>
                        
                        <div>

                            <div class="review-item">
                                <div class="review-item-image">
                                    <img src="images/review5.jpg" alt="" />
                                </div>
                                <div class="review-item-text">I would like to say a big thank you to all the team at Dental Clinic, from the charming and efficient reception staff to all the dental team. Dr Wyatt's is a truly first class outfit that are the epitome of professionalism.</div>
                                <div class="review-item-name">Gregory Berry</div>
                                <div class="review-item-position">Comprehensive Cleaning</div>
                                <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                            </div>

                            <div class="review-item">
                                <div class="review-item-image">
                                    <img src="images/review6.jpg" alt="" />
                                </div>
                                <div class="review-item-text">I'm new to Dental Clinic and I have got to say that I am rather impressed with their team's professionalism. I booked online through their website, and I immediately got a call from Kristin, their receptionist.</div>
                                <div class="review-item-name">Stella Webb</div>
                                <div class="review-item-position">Dental care patient</div>
                                <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                            </div>
                            
                        </div>

                    </div>

                </div>
               
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
@endsection()