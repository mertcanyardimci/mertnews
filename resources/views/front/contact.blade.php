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

<!-- START CONTACT -->
<div class="section">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-9">
            	<div class="heading_s1 text-center">
                	<h2>Bize Ulaşın</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
            	<div class="field_form">
                    <form method="post" action="{{route('contact.post')}}">
                      @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                            	<label>İsim<span class="required">*</span></label>
                                <input id="first-name" class="form-control" name="name" required>
                             </div>
                            <div class="form-group col-md-6">
                            	<label>Email<span class="required">*</span></label>
                                <input id="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Telefon<span class="required">*</span></label>
                                <input id="phone" class="form-control" name="phone" type="number"required>
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Konu</label>
                                <select class="form-control" name="topic">
                                    <option>Seçiniz</option>
                                    <option>Bilgi</option>
                                    <option>Şikayet</option>
                                    <option>Genel</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                            	<label>Mesaj<span class="required">*</span></label>
                                <textarea id="description" class="form-control" name="message" rows="4"required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START CONTACT -->