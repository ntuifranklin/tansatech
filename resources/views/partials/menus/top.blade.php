
<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
    <ul class="navigation clearfix">
        <li><a href="/home">Home</a></li>
        <!-- <li><a href="/about">About</a></li> -->
        <li class="dropdown"><a href="#"> Services  </a>
            <ul>
                @include('partials.menus.serviceslisturls')
               
            </ul>
        </li>
        <!-- <li><a href="/partners">Partners</a></li> -->

        
        <li class="dropdown"><a href="#">Featured Work</a>
            <ul>
                @include('partials.menus.featuredworklistsurls')
            </ul>
        </li>
        
        
        <li><a href="/contact">Contact</a></li>
    </ul>
</div>