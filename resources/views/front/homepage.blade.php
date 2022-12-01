@extends('front.layouts.master')
@section('content')
<!-- START POPUP -->
<header class="header_wrap dark_skin fixed-top">

	<div class="container">
    	<nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="">
                <img class="logo_light" src="{{asset('front')}}/Morus-Html/assets/images/logo_white.png" alt="logo" />
                <img class="logo_dark" style="width: 170px" src="{{asset('front')}}/Morus-Html/assets/images/logo_dark.png" alt="logo"  />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li><a class="nav-link nav_item" href="/">Anasayfa</a></li>
                <li><a class="nav-link nav_item" href="/about">Hakkımızda</a></li>
                <li><a class="nav-link nav_item" href="/news">Haberler</a></li>
                <li><a class="nav-link nav_item" href="/travel">Gezi Rehberi</a></li> 
                <li><a class="nav-link nav_item" href="/contact">İletişim</a></li>  
</header>
<!-- START SECTION BANNER -->
<div class="banner_section staggered-animation-wrap slide_medium">
    <div class="carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-items="1" data-dots="false" data-nav="true" data-smart-speed="1500">
    @foreach($news as $new)
        <div class="item active background_bg overlay_bg_60" data-img-src="{{$new->image}}">
            <div class="banner_slide_content">
            <!-- START CONTAINER -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-8 col-sm-12">
                            <div class="banner_content">
                                <div class="blog_tags">
                                    <a class="blog_tags_cat bg_warning" href="#">{{$new->getCategory->name}}</a>
                                </div>
                                <h2 class="blog_heading"><a href="{{route('new.single',$new->id)}}">{{$new->title}}</a></h2>
                                <ul class="blog_meta">
                                    <li>
                                        <a href="#">
                                            <span>{{$new->getYazar->name}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-comments"></i>
                                            <span>{{$new->hit}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
            </div>
        </div>
    @endforeach
    </div>
</div>
<!-- END SECTION BANNER --> 


<!-- START BLOG WITH SIDEBAR -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8">
            	<div class="blog_article">
                	<div class="blog_post">
                    @foreach($news as $new)
                        <div class="blog_img">
                            <a href="{{route('new.single',$new->id)}}">
                            	<img src="{{$new->image}}">
                            </a>
                        </div>
                        <div class="blog_content">
                        	<div class="blog_text">
                        		<div class="blog_tags">
                                
                                    <a class="blog_tags_cat bg_blue" href="{{route('new.single',$new->id)}}">{{$new->getCategory->name}}</a>
                                </div>
                        		<h5 class="blog_heading"><a href="{{route('new.single',$new->id)}}">{{$new->title}}</a></h5>
                        		<p>{{str_limit($new->content,50)}}</p>
                        	</div>
                        </div>
                    @if(!$loop->last)
                    <hr>
                    @endif
                    @endforeach
                    </div>
                </div>
                <ul class="pagination justify-content">
                {{$news->links('pagination::bootstrap-4')}}
                </ul>
            </div>
            <div class="col-lg-4">
            	<div class="sidebar mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="widget">
                    	<h5 class="widget_title">Kategoriler</h5>
                        @foreach($categories as $category)
                        <ul class="widget_categories @if($loop->first) active @endif">
                        	<li><a href="{{route('category',$category->slug)}}"><div class="cat_bg background_bg overlay_bg_50" ><div class="post_category"><span class="cat_title">{{$category->name}}</span><span class="cat_num">{{$category->newsCount()}}</span></div></div></a></li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BLOG WITH SIDEBAR -->