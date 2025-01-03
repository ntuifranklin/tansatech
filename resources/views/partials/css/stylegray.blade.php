<style type="text/css">

*{
	margin:0px;
	padding:0px;
	border:none;
	outline:none;
	font-size: 100%;
	line-height: inherit;
}

body {
	
	font-size:14px;
	color:#787878;
	line-height:1.6em;
	font-weight:400;
	background:#ffffff;
	-webkit-font-smoothing: antialiased;
	-moz-font-smoothing: antialiased;
	font-family: 'Open Sans', sans-serif;
}

a{
	text-decoration:none;
	cursor:pointer;
	color:#df6512;
}

a:hover,
a:focus,
a:visited{
	text-decoration:none;
	outline:none;
}

h1,h2,h3,h4,h5,h6 {
	position:relative;
	font-weight:normal;
	margin:0px;
	background:none;
	line-height:1.2em;
	font-family: 'Roboto', sans-serif;
}

button{
	outline: none !important;
	cursor: pointer;
}

p,.text{
	font-size: 15px;
	line-height: 25px;
	font-weight: 400;
	color: #666666;
	margin: 0;
}

.page-wrapper{
	position:relative;
	margin:0 auto;
	width:100%;
	min-width:300px;
	z-index: 9;
	overflow: hidden;
}

.auto-container{
	position:static;
	max-width:1200px;
	padding:0px 15px;
	margin:0 auto;
}

ul,li{
	list-style:none;
	padding:0px;
	margin:0px;	
}

figure{
	margin-bottom: 0;
}

.pull-right{
	float: right;
}

.preloader{ 
	position:fixed; 
	left:0px; 
	top:0px; 
	width:100%; 
	height:100%; 
	z-index:999999; 
	background-color:#ffffff; 
	background-position:center center; 
	background-repeat:no-repeat; 
	background-image:url(../images/icons/preloader.svg);
}

img{
	display:inline-block;
	max-width:100%;
	height:auto;	
}

.dropdown-toggle::after{
	display: none;
}

.fa{
	line-height: inherit;
}

.scroll-to-top{
	position:fixed;
	bottom:20px;
	right:20px;
	width:60px;
	height:60px;
	color:#ffffff;
	font-size:24px;
	line-height:60px;
	text-align:center;
	z-index:100;
	cursor:pointer;
	background:#1b1a1c;
	display:none;
	border-radius: 0;
	-webkit-transition:all 300ms ease;
	-moz-transition:all 300ms ease;
	-ms-transition:all 300ms ease;
	-o-transition:all 300ms ease;
	transition:all 300ms ease;		
}


/*** 

====================================================================
	Main Header style
====================================================================

***/

/* Top Left*/
.main-header{
	position: relative;
	display: block;
	width: 100%;
	z-index: 99999;
}

.main-header .header-top{
	position: relative;
	background-color:#333333;
}

.main-header .header-top .top-right{
	position:relative;
	float:right;
}

.main-header .header-top .info-list{
	position: relative;
	float: right;
	padding: 15px 0;
}

.main-header .header-top .info-list li{
	position: relative;
	float: left;
	margin-left: 20px;
	padding-left: 27px;
	font-size: 15px;
	line-height: 30px;
	color: #c5c5c5;
	font-weight: 600;
}

