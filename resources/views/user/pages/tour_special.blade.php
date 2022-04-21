@extends('user.layouts.app')

@section('head')
	<style>	
		.pagination {
			left: 10%;
		}
	</style>
@endsection

@section('main-content')
<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="{{ asset('user/img/inner/bg_6.jpg') }}" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<ul class="banner-breadcrumb color-white clearfix">
						<li><a class="link-blue-2" href="#">home</a> /</li>
						<li><span>Tour</span></li>
					</ul>
					<h2 class="color-white">Tour</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<!-- S_NEWS-ENTRY -->
<div class="main-wraper padd-120">
	<div class="container">
		<div class="blog-grid row">

			@foreach ($specialTours as $blog)				
			<div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
				<div class="s_news-entry style-2">
					<a href="{{ route('singleSpecial.tour', $blog->slug) }}"><img style="height: 250px;" class="s_news-img img-responsive" src="{{ Storage::disk('local')->url($blog->image) }}" alt=""></a>
					<h4 class="s_news-title"><a href="{{ route('singleSpecial.tour', $blog->slug) }}">{{ str_limit($blog->title, 35) }}</a></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="{{ asset('user/img/calendar_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">{{ $blog->created_at->diffForHumans() }}</span>
						</div>
						<div class="tour-info fl">
							<img src="{{ asset('user/img/people_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">By Emma Stone</span>
						</div>
						<div class="tour-info fl">
							<img src="{{ asset('user/img/comment_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">10 comments</span>
						</div>						
					</div>
					<a href="{{ route('singleSpecial.tour', $blog->slug) }}" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>						  	 	
				</div>				
			</div>
			@endforeach
			
		</div>
		<div>
			{{ $specialTours->links() }}
		</div>
	</div>
</div>
@endsection