
<header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-right clearfix">
                    <ul class="info-list">
                        <li class="title"><strong>Need Assistance? We're Here to Help! Contact Us:</strong></li>
                        <li><span class="material-icons">phone</span><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></li>
                        <li><span class="material-icons">email</span><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></li>
                        <li><span class="material-icons">access_time</span> Mon - Fri: 8am - 6pm</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo-outer">
                        <div class="logo"><a href="/home"><img width="180" height="49" src="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" alt="" title="{{ config('app.appname')}}"></a></div>
                    </div>
                    
                    <!-- Requires definition of route with name contact in routing 
                     and also the definition of route operational-technology
                    -->
                    
                    @if(Route::is('contact'))
                        @include('partials.officeinfoheader')
                    @else
                        @include('partials.standardinfoheader')
                    @endif
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        @include('partials.menus.top')
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-search-5"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form>
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- 
                        <div class="social-links">
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="{{ config('app.linkedinurl') }}"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img width="180" height="49" src="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                             <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="{{ asset('/home') }}"><img width="180" height="49" src="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" alt="Tansa Tech LLC logo" title="Tansa Tech LLC"></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->