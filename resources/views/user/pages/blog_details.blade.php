@extends('user.layouts.app')

@section('main-content')
<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="{{ asset('user/img/detail/bg_3.jpg') }}" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<ul class="banner-breadcrumb color-white clearfix">
						<li><a class="link-blue-2" href="#">Trang chủ</a> /</li>
						<li><a class="link-blue-2" href="#">Tin tức</a> /</li>
						<li><span>Chi tiết </span></li>
					</ul>
					<h2 class="color-white">Tin tức</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- BLOG -->
<div class="detail-wrapper">
	<div class="container">
		<div class="row padd-90">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">
				<div class="detail-header style-3">
					<h2 class="detail-title color-dark-2">{{ $blog->title }}</h2>
					<div class="tour-info-line clearfix">
						<div class="tour-info">
							<img src="{{ asset('user/img/calendar_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">{{ $blog->created_at->diffForHumans() }}</span>
						</div>
						<div class="tour-info">
							<img src="{{ asset('user/img/people_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">By Tân Long</span>
						</div>
						<div class="tour-info">
							<img src="{{ asset('user/img/comment_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">10 bình luận</span>
						</div>
					</div>
				</div>
				<div class="detail-content">
					<div class="detail-content-block">
						<div class="slider-wth-thumbs style-2">
							<div class="thumbnails-preview">
								<img width="100%" src="{{ Storage::disk('local')->url($blog->image) }}" alt="">
							</div>
							<p>
								{!! htmlspecialchars_decode($blog->body) !!}
							</p>
							<div class="tags clearfix">
								<div class="tags-title color-dark-2">Danh mục:</div>
								<ul class="clearfix">
									<li>
										@foreach ($blog->categories as $blogCategory)
										<a class="" href="#">{{ $blogCategory->name }}</a>
										@endforeach
									</li>
								</ul>
							</div>
							<div class="tags clearfix">
								<div class="tags-title color-dark-2">tag:</div>
								<ul class="clearfix">
									<li>
										@foreach ($blog->tags as $blogTag)
										<a class="" href="#">{{ $blogTag->name }}</a>
										@endforeach
									</li>							
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection