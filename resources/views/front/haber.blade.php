@extends('front.layouts.master')
@section('content')


<!-- START BLOG -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-4 col-md-6">
                <div class="blog_post">
                    <a ><img src="{{$new->image}}"></a>
                        <div class="blog_content">
                        	<div class="blog_text">
                        		<h5 class="blog_heading"><a>{{$new->title}}</a></h5>
                        		<p>{{($new->content)}}</p>
                                <h5><a>{{$new->getYazar->name}}</a></h5>
                        	</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BLOG --> 
@endsection