@extends('defaultview')

@section('pageTitle')
Careers
@endsection


@section('seo')

<meta name="keywords" content="AI jobs, machine learning careers, tech jobs, energy industry jobs, AI engineer, data science jobs, predictive maintenance careers, process optimization jobs, job listings, oil and gas jobs, utilities sector jobs, AI-powered careers">
<meta name="description" content="Explore AI and tech-related job opportunities in the energy, oil & gas, and utilities industries. Find roles in AI, machine learning, predictive maintenance, and more.">
<meta name="twitter:title" content="Explore AI & Tech Jobs in Energy and Utilities | Tansa Tech">
<meta name="twitter:description" content="Looking for AI and machine learning jobs? Browse job listings in the energy, oil & gas, and utilities sectors and apply today!">

@endsection

@section('pagecontent')
    <section class="about-section">
            <div class="auto-container d-flex justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <h1>Job Listings</h1>
                        
                                            
                        @php

                        use Illuminate\Support\Facades\File;
                        /* storage_path assumes content in /sotrage folder(root app folder, then storage */
                        $jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
                        @endphp

                        @if(count($jobs) > 0)
                            <ul>
                                @foreach($jobs as $job)
                                    <li>
                                        <a href="{{ route('jobs.show', ['id' => $job['id']]) }}">{{ $job['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No jobs available at the moment.</p>
                        @endif
                    </div>
                </div>
            </div>
    </section>
@endsection