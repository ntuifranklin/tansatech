@extends('defaultview')


@section('pageTitle')
Job Title: {{ $job['title'] }} 

@endsection

@section('pagecontent')
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-12">
            
                <h1>{{ $job['title'] }}</h1>
                
                <p><strong>Job ID:</strong> {{ $job['id'] }}</p>
                <p><strong>Date Posted:</strong> {{ $job['posted_date'] }}</p>
                
                <p><strong>Location:</strong> {{ $job['location']['city'] }}, {{ $job['location']['state'] }}, {{ $job['location']['country'] }}</p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <p><strong>Description:</strong> {{   implode(" ", $job['description']) }}</p>
                <p>
                    <strong>Requirements:</strong>
                    <ol>
                        @foreach($job['requirements'] as $requirement)
                            <li>{{ $requirement }}</li>
                        @endforeach
                    </ol>
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                
            <p><strong>Application Instructions:</strong> {{ $job['application_instructions'] }}</p>
            <p><strong>Contact Email:</strong> {{ $job['contact_email'] }}</p>
            <p> 
                <a href="{{ route('jobs.index') }}">Back to Jobs</a>
            </p>    
        </div>

        </div>
    </div>
</section>
@endsection