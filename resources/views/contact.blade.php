@extends('contactview')

@section('pageTitle')

Contact Us 

@endsection

@section('seo')
<meta name="description" content="Connect with Tansa Tech's knowledgeable team for inquiries, collaborations, or consultations regarding renewable energy solutions. Reach out to us today to discuss your project requirements, schedule a meeting, or learn more about our services. We're here to provide expert guidance and support as you embark on your journey towards a sustainable future.">
<meta name="keywords" content="energy, water, solutions, innovation, resource management, sustainable infrastructure, technology, expertise, progress, sustainability">
<meta property="og:title" content="Contact Us | {{ config('app.appname') }}">
<meta property="og:description" content="Connect with Tansa Tech's knowledgeable team for inquiries, collaborations, or consultations regarding renewable energy solutions. Reach out to us today to discuss your project requirements, schedule a meeting, or learn more about our services. We're here to provide expert guidance and support as you embark on your journey towards a sustainable future.">
@endsection

@section('pagecontent')

     <!--Page Title-->
     <section class="page-banner" style="background-image:url({{ asset('/images/TansaTech_Moto_Good.png')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/"><i class="la la-home"></i>Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            
            <div class="row">
                <!-- Map Column -->
                <div class="map-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Location -->
                                <div class="location-info">
                                    <h4 class="title">Philadelphia</h4>
                                    <ul class="info-list">
                                        <li>{{ config('app.street') }}</li>                                        
                                        <li>{{ config('app.city') }}</li>                                      
                                        <li>{{ config('app.state') }} {{ config('app.zipcode') }}</li>
                                        <li>Phone: <a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></li>
                                        <li>Email: <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></li>
                                    </ul>
                                </div>
                                <!-- End Location -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Location -->
                                <div class="location-info">
                                    <h4 class="title">Washington DC:</h4>
                                    <ul class="info-list">
                                        <li>{{ config('app.street2') }}</li>                                        
                                        <li>{{ config('app.city2') }}</li>                                      
                                        <li>{{ config('app.state2') }} {{ config('app.zipcode2') }}</li> 
                                        <li>Phone: <a href="tel:{{ config('app.phone') }}">{{ config('app.phone2') }}</a></li>    
                                        <li>Email: <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></li>                               
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    
                                <div class="map-outer">
                                    <div class="map-canvas"
                                        data-zoom="12"
                                        data-lat="{{ config('app.latitude') }}"
                                        data-lng="{{ config('app.longitude') }}"
                                        data-type="roadmap"
                                        data-hue="#ffc400"
                                        data-title="{{ config('app.appname') }}"
                                        data-icon-path="{{ asset('/images/icons/map-marker.png')}}"
                                        data-content="{{ config('app.city') }} {{ config('app.state') }}, {{ config('app.zipcode') }}, US<br><a href='mailto:{{ config('app.email') }}'>{{ config('app.email') }}</a>">
                                    </div>
                                </div> 
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    
                                <div class="map-outer">
                                    <div class="map-canvas"
                                        data-zoom="12"
                                        data-lat="{{ config('app.latitude2') }}"
                                        data-lng="{{ config('app.longitude2') }}"
                                        data-type="roadmap"
                                        data-hue="#ffc400"
                                        data-title="{{ config('app.appname') }}"
                                        data-icon-path="{{ asset('/images/icons/map-marker.png')}}"
                                        data-content="{{ config('app.city2') }} {{ config('app.state2') }}, {{ config('app.zipcode2') }}, US<br><a href='mailto:{{ config('app.email') }}'>{{ config('app.email') }}</a>">
                                    </div>
                                </div> 
                            </div>
                        </div>           
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    

@endsection