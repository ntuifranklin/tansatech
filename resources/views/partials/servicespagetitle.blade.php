
     <!--Page Title-->
     <section class="page-banner" style="background-image:url({{ asset('/images/tansatech_first_logo.png')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>@yield('pageTitle')</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/"><i class="la la-home"></i>Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li>@yield('pageTitle')</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->