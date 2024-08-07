 <!-- Main Footer -->
 <footer class="main-footer alternate">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <div class="big-column col-xl-2 col-lg-12 col-md-12">
                        <!--Footer Column-->
                        <div class="footer-column">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure class="image"><a href="{{ asset('/home') }}"><img width="180" height="49" src="{{ asset('/images/tansatech_first_logo.png') }}" alt=""></a></figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text">We give value to the excellence and <br>top class engineers, but in terms of<br> accurate service.</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        
                                        <li><a href="{{ config('app.linkedinurl') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column col-xl-10 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="footer-column col-lg-2 col-md-3 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="/home">Home</a></li>
                                            <!-- <li><a href="/about">About Us</a></li> -->
                                            <li><a href="/contact">Get A Quote</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-column col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Our Services</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                           
                                            @include('partials.menus.serviceslisturls')
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="footer-column col-lg-4 col-md-3 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Projects</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            
                                            @include('partials.menus.projectslistsurls')
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-column col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Info</h2>
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
                <div class="copyright-text">Designed by  <a href="https://ouodesignllc.com">ouo design llc</a></div>
            </div> 
        </div>
        
</footer>
<!-- End Main Footer -->