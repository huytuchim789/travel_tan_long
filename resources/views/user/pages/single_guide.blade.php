@extends('user.layouts.app')

@section('main-content')
<div class="inner-banner style-6">
	<img class="center-image" src="{{ asset('user/img/detail/bg_3.jpg') }}" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h2 class="color-white">Tour Guide Details</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="detail-wrapper">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<b><h4>Guide image : </h4></b><br>
					<img height="300" width="300" class="img-fluid img-thumbnail" src="{{ Storage::disk('local')->url($guide->image) }}" class="">
					<div class="card-body">
						<br>
						<b><h4>Guide Name : </h4></b>
						<h2>{{ $guide->name }}</h2><br>
						<h4>Age: {{ $guide->age }}</h4><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection