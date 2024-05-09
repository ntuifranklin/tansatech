@extends('defaultview')


@section('pageTitle')

About Us | Tansa Tech LLC | Energy Consultancy

@endsection


@section('seo')

<meta name="description" content="Discover the vision and values driving Tansa Tech, a leader in renewable energy solutions. Learn about our commitment to sustainability, innovation, and customer satisfaction. Explore our team's expertise in solar, wind, and clean energy technologies, and how we're shaping a greener future for generations to come.">
<meta name="keywords" content="Renewable energy, Sustainable energy, Solar power, Wind power, Energy efficiency, Green energy, Electricity provider, Energy solutions, Energy consulting, Power generation, Clean energy, Energy management">
<meta property="og:title" content="About Us | {{ config('app.appname') }}"><meta property="og:image" content="{{ asset('/images/tansa-tech-high-resolution-logo.png') }}">

@endsection

@section('pagecontent')
    <!-- About Section -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About {{ config('app.appname') }}</span>
                            <h2>We Have Built An Enviable Reputation</h2>
                        </div>

                        <div class="text">Quisque suscipit tortor volutpat metus dignissim vulputate. Proin fermentum sodales dolor, eu viverra ante volutpat et. Nulla sed eleifend dui, malesuada ornare ligula.</div>

                        <blockquote>
                            <span class="icon flaticon-left-quote"></span>
                            <p>Integer facilisis volutpat nisi, ut bibendum dolor lobortis sit amet. Vivamus bibendum dolor et feugiat elementum. Nullam non sem nec magna laoreet facilisis.</p>
                        </blockquote>

                        <div class="info-box">
                            <div class="sign-img"><img src="images/resource/signature.png" alt=""></div>
                            <div class="info">Johnny Jackson <span>- CEO & Founder</span></div>
                        </div>
                    </div>
                </div>

                 <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box wow fadeIn">
                            <figure class="image"><img src="images/resource/image-1.jpg" alt=""></figure>
                            <a href="https://www.youtube.com/watch?v=e_WOEL6F1YE" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                            <div class="caption-box">“ Industries is certified ISO 9001:2008 to ensure the <br>quality of all its products and services “</div>
                        </div>
                        <div class="text">Aliquam a ante ipsum. Fusce placerat ex vitae massa cursus, vel elementum lacus blandit. Nam aliquam sodales arcu, eu finibus metus imperdiet nec. Phasellus in laoreet elit. Curabitur lacinia venenatis sem sit amet condimentum.</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- What We Do -->
    <section class="what-we-do">
        <div class="outer-container clearfix">
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="title">What we do</span>
                        <h2>Best In The Industrial</h2>
                        <div class="text">Industar has 23+ years of experience with providing wide area of specialty services works listed below. A Company involved in servicing, maintenance and repairs.</div>
                    </div>

                    <!-- About Block -->
                    <div class="about-block">
                        <h3><span class="icon la la-bullseye"></span> Our Mission</h3>
                        <div class="text">Nulla condimentum mauris eget nisl luctus, eget fringilla justo gravida. Integer id est lacus. Cras quis ligula ut enim pretium viverra.</div>
                    </div>

                    <!-- About Block -->
                    <div class="about-block">
                        <h3><span class="icon la la-eye"></span> Our Vision</h3>
                        <div class="text">Nulla condimentum mauris eget nisl luctus, eget fringilla justo gravida. Integer id est lacus. Cras quis ligula ut enim pretium viverra.</div>
                    </div>
                </div>
            </div>

            <div class="image-column" style="background-image:url(images/resource/image-3.jpg);">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/image-3.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!--End What We Do -->

    <!-- History Section -->
    <section class="history-section">
        <div class="auto-container">
            <div class="row">
                <!-- History Column -->
                <div class="history-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Company</span>
                            <h2>Our History</h2>
                        </div>

                        <div class="history-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <span class="year">2019</span>
                                <h4><a href="about.html">Expand Manufacturing Business</a></h4>
                                <div class="text">Nullam tempor suscipit urna ac accumsan. Vivamus at lorem sed ligula gravida maximus. Pellentesque pretium metus quis tellus sollicitudin, at varius enim rhoncus.</div>
                            </div>
                        </div>

                        <div class="history-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <span class="year">2004</span>
                                <h4><a href="about.html">International Conference Awards</a></h4>
                                <div class="text">Nullam tempor suscipit urna ac accumsan. Vivamus at lorem sed ligula gravida maximus. Pellentesque pretium metus quis tellus sollicitudin, at varius enim rhoncus.</div>
                            </div>
                        </div>

                        <div class="history-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <span class="year">2019</span>
                                <h4><a href="about.html">Pre-foundation and Company Formation</a></h4>
                                <div class="text">Nullam tempor suscipit urna ac accumsan. Vivamus at lorem sed ligula gravida maximus. Pellentesque pretium metus quis tellus sollicitudin, at varius enim rhoncus.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skill Column -->
                <div class="skill-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight">
                        <!-- About Block -->
                        <div class="skill-block">
                            <div class="inner-box">
                                <div class="graph-outer">
                                    <input type="text" class="dial" data-fgColor="#fa7720" data-bgColor="#f2f3f5" data-width="215" data-height="215" data-linecap="normal"  value="75">
                                    <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="3000"></span>%</div>
                                </div>
                                <h3>Smart Technology</h3>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="skill-block">
                            <div class="inner-box">
                                <div class="graph-outer">
                                    <input type="text" class="dial" data-fgColor="#fa7720" data-bgColor="#f2f3f5" data-width="215" data-height="215" data-linecap="normal"  value="75">
                                    <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="3000"></span>%</div>
                                </div>
                                <h3>Smart Technology</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End History Section -->

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

    <!-- How We Work -->
    <section class="how-we-work">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">How We Work</span>
                <h2>Our Big Solutions</h2>
            </div>

            <div class="row">
                <!-- Accordion Column -->
                <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">We bring together the best people to the world? <div class="icon fa fa-caret-down"></div></div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Praesent auctor magna vitae massa fermentum, nec fermentum odio sodales. In hendrerit, diam id pretium condimentum, urna odio pulvinar sem, eget ultrices sapien dolor at mi. Fusce consequat magna vel lectus vulputate tincidunt..</div>
                                    </div>
                                </div>
                            </li> 

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Submit your sponsorship request easy way? <div class="icon fa fa-caret-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Praesent auctor magna vitae massa fermentum, nec fermentum odio sodales. In hendrerit, diam id pretium condimentum, urna odio pulvinar sem, eget ultrices sapien dolor at mi. Fusce consequat magna vel lectus vulputate tincidunt..</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What is the procedure to join with your company? <div class="icon fa fa-caret-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Praesent auctor magna vitae massa fermentum, nec fermentum odio sodales. In hendrerit, diam id pretium condimentum, urna odio pulvinar sem, eget ultrices sapien dolor at mi. Fusce consequat magna vel lectus vulputate tincidunt..</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="skill-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Skills-->
                        <div class="skills">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><span class="icon la la-cubes"></span> Production</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="80">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><span class="icon la la-cogs"></span> Technology</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="70">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="70"></div></div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><span class="icon la la-smile-o"></span> </div>
                                    <div class="skill-title">Customer Satisfaction</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="90">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><span class="icon la la-clock-o"></span> Service on Time</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="60">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="60"></div></div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><span class="icon la la-headphones"></span> Maintainance Service</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="100">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End How We Work -->

    <!-- Clients Section -->
    <section class="clients-section no-pd-top">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Contact Info Section -->
    <section class="contact-info-section" style="background-image: url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Contact Info BLock -->
                <div class="contact-info-block col-lg-4 col-md-12 wow fadeInUp">
                    <span class="icon la la-phone"></span>
                    <h4>Have a Question? Call Us Now</h4>
                    <ul class="info-list">
                        <li>Office 1: <a href="tel:001-845-28386">(001)-845-28386</a></li>
                        <li>Office 2: <a href="tel:001-845-28386">(001)-845-28883</a></li>
                    </ul>
                    <a href="contact.html" class="link">Contact Us</a>
                </div>

                <!-- Contact Info BLock -->
                <div class="contact-info-block col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                    <span class="icon la la-envelope"></span>
                    <h4>Need Support? Drop Us an Email</h4>
                    <ul class="info-list">
                        <li><a href="mailto:info@industar.com">info@industar.com</a></li>
                        <li><a href="mailto:support@industar.com">Support@industar.com</a></li>
                    </ul>
                    <a href="contact.html" class="link">Fill Our Form</a>
                </div>

                <!-- Contact Info BLock -->
                <div class="contact-info-block col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="800ms">
                    <span class="icon la la-clock-o"></span>
                    <h4>We are Open On</h4>
                    <ul class="info-list">
                        <li>Office 1: <a href="tel:001-845-28386">(001)-845-28386</a></li>
                        <li>Office 2: <a href="tel:001-845-28386">(001)-845-28883</a></li>
                    </ul>
                    <a href="contact.html" class="link">Fill Our Form</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info Section -->
@endsection