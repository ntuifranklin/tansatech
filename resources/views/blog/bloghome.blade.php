<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Expert Articles on Engineering, Technology, and Innovation | {{ config('app.name') }} </title>
<!-- Stylesheets -->
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

<link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/images/tansa_tech_logo_svg_format.svg') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js') }}"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('/js/respond.js') }}"></script><![endif]-->
    
@include('partials.seo.bloghomepageseometatags')  


<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('partials.basicheader')  

    <!--Page Title-->
    <section class="page-banner" style="background-image:url(images/TansaTech_Moto_Good.png);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Blog & News</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/"><i class="la la-home"></i>Home</a></li>
                    <li>Blog & News</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    @include('partials.bloghomearticleslist')  
    
    @include('partials.bloghomefooter')  

</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->
@include('partials.pagejs.bloghomejs')
</body>
</html>