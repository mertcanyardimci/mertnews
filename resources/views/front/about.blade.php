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
            		<h1>Hakkımızda</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Hakkımızda</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB --> 

<!-- START ABOUT US -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8">
                <h4>Kuruluşumuz Hakkında</h4>
                <p>Ekip olarak yazılı medyanın geleceği için editöryel ürünler, yazılımlar, alternatif içerik ve gelir modelleri üretiyoruz. E-bültenlerimizde Türkiye ve dünya medyasından gelişmeleri "tarafsız ve özgün" bir şekilde özetlerken özel dosya konuları, araştırma yazıları, yeni teknolojiler, bilgilendirme amaçlı içerikler ve incelemeler üzerine çalışıyoruz.</p>
                <blockquote class="blockquote_style1">
                    <p>Ulusal Ölçekte Yayın Yapan Gazetemiz, Türkiye Gündemi ve Dünya medyasını güncel olarak anlık takip etmektedir, ayrıca ajanslardan servis edilen haberleri zaman kaybetmeden okurlara sunulmasını ilke edinmiştir.</p>
                </blockquote>
                <p>Ekip olarak 15 yıldır kamu ve özel sektöre yazılım üreten, medya gelişim süreçlerine doğrudan dokunan başladığı projeleri başarıyla gerçekleştiren, Türkiye'de yeni bir dijital medya akımının geleceğine inanan, güçlü Türkiye’nin geleceği için “dijital kültür ve dijital içeriklere” odaklanarak, verimli anlayışlar ve davranışlar geliştirmeye çalışan, yeni nesil “dijital medya” haber ajansıdır.</p>
            </div>
            <div class="col-lg-4">
            	<div class="sidebar pt-3 pt-lg-0">
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
</div>
<!-- END ABOUT US -->
