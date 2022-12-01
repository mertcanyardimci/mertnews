<!DOCTYPE html>
<html lang="tr">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Templatemanja" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Morus is a very clean and modern Magazine / Blog Html Template. It's perfect for fast blogging, livestreams and classic blogs">
<meta name="keywords" content="	blog, clean, newspaper, personal blog, magazine, sport, travel, minimal, personal, elegant, lifestyle, post, blogger, blog template.">

<!-- SITE TITLE -->
<title>MertNews</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('front')}}/Morus-Html/assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/themify-icons.css">
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/linearicons.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/all.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/style.css">
<link rel="stylesheet" href="{{asset('front')}}/Morus-Html/assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <div class="sk-folding-cube">
		<div class="sk-folding-cube-box">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
</div>
<!-- END LOADER -->

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
            		<h1>{{$category->name. ' Kategorisi'}}</h1>
                </div>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START FOOTER SECTION --> 
<footer class="footer_dark bg_black">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-8 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="index-6.html"><img src="{{asset('front')}}/Morus-Html/assets/images/logo_white.png" alt="logo"></a>
                        </div>
                        <p>Meraklarımızı, deneyimlerimizi, yaptığımız işleri sizlerle paylaştığımız internet sitemize hoş geldiniz!</p>
                    </div>
                    <div class="widget">
                    	<h6 class="widget_title">Populer Aramalar</h6>
                        <div class="tags">
                        	<a href="#">Haber</a>
                            <a href="#">Ekonomi</a>
                            <a href="#">Spor</a>
                            <a href="#">Moda</a>
                            <a href="#">Yaşam</a>
                            <a href="#">Belgesel</a>
                            <a href="#">Marka</a>
                            <a href="#">Giyim</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-7">
                    <div class="widget">
                        @foreach($news as $new)
                        <ul class="widget_recent_post">
                        	<li>
                        		<div class="post_footer">
                        			<div class="post_img">
                        				<a href="{{route('new.single',$new->id)}}"><img class="rounded-circle" src="{{$new->image}}" alt="letest_post1"></a>
                        			</div>
                                    <div class="post_content">
                                        <h6><a href="{{route('new.single',$new->id)}}">{{$new->title}}</a></h6>
                                        <p class="small m-0">{{$new->updated_at}}</p>
                                    </div>
                                </div>
                        	</li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">İletişim</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                            	<i class="ti-location-pin"></i>
                            	<p>İçerenköy, 34752 Ataşehir/İstanbul</p>
                            </li>
                            <li>
                            	<i class="ti-email"></i>
                            	<a href="mailto:info@sitename.com">info@mertnews.com</a>
                            </li>
                            <li>
                            	<i class="ti-mobile"></i>
                            	<p>02164161616</p>
                            </li>
                        </ul>
                    </div>
                	<div class="widget">
                    	<h5 class="widget_title">Sosyal Medya Hesaplarımız</h5>
                        <ul class="widget_social social_icons rounded_social">
                            <li><a href="https://tr-tr.facebook.com/" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="https://accounts.google.com/" target="_blank" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="https://www.youtube.com/" target="_blank" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="https://tr.pinterest.com/" target="_blank" class="sc_pinterest"><i class="ion-social-pinterest-outline"></i></a></li>
                    	</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="copyright m-0 text-center">© 2022 Tüm Hakları Saklıdır <a href="https://themeforest.net/item/morus-personal-blog-magazine-html-template/26371328" target="_blank" class="text_default">Morus.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION --> 
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