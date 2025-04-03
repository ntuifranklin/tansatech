<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
/* storage_path assumes content in /sotrage folder(root app folder, then storage */
$jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
//session(['jobs' => $jobs]); // Store back in session
class JobController extends Controller
{
    // Get all jobs
    public function index()
    {
        $jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
        // Debug: Dump session data before rendering view
        //dd($jobs);
        return view('jobs.index', compact('jobs'));
    }

    // Show the form to create a new job
    public function create()
    {
        return view('jobs.create');
    }

    // Store the job in the session
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        //$jobs = session('jobs', []);
        $id = count($jobs) + 1; // Generate a simple ID
        $jobs[$id] = [
            'id' => $id,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
        ];

        session(['jobs' => $jobs]); // Store back in session

        return redirect()->route('jobs.index')->with('success', 'Job posted successfully!');
    }

    // Show a single job
    public function show($id)
    {
        //$jobs = session('jobs', []);
        $jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
        
        //dd($id);
        for($i=0 ; $i<count($jobs); $i++) {
            $job = $jobs[$i];
            //dd($job);
            
            if ($id == $job['id']){
                return view('jobs.show', ['job' => $job]);
            } ;
            continue ;
            
        } ;
         
        return abort(404);

        
    }

    // Show the edit form
    public function edit($id)
    {
        //$jobs = session('jobs', []);
        $jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
        if (!isset($jobs[$id])) {
            return abort(404);
        }

        return view('jobs.edit', ['job' => $jobs[$id]]);
    }

    // Update job in session
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        //$jobs = session('jobs', []);
        $jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
        if (!isset($jobs[$id])) {
            return abort(404);
        }

        $jobs[$id] = [
            'id' => $id,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
        ];

        session(['jobs' => $jobs]);

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully!');
    }

    // Delete a job
    public function destroy($id)
    {
        //$jobs = session('jobs', []);
        $jobs = json_decode(File::get(storage_path('../resources/views/jobs/jobs.json')), true);
        if (!isset($jobs[$id])) {
            return abort(404);
        }

        unset($jobs[$id]);
        session(['jobs' => $jobs]);

        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
    }
}
