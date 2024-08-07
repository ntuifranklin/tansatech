@extends('contactview')


@section('seo')
<meta name="description" content="Discover the comprehensive range of renewable energy services offered by Tansa Tech. From solar panel installations to wind turbine maintenance, explore how we provide tailored solutions to meet your energy needs. Learn about our expertise in project development, consulting, and implementation, and how we can help you transition to sustainable energy solutions seamlessly.">
<meta name="keywords" content="energy, water, solutions, innovation, resource management, sustainable infrastructure, technology, expertise, progress, sustainability">
<meta property="og:title" content="Contact Us | {{ config('app.appname') }}">
<meta property="og:description" content="Empowering the energy and water industry with innovative solutions. From efficient resource management to sustainable infrastructure, we deliver cutting-edge technologies and expertise to drive forward progress and sustainability.">
@endsection

@section('pagecontent')
<!-- Services Section -->
<section class="services-section-four">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">Numbers</span>
                        <h2>Words a good consultant should live by!</h2>
                        <div class="text">
                            <h3>
                                "I keep six honest serving men
                                (They taught me all I knew);
                                Their names are <u>What</u> and
                                <u>Why</u> and 
                                <u>When</u> And 
                                <u>How</u> and 
                                <u>Where</u> and 
                                <u>Who</u>."
                                - Rudyard Kipling, <a href="http://amzn.to/1NElYSk">The Elephant's Child</a>
                            </h3>
                                
                        </div>
                    </div>

                    <div class="facts-couner">
                        <div class="row">
                            <!--Column-->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="icon flaticon-factory-2"></span></div>
                                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="25">0</span><sup>+</sup></div>
                                    <h4 class="counter-title">Years in Industry</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="icon flaticon-case"></span></div>
                                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="1316">0</span><sup>+</sup></div>
                                    <h4 class="counter-title">Completed Projects</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="icon flaticon-protect"></span></div>
                                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="90">0</span><sup>%</sup></div>
                                    <h4 class="counter-title">Customer Satisfaction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="image-box wow fadeInRight">
                    <figure class="image"><img src="{{ asset('/images/resource/image-4.jpg') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Video Section -->
<section class="video-section style-two" style="background-image: url(images/background/1.jpg);">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="title">working since 1991</span>
                        <h2>We Are Always at The Forefront of The Industrial Market</h2>
                    </div>
                    <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""> <span class="icon fa fa-play"></span>Watch our summarized <br>meeting video</a></div>
                </div>
            </div>

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box  wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image"><img src="{{ asset('/images/resource/man-img.png') }}" alt=""></figure>                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Section -->

<!-- Services Section -->
<section class="services-section style-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">Our Services</span>
            <h2>Perfect Solution for Industry</h2>

        </div>

        <div class="row">
            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/chemical-research"><img src="{{ asset('/images/resource/service-1.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-test"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/chemical-research">Water Treatment and Heat Transfer</a></h4>
                        <div class="text">
                            <ul>
                                <li>Industrial Water Treatment: Cooling towers</li>
                                <li>Water treatment for Oil and gas industries</li>
                                <li>Heat transfer analysis for commercial cooling</li>
                                <li>Desalination, Mechanical Vapor Recompression</li>
                                <li>Biofilters/Carbon filter research</li>
                            </ul>

                        </div>
                        <!-- <a href="/chemical-research" class="read-more">Read More</a>  -->
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/automotive-manufacturing"><img src="{{ asset('/images/resource/service-2.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-sedan"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/operational-technology">Operational Technology</a></h4>
                        <div class="text">
                            Welcome to Tansa Tech's Operational Technology (OT) page. 
                            Here, we delve into the advanced systems and processes that 
                            enhance the efficiency and reliability of our renewable energy 
                            solutions.
                            Our OT services integrate cutting-edge technologies to monitor, 
                            control, and optimize energy production and
                            distribution. 
                            From smart grids to automated control systems, 
                            discover how Tansa Tech leverages OT to drive innovation 
                            and sustainability in the energy sector.                      
                        </div>
                        <a href="/operational-technology" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/oil-and-gas"><img src="{{ asset('/images/resource/service-3.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-gas-station"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/oil-and-gas">Oil & Gas Engineering</a></h4>
                        <div class="text">Donec ultricies auctor risus, ac efficitur nibh efficitur gravida. Cras nulla lacus, suscipit quis ipsum sed, maximus porttitor diam.</div>
                        <a href="/oil-and-gas" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/agricultural-automation"><img src="{{ asset('/images/resource/service-4.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-plant"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/agricultural-automation">Agricultural Automation</a></h4>
                        <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                        <a href="/agricultural-automation" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/mechanical-engineering."><img src="{{ asset('/images/resource/service-5.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-robot-arm"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/mechanical-engineering.">Mechanical Engineering</a></h4>
                        <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                        <a href="/mechanical-engineering." class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/civil-cngineering"><img src="{{ asset('/images/resource/service-6.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-crane"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/civil-cngineering">Civil Engineering</a></h4>
                        <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                        <a href="/civil-cngineering" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Services Section -->
@endsection