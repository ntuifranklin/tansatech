
                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <h4 class="sidebar-title">Services Menu</h4>
                            <div class="widget-content">
                                <!-- Services Category -->
                                <ul class="services-categories">
                                    @include('partials.menus.serviceslisturls')
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <h4 class="sidebar-title">Featured Work</h4>
                            <div class="widget-content">
                                
                            <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb" title="USTDA CESP ENERGY STORAGE AND EFFICIENCY WORKSHOP"><a href="https://share.ansi.org/Shared%20Documents/Standards%20Activities/International%20Standardization/CESP/Benin%20CESP%202018/Presentations%20English/TansaTech%20-%20Aime_Tchapda.pptx%20[Repaired].pdf"><img width="80" height="80" src="{{ asset('/images/energy_storage_opp_article_thumbnail.png') }}" alt="USTDA CESP ENERGY STORAGE AND EFFICIENCY WORKSHOP"></a></figure>
                                        <div class="text">
                                            @php
                                                $design_article_title = <<<EOD
                                                Energy Storage Opportunities and Pitfalls in Sub-Saharan Africa: The Value of Standards
                                                EOD;
                                                $friendly_design_article_title = ucwords(strtolower($design_article_title));
                                            @endphp

                                            <a href="https://share.ansi.org/Shared%20Documents/Standards%20Activities/International%20Standardization/CESP/Benin%20CESP%202018/Presentations%20English/TansaTech%20-%20Aime_Tchapda.pptx%20[Repaired].pdf"  title="{{$friendly_design_article_title}}">
                                                {{ $friendly_design_article_title }}
                                            </a>
                                        </div>
                                        <div class="post-info">Energy</div>
                                    </div>
                                </article>

                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="https://etda.libraries.psu.edu/files/final_submissions/14500"><img width="80" height="80" src="{{ asset('/images/dissertation_thumbnail.png') }}" alt=""></a></figure>
                                        <div class="text">
                                            @php
                                                $design_article_title = <<<EOD
                                                DESIGN AND CONSTRUCTION OF A LAB SCALE PRESSURIZED ENTRAINED
                                                FLOW REACTOR FOR STUDYING THE THERMOCHEMICAL CONVERSION OF
                                                SOLID FUELS AT HIGH TEMPERATURE
                                                EOD;
                                                $friendly_design_article_title = ucwords(strtolower($design_article_title));
                                            @endphp

                                            <a href="https://etda.libraries.psu.edu/files/final_submissions/14500"  title="{{$friendly_design_article_title}}">
                                                {{ $friendly_design_article_title }}
                                            </a>
                                        </div>
                                        <div class="post-info">Energy</div>
                                    </div>
                                </article>
                                
                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="https://www.mdpi.com/1996-1073/7/3/1098"><img width="80" height="80" src="https://pub.mdpi-res.com/energies/energies-07-01098/article_deploy/html/images/energies-07-01098f1.png?1426592211" alt=""></a></figure>
                                        <div class="text"><a href="https://www.mdpi.com/1996-1073/7/3/1098">A Review of Thermal Co-Conversion of Coal and Biomass/Waste</a></div>
                                        <div class="post-info">Biomass/Waste</div>
                                    </div>
                                </article>
                                
                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0165237017303558"><img src="{{ asset('/images/analysis_tar_thumbnail.png') }}" alt=""></a></figure>
                                        <div class="text">
                                            <a href="https://www.sciencedirect.com/science/article/abs/pii/S0165237017303558">
                                                Analysis of tars formed during co-pyrolysis of coal and biomass at high temperature in carbon dioxide atmosphere
                                            </a>
                                        </div>
                                        <div class="post-info">Combustion / Gasification</div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!--Help Box-->
                        <div class="help-box">
                            <div class="inner">
                                <h4>Download Brochures</h4>
                                <div class="text">Checkout our brochures, or just reach out for any questions !</div>
                                <a class="theme-btn btn-style-one" href="/contact"><i class="la la-file-pdf-o"></i> Info Company</a>
                                <a class="theme-btn btn-style-one" href="/contact"><i class="la la-file-pdf-o"></i> Brochure Newest</a>
                            </div>
                        </div>                        

                        <!-- Tags Widget -->
                        <div class="sidebar-widget contact-widget">
                            <h4 class="sidebar-title">Get in Touch</h4>
                            <div class="widget-content">
                                <ul class="contact-list">
                                    <li><i class="material-icons">phone</i> <a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></li>
                                    <li><i class="material-icons">email</i> <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></li>
                                    <li><i class="material-icons">place</i> {{ config('app.street') }}, {{ config('app.city') }}, {{ config('app.state') }} <br> {{ config('app.zipcode') }}</li>
                                    <li><i class="material-icons">access_time</i>
                                        Mon - Fri: 8am - 6pm
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>