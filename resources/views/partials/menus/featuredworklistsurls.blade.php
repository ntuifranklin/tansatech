
@php

use Illuminate\Support\Facades\File;
/* storage_path assumes content in /sotrage folder(root app folder, then storage */
$featuredworks = json_decode(File::get(storage_path('../resources/views/partials/menus/featuredwork.json')), true);
@endphp

@foreach($featuredworks as $link => $featured_work_data)

    <li><a href="{{$link}}" title="{{$featured_work_data[1]}}">{{$featured_work_data[0]}}</a></li>

@endforeach
