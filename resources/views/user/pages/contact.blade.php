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
						<li><a class="link-blue-2" href="/">Trang</a> /</li>
						<li><a class="link-blue-2" href="#">Đặt tour</a> /</li>
						<li><span>Liên hệ</span></li>
					</ul>
					<h2 class="color-white">Liên hệ</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="detail-wrapper">
<div class="main-wraper padd-40">
	<div class="container">
		@include('includes.errors')
		<div class="row">			
			<div class="col-xs-12 col-sm-8">				
				<form novalidate class="contact-form" action="{{ route('contact.store') }}" method="POST">
					@csrf
					<div class="row">
						{{-- <div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
								<input type="text" name="name" required="" placeholder="Enter your name">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
								<input type="email" name="email" required="" placeholder="Enter your email">
							</div>
						</div> --}}
						<div class="col-xs-12 col-sm-12">
							<div class="input-style-1 type-2 color-2">
								<input type="text" name="tour_title" required="" placeholder="Tên người đăng kí">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 mb-2" style="margin-bottom:22px"> 
							<input type="datetime-local" id="startdate" class="form-control" name="start_date">
						</div>
						<div class="col-xs-12 col-sm-12">
							<div class="input-style-1 type-2 color-2">
								<input type="number" name="date_total" required="" id="date_total" placeholder="Số ngày đi">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12">
							<div class="input-style-1 type-2 color-2">
								<input type="number" name="people" id="people" required="" placeholder="Số người">
							</div>
						</div>
						<div class="col-xs-12">
							<textarea class="area-style-1 color-1" name="message" required="" placeholder="Nhập thông tin người đặt tour"></textarea>
							<div class="contact-info" style="margin-left:8px;margin-bottom:12px;">
								<span name="total" class="color-dark-2"><strong>Tổng tiền:</strong></span name="total">
								<input id="price" type="number" name="price" style="width:75%;">VNĐ
							</div>
							<input type="submit" class="btn btn-lg btn-info" value="Đặt tour" />
						</div>
						<input type="number" value="{{$tour->id}}" name="tour_id" style="visibility:hidden;"/>
					</div>
					{{-- <div class="row" style="margin-left:8px;margin-top:12px;">
					
					</div>					 --}}
				</form>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="contact-about">
					<h4 class="color-dark-2"><strong>Thông tin</strong></h4>
					<p class="color-grey-3">Chi tiết liên hệ</p>					
				</div>
				<div class="contact-info">
					<h4 class="color-dark-2"><strong>Thông tin</strong></h4>
					<div class="contact-line color-grey-3"><img src="img/phone_icon_2_dark.png" alt="">Điện Thoại: <a class="color-dark-2" href="tel:93123456789">01521468423</a></div>					
					<div class="contact-line color-grey-3"><img src="img/mail_icon_b_dark.png" alt="">Email: <a class="color-dark-2 tt" href="#">tanlong1@gmail.com</a></div>					
					<div class="contact-line color-grey-3"><img src="img/loc_icon_dark.png" alt="">Địa chỉ: <span class="color-dark-2 tt">Nguyễn Hồng ,Hà Nội</span></div>
				</div>
				
				<div class="contact-socail">
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-facebook"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-twitter"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-skype"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-instagram"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>			
		</div>
	</div>
</div>
</div>
<script src="{{ asset('user/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('user/js/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.viewportchecker.min.js') }}"></script>
<script src="{{ asset('user/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('user/js/all.js') }}"></script>
<script type="text/javascript">
var tour={!! json_encode($tour) !!};
$("#people").on('change keyup paste', function () {
    var searchString = $("#people").val();
    $("#price").val(0);
	console.log(parseInt($("#date_total").val()?$("#date_total").val():0))
    $("#price").val(parseInt(searchString)*parseInt($("#date_total").val()?$("#date_total").val():0)*tour.price)
});
$("#date_total").on('change keyup paste', function () {
    var searchString = $("#date_total").val();
    $("#price").val(0);
		console.log(parseInt($("#people").val()?$("#people").val():0));
    $("#price").val(parseInt(searchString)*parseInt($("#people").val()?$("#people").val():0)*tour.price)
});
</script>
@endsection
