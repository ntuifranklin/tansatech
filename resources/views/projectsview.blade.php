<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('pageTitle') | {{ config('app.name') }}</title>
<!-- Stylesheets -->
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('/images/tansatech_first_logo.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/images/tansatech_first_logo.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

@yield('seo')

<meta property="og:image" content="{{ asset('/images/tansatech_first_logo.png') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

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
@include('partials.pagejs.projectsjs')
</body>
</html>