@extends('defaultview')


@section('pageTitle')

Testimonials | Tansa Tech LLC | Energy Consultancy

@endsection


@section('seo')
<meta name="description" content="Read what our clients have to say about their experience with Tansa Tech's renewable energy solutions. Explore firsthand testimonials and reviews highlighting our commitment to excellence, reliability, and customer satisfaction. Discover how we've helped businesses and organizations achieve their energy goals and make a positive impact on the environment.">
<meta name="keywords" content="Renewable energy testimonials, Client reviews, Customer feedback, Sustainable energy success stories, Solar panel testimonials, Wind energy reviews, Clean energy feedback">
<meta property="og:title" content="Testimonials | {{ config('app.appname') }}"><meta property="og:image" content="{{ asset('/images/tansa-tech-high-resolution-logo.png') }}">
<meta property="og:description" content="Read what our clients have to say about their experience with Tansa Tech's renewable energy solutions. Explore firsthand testimonials and reviews highlighting our commitment to excellence, reliability, and customer satisfaction. Discover how we've helped businesses and organizations achieve their energy goals and make a positive impact on the environment.">

@endsection

@section('pagecontent')
    

    <!-- Testimonial Section -->
    <section class="testimonial-section style-two">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="title">Happy Clients</span>
                <h2>Our Clients Reviews</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="thumb-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                        <div class="content-box">
                            <div class="info-box">
                                <h5 class="name">Billy Robinson</h5>
                                <span class="designation">CAD Experts</span>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star light"></span></div>
                            </div>
                            <div class="text">Nulla fringilla pellentesque egestas. Cras metus leo, tristique a purus vel, varius dignissim tortor. Sed iaculis pulvinar massa at luctus.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="thumb-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                        <div class="content-box">
                            <div class="info-box">
                                <h5 class="name">Billy Robinson</h5>
                                <span class="designation">CAD Experts</span>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star light"></span></div>
                            </div>
                            <div class="text">Nulla fringilla pellentesque egestas. Cras metus leo, tristique a purus vel, varius dignissim tortor. Sed iaculis pulvinar massa at luctus.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="thumb-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                        <div class="content-box">
                            <div class="info-box">
                                <h5 class="name">Billy Robinson</h5>
                                <span class="designation">CAD Experts</span>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star light"></span></div>
                            </div>
                            <div class="text">Nulla fringilla pellentesque egestas. Cras metus leo, tristique a purus vel, varius dignissim tortor. Sed iaculis pulvinar massa at luctus.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

@endsection