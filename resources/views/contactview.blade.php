<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('pageTitle') | {{ config('app.name') }}</title>
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

<!-- import default seo -->
@include('partials.seo.metatags')  

<!-- SEO specific to this page -->
@yield('seo')

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('partials.basicheader')   

    @yield('pagecontent')
    
    
    @include('partials.basicfooter')

</div>  
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->

@include('partials.pagejs.basicjs')
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_maps_api_key') }}"></script>
<script src="{{ asset('/js/map-script.js') }}"></script>
</body>
</html>