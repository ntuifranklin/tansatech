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
            
            @php

            use Illuminate\Support\Facades\File;
            /* storage_path assumes content in /sotrage folder(root app folder, then storage */
            $services = json_decode(File::get(storage_path('../resources/views/partials/menus/servicesurls.json')), true);
            @endphp

            @foreach($services as $link => $service_data)                
            
            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/{{ $link }}"><img src="{{ asset('/images/resource/service-1.jpg') }}" alt=""></a></figure>
                        <span class="icon flaticon-test"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/{{ $link }}">{{$service_data[0]}}</a></h4>
                        <div class="text">
                            {{$service_data[1]}}                           

                        </div>
                        <!-- <a href="/chemical-research" class="read-more">Read More</a>  -->
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
<!--End Services Section -->
@endsection