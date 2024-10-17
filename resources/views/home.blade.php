@extends('defaultview')

@section('pageTitle')
Home 
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

                        <img width="1920" height="745" alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('/images/tansatech_first_logo.png')}}">
                        
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
                            <span class="title"> {{ config('app.appname') }} </span>
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
                        <h2>Welcome to <span>{{ config('app.appname') }}</span></h2>
                    </div>
                </div>
                <div class="text-column col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">We have the facility to produce advance work on various industrial applications based on specifically developed technology. 
                            We are also ready for the developement according to users changing needs. 
                            Infrastructure related installation projects. General repair & industrial and machinery.
                        </div>
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
                            <span class="title">About {{ config('app.appname') }}</span>
                            <h2>We Have Built an Enviable Reputation</h2>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="icon flaticon-checklist"></span></div>
                                <h4><a href="{{ asset('/services') }}">Markets and Product</a></h4>
                                <div class="text">Our team offers the most up-to-date, sustainable custom manufacturing solutions. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="icon flaticon-industry"></span></div>
                                <h4><a href="/services">Solutions and Satisfaction Value</a></h4>
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
                            <figure class="image"><img src="{{ asset('/images/iso_9001_2029_youtube_thumbnail.jpg') }}" alt=""></figure> 
                            <a href="{{ config('app.youtubeurl') }}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                        </div>
                        <div class="text">
                            {{config('app.appname')}}
                            proudly announces its certification to ISO 9001:2019, 
                            demonstrating our unwavering commitment to quality management and continuous improvement. 
                            This prestigious certification reflects our dedication to delivering exceptional products and services that meet the highest standards of excellence and customer satisfaction. 
                            By adhering to the rigorous requirements of ISO 9001:2019, we ensure consistent quality across all our operations, 
                            driving innovation and efficiency in every project we undertake. 
                            At Tansa Tech, quality is not just a goal; it is an integral part of our corporate ethos.

                        </div>
                        <!-- 
                        <div class="info-box">
                            <div class="sign-img"><img src="{{ asset('/images/resource/signature.png') }}" alt=""></div>
                            <div class="info">Johnny Jackson <span>- CEO & Founder</span></div>
                        </div>
                        -->
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
                        <figure class="image">
                            <a href="{{ $link }}">
                                <img src="{{ $service_data[2] }}" alt="">
                            </a>
                        </figure>
                        <span class="icon flaticon-test"></span>
                    </div>
                    <div class="lower-content">
                        <h4><a href="/{{ $link }}">{{$service_data[0]}}</a></h4>
                        <div class="text">{{$service_data[1]}}.</div>
                        <a href="/{{ $link }}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

                
            </div>
        </div>
    </section>
    <!--End Services Section -->

     


@endsection