
@php

use Illuminate\Support\Facades\File;
/* storage_path assumes content in /sotrage folder(root app folder, then storage */
$services = json_decode(File::get(storage_path('../resources/views/partials/menus/servicesurls.json')), true);
@endphp

@foreach($services as $link => $anchor_text)

    <li><a href="/{{$link}}">{{$anchor_text}}</a></li>

@endforeach
