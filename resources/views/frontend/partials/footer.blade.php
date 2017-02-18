<!-- =========================
    FOOTER
============================== -->
<div class="footer">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    
                    <!-- FOOTER ITEM 1 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-item footer-item-1">
                        <h3 class="footer-title footer-title-line"><i class="fa fa-twitter"></i> LATEST TWEETS</h3>
                        <div class="tweet">
                            <div class="tweet-login">
                                <a href="#">@e-vuze</a>
                            </div>
                            <div class="tweet-text">
                                No tweets.
                            </div>
                            <div class="tweet-date">
                                {{ date('d-m-Y')}}
                            </div>
                        </div>
                    </div>
                    
                    <!-- FOOTER ITEM 2 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-item footer-item-2">
                        <h3 class="footer-title footer-title-line"><i class="fa fa-home"></i> HOSPITALS / CLINICS</h3>
                        <h3 style="color:white;font-family: 'Sansita', sans-serif;">UR Polyclinc:</h3>
                        <div class="opening-left">
                            Monday<br>
                            Tuesday<br>
                            Wednesday<br>
                            Thursday<br>
                            Friday<br>
                            Saturday<br>
                            Sunday       
                        </div>
                        <div class="opening-right">
                            7:00 am - 7:00 pm<br>
                            7:00 am - 7:00 pm<br>
                            7:00 am - 7:00 pm<br>
                            7:00 am - 7:00 pm<br>
                            7:00 am - 7:00 pm<br>
                            7:00 am - 7:00 pm<br>
                            Closed<br>
                        </div>
                    </div>
                    <!-- FOOTER ITEM 3 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-item footer-item-3" id="footer-item-3">
                        <h3 class="footer-title"><i class="fa fa-map-marker"></i> CONTACTS</h3>
                        <div class="footer-item-3-phone">
                            <i class="fa fa-phone"></i> +2507817-27018
                        </div>
                        <div class="footer-item-3-location">
                            <i class="flaticon-navigation-arrow"></i> Kigali Rwanda
                        </div>
                        <div class="footer-item-3-mail">
                            <i class="fa fa-envelope"></i> <a href="#">info@e-vuze.com</a>
                        </div>
                        <div class="footer-item-3-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a> 
                            <a href="#"><i class="fa fa-google-plus"></i></a> 
                            <a href="#"><i class="fa fa-twitter"></i></a> 
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-copyright">
                        <div>
                            <center>Copyright &copy; {{date('Y')}} <a href="#" target="_blank">e-vuze</a> &nbsp;&nbsp;&nbsp;Product of &nbsp;<a href="#" target="_blank">COMPUTER GEEKS TECH</a></center>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</div>
<!-- =========================
    END FOOTER
============================== -->

<!-- ===================================
    POPUP FORMS FOR BOOKING APPOINTMENTS
===================================== -->
<div class="bookform bookform-1" id="bookform1">
    <div class="bookform-left">
        <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
                <form method="post" action="{{ route('appointments.store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
                            <select id="form-doctor" class="form-doctor form-control-error" name="hospital_id">
                                <option selected="selected">Select hospital</option>
                                @foreach($hospitals as $hospital)
                                <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                            <input type="text" name="patient_id" id="name1" data-validation="required" placeholder="Your Patient ID" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                            <input type="text" class="datepicker-f" id="datepicker1" name="date" data-validation="required" placeholder="Date" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                            <input type="text" class="timepicker-f" id="timepicker1" name="start_time" data-validation="required" placeholder="Time" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                            <textarea name="message" id="message1" placeholder="Write how you feel.."></textarea>
                        </div>
                    </div>
                    
                    <div class="row latest-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                            <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a>
                        </div>
                    </div>
                    
                </form>
    </div>
    <div class="bookform-right">
        
        <div class="bookform-right-info-1">
            <h5>Please select a hospital</h5>
            Here are  lists of all hospitals or clinics you can choose. 
            
        </div>
        
        <div class="bookform-right-info-2">
            We are working hard to work with some many hospital/clinic if yours is not available feel free to tell us maybe next time will be available. 
        </div>
        
    </div>
</div
<!-- =========================
    END POPUP FORMS
============================== -->

<!-- ===================================
    POPUP FORMS FOR Taking Number
===================================== -->
<div class="bookform bookform-1" id="bookform2">
    <div class="bookform-left">
        <h2 class="section-title"><span class="bold700">TAKE  NUMBER</span></h2>
                <form method="post" action="{{ route('queue_no') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
                            <select id="form-doctor" class="form-doctor" name="hospital_id">
                                <option selected="selected">Select hospital</option>
                                @foreach($hospitals as $hospital)
                                <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                            <input type="text" name="patient_id" id="name1" data-validation="required" placeholder="Your Patient ID" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                    </div>    
                    <div class="row latest-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                            <button type="submit" class="btn btn-primary">Send</button>
                            <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a>
                        </div>
                    </div>
                    
                </form>
    </div>
    <div class="bookform-right">
        
        <div class="bookform-right-info-1">
            <h5>Please select a hospital</h5>
            Here are  lists of all hospitals or clinics you can choose. 
            
        </div>
        
        <div class="bookform-right-info-2">
            We are working hard to work with some many hospital/clinic if yours is not available feel free to tell us maybe next time will be available. 
        </div>
        
    </div>
</div
<!-- =========================
    END POPUP Numbering
============================== -->

<div class="totop" id="totop">
    <i class="fa fa-angle-up"></i>
</div>
    
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
    
<!-- =========================
     SCRIPTS   
============================== -->	
<!-- JQUERY -->
<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- SLIDER PRO -->
<script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>
    
<!-- LIGHTBOX -->
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>

<!-- CAROUSEL -->
<script src="{{asset('js/owl.carousel.js')}}"></script>

<!-- STAR RATING -->
<script src="{{asset('js/jquery.barrating.min.js')}}"></script>   

<!-- ISOTOPE FILTER -->
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

<!-- SCROLLSPY -->
<script src="{{asset('js/scrollspy.js')}}"></script>

<!-- DATEPICKER -->
<script src="{{asset('js/moment.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
 
<!-- FORM VALIDATOR -->
<script src="{{asset('js/jquery.form-validator.js')}}"></script>
    
<!-- SELECT STYLING -->
<script src="{{asset('js/jquery.selectBox.js')}}"></script>

<!-- CUSTOM SCRIPT -->
<script src="{{asset('js/theme.js')}}"></script>
<!-- SWEET ALERT -->
<script src="{{asset('dashboard/js/lib/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
@stack('scripts')
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script src="{{asset('js/app.js')}}"></script>

<!-- GOOGLE MAPS -->
<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=xxx&amp;language=en&amp;sensor=true"></script>-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>