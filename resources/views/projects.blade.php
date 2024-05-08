@extends('projectsview')

@section('pageTitle')

Our Projects | Tansa Tech LLC | Energy Consultancy

@endsection

@section('seo')
<meta name="description" content="Explore the impressive portfolio of renewable energy projects undertaken by Tansa Tech. From solar farms to wind energy installations, discover how we're leading the way in sustainable energy solutions. Get insights into our successful projects, innovative technologies, and the positive impact we're making on the environment and communities.">
<meta name="keywords" content="energy, water, solutions, innovation, resource management, sustainable infrastructure, technology, expertise, progress, sustainability">
<meta property="og:title" content="Our Projects | {{ config('app.appname') }}">
<meta property="og:description" content="Explore the impressive portfolio of renewable energy projects undertaken by Tansa Tech. From solar farms to wind energy installations, discover how we're leading the way in sustainable energy solutions. Get insights into our successful projects, innovative technologies, and the positive impact we're making on the environment and communities.">
@endsection

@section('pagecontent')

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Our Projects</span>
                <h2>Latest Investment Projects</h2>
            </div>
            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
                        <li class="filter" data-role="button" data-filter=".agriculture">Agriculture</li>
                        <li class="filter" data-role="button" data-filter=".chemical">Chemical</li>
                        <li class="filter" data-role="button" data-filter=".mechanical">Mechanical</li>
                        <li class="filter" data-role="button" data-filter=".construction">Construction</li>
                        <li class="filter" data-role="button" data-filter=".oil-and-gas">Oil & Gas</li>
                    </ul>                     
                </div>

                <div class="items-container row">
                    <!-- Portfolio Block -->
                    <div class="project-block all masonry-item chemical oil-and-gas construction col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <h5><a href="project-detail.html">Wind Turbine Technology</a></h5>
                                    <span class="cat">Agriculture</span>
                                    <div class="link-box"><a href="project-detail.html" class="view-project">view Project <i class="la la-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Block -->
                    <div class="project-block all masonry-item agriculture oil-and-gas mechanical chemical col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <h5><a href="project-detail.html">Wind Turbine Technology</a></h5>
                                    <span class="cat">Agriculture</span>
                                    <div class="link-box"><a href="project-detail.html" class="view-project">view Project <i class="la la-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Block -->
                    <div class="project-block all masonry-item construction oil-and-gas mechanical col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <h5><a href="project-detail.html">Wind Turbine Technology</a></h5>
                                    <span class="cat">Agriculture</span>
                                    <div class="link-box"><a href="project-detail.html" class="view-project">view Project <i class="la la-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Block -->
                    <div class="project-block all masonry-item chemical construction oil-and-gas agriculture col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <h5><a href="project-detail.html">Wind Turbine Technology</a></h5>
                                    <span class="cat">Agriculture</span>
                                    <div class="link-box"><a href="project-detail.html" class="view-project">view Project <i class="la la-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Block -->
                    <div class="project-block all masonry-item power-energy mechanical chemical col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <h5><a href="project-detail.html">Wind Turbine Technology</a></h5>
                                    <span class="cat">Agriculture</span>
                                    <div class="link-box"><a href="project-detail.html" class="view-project">view Project <i class="la la-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Block -->
                    <div class="project-block all masonry-item agriculture mechanical construction material chemical col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <h5><a href="project-detail.html">Wind Turbine Technology</a></h5>
                                    <span class="cat">Agriculture</span>
                                    <div class="link-box"><a href="project-detail.html" class="view-project">view Project <i class="la la-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- Call to Action Two -->
    <section class="call-to-action-two style-two" style="background-image: url(images/background/11.jpg);">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="title-box">
                    <h2>If You Need Any Industrial Solution ... We Are Ready To Help You</h2>                
                </div>

                <div class="btn-box">
                    <a href="/contact" class="theme-btn btn-style-four"> Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Two -->



@endsection



