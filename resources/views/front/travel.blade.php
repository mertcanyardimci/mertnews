@extends('front.layouts.master')
@section('content')

<!-- START HEADER -->
<header class="header_wrap dark_skin fixed-top">

	<div class="container">
    	<nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="/">
                <img class="logo_light" src="{{asset('front')}}/Morus-Html/assets/images/logo_white.png" alt="logo" />
                <img class="logo_dark" src="{{asset('front')}}/Morus-Html/assets/images/logo_dark.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="dropdown">
                    <li><a class="nav-link nav_item" href="/">Anasayfa</a></li> 
                    <li><a class="nav-link nav_item" href="/about">Hakkımızda</a></li>
                    <li><a class="nav-link nav_item" href="/news">Haberler</a></li>
                    <li><a class="nav-link nav_item" href="/travel">Gezi Rehberi</a></li> 
                    <li><a class="nav-link nav_item" href="/contact">İletişim</a></li>
                </ul>
            </div>
		</nav>
	</div>
</header>
<!-- START HEADER --> 
<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section bg_gray">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
            		<h1>Gezi Rehberi</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Gezi Rehberi</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB -->
<!-- START BLOG -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-4 col-md-6">
                <div class="blog_post">
                    @foreach($news as $new)
                        @if ($new->category_id == 4 && $new->yazar_id == 2 )
                        <div class="blog_img">
                            <a href="{{route('new.single',$new->id)}}">
                            	<img src="{{$new->image}}">
                            </a>
                        </div>
                        <div class="blog_content">
                        	<div class="blog_text">
                        		<div class="blog_tags">
                                
                                    <a class="blog_tags_cat bg_blue" href="#">{{$new->getCategory->name}}</a>
                                </div>
                        		<h5 class="blog_heading"><a href="{{route('new.single',$new->id)}}">{{$new->title}}</a></h5>
                                <ul class="blog_meta">
                                   <li><a href="#"><i class="ti-calendar"></i> <span>{{$new->updated_at}}</span></a></li>
                                   <li><a href="#"><i class="ti-comments"></i> <span>{{$new->hit}}</span></a></li>
                                </ul>
                        		<p>{{str_limit($new->content,50)}}</p>
                        	</div>
                        </div>
                    @if(!$loop->last)
                    <hr>
                    @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BLOG --> 


<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="{{asset('front')}}/Morus-Html/assets/js/jquery-1.12.4.min.js"></script> 
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{asset('front')}}/Morus-Html/assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="{{asset('front')}}/Morus-Html/assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="{{asset('front')}}/Morus-Html/assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="{{asset('front')}}/Morus-Html/assets/js/waypoints.min.js"></script> 
<!-- imagesloaded js -->
<script src="{{asset('front')}}/Morus-Html/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="{{asset('front')}}/Morus-Html/assets/js/isotope.min.js"></script>
<!-- jquery.appear js  -->
<script src="{{asset('front')}}/Morus-Html/assets/js/jquery.appear.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="{{asset('front')}}/Morus-Html/assets/js/jquery.parallax-scroll.js"></script>
<!-- jquery.dd.min Js -->
<script src="{{asset('front')}}/Morus-Html/assets/js/jquery.dd.min.js"></script>
<!-- scripts js --> 
<script src="{{asset('front')}}/Morus-Html/assets/js/scripts.js"></script>

</body>
</html>