@extends('defaultview')

@section('pagecontent')
    <h1>Edit Job</h1>
    <form action="{{ route('jobs.update', $job['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $job['title'] }}" required>
        <label>Description:</label>
        <textarea name="description" required>{{ $job['description'] }}</textarea>
        <label>Location:</label>
        <input type="text" name="location" value="{{ $job['location'] }}" required>
        <button type="submit">Update Job</button>
    </form>
@endsection
