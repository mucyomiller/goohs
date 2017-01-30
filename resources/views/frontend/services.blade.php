@extends('frontend.theme')
@section('content')
<div class="page-title page-title-services bg-pattern" data-bgcolor="2791AA">
    <div class="page-title-overlay">
        <div class="container">

            <h1>SERVICES</h1>
            <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>

        </div>
    </div>
</div>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            
            <ol class="breadcrumb">
                <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Services</li>
            </ol>
            
        </div>
    </div>
</div>

<div class="services-1" id="services">
    <div class="container">
        <div class="row">
            
            <p class="services-1-text">All our dental care services are provided at a clinic near you, with convenient hours, state-of-the-art facilities and highly trained and licensed Dentists and Dental Assistants to provide the care you and your family deserve.</p>
            
            <h3 class="services-1-title">We provide the full range of dental services</h3>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
                <div class="service-icon">
                    <i class="flaticon-people"></i>
                </div>
                <div class="service-title">
                    <h3>qualified doctors</h3>
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
                <div class="service-icon">
                    <i class="flaticon-medal"></i>
                </div>
                <div class="service-title">
                    <h3>certificates</h3>
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
                <div class="service-icon">
                    <i class="flaticon-dental-drill"></i>
                </div>
                <div class="service-title">
                    <h3>dental care</h3>
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service">
                <div class="service-icon">
                    <i class="flaticon-dental-chair-1"></i>
                </div>
                <div class="service-title">
                    <h3>qualified doctors</h3>
                </div>
                <div class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
            
        </div>
    </div>
</div>    
    
<div class="serv">
    <ul id="isotope-filter">
        <li><a class="active" data-filter="*">All services</a></li>
        <li><a data-filter=".dental">Dental services</a></li>
        <li><a data-filter=".diagnostic">Diagnostic services</a></li>
        <li><a data-filter=".rehabillitation">Rehabillitation services</a></li>
    </ul>
    <div class="container">
        <div class="row">
            
            <div class="serv-items" id="isotope-items">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item dental">
                    <div class="serv-item-image">
                        <img src="images/serv1.jpg" alt="" />
                    </div>
                    <div class="serv-item-text">
                        <h3>Tooth whitening</h3>
                        <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                        <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                        <div class="serv-item-button">
                            <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
                            <div class="serv-item-tag">Dental service</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item diagnostic">
                    <div class="serv-item-image">
                        <img src="images/serv2.jpg" alt="" />
                    </div>
                    <div class="serv-item-text">
                        <h3>Tooth cleaning</h3>
                        <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                        <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                        <div class="serv-item-button">
                            <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
                            <div class="serv-item-tag">Dental service</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-item isotope-item rehabillitation">
                    <div class="serv-item-image">
                        <img src="images/serv3.jpg" alt="" />
                    </div>
                    <div class="serv-item-text">
                        <h3>Oral exams</h3>
                        <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                        <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                        <div class="serv-item-button">
                            <a href="#" class="btn btn-primary-1 btn-sm">READ MORE</a>
                            <div class="serv-item-tag">Dental service</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <ul class="pagination">
              <li><a class="first" href="#"><i class="fa fa-angle-left"></i></a></li>
              <li><a class="active">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a class="last" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            
        </div>   
    </div>
</div>
@endsection