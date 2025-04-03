
    <!-- Main Footer -->
    <footer class="main-footer style-two">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">

                    <!--Footer Column-->
                    <div class="footer-column col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure class="image"><a href="{{ asset('/home') }}"><img src="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" alt=""></a></figure>
                            </div>

                            <div class="widget-content">
                                <div class="text">
                                    <p>We give value to excellence and top class engineers, but in terms of accurate service.</p>
                                    
                                </div>

                                <ul class="contact-list">
                                    <li><i class="material-icons">phone</i> <a href="tel:{{ config('app.phone') }}"> {{ config('app.phone') }}</a></li>
                                    <li><i class="material-icons">email</i> <a href="mailto:{{ config('app.email') }}"> {{ config('app.email') }}</a></li>
                                    <li><i class="material-icons">place</i> {{ config('app.street') }} <br/>{{ config('app.city') }} , <br/> {{ config('app.state') }}  {{ config('app.zipcode') }}</li>
                                </ul>

                               
                                <ul class="social-icon-one">
                                     <!-- 
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    -->
                                    <li><a href="{{ config('app.linkedinurl') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget post-widget">
                            <h2 class="widget-title">Latest News</h2>
                            
                            @php

                            use Illuminate\Support\Facades\File;
                            /* storage_path assumes content in /sotrage folder(root app folder, then storage */
                            $articles = json_decode(File::get(storage_path('../resources/views/partials/menus/blogarticles.json')), true);
                            $articles_length = count($articles);
                            @endphp
                            @for($index=0; $index < $articles_length; $index++)
                            
                            <!--News Widget Block-->
                            <div class="news-widget-block">
                                <div class="widget-inner">
                                    <div class="image">
                                        <a href="#"><img src='{{$articles[$index]["image"]}}' alt='Image for {{$articles[$index]["title"]}}' /></a>
                                    </div>
                                    <h3><a href='{{$articles[$index]["url"]}}'>{{$articles[$index]["title"]}}</a></h3>
                                    <div class="post-date">{{ $articles[$index]["date"] }}</div>
                                </div>
                            </div>
                            @endfor

                            
                        </div>
                    </div>

                    <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <h2 class="widget-title">Our Services</h2>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    @include('partials.menus.serviceslisturls')
                                </ul>
                            </div>
                        </div>

                        <div class="footer-widget subscribe-widget">
                            <h2 class="widget-title">Subscribe</h2>
                            <div class="text">Subscribe to our newsletter to receive latest news on our services.</div>
                            <!--Subscribe Form-->
                            <div class="subscribe-form">
                                <form>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email Address " required>
                                        <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                                    </div>
                                </form>
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
            </div> 
        </div>
        
    </footer>
    <!-- End Main Footer -->