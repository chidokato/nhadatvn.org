@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')



<!------------------- HERO ------------------->
<section class="sec-hero">
	<div class="hero-slider">
		<div class="swiper">
			<div class="swiper-wrapper">
				@foreach($slider as $val)
				<div class="swiper-slide"><span style='background-image: url("data/themes/{{$val->img}}")' class="w-100 thumb"></span></div>
				@endforeach
			</div>
			<div class="swiper-navigator">
				<div class="swiper-pagination"></div>
				<div class="swiper-navigator-btn">
					<div class="swiper-button-prev"><i class="icon-prev-thin"></i></div>
					<div class="swiper-button-next"><i class="icon-next-thin"></i></div>
				</div>
			</div>
		</div>
	</div>
</section>


<!------------------- PRODUCT HOT ------------------->
<section class="sec-product-hot">
	<div class="container">
		<div class="product-hot-slider">
			<div class="position-relative grid-view">
				<div class="swiper">
					<div class="swiper-wrapper">
						@foreach($articles as $val)
						<div class="swiper-slide">
							<div class="card card-s card-s4">
								<span class="hot"><img src="frontend/images/new-label.png"></span>
								<a href="sale-detail.htm">
									<span><img src="data/product/{{$val->img}}" class="card-img-top" style="background-image: url('data/product/{{$val->img}}');" alt="..."></span>
									<div class="card-price">Giá: <span class="current-price">4,3 tỷ</span><span class="old-price"></span></div>
								</a>
								<div class="card-body">
									<div class="card-body-wrap">
										<h5 class="card-title"><a href="#" class="text-truncate">Serena Valley Thanh Lanh Golf And Resort</a></h5>
										<div class="card-info">
											<span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
										</div>
										<p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn 2 ngủ diện tích thông thủy 78m2 full đồ, khách mua chỉ cần dọn quần áo đến có thể ở ngay</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</div>
</section>

<!------------------- PRODUCT SALE ------------------->
<section class="sec-product-sale">
	<div class="container">
		<div class="cover-title-home">
			<div class="text-start cover-content">
				<div class="cover-title">
					<h3><span class="position-relative">Sản phẩm đang bán</span></h3>
				</div>
			</div>
		</div>

		<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 g-lg-4 grid-view">
			@foreach($articles as $val)
			<div class="col">
				<div class="card card-s card-s4">
					<!-- <span class="hot"><img src="frontend/images/new-label.png"></span> -->
					<a href="sale-detail.htm">
						<span><img src="data/product/{{$val->img}}" class="card-img-top" style="background-image: url('data/product/{{$val->img}}');" alt="..."></span>
					</a>
					<div class="card-body card-body-new">
						<div class="card-body-wrap">
							<h5 class="card-title "><a href="#" class="text-truncate-set text-truncate-set-1">Bán Gấp Nhà Phố Trung Yên Cầu Giấy 50m2 Gara ÔTÔ 6 Tầng 9 Tỷ</a></h5>
							<div class="card-info">
								<span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
							</div>
							<p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn 2 ngủ diện tích thông thủy 78m2 full đồ, khách mua chỉ cần dọn quần áo đến có thể ở ngay</p>
						</div>
						<div class="card-footer">
							<div class="card-price"><span class="current-price"><span>Giá: </span> 4,3 tỷ</span><span class="old-price"></span></div>
							<span></span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		
	</div>
</section>

@endsection
