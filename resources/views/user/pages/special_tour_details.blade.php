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
						<li><a class="link-blue-2" href="/">home</a> /</li>
						<li><a class="link-blue-2" href="/">Special Tour</a> /</li>
						<li><span>Special Tour detail</span></li>
					</ul>
					<h2 class="color-white">Special Tour</h2>
				</div>
				<div class="input-group">
					<div class="form-outline">
						<input type="search" id="form1" class="form-control" />
						<label class="form-label" for="form1">Search</label>
					</div>
					<button type="button" class="btn btn-primary">
						<i class="fas fa-search"></i>
					</button>
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
					<h2 class="detail-title color-dark-2">{{ $specialTour->title }}</h2>
					<div class="tour-info-line clearfix">
						<div class="tour-info">
							<img src="{{ asset('user/img/calendar_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">{{ $specialTour->created_at->diffForHumans() }}</span>
						</div>
						<div class="tour-info">
							<img src="{{ asset('user/img/people_icon_grey.png') }}" alt="">
							<span class="font-style-2 color-dark-2">{{ $specialTour->posted_by }}</span>
						</div>
						<div class="tour-info">
							<span>Guides:</span>
							@foreach($specialTour->guides as $guide)
								<a href="{{ route('show.guide', $guide->id) }}"><span class="font-style-2 color-dark-2">{{ $guide->name }}</span></a>
							@endforeach
						</div>
					</div>
				</div>
				<div class="detail-content">
					<div class="detail-content-block">
						<div class="slider-wth-thumbs style-2">
							<div class="thumbnails-preview">
								<img width="100%" src="{{ Storage::disk('local')->url($specialTour->image) }}" alt="">
							</div>
							<p>
								{!! htmlspecialchars_decode($specialTour->body) !!}
							</p>
						</div>
					</div>
					<a href="{{ route('contact.home',$specialTour->id) }}" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>For booking Contact</span></a>
				</div>
			</div>
		</div>
	</div>

	@endsection