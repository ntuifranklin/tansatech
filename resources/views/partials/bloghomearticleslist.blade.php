
@php

use Illuminate\Support\Facades\File;
/* storage_path assumes content in /sotrage folder(root app folder, then storage */
$articles = json_decode(File::get(storage_path('../resources/views/partials/menus/blogarticles.json')), true);
$articles_length = count($articles);
@endphp

    
    <!-- News Section -->
    <section class="news-section blog-grid">
        <div class="auto-container">

            <div class="row">
                     
                @for($index=0; $index < $articles_length; $index++) 
                
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src='{{ $articles[$index]["image"] }}' alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="material-icons">event</span> {{ $articles[$index]["date"] }}</li>
                               
                            </ul>
                            <h5><a href='{{$articles[$index]["url"]}}'>{{$articles[$index]["title"]}}.</a></h5>
                            <div class="text">{{$articles[$index]["mini_description"]}}</div>
                            <div class="link-box"><a href='{{$articles[$index]["url"]}}'>Read more <i class="la la-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <!-- End News Block -->         
                @endfor
                  
            </div>

            <!-- Styled Pagination 
            <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><span class="la la-angle-right"></span></a></li>
            </ul>    
            -->            
            <!--End Styled Pagination-->

        </div>
    </section>
    <!--End News Section -->