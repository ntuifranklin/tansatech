
<header class="main-header header-style-five">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left">
                    <ul class="info-list">
                        <li><strong>Do you need help? Here Us:</strong></li>
                        <li><span class="material-icons">phone</span><a href="tel:001-845-28386">(001)-845-28386</a></li>
                        <li><span class="material-icons">email</span><a href="mailto:info@industar.com">info@industar.com</a></li>
                        <li><span class="material-icons">access_time</span> Mon - Fri: 8am - 6pm</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icon-one">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>

                    <!-- Change Location -->
                    <div class="change-language">
                        <div class="language dropdown"><a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span class="flag eng"></span>English <i class="material-icons">expand_more</i></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Chinese</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title="Industry and Factory HTML Template"></a></div>
                    </div>

                    <!--Info-->
                    <div class="info-outer clearfix">
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner">
                                <div class="icon"><span class="la la-clock-o"></span></div>
                                <strong>Work Time</strong>
                                <span class="info">Mon - Fri: 8am - 6pm</span>
                                <span class="info">Sat - Sun: 9am - 3pm</span>
                            </div>
                        </div>

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner">
                                <div class="icon"><span class="la la-microphone"></span></div>
                                <strong>Support Center</strong>
                                <span class="info"><a href="tel:001-845-28386">(001)-845-28386 </a></span>
                                <span class="info"><a href="mailto:info@industar.com">info@industar.com</a></span>
                            </div>
                        </div>

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner">
                                <div class="icon"><span class="la la-map-marker"></span></div>
                                <strong>Leading Industry</strong>
                                <span class="info">344 Victory Blvd, Staten <br>Island, NY 10301</span>
                            </div>
                        </div>
                    </div>
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
                                            <form method="post" action="index.html">
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

                        <!-- Btn Box -->
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-one">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="images/logo-small.png" alt="" title=""></a>
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
            	<div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->