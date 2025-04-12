 <!-- Main Footer -->
 <footer class="main-footer alternate">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <div class="big-column col-xl-3 col-lg-12 col-md-12">
                        <!--Footer Column-->
                        <div class="footer-column">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure class="image">
                                        <a href="{{ asset('/home') }}">
                                            <img width="90" height="90" src="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" alt="">
                                        </a>
                                        </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text">We give value to excellence and <br>top class engineers, but in terms of<br> accurate service.</div>
                                     
                                    <ul class="social-icon-one">
                                        
                                        <li><a href="{{ config('app.facebookurl') }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <!-- 
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        -->
                                        <li><a href="{{ config('app.linkedinurl') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <figure class="image">
                                                <img width="90" height="90" src="{{ asset('/images/sba_certified_logo.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-7">
                                            <figure class="image">
                                                <img width="135" height="225" src="{{ asset('/images/nmsdc_mbe_certified.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column col-xl-9 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="footer-column col-xl-1 col-md-12 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="/home">Home</a></li>
                                            <li><a href="/career">Careers</a></li>
                                            <li><a href="/contact">Get A Quote</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                           
                                           
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="footer-column col-xl-2 col-md-12 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Our Services</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                           
                                            @include('partials.menus.serviceslisturls')
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                                
                            <div class="footer-column col-xl-2 col-md-12 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Consulting</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            
                                            @include('partials.menus.consultinglist')

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="footer-column col-xl-2 col-md-12 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Featured Work</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            
                                            @include('partials.menus.featuredworklistsurls')

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div class="footer-column col-xl-5 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6">
                                            
                                        <div class="footer-widget contact-widget">
                                            <h2 class="widget-title">Philadelphia</h2>  
                                                <div class="widget-content">
                                                    <ul class="contact-list">
                                                        
                                                        <li><i class="material-icons">place</i> {{ config('app.street') }} <br/>{{ config('app.city') }} , <br/> {{ config('app.state') }}  {{ config('app.zipcode') }}</li>
                                                        <li><i class="material-icons">query_builder</i> Mon - Fri: 8am - 6pm <!-- <br> Sat - Sun: 9am - 3pm --> </li>
                                                        <li><i class="material-icons">phone</i> <a href="tel:{{ config('app.phone') }}"> {{ config('app.phone') }}</a></li>
                                                        <li><i class="material-icons">email</i> <a href="mailto:{{ config('app.email') }}"> {{ config('app.email') }}</a></li>
                                                    </ul>
                                                </div>
                                        </div>

                                    </div>
                                    
                                    <div class="col-md-6">                                            
                                            <div class="footer-widget contact-widget">
                                                <h2 class="widget-title">Washington DC</h2>
                                                <div class="widget-content">
                                                    <ul class="contact-list">
                                                        
                                                        <li><i class="material-icons">place</i> {{ config('app.street2') }} <br/>{{ config('app.city2') }} , <br/> {{ config('app.state2') }}  {{ config('app.zipcode2') }}</li>
                                                        <li><i class="material-icons">query_builder</i> Mon - Fri: 8am - 6pm <!-- <br> Sat - Sun: 9am - 3pm --> </li>
                                                        <li><i class="material-icons">phone</i> <a href="tel:{{ config('app.phone') }}"> {{ config('app.phone2') }}</a></li>
                                                        <li><i class="material-icons">email</i> <a href="mailto:{{ config('app.email') }}"> {{ config('app.email') }}</a></li>
                                                    </ul>
                                                </div>                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    Copyright &copy; 2014 - {{ date('Y')}} 
                    <a href="./">{{ config('app.appname') }} </a>. 
                    All Right Reserved
                </div>
                <div class="copyright-text">Designed by  <a href="{{ config('app.dev_agency') }}">developer</a></div>
            </div> 
        </div>
        
</footer>
<!-- End Main Footer -->