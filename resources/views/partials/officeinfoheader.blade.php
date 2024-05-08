
                    <!--Info-->
                    <div class="info-outer clearfix">
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner">
                                <div class="icon"><span class="la la-clock-o"></span></div>
                                <strong>Work Time</strong>
                                <span class="info">Mon - Fri: 8am - 6pm</span>
                                <!-- <span class="info">Sat - Sun: 9am - 3pm</span>  -->
                            </div>
                        </div>

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner">
                                <div class="icon"><span class="la la-microphone"></span></div>
                                <strong>Support Center</strong>
                                <span class="info"><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></span>
                                <span class="info"><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></span>
                            </div>
                        </div>

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="inner">
                                <div class="icon"><span class="la la-map-marker"></span></div>
                                <strong>Leading Industry</strong>
                                <span class="info">{{ config('app.street') }}, <br>{{ config('app.state') }},  {{ config('app.zipcode') }}</span>
                            </div>
                        </div>
                    </div>