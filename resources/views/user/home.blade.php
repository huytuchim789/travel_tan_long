@extends('user.layouts.app')

@section('main-content')
<div class="top-baner swiper-animate arrows">
	<div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
		<div class="swiper-wrapper">
			<div class="swiper-slide active" data-val="0"> 
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/img/bangladesh-3991311_960_720.jpg') }})">
					</div>
				</div>
				<div class="vertical-align">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-title vert-title">
									<h1 class="color-white delay-1">Du lịch Đà Nẵng<br> 7 ngày giá rẻ</h1>
									<p class="color-white-op delay-2">`Đắm chìm trong một thành phố với thiên nhiên tuyệt đẹp, lễ hội đầy màu sắc, và các dịch vụ có giá trị. Chào mừng bạn đến với du lịch thành phố Đà Nẵng.</p>
									<a href="#" class="c-button bg-aqua hv-transparent delay-2"><span>Xem thêm</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide" data-val="1"> 
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/Discover-sajek-valley.jpg') }})">
					</div>
				</div>
				<div class="vertical-align">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-title vert-title">
									<h1 class="color-white delay-1">Du lịch miền Tây<br> 7 ngày giá rẻ</h1>
									<p class="color-white-op delay-2"> Tây khác với nhiều khu vực khác, đây là nơi tách biệt với những ồn ào, xa hoa của phố thị, người dân đến với địa phương này có thể trải nghiệm giữa không gian yên bình, êm dịu của thiên nhiên, đất trời. Và đặc biệt, bạn cũng có thể cảm nhận được sự chân chất, mộc mạc của người dân nơi đây.</p>
									<a href="#" class="c-button bg-aqua hv-transparent delay-2"><span>Xem thêm</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>    
		<div class="pagination pagination-hidden poin-style-1"></div>
	</div>
	<div class="arrow-wrapp m-200">
		<div class="cont-1170">
			<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
			<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
		</div>
	</div>                 
</div> 

<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Tour du lịch trong nước</h2>
					<p class="color-grey">Cuộc sống tươi đẹp.</p>
					<form action="{{ route('home.tours') }}" method="GET"> 
					<div class="row">
						<div class="col-xs-6 col-md-4">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Nhập tour cần tìm" id="txtSearch" name="search"/>
							<div class="input-group-btn">
							<button class="btn btn-primary" type="submit">
								Tìm kiếm
							</button>
							</div>
						</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<a href="{{ route('home.tours') }}" class="btn btn-primary">Tất cả tour</a><br><br>
		<div class="row">
			@foreach ($tours as $tour)
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="radius-mask tour-block hover-aqua">
						<div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url({{ Storage::disk('local')->url($tour->image) }})">
							</div>
						</div>
						<div class="tour-layer delay-1"></div>
						<div class="tour-caption">
							<div class="vertical-align">
								<h3 class="hover-it">{{ $tour->title }}</h3>
							</div>
							<div class="vertical-bottom">
								<div class="fl">
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-grey-4">{{ $tour->created_at->diffForHumans() }}</span>
									</div>
								</div>   
								<a href="{{ route('single.tour', $tour->slug) }}" class="c-button b-50 bg-aqua hv-transparent fr"><img src="{{ asset('user/img/flag_icon.png') }}" alt=""><span>Đặt tour</span></a>
							</div>
						</div>
					</div>					
				</div>
			@endforeach
		</div>
	</div>
</div> 

<div class="main-wraper">
	<div class="clip">
		<div class="bg bg-bg-chrome" style="background-image:url({{ asset('user/img/home_1/tour_slider_bg.jpg') }})">
		</div>
	</div>
	<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="tour-slide">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-90-90">
								<h3>Từ 960.000VNĐ</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</div>
								<h2>Khách sạn Xương Trạch</h2> 
								<h5>Tháng 4 <b>Ngày 12</b>Tháng 6<b>Ngày 26</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-94-94">
								<h3>Từ 960.000VNĐ</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
								<h2>Khách sạn Bạch Hổ</h2> 
								<h5>Tháng 4 <b>Ngày 12</b>Tháng 6<b>Ngày 26</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-94-94">
								<h3>Từ 960.000VNĐ</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
								<h2>Khách sạn Bạch Hổ</h2> 
								<h5>Tháng 4 <b>Ngày 12</b>Tháng 6<b>Ngày 26</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-94-94">
							<h3>Từ 960.000VNĐ</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
								<h2>Khách sạn Bạch Hổ</h2> 
								<h5>Tháng 4 <b>Ngày 12</b>Tháng 6<b>Ngày 26</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
		</div>
		<div class="pagination poin-style-1"></div>
	</div>
</div>

<div class="main-wraper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Chuyến đi yêu thích</h2>
					<p class="color-grey">“Hãy tìm những chuyến đi không có nơi về"</p>
				</div>
			</div>
		</div>
		<div class="row col-no-padd">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_1.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_2.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_3.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_4.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_5.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_6.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_7.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_8.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_9.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">2.350.000</span></b></h4>
							<a class="hover-it" href="#"><h3>Tour yêu thích</h3></a>
							<h5 class="delay-1">Cần thơ 3N/1D</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="main-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Tour du lịch nước ngoài</h2>
					<p class="color-grey">Chúng tôi là một đại lý mai mối giá cả phải chăng cung cấp một nơi an toàn để tìm một người đích thực đang tìm kiếm điều gì đó đặc biệt với một ai đó và một mối quan hệ.</p>
					<form action="{{ route('home.tours.special') }}" method="GET"> 
					<div class="row">
						<div class="col-xs-6 col-md-4">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Nhập tour cần tìm" id="txtSearch" name="search"/>
							<div class="input-group-btn">
							<button class="btn btn-primary" type="submit">
								Tìm kiếm
							</button>
							</div>
						</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<a href="{{ route('home.tours.special') }}" class="btn btn-primary">Tất cả tour</a><br><br>
		<div class="row">
			<div class="top-baner arrows">
				<div class="swiper-container offers-slider" data-autoplay="5000" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
					<div class="swiper-wrapper">
					@foreach ($specialTours as $specialTour)
						<div class="swiper-slide" data-val="0">
							<div class="offers-block radius-mask">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ Storage::disk('local')->url($specialTour->image) }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-top">
									<h3>{{ $specialTour->title }}</h3>
								</div>
								<div class="vertical-bottom">
									<a href="{{ route('singleSpecial.tour', $specialTour->slug) }}" class="c-button bg-aqua hv-aqua-o b-40"><span>Đặt tour</span></a>
								</div>
							</div> 
						</div>
					@endforeach
					</div>
					<div class="pagination  poin-style-1 pagination-hidden"></div>
				</div>
				<div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
				<div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
			</div>
		</div>
	</div>
</div>

<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Địa điểm phổ biến nhất</h2>
					<p class="color-grey">Chúng tôi mang lại trải nghiệm tốt nhất.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-push-6 col-sm-12">
				<div class="popular-desc text-left">
					<div class="clip">
						<div class="bg bg-bg-chrome act bg-contain" style="background-image:url({{ asset('user/img/home_1/map_1.png') }})">
						</div>
					</div>
					<div class="vertical-align">
						<h3>Phú sĩ, Sapa</h3>
						<p class="color-grey">Sa Pa là một trong những điểm nghỉ mát nổi tiếng của Việt Nam từ xưa, hiện đang được nhiều du khách trong nước và quốc tế tìm tới khám phá, chiêm ngưỡng vẻ đẹp kỳ thú của thiên nhiên ở vùng đất này. Tất cả như một bức tranh nhiều màu sắc nhưng hài hoà về bố cục tạo nên nét đẹp Sapa làm mê hồn du khách. Tour du lịch của Phú Sĩ travel sẽ đưa quý khách tham quan những địa danh nổi tiếng của miền Bắc.</p>
						<h4>TP tuyệt vời nhất</h4>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Hải Phòng</a></li>
									<li><a href="#">Hà Nội</a></li>
									<li><a href="#">Sóc sơn</a></li>
									<li><a href="#">Ninh Bình</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Nghệ An</a></li>
									<li><a href="#">Hà Tĩnh</a></li>
									<li><a href="#">Đà Lạt</a></li>
									<li><a href="#">Cần Thơ</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">TP HCM</a></li>
									<li><a href="#">Tây Ninh</a></li>
									<li><a href="#">Bắc Kan</a></li>
									<li><a href="#">BR-VT</a></li>
								</ul>
							</div>
						</div>
						<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
							<img class="img-hide" src="{{ asset('user/img/flag_icon.png') }}" alt="">
							<img class="img-hov" src="{{ asset('user/img/flag_icon_aqua.png') }}" alt="" >
							<span>Xem tất cả</span></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-md-pull-6 col-sm-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_1.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Đại Lải</a></h4>
									<h5><b class="color-aqua">Chỉ từ 2.350.000</b> một người</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_2.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Lăng Bác</a></h4>
									<h5><b class="color-aqua">Chỉ từ 2.350.000</b> một người</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_3.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Sầm Sơn</a></h4>
									<h5><b class="color-aqua">Chỉ từ 2.350.000</b> một người</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_4.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Phú Quốc</a></h4>
									<h5><b class="color-aqua">Chỉ từ 2.350.000</b> một người</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6 col-sm-12">
					<div class="popular-desc text-right">
						<div class="clip">
							<div class="bg bg-bg-chrome act bg-contain" style="background-image:url({{ asset('user/img/home_1/map_2.png') }})">
							</div>
						</div>
						<div class="vertical-align">
							<h3>Châu Âu</h3>
							<p class="color-grey">Phú Quốc là một hòn đảo nằm trong vịnh Thái Lan và là đảo lớn nhất Việt Nam. Về hành chính, đảo Phú Quốc cùng với các đảo nhỏ hơn ở lân cận và quần đảo Thổ Chu cách 55 hải lý về phía tây nam hợp thành thành phố đảo Phú Quốc trực thuộc tỉnh Kiên Giang.</p>
							<h4>Thành phố tốt nhất</h4>
							<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Hải Phòng</a></li>
									<li><a href="#">Hà Nội</a></li>
									<li><a href="#">Sóc sơn</a></li>
									<li><a href="#">Ninh Bình</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Nghệ An</a></li>
									<li><a href="#">Hà Tĩnh</a></li>
									<li><a href="#">Đà Lạt</a></li>
									<li><a href="#">Cần Thơ</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">TP HCM</a></li>
									<li><a href="#">Tây Ninh</a></li>
									<li><a href="#">Bắc Kan</a></li>
									<li><a href="#">BR-VT</a></li>
								</ul>
							</div>
						</div>
							<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
								<img class="img-hide" src="{{ asset('user/img/flag_icon.png') }}" alt="">
								<img class="img-hov" src="{{ asset('user/img/flag_icon_aqua.png') }}" alt="">
								<span>Xem tất cả</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-sm-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_5.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Hà Lan</a></h4>
									<h5><b class="color-aqua">khoảng $215</b> một người</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_6.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Ukraine</a></h4>
									<h5><b class="color-aqua">khoảng $175</b> một người</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_7.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Đức</a></h4>
									<h5><b class="color-aqua">khoảng $150</b> một người</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_8.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Italia</a></h4>
									<h5><b class="color-aqua">khoảng $290</b> một người</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>        
@endsection