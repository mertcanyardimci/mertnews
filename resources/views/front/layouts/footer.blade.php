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