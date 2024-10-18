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
                <!-- Form Column 
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Keep in touch</span>
                            <h2>Support Team Always Ready <br>To help You</h2>
                            <div class="text">All or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!</div>
                        </div>

                        
                        <div class="contact-form style-two">
                            <div class="form-inner">
                                
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Your Name" required>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Your Email" required>
                                        </div>

                                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Your Phone" required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-four" type="submit" name="submit-form">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                -->
                <!-- Map Column -->
                <div class="map-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Location -->
                        <div class="location-info">
                            <h4 class="title">Location</h4>
                            <ul class="info-list">
                                <li>{{ config('app.street') }}, {{ config('app.city') }}, {{ config('app.state') }} {{ config('app.zipcode') }}</li>
                                <!-- <li>407 St John St Islington, London</li> -->
                                <!-- <li>116 Rue Saint-Denis, 75002 Paris</li>  -->
                            </ul>
                        </div>

                        <!-- Contact info -->
                        <!-- 

                            //config('app.myVarname')
                            'phone' => env('COMPANY_PHONE_NO'),
                            'email' => env('COMPANY_EMAIL'),
                            'street' => env('COMPANY_STREET'),
                            'city' => env('COMPANY_CITY'),
                            'state' => env('COMPANY_STATE'),
                            'zipcode' => env('COMPANY_ZIP_CODE'),


                        -->
                        <div class="contact-info">
                            <h4 class="title">Contact info</h4>
                            <ul class="info-list">
                                <li><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></li>
                                <li><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></li>
                                <!-- <li><a href="mailto:info@industar.com">contact@industar.com</a></li> -->
                            </ul>
                        </div>

                        <!-- Social Links 
                        <div class="social-links">
                            <ul class="social-icon">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="{{ config('app.linkedinurl') }}"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        -->

                        <!-- Social Outer 
                        <div class="map-outer">
                            <div class="map-canvas"
                                data-zoom="12"
                                data-lat="{{ config('app.latitude') }}"
                                data-lng="{{ config('app.longitude') }}"
                                data-type="roadmap"
                                data-hue="#ffc400"
                                data-title="{{ config('app.appname') }}"
                                data-icon-path="{{ asset('/images/icons/map-marker.png')}}"
                                data-content="{{ config('app.city') }} {{ config('app.zipcode') }} , US<br><a href='mailto:{{ config('app.email') }}'>{{ config('app.email') }}</a>">
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    

@endsection