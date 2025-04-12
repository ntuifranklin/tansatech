@extends('servicesdefaultview')

@section('pageTitle')
Careers 
@endsection


@section('seo')
<meta name="keywords" content="Tansa Tech careers, AI jobs, machine learning careers, energy sector jobs, utilities technology jobs, software engineering roles, tech jobs in oil and gas, remote tech jobs, AI for energy, work at Tansa Tech, predictive maintenance jobs, sustainability tech jobs, data science in energy, job openings at Tansa Tech">
<meta name="description" content="Explore career opportunities at Tansa Tech, where AI meets the energy sector. Join a forward-thinking team solving real-world challenges in power generation, oil & gas, and utilities. Discover open roles in software engineering, machine learning, and sustainability tech. Work remotely, grow your skills, and make a meaningful impact.">
<meta property="og:title" content="Careers at Tansa Tech | Join Our Team of AI Innovators">
<meta property="og:description" content="Tansa Tech is hiring! Join a remote-first team using AI to transform energy, oil & gas, and utility industries. Explore software engineering and machine learning roles today.">
@endsection

@section('pagecontent')

<!--Sidebar Page Container-->
<div class="sidebar-page-container no-pd-bottom">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Careers Content-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="images-box row">
                        <div class="column col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                            <figure class="image wow fadeIn">
                                <img src="/images/careers-teamwork.jpg" alt="Tansa Tech Careers - Teamwork and Innovation">
                            </figure>
                        </div>
                    </div>

                    <div class="content-box">
                        <h2>Careers at Tansa Tech</h2>
                        <p>
                            At Tansa Tech, we’re not just building software—we’re building the future of energy and utilities using Artificial Intelligence and data-driven insights. Join a team of thinkers, builders, and innovators reshaping how the world consumes and distributes energy.
                        </p>

                        <!-- Service Features -->
                        <div class="service-features">
                            <h4 class="title">Why Work With Us?</h4>
                            <div class="row">
                                <div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <div class="hexagon"></div>
                                            <span class="icon flaticon-creative"></span>
                                        </div>
                                        <h4>Innovative Technology</h4>
                                        <p>
                                            Work with cutting-edge AI models and scalable cloud infrastructure transforming energy, oil & gas, and utilities.
                                        </p>
                                    </div>
                                </div>

                                <div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <div class="hexagon"></div>
                                            <span class="icon flaticon-home-1"></span>
                                        </div>
                                        <h4>Remote First Culture</h4>
                                        <p>
                                            Work from anywhere. Our remote-first approach supports work-life balance while keeping you connected to a global team.
                                        </p>
                                    </div>
                                </div>

                                <div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <div class="hexagon"></div>
                                            <span class="icon flaticon-group"></span>
                                        </div>
                                        <h4>Team Collaboration</h4>
                                        <p>
                                            Be part of a highly collaborative environment where everyone's ideas matter—from interns to executives.
                                        </p>
                                    </div>
                                </div>

                                <div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <div class="hexagon"></div>
                                            <span class="icon flaticon-growth"></span>
                                        </div>
                                        <h4>Professional Growth</h4>
                                        <p>
                                            Learn on the job, grow with mentorship, and access a learning budget to expand your technical and leadership skills.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Two Column Section -->
                        <div class="two-column">
                            <h4 class="title">Current Openings</h4>
                            <div class="row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <figure class="image">
                                        <img src="/images/job-opening-software-engineer.jpg" alt="Open Roles at Tansa Tech">
                                    </figure>
                                    
                                    <p>
                                        <a href="/jobs">job listings page</a> .
                                    </p>
                                </div>
                                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                                    <ul class="list-style-two">
                                        <li><strong>Software Engineer – AI Integration</strong><br>
                                            Work on integrating AI pipelines with backend platforms for the energy sector.
                                        </li>
                                        <li><strong>DevOps Engineer</strong><br>
                                            Build CI/CD pipelines, secure cloud deployments, and automate infrastructure.
                                        </li>
                                        <li><strong>Machine Learning Engineer</strong><br>
                                            Research and implement predictive models for power systems and failure analysis.
                                        </li>
                                        <li><strong>Frontend Engineer (React)</strong><br>
                                            Build interactive dashboards and visualizations for energy clients.
                                        </li>
                                    </ul>
                                    <p>
                                        To apply, visit our <a href="/jobs">job listings page</a> or send your resume to <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs for Work Culture & Values -->
                        <div class="product-info-tabs">
                            <div class="prod-tabs tabs-box">
                                <h2>What It’s Like to Work at Tansa Tech</h2>
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#remote-culture" class="tab-btn active-btn">Remote Culture</li>
                                    <li data-tab="#our-values" class="tab-btn">Our Values</li>
                                    <li data-tab="#employee-voices" class="tab-btn">Employee Voices</li>
                                </ul>

                                <div class="tabs-content">
                                    <div class="tab active-tab" id="remote-culture">
                                        <div class="content">
                                            <p>
                                                Our remote-first culture means flexible hours, asynchronous communication, and digital-first collaboration tools. Whether you’re working from Nairobi or New York, you’re part of the team.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab" id="our-values">
                                        <div class="content">
                                            <p>
                                                We believe in innovation, transparency, and building for impact. We value curiosity, accountability, and a strong sense of mission.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab" id="employee-voices">
                                        <div class="content">
                                            <p>
                                                “Tansa Tech gave me the freedom to explore ambitious projects and the support to deliver them.”<br>
                                                — <em>Elijah, ML Engineer</em>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Box -->
                        <div class="brochure-box clearfix wow fadeInDown">
                            <div class="content">
                                <h4>Ready to Build with Us?</h4>
                                <a href="/jobs" class="theme-btn btn-style-four">View Open Positions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Side-->
            @include('partials.menus.servicesviewsidebar')
            <!-- End Sidebar Side-->
        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->

@endsection