.main-header .header-top .info-list li a{
	display: inline-block;
	font-size: 15px;
	line-height: 30px;
	color: #c5c5c5;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

.main-header .header-top .info-list li span{
	position: absolute;
	left: 0;
	top: 0;
	color: #ed7902;
	font-size:18px;
	line-height: 30px;
}

.main-header .header-upper{
	position: relative;
}

.main-header .header-upper .logo-outer{
	position: relative;
	float: left;
}

.main-header .header-upper .logo{
	position: relative;
	padding: 30px 0;
}

.main-header .header-upper .logo img{
	display: inline-block;
	max-width: 100%;
	height: auto;
}

.main-header .info-outer{
	position: relative;
	float: right;
	padding: 33px 0 0;
}

.main-header .info-outer .info-box{
	position: relative;
	float: left;
	margin-left: 30px;
	padding-left: 30px;
	margin-bottom: 30px;
	font-family: "Roboto", sans-serif;
}

.main-header .info-outer .info-box:first-child{
	margin-left: 0;
}

/*=== Header Lower ===*/

.nav-outer .mobile-nav-toggler{
	position: relative;
	float: right;
	font-size: 40px;
	line-height: 50px;
	cursor: pointer;
	color:#df6512;
	margin:7px 0px 2px;
	display: none;
}

.main-header .header-lower .nav-outer{
	position: relative;
	background-color: #ffffff;
	padding-right: 30px;
	border-top: 1px solid #e5e5e5;
}

.main-menu{
	position:relative;
	float:left;
}


.main-menu .navbar-collapse{
	padding:0px;	
}

.main-menu .navigation{
	position:relative;
	margin:0px;
	font-family: "Roboto", sans-serif;
}

.main-menu .navigation > li{
	position:relative;
	float:left;
	padding:20px 30px 21px;
	-webkit-transition:all 300ms ease;
	-moz-transition:all 300ms ease;
	-ms-transition:all 300ms ease;
	-o-transition:all 300ms ease;
	transition:all 300ms ease;
}

.main-menu .navigation > li:before{
	position: absolute;
	right: 0;
	top: 20px;
	height: 25px;
	width: 1px;
	background-color: #e5e5e5;
	content: "";
}

.main-menu .navigation > li:last-child:before{
	display: none;
}

.main-menu .navigation > li > a{
	position:relative;
	display:block;
	text-align:center;
	font-size:16px;
	line-height:25px;
	font-weight:500;
	opacity:1;
	color:#333333;
	padding: 0px;
	text-transform:none;
	-webkit-transition:all 300ms ease;
	-moz-transition:all 300ms ease;
	-ms-transition:all 300ms ease;
	-o-transition:all 300ms ease;
	transition:all 300ms ease;
}

.main-menu .navigation > li:hover > a,
.main-menu .navigation > li.current > a{
	color: #df6512;
}

.main-menu .navigation > li.dropdown > a{
	padding-right: 15px;
}

.main-menu .navigation > li.dropdown > a:after{
	font-family: "Flaticon";
	content: "\f19c";
	position:absolute;
	right: 0;
	top: 1px;
	display:block;
	line-height:24px;
	font-size:8px;
	font-weight:900;
	z-index:5;	
}

.main-menu .navigation > li > ul{
	position:absolute;
	left:0px;
	top:100%;
	width:260px;
	z-index:100;
	display:none;
	padding:10px 30px 0;
	background-color:#ffffff;
	opacity:0;
	-webkit-transform:translateY(30px);
	-ms-transform:translateY(30px);
	transform:translateY(30px);
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	-webkit-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-ms-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-o-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-moz-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
}

.main-menu .navigation > li > ul.from-right{
	left:auto;
	right:0px;	
}

.main-menu .navigation > li > ul > li{
	position:relative;
	width:100%;
	border-bottom:1px solid rgba(255,255,255,0.10);
}

.main-menu .navigation > li > ul > li:last-child{
	border-bottom:none;	
}

.main-menu .navigation > li > ul > li > a{
	position:relative;
	display:block;
	padding:10px 0px;
	line-height:29px;
	font-weight:500;
	font-size:15px;
	color:#333333;
	text-align:left;
	border-bottom: 1px solid #e5e5e5;
	text-transform:capitalize;
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
}

.main-menu .navigation > li > ul > li:hover > a{
	color:#ed7902;
	padding-left: 16px;
}

.main-menu .navigation > li > ul > li.dropdown > a:after{
	font-family: 'Font Awesome 5 Free';
	content: "\f105";
	position:absolute;
	right:0;
	top:11px;
	display:block;
	line-height:24px;
	font-size:16px;
	font-weight:900;
	z-index:5;	
}

.main-menu .navigation > li > ul > li > a:before{
	position: absolute;
	left: 0;
	top: 22px;
	height: 5px;
	width: 5px;
	background-color: #ed7902;
	content: "";
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

.main-menu .navigation > li > ul > li:hover > a:before{
	opacity: 1;
	visibility: visible;
}

.main-menu .navigation > li > ul > li > ul{
	position:absolute;
	left:100%;
	top:0px;
	width:260px;
	z-index:100;
	display:none;
	background-color:#ffffff;
	opacity:0;
	padding: 10px 30px 0;
	margin-left: 30px;
	-webkit-transform:translateY(30px);
	-ms-transform:translateY(30px);
	transform:translateY(30px);
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	-webkit-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-ms-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-o-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	-moz-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
	box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
}

.main-menu .navigation > li > ul > li > ul > li{
	position:relative;
	width:100%;
	border-bottom:1px solid rgba(255,255,255,0.10);
}

.main-menu .navigation > li > ul > li > ul > li:last-child{
	border-bottom:none;	
}

.main-menu .navigation > li > ul > li  > ul > li > a{
	position:relative;
	display:block;
	padding:11px 0;
	line-height:24px;
	font-weight:500;
	font-size:16px;
	color:#333333;
	text-align:left;
	text-transform:capitalize;
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
}

.main-menu .navigation > li > ul > li  > ul > li > a:hover{
	color:#df6512;
	padding-left: 16px;
}

.main-menu .navigation > li > ul > li > ul > li > a:before{
	position: absolute;
	left: 0;
	top: 22px;
	height: 5px;
	width: 5px;
	background-color: #ed7902;
	content: "";
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

.main-menu .navigation > li > ul > li > ul > li:hover > a:before{
	opacity: 1;
	visibility: visible;
}

.main-menu .navigation > li.dropdown:hover > ul{
	visibility:visible;
	opacity:1;
	top:100%;
	-webkit-transform:translateY(0px);
	-ms-transform:translateY(0px);
	transform:translateY(0px);
}

.main-menu .navigation li > ul > li.dropdown:hover > ul{
	visibility:visible;
	opacity:1;
	top:0px;
	-webkit-transform:translateY(0px);
	-ms-transform:translateY(0px);
	transform:translateY(0px);	
}

.main-menu .navigation li.dropdown .dropdown-btn{
	position:absolute;
	right:10px;
	top:8px;
	width:34px;
	height:30px;
	border:1px solid #ffffff;
	text-align:center;
	font-size:16px;
	line-height:26px;
	color:#ffffff;
	cursor:pointer;
	z-index:5;
	display:none;
}


.main-header .outer-box .btn-box{
	position: relative;
	float: right;
	margin-left: 30px;
}

.main-header .outer-box .btn-box .theme-btn{
	padding: 24px 40px;
	text-transform: capitalize;
	float: right;
}

.main-header .outer-box .btn-box .theme-btn i{
	margin-left: 10px;
}


.main-header .search-box-btn:hover{
	color: #343434;
}

.main-header .search-panel .form-container{
	padding:25px 20px;	
}

.main-header .search-panel .form-group{
	position:relative;
	margin:0px;	
}

.main-header .search-panel input[type="text"],
.main-header .search-panel input[type="search"],
.main-header .search-panel input[type="password"],
.main-header .search-panel select{
	display:block;
	width:100%;
	line-height:24px;
	padding:7px 40px 7px 15px;
	height:40px;
	font-size:14px;
	border:1px solid #e0e0e0;
	background:#ffffff;	
}

.main-header .search-panel input:focus,
.main-header .search-panel select:focus{
	border-color:#25262c;	
}

.main-header .search-panel .search-btn{
	position:absolute;
	right:0px;
	top:0px;
	width:40px;
	height:40px;
	text-align:center;
	color:#555555;
	font-size:12px;
	background:none;
	cursor:pointer;
}

.main-header .outer-box .social-links{
	position: relative;
	float: left;
	margin-left: 20px;
	padding: 20px 0;
	padding-left: 20px;
}

.main-header .outer-box .social-links:before{
	position: absolute;
	left: -3px;
	top: 15px;
	height: 35px;
	border-left: 1px solid #e5e5e5;
	content: "";
}


.main-header .outer-box{
	position: relative;
	float: right;
}

/*search box btn*/

.main-header .search-box-outer{
	position:relative;
	float: left;
	padding: 15px 0px;
	-webkit-transition:all 300ms ease;
	-moz-transition:all 300ms ease;
	-ms-transition:all 300ms ease;
	-o-transition:all 300ms ease;
	transition:all 300ms ease;
}

.main-header .search-box-btn{
	position: relative;
	float: left;
    font-size: 17px;
	line-height: 35px;
    background: none;
    color: #343434;
    font-weight: 700;
    cursor: pointer;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.dropdown-toggle::after{
	display: none;
}

.main-header .search-box-outer .dropdown-menu{
	top:49px !important;
	left: auto !important;
	right: 0;
	padding:0px;
	width:280px;	
	border-radius:0px;
	-webkit-transform: none !important;
	-ms-transform: none !important;
	transform: none !important;
	border-top:3px solid #df6512;
}

/*** 

====================================================================
				Sticky Header
====================================================================

***/

.sticky-header{
    position: fixed;
    visibility: hidden;
    opacity: 0;
    left: 0px;
    top: 0px;
    width: 100%;
    padding: 0px 0px;
    z-index: -1;
    background: #ffffff;
    -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.10);
    -moz-box-shadow: 0 0 15px rgba(0,0,0,0.10);
    -ms-box-shadow: 0 0 15px rgba(0,0,0,0.10);
    -o-box-shadow: 0 0 15px rgba(0,0,0,0.10);
    box-shadow: 0 0 15px rgba(0,0,0,0.10);
    -webkit-transition: top 300ms ease;
    -moz-transition: top 300ms ease;
    -ms-transition: top 300ms ease;
    -o-transition: top 300ms ease;
    transition: top 300ms ease;
}

/*** 
====================================================================
			Mobile Menu
====================================================================
***/
.mobile-menu{
	position: fixed;
	right: 0;
	top: 0;
	width: 300px;
	padding-right:30px;
	max-width:100%;
	height: 100%;
	opacity: 0;
	visibility: hidden;
	z-index: 999999;
}

.mobile-menu .nav-logo{
	position:relative;
	padding:20px 20px;
	text-align:left;	
}

.mobile-menu .nav-logo img{
	max-width:200px;
}

.mobile-menu .menu-backdrop{
	position: fixed;
	right: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	background: rgba(0,0,0,0.90);
	-webkit-transform: translateX(101%);
	-ms-transform: translateX(101%);
	transform: translateX(101%);
}

.mobile-menu .menu-box{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	max-height: 100%;
	overflow-y: auto;
	background: #ffffff;
	padding: 0px 0px;
	z-index: 5;
	opacity: 0;
	visibility: hidden;
	border-radius: 0px;
	-webkit-transform: translateX(101%);
	-ms-transform: translateX(101%);
	transform: translateX(101%);
}

.mobile-menu .close-btn{
	position: absolute;
	right: 3px;
	top: 3px;
	line-height: 30px;
	width: 30px;
	text-align: center;
	font-size: 14px;
	color: #202020;
	cursor: pointer;
	z-index: 10;
	-webkit-transition:all 0.5s ease;
	-moz-transition:all 0.5s ease;
	-ms-transition:all 0.5s ease;
	-o-transition:all 0.5s ease;
	transition:all 0.5s ease;
	-webkit-transform: translateY(-50px);
	-ms-transform: translateY(-50px);
	transform: translateY(-50px);
}

.mobile-menu .navigation{
	position: relative;
	display: block;
	border-top: 1px solid rgba(0,0,0,0.10);
}

.mobile-menu .navigation li{
	position: relative;
	display: block;
	border-bottom: 1px solid rgba(0,0,0,0.10);
}

.mobile-menu .navigation li > a{
	position: relative;
	display: block;
	line-height: 24px;
	padding: 10px 20px;
	font-size: 15px;
	color: #404040;
	text-transform: capitalize;
}

.mobile-menu .navigation li.dropdown .dropdown-btn{
	position:absolute;
	right:0px;
	top:0px;
	width:44px;
	height:44px;
	text-align:center;
	font-size:16px;
	line-height:44px;
	color:#404040;
	cursor:pointer;
	z-index:5;
}

.mobile-menu .navigation li.dropdown .dropdown-btn:after{
	content:'';
	position:absolute;
	left:0px;
	top:10px;
	width:1px;
	height:24px;
	border-left:1px solid rgba(0,0,0,0.10);
}

.mobile-menu .navigation li > ul,
.mobile-menu .navigation li > ul > li > ul{
	display: none;
}

/*** 

====================================================================
		Section Title
====================================================================

***/

.sec-title{
	position:relative;
	z-index: 1;
	margin-bottom:50px;
}

.sec-title .title{
	position: relative;
	display: block;
	font-size: 15px;
	line-height: 24px;
	color: #888888;
	font-weight: 400;
	padding-left: 40px;
	text-transform: uppercase;
	margin-bottom: 15px;
}

.sec-title .title:before{
	position: absolute;
	left: 0;
	top: 11px;
	height: 2px;
	width: 30px;
	background-color: #ed7902;
	content: "";
}

.sec-title h2{
	position: relative;
	display: block;
	font-size:36px;
	line-height: 1.2em;
	color: #333333;
	font-weight: 600;
}


/*** 

====================================================================
	Main Slider
====================================================================

***/

.main-slider{
	position: relative;
	font-family: "Roboto", sans-serif;
}

.main-slider .tp-dottedoverlay{
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background: rgba(0,0,0,.68);
}

.main-slider .title{
	position: relative;
	display: block;
	font-size: 18px;
	line-height: 1.2em;
	color: #ffffff;
	font-weight: 400;
}

.main-slider h2{
	position: relative;
	display: block;
	font-size: 52px;
	color: #ffffff;
	font-weight: 600;
	line-height: 63px;
}

.main-slider h2 strong{
	color: #ed7902;
	font-weight: 900;
}

.main-slider .link-box{
	position: relative;
}

/*** 

====================================================================
	Welcome Banner
====================================================================

***/

.welcome-section{
	position: relative;
	padding: 80px 0 50px;
}

.welcome-section:before{
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	max-width: 1170px;
	margin: 0 auto;
	border-bottom: 1px solid #e5e5e5;
	content: "";
}

.welcome-section .title-column{
	position: relative;
	margin-bottom: 30px;
	text-align: right;
}

.welcome-section .title-column .inner-column{
	position: relative;
	padding: 12px 0;
}

.welcome-section .title-column h2{
	position: relative;
	display: block;
	font-size: 36px;
	line-height: 43px;
	color: #333333;
	font-weight: 400;
}

.welcome-section .title-column h2 span{
	color: #ed7902;
}

.welcome-section .text-column{
	position: relative;
}

.welcome-section .text-column .inner-column{
	padding: 16px 0;
	padding-left: 35px;
	border-left: 2px solid #ed7902;
}

.welcome-section .text-column .text{
	font-size: 15px;
	line-height: 25px;
	color: #666666;
	font-weight: 400;
}

/*** 

====================================================================
	About Section
====================================================================

***/

.about-section{
	position: relative;
	padding: 100px 0 50px;
}

.about-section .content-column{
	position: relative;
	margin-bottom: 50px;
}

.about-section .content-column .inner-column{
	position: relative;
	padding-right: 70px;
	margin-top: -4px;
}

.feature-block{
	position: relative;
	margin-bottom: 30px;
}

.feature-block .inner-box{
	position: relative;
	padding-left: 73px;
}

.feature-block .icon-box{
	position: absolute;
	left: 0;
	top: 5px;
}

.feature-block .icon-box .icon{
	display: block;
	font-size: 54px;
	line-height: 1em;
	color: #ed7902;
	font-weight: 400;
}

.feature-block h4{
	font-size: 20px;
	line-height: 1.2em;
	color: #333333;
	font-weight: 700;
	margin-bottom: 13px;
}

.feature-block h4 a{
	color: #333333;
	display: inline-block;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

.feature-block .text{
	font-size: 15px;
	line-height: 25px;
	color: #666666;
	font-weight: 400;
}

.about-section .video-column{
	position: relative;
	margin-bottom: 50px;
}

.about-section .video-column .inner-column{
	position: relative;
}

.about-section .video-box{
	position: relative;
	margin-bottom: 20px;
}

.about-section .video-box .image{
	position: relative;
	margin-bottom: 0;
}

.about-section .video-box .image img{
	display: block;
	width: 100%;
	height: auto;
}

.about-section .video-box .link{
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	transition: all 300ms ease;
}

.about-section .video-box .link .icon{
	position: absolute;
	left: 50%;
	top: 50%;
	margin-top: -40px;
	margin-left: -40px;
	height: 80px;
	width: 80px;
	line-height: 80px;
	text-align: center;
	border: 2px solid #eeeeee;
	font-size: 26px;
	padding-left: 7px;
	border-radius: 50%;
	background-color: rgba(255,255,255,.30);
	color: #ffffff;
	transition: all 300ms ease;
}

.about-section .video-column .text{
	font-size: 15px;
	line-height: 25px;
	color: #666666;
	margin-bottom: 30px;
}


.services-section{
	position: relative;
	background-color: #f2f2f2;
	padding: 100px 0 50px;
}

.service-block{
	position: relative;
	margin-bottom: 50px;
}

.service-block .inner-box{
	position: relative;
}

.service-block .image-box{
	position: relative;
	overflow: hidden;
}

.service-block .image-box .image{
	position: relative;
	margin-bottom: 0;
}

.service-block .image-box .image img{
	display: block;
	width: 100%;
	height: auto;
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
}


.service-block .image-box .image a:before{
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: #000000;
	opacity: 0;
	-webkit-transform: translateY(-100%);
	-ms-transform: translateY(-100%);
	transform: translateY(-100%);
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	z-index: 1;
}


.service-block .image-box .icon{
	position: absolute;
	left: 0;
	bottom: 0;
	height: 60px;
	width: 60px;
	text-align: center;
	line-height: 60px;
	color: #ffffff;
	font-size: 42px;
	background-color: #ed7902;
	z-index: 8;
}

.service-block .lower-content{
	position: relative;
	padding-top: 35px;
}

.service-block .lower-content h4{
	position: relative;
	display: block;
	font-size: 20px;
	line-height: 1.2em;
	color: #333333;
	font-weight: 700;
	margin-bottom: 20px;
}

.service-block .lower-content h4 a{
	color: #333333;
	display: inline-block;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

.service-block .lower-content .text{
	font-size: 15px;
	line-height: 25px;
	color: #666666;
	font-weight: 400;
	margin-bottom: 20px;
}

.service-block .lower-content .read-more{
	display: inline-block;
	font-size: 15px;
	line-height: 1.2em;
	color: #ed7902;
	font-weight: 500;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

/***

==================================================================
		Main Footer
==================================================================

***/

.main-footer{
	position:relative;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	padding: 0px 0;
	background-color :#000000;
}

.main-footer:before{
	position: absolute;
	right: 0;
	top: 0;
	height: 100%;
	width: 100%;
	opacity: .80;
	background-color: #000000;
	content: '';
}

/*=== Widgets Section ===*/

.main-footer .widgets-section{
	position:relative;
	padding:75px 0px 45px;
}

.main-footer .footer-column{
	position:relative;
	margin-bottom:30px;
}

.main-footer .footer-widget{
	position:relative;
}

.main-footer .widget-title{
	position: relative;
	font-size:20px;
	font-weight:700;
	color:#ffffff;
	text-transform: capitalize;
	line-height: 1.2em;
	padding-bottom: 10px;
	margin-bottom:30px;
}

.main-footer .widget-title:before{
	position: absolute;
	left: 0;
	bottom: 0;
	height: 2px;
	width: 50px;
	background-color: #ed7902;
	content: "";
}

/*=== About Widget ===*/
.main-footer .about-widget{
	position: relative;
	margin-bottom: 60px;
}

.main-footer .about-widget .footer-logo{
	position: relative;
	margin-bottom: 30px;
}

.main-footer .about-widget .footer-logo .image{
	position: relative;
}

.main-footer .about-widget .footer-logo img{
	display: block;
	height: auto;
	max-width: 100%;
}

.main-footer .about-widget .text{
	position: relative;
	display: block;
	font-size: 15px;
	line-height: 25px;
	color: #e5e5e5;
	font-weight: 400;
	margin-bottom: 30px;
}

/*=== Cities Widget ===*/

.main-footer .links-widget{
	position: relative;
}

.main-footer .list{
	position: relative;
}

.main-footer .list li{
	position:relative;
	display: block;
	font-size: 15px;
	line-height: 25px;
	color: #e5e5e5;
	font-weight: 400;
	padding-left: 15px;
	margin-bottom: 15px;
}

.main-footer .list li:before{
	position: absolute;
	left: 0;
	top: 10px;
	height: 5px;
	width: 5px;
	background-color: #b5b4b4;
 	content: "";
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.main-footer .list li a{
	display: inline-block;
	color: #cdced1;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.main-footer .links-widget{
	position: relative;
}

/*=== Contact Widget ===*/

.main-footer .contact-widget{
	position: relative;
}

.main-footer .contact-widget .widget-content{
	position: relative;
}

.main-footer .contact-list{
	position: relative;
}

.main-footer .contact-list li{
	position:relative;
	display: block;
	font-size: 15px;
	line-height: 25px;
	color: #e5e5e5;
	font-weight: 400;
	margin-bottom: 20px;
	padding-left: 25px;
}

.main-footer .contact-list li i{
	position: absolute;
	left: 0;
	top: 0;
	font-size: 18px;
	line-height: 25px;
	color: #ed7902;
}

.main-footer .contact-list li a{
	color:#e5e5e5;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.main-footer .footer-bottom{
	position: relative;
	width:100%;
	padding:25px 0px;
	border-top: 1px solid rgba(255,255,255,.20);
	text-align: center;
}

.main-footer .copyright-text{
	position: relative;
	font-size: 15px;
	line-height: 30px;
	color: #999999;
	font-weight: 400;
}

.main-footer .copyright-text a{
	display: inline-block;
	color: #999999;
}

.main-footer.alternate .footer-bottom{
	border-top: 0;
	background-color: rgba(0,0,0,.10);
}

.main-footer.alternate:before{
	background-image: url(../images/icons/pattern-2.jpg);
	background-repeat: repeat;
	background-position: center;
	opacity: 1;
}

</style>