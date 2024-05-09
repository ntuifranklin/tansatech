@extends('defaultview')

@section('pageTitle')

Home | Tansa Tech LLC | Energy Consultancy

@endsection


@section('seo')

<meta content="Empowering the energy and water industry with innovative solutions. From efficient resource management to sustainable infrastructure, we deliver cutting-edge technologies and expertise to drive forward progress and sustainability." name="description">
<meta name="keywords" content="renewable energy, water management, conservation, sustainable development, clean technology, environmental solutions, smart grid, wastewater treatment, green infrastructure, energy efficiency, sustainable practices, eco-friendly solutions, climate change mitigation, renewable resources, water purification">
<meta property="og:title" content="Contact Us | {{ config('app.appname') }}">
<meta property="og:description" content="Empowering the energy and water industry with innovative solutions. From efficient resource management to sustainable infrastructure, we deliver cutting-edge technologies and expertise to drive forward progress and sustainability.">

@endsection

@section('pagecontent')

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1681" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('/images/main-slider/4.jpg') }}">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('/images/main-slider/1.jpg') }}">
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['650','650','650','450']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-135','-135','-135','-135']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <span class="title">Tansa Tech </span>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['650','650','650','460']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-55','-55','-55','-55']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Provide the <strong>Best Solution</strong> <br>for all Industries</h2>
                        </div>  
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['650','750','750','450']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['50','50','50','50']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">With over 25 years of experience & the company’s factory has a production’s capacity of 86,000 Metric Tons. Meet all customers'</div>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['650','650','650','450']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['140','140','140','150']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box clearfix">
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-one">Learn More</a>
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-two">Our Services</a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 1 -->
                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1682" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('/images/main-slider/4.jpg') }}">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('/images/main-slider/1-2.jpg') }}">
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['600','650','650','450']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-135','-135','-135','-135']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <span class="title">Tansa Tech</span>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['600','650','650','450']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-55','-55','-55','-55']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Leading Solution for all Factory Business</h2>
                        </div>  
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['600','750','750','450']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['50','50','50','50']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">With over 25 years of experience & the company’s factory has a production’s capacity of 86,000 Metric Tons. Meet all customers'</div>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['600','650','650','450']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['140','140','140','150']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box clearfix">
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-one">Learn More</a>
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-two">Our Services</a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 1 -->
                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1683" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('/images/main-slider/4.jpg') }}">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('/images/main-slider/1-3.jpg') }}">

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','650','650','450']"
                        data-whitespace="normal"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-55','-55','-55','-55']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['center','center','center','center']"
                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Leading Solution for all Factory Business</h2>
                        </div>  
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['590','590','750','450']"
                        data-whitespace="normal"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['50','50','50','50']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['center','center','center','center']"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">With over 25 years of experience & the company’s factory has a production’s capacity of 86,000 Metric Tons. Meet all customers'</div>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['600','650','650','450']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['140','140','140','150']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['center','center','center','center']"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box clearfix">
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-one">Learn More</a>
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-two">Our Services</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
	
    <!-- Welcome Banner -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Welcome to <span>Tansa Tech</span></h2>
                    </div>
                </div>
                <div class="text-column col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">We have facility to produce advance work various industrial applications based on specially developed technol-ogy. We are also ready to developement by according to users changing needs. Infrastructure related installation projects. General repair & industrial and machinery.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Banner -->
	
    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Tansa Tech</span>
                            <h2>We Have Built an Enviable Reputation</h2>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="icon flaticon-checklist"></span></div>
                                <h4><a href="{{ asset('/services-detail.html') }}">Markets and Product</a></h4>
                                <div class="text">Our team offers the most up-to-date, sustainable custom manufacturing solutions. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="icon flaticon-industry"></span></div>
                                <h4><a href="{{ asset('/services-detail.html') }}">Solutions and Satisfaction Value</a></h4>
                                <div class="text">We partner with over 360 amazing ut projects worldwide, and have given over $280 million</div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="icon flaticon-conveyor-3"></span></div>
                                <h4><a href="/services">Technology-savvy</a></h4>
                                <div class="text">We only source materials from tried and trusted suppliers that meet our exacting standards of quality control.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image"><img src="{{ asset('/images/resource/image-1.jpg') }}" alt=""></figure> 
                            <a href="{{ config('app.youtubeurl') }}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                        </div>
                        <div class="text">“ Industries is certified ISO 9001:2008 to ensure the quality of all its products and services Integer facilisis volutpat nisi, ut bibendum dolor lobortis sit amet. Vivamus bibendum dolor et feugiat elementum. Nullam non sem nec magna laoreet facilisis.</div>
                        <div class="info-box">
                            <div class="sign-img"><img src="{{ asset('/images/resource/signature.png') }}" alt=""></div>
                            <div class="info">Johnny Jackson <span>- CEO & Founder</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Services Section -->
    <section class="services-section">
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
                            <figure class="image"><a href="{{ asset('/chemical-research.html') }}"><img src="{{ asset('/images/resource/service-1.jpg') }}" alt=""></a></figure>
                            <span class="icon flaticon-test"></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ asset('/chemical-research.html') }}">Chemical Research</a></h4>
                            <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                            <a href="{{ asset('/chemical-research.html') }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ asset('/automotive-manufacturing.html') }}"><img src="{{ asset('/images/resource/service-2.jpg') }}" alt=""></a></figure>
                            <span class="icon flaticon-sedan"></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ asset('/automotive-manufacturing.html') }}">Automotive Manufacturing</a></h4>
                            <div class="text">Nulla fringilla pellentesque egestas. Cras metus leo, tristique a purus vel, varius dignissim tortor. Sed iaculis pulvinar massa at luctus.</div>
                            <a href="{{ asset('/automotive-manufacturing.html') }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ asset('/oil-and-gas.html') }}"><img src="{{ asset('/images/resource/service-3.jpg') }}" alt=""></a></figure>
                            <span class="icon flaticon-gas-station"></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ asset('/oil-and-gas.html') }}">Oil & Gas Engineering</a></h4>
                            <div class="text">Donec ultricies auctor risus, ac efficitur nibh efficitur gravida. Cras nulla lacus, suscipit quis ipsum sed, maximus porttitor diam.</div>
                            <a href="{{ asset('/oil-and-gas.html') }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ asset('/agricultural-automation.html') }}"><img src="{{ asset('/images/resource/service-4.jpg') }}" alt=""></a></figure>
                            <span class="icon flaticon-plant"></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ asset('/agricultural-automation.html') }}">Agricultural Automation</a></h4>
                            <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                            <a href="{{ asset('/agricultural-automation.html') }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ asset('/mechanical-engineering.html') }}"><img src="{{ asset('/images/resource/service-5.jpg') }}" alt=""></a></figure>
                            <span class="icon flaticon-robot-arm"></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ asset('/mechanical-engineering.html') }}">Mechanical Engineering</a></h4>
                            <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                            <a href="{{ asset('/mechanical-engineering.html') }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ asset('/civil-cngineering.html') }}"><img src="{{ asset('/images/resource/service-6.jpg') }}" alt=""></a></figure>
                            <span class="icon flaticon-crane"></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ asset('/civil-cngineering.html') }}">Civil Engineering</a></h4>
                            <div class="text">Vivamus finibus sed lacus a posuere. Fusce nec tempus mi, a placerat lacus. Quisque auctor eros at elementum sagittis.</div>
                            <a href="{{ asset('/civil-cngineering.html') }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

     <!--Fluid Section One-->
    <section class="fluid-section-one">
        <div class="image-layer" style="background-image: url({{ url('images/resource/image-2.jpg') }});"></div>
        <div class="outer-container clearfix">
            <div class="auto-container">
                <div class="row">
                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Request A Quote</h2>
                            <div class="text">Integer vehicula risus est. Nulla in sapien pretium, gravida odio non, ullamcorper nibh. Proin nec diam ut nunc ullamcorper fermentum eget eu neque.</div>
                            <div class="contact-form">
                                <form>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="username" placeholder="Full Name" required="">
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="phone" placeholder="Phone Number" required="">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>Business Type</option>
                                                <option>Business Type</option>
                                                <option>Business Type</option>
                                                <option>Business Type</option>
                                                <option>Business Type</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button class="theme-btn btn-style-four" type="submit" name="Submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Career Column-->
                    <div class="career-column col-lg-4 col-md-12 col-sm-12" >
                        <div class="image-layer" style="background-image: url( {{ url('/images/resource/image-2.jpg') }});"></div>
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h2>Career & Jobs</h2>
                            <div class="text">Working at Real Factory means being able to commit resolutely to one thing and growing from it. As an individual and as a whole – in a family enterprise that creates fascinating products around the world. Once you experience it, you’ll want to stay.</div>
                            <a href="#" class="theme-btn btn-style-three read-more">See More Job Opportunities</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Fluid Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <!-- Our Factory -->
            <div class="our-factory">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">Why Choose Us</span>
                                <h2><span>Check</span> Visit Our Factory</h2>
                            </div>
                            <div class="text">
                                <p>Tansa Tech is proud to deliver products manufactured to the highest possible standards, and maintains an ongoing commitment to Quality in everything we do.</p>
                                <p>Etiam quis commodo mi, sit amet eleifend turpis. Integer fermentum convallis laoreet. Aliquam vitae dictum diam. Donec ac enim convallis, fermentum neque vitae, posuere justo. Pellentesque vel aliquet lorem. Suspendisse potenti. Mauris quam nibh, eleifend in nulla eget, sollicitudin.</p>
                            </div>
                            <div class="btn-box">
                                <a href="{{ asset('/about') }}" class="theme-btn btn-style-three">View More</a>
                            </div>
                        </div>
                    </div>    
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box wow fadeIn">
                            <figure class="image"><a href="{{ asset('/images/resource/our-company.jpg') }}" class="lightbox-image"><img src="{{ asset('/images/resource/our-company.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Skill -->
            <div class="our-skill">
                <div class="row">
                    <div class="content-column order-2 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2><span>Our Skill</span> What We Achieved</h2>
                            </div>
                            <div class="text">Etiam quis commodo mi, sit amet eleifend turpis. Integer fermentum convallis laoreet. Aliquam vitae dictum diam. Donec ac enim convallis, fermentum neque vitae, posuere justo.</div>

                            <div class="facts-couner">
                                <div class="row">
                                    <!--Column-->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                        <div class="inner">
                                            <div class="icon-box"><span class="icon flaticon-worker"></span></div>
                                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="3638">0</span></div>
                                            <h4 class="counter-title">Engineers</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                                        <div class="inner">
                                            <div class="icon-box"><span class="icon flaticon-factory-2"></span></div>
                                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="326">0</span></div>
                                            <h4 class="counter-title">Rranch</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                                        <div class="inner">
                                            <div class="icon-box"><span class="icon flaticon-gift"></span></div>
                                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="628">0</span></div>
                                            <h4 class="counter-title">Shipped</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                                        <div class="inner">
                                            <div class="icon-box"><span class="icon flaticon-case"></span></div>
                                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="2328">0</span></div>
                                            <h4 class="counter-title">Projects</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box wow fadeIn">
                            <figure class="image"><a href="{{ asset('/images/resource/our-skill.jpg') }}" class="lightbox-image"><img src="{{ asset('/images/resource/our-skill.jpg') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose Us -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Happy Clients</span>
                <h2>Our Clients Reviews</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="thumb-box"><img src="{{ asset('/images/resource/thumb-1.jpg') }}" alt=""></div>
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
                        <div class="thumb-box"><img src="{{ asset('/images/resource/thumb-1.jpg') }}" alt=""></div>
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
                        <div class="thumb-box"><img src="{{ asset('/images/resource/thumb-1.jpg') }}" alt=""></div>
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

     <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Blog & News</span>
                <h2>Industry Updates</h2>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/images/resource/news-1.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li>March 16, 2019</li>
                                <li>By <a href="{{ asset('/blog-detail.html') }}">Gonzales</a></li>
                            </ul>
                            <h5><a href="{{ asset('/blog-detail.html') }}">We are Best For Any Industrial And Business Solution.</a></h5>
                            <div class="text">Duis velit sapien, fringilla quis libero vitae, sollicitudin sollicitudin erat. Nulla in sapien pretium, gravida odio non.</div>
                            <div class="link-box"><a href="{{ asset('/blog-detail.html') }}">Read more <i class="la la-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/images/resource/news-2.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li>February 23, 2019</li>
                                <li>By <a href="{{ asset('/blog-detail.html') }}">Gonzales</a></li>
                            </ul>
                            <h5><a href="{{ asset('/blog-detail.html') }}">Design and Advanced Materials As a Driver of Innovation.</a></h5>
                            <div class="text">Duis velit sapien, fringilla quis libero vitae, sollicitudin sollicitudin erat. Nulla in sapien pretium, gravida odio non.</div>
                            <div class="link-box"><a href="{{ asset('/blog-detail.html') }}">Read more <i class="la la-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <!-- News Block -->
                <div class="news-list col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <!-- List Item -->
                        <div class="list-item">
                            <ul class="post-info">
                                <li>January 18, 2019</li>
                                <li>By <a href="{{ asset('/blog-detail.html') }}">Gonzales</a></li>
                            </ul>
                            <h5><a href="{{ asset('/blog-detail.html') }}">Latest Technology Upgrades Help Increase Quality and Productivity</a></h5>
                            <div class="comments"><i class="material-icons">chat_bubble</i> Comment: 0</div>
                        </div>

                        <!-- List Item -->
                        <div class="list-item">
                            <ul class="post-info">
                                <li>December 26, 2018</li>
                                <li>By <a href="{{ asset('/blog-detail.html') }}">Gonzales</a></li>
                            </ul>
                            <h5><a href="{{ asset('/blog-detail.html') }}">Design and Advanced Materials As a Driver of Innovation</a></h5>
                            <span class="comments"><i class="material-icons">chat_bubble</i>Comment: 0</span>
                        </div>

                        <!-- List Item -->
                        <div class="list-item">
                            <ul class="post-info">
                                <li>November 08, 2018</li>
                                <li>By <a href="{{ asset('/blog-detail.html') }}">Gonzales</a></li>
                            </ul>
                            <h5><a href="{{ asset('/blog-detail.html') }}">Design and Advanced Materials As a Driver of Innovation</a></h5>
                            <span class="comments"><i class="material-icons">chat_bubble</i>Comment: 0</span>
                        </div>

                    </div>
                    <div class="btn-box"><a href="/#" class="theme-btn btn-style-one">View All Posts</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Video Section -->
    <section class="video-section" style="background-image: url( {{ url('/images/background/1.jpg') }} );">
        <div class="auto-container wow fadeInLeft">
            <div class="sec-title light">
                <span class="title">working since 2014</span>
                <h2>We Are Always at The Forefront of The Industrial Market</h2>
            </div>
            <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""> <span class="icon fa fa-play"></span>Watch our summarized <br>meeting video</a></div>
        </div>
    </section>
    <!-- Video Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('/images/clients/1.png') }}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('/images/clients/2.png') }}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('/images/clients/3.png') }}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('/images/clients/4.png') }}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('/images/clients/5.png') }}" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url({{ url('images/background/2.jpg') }});">
        <div class="auto-container">
            <div class="content-box wow fadeIn">
                <h2>Get a Solutions for All <span>Industries</span></h2>
                <div class="text">We provide innovative product solutions for sustainable progress. Our professional team works to increase productivity and cost effectiveness on the market.</div>
                <div class="btn-box"><a href="{{ asset('/contact') }}" class="theme-btn btn-style-one">Contact Us</a></div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->


@endsection