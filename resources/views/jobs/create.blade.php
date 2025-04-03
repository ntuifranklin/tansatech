@extends('defaultview')


@section('pageTitle')
Post a Job
@endsection


@section('seo')

<meta name="description" content="Post a job on Tansa Tech to connect with talented professionals in the energy, oil, and gas, and utilities sectors. Use AI-powered solutions to optimize operations, enhance sustainability, and improve operational efficiency.">
<meta name="keywords" content="job posting, job listing, Tansa Tech, AI solutions, energy industry jobs, utilities jobs, oil and gas jobs, machine learning, predictive maintenance, operational efficiency, sustainability jobs, regulatory compliance jobs">
<meta name="twitter:title" content="Post a Job at Tansa Tech: AI Solutions for Energy, Oil & Gas, and Utilities">
<meta name="twitter:description" content="Post a job with Tansa Tech to find the best AI talent in the energy, oil, and gas sectors. Optimize your operations and enhance sustainability with AI-driven solutions.">

@endsection

@section('pagecontent')
    <h1>Post a New Job</h1>
    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <label>Location:</label>
        <input type="text" name="location" required>
        <button type="submit">Post Job</button>
    </form>
@endsection
