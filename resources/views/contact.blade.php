@extends('defaultview')

@section('pageTitle')

Contact Us | Tansa Tech LLC | Energy Consultancy

@endsection

@section('seo')

<meta content="{{ config('app.appname') }}" name="description">
<meta name="keywords" content="energy, water, solutions, innovation, resource management, sustainable infrastructure, technology, expertise, progress, sustainability">
<meta property="og:title" content="Contact Us | {{ config('app.appname') }}">
<meta property="og:description" content="Empowering the energy and water industry with innovative solutions. From efficient resource management to sustainable infrastructure, we deliver cutting-edge technologies and expertise to drive forward progress and sustainability.">
<meta property="og:image" content="{{ asset('/images/tansa-tech-high-resolution-logo.png') }}">
<meta property="og:url" content="{{ config('app.appweburl') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ config('app.appweburl') }}">



@endsection