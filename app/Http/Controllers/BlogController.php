<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   
    public function index() {
        return view('blog.bloghome');
    }

    public function show($slug) {
        return view('blog.' . $slug);
    }
}
