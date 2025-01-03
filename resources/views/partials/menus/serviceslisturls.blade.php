
@php

use Illuminate\Support\Facades\File;
/* storage_path assumes content in /sotrage folder(root app folder, then storage */
$services = json_decode(File::get(storage_path('../resources/views/partials/menus/servicesurls.json')), true);
@endphp

@foreach($services as $link => $service_data)

    <li><a href="/{{$link}}" title="{{$service_data[1]}}">{{$service_data[0]}}</a></li>

@endforeach
