@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('css')
<link href="frontend/css/bootstrap.min.css" rel="stylesheet">

<link href="frontend/css/swiper-bundle.min.css" rel="stylesheet">
<link href="frontend/css/fonts.css" rel="stylesheet">
<link href="frontend/css/common.css" rel="stylesheet">
<link href="frontend/css/header.css" rel="stylesheet">
<link href="frontend/css/footer.css" rel="stylesheet">
<link href="frontend/css/sort.css" rel="stylesheet">
<link href="frontend/css/card.css" rel="stylesheet">
<link href="frontend/css/form.css" rel="stylesheet">
<link href="frontend/css/simpleLightbox.css" rel="stylesheet">
<link href="frontend/css/home.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')

<!------------------- HERO ------------------->
@include('layout.slider')

<!------------------- PRODUCT HOT ------------------->
<section class="sec-product-hot">
	<div class="container">
		<div class="cover-title-home">
			<div class="text-start">
				<div class="cover-title">
					<h2><span class="cover-title-filled cover-title-sub">Sản phẩm nổi bật</span></h2>
				</div>
			</div>
		</div>

		<div class="product-hot-slider">
			<div class="position-relative grid-view">
				<div class="swiper">
					<div class="swiper-wrapper">
						@foreach($articles as $val)
						<div class="swiper-slide">
							<div class="card card-s card-s4">
								<span class="hot"><img src="frontend/images/new-label.png"></span>
								<a href="{{$val->category->slug}}/{{$val->slug}}">
									<span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('data/product/{{$val->img}}');" alt="..."></span>
									<div class="card-price">Giá: <span class="current-price"> @if($val->product->price!='') {{$val->product->price}} {{$val->product->unit_price==1? 'VNĐ':''}}{{$val->product->unit_price==1000000? 'Tr':''}}{{$val->product->unit_price==1000000000? 'Tỷ':''}} @else Liên hệ @endif </span><span class="old-price"> @if($val->product->oldprice>0) {{$val->product->oldprice}} {{$val->product->unit_price==1? 'VNĐ':''}}{{$val->product->unit_price==1000000? 'Tr':''}}{{$val->product->unit_price==1000000000? 'Tỷ':''}} @endif </span></div>
								</a>
								<div class="card-body">
									<div class="card-body-wrap">
										<h5 class="card-title"><a href="{{$val->category->slug}}/{{$val->slug}}" class="text-truncate">{{$val->name}}</a></h5>
										<div class="card-info">
											<span><i class="icon-location me-2"></i>
												{{isset($val->product->street->name)? $val->product->street->name:''}}{{isset($val->product->district->name)? ', '.$val->product->district->name:''}}{{isset($val->product->province->name)? ', '.$val->product->province->name:''}}
											</span>
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
<section class="sec-product-sale home-page">
	<div class="container">
		<div class="cover-title-home">
			<div class="text-start">
				<div class="cover-title">
					<h2><span class="cover-title-filled">Sản phẩm đang bán</span></h2>
				</div>
			</div>
		</div>

		<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 g-lg-4 grid-view">
			@foreach($articles as $val)
			<div class="col">
				<div class="card card-s card-s4">
					<!-- <span class="hot"><img src="frontend/images/new-label.png"></span> -->
					<a href="{{$val->category->slug}}/{{$val->slug}}">
						<span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('data/product/{{$val->img}}');" alt="..."></span>
					</a>
					<div class="card-body">
						<div class="card-body-wrap">
							<h5 class="card-title "><a href="{{$val->category->slug}}/{{$val->slug}}" class="text-truncate-set text-truncate-set-1">{{$val->name}}</a></h5>
							<div class="card-info">
								<span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
							</div>
							<p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn 2 ngủ diện tích thông thủy 78m2 full đồ, khách mua chỉ cần dọn quần áo đến có thể ở ngay</p>
						</div>
						<div class="card-footer">
							<div class="card-price"><span class="current-price"><span>Giá: </span> @if($val->product->price!='') {{$val->product->price}} {{$val->product->unit_price==1? 'VNĐ':''}}{{$val->product->unit_price==1000000? 'Tr':''}}{{$val->product->unit_price==1000000000? 'Tỷ':''}} @else Liên hệ @endif </span><span class="old-price">  @if($val->product->oldprice>0) {{$val->product->oldprice}} {{$val->product->unit_price==1? 'VNĐ':''}}{{$val->product->unit_price==1000000? 'Tr':''}}{{$val->product->unit_price==1000000000? 'Tỷ':''}} @endif  </span></div>
							<span></span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		
	</div>
</section>

<!------------------- REVIEW ------------------->
<section class="new-home">
	<div class="container">
		<div class="cover-title-home">
			<div class="text-start">
				<div class="cover-title">
					<h2><span class="cover-title-filled cover-title-sub">Tin tức mới nhất</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="review-project-content ">
					<div class="position-relative pt-3">
						@foreach($articles_news as $key => $val)
						@if($key==0)
						<div class="review-project-item review-project-item-lg">
							<a href="{{$val->category->slug}}/{{$val->slug}}" class="news-item row g-lg-5">
								<div class="col-lg-6 mb-3">
									<div class="outline-effect"><span><img src="frontend/images/space-4.gif" style="background-image: url('data/news/{{$val->img}}');" alt="" class="w-100 thumb"></span></div>
								</div>
								<div class="col-lg-6 mb-3 news-item-body">
									<h4>{{$val->name}}</h4>
									<p class="mb-4 text-truncate-set text-truncate-set-4">{{$val->detail}}</p>
									<span class="date"><i class="icon-time me-1"></i>{{date('d/m/Y',strtotime($val->created_at))}}</span>
								</div>
							</a>
						</div>
						@endif
						@endforeach
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-4 align-self-end ps-lg-0">
				<div class="">
					<div class="">
						@foreach($articles_news as $key => $val)
						@if($key>0)
						<div class=" review-project-item review-project-item-sm">
							<a href="{{$val->category->slug}}/{{$val->slug}}" class="news-item">
								<span><img src="frontend/images/space-4.gif" style="background-image: url('data/news/{{$val->img}}')" alt="" class="w-100 thumb"></span>
								<div class="news-item-body">
									<p class="text-truncate-set text-truncate-set-3">{{$val->name}}</p>
									<span class="date"><i class="icon-time me-1"></i>{{date('d/m/Y',strtotime($val->created_at))}}</span>
								</div>
							</a>
						</div>
						@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!------------------- SERVICE ------------------->
<section class="sec-productcity-hp home-page">
	<div class="container position-relative">
		<div class="cover-title-home">
			<div class="text-start">
				<div class="cover-title">
					<h2><span class="cover-title-filled">Sản phẩm trên toàn quốc</span></h2>
				</div>
			</div>
		</div>
		<div class="news-hightlight">
			<div class="row g-3">
				<div class="col-lg-6">
					<a class="card-overlay card-overlay-lg outline-effect" href="#">
						<span class="card-overlay-img"><i class="thumb" style="background-image: url('data/home/hanoi.jpg');"></i></span>
						<div class="card-overlay-body">
							<h2><span>Hà Nội</span></h2>
							<div>100 sản phẩm</div>
						</div>
						<div class="load-more overlay-center text-center">
							<div class="zoom-ico"><i class="icon-search"></i></div>
						</div>
					</a>
				</div>
				<div class="col-lg-3">
					<div class="card-overlay-flex">
						<a class="card-overlay card-overlay-sm outline-effect" href="#">
							<span class="card-overlay-img"><img src="frontend/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('data/home/quangninh.jpg');"></span>
							<div class="card-overlay-body">
								<h2><span>Quảng Ninh</span></h2>
								<div>100 sản phẩm</div>
							</div>
							<div class="load-more overlay-center text-center">
								<div class="zoom-ico"><i class="icon-search"></i></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-overlay-flex">
						<a class="card-overlay card-overlay-sm outline-effect" href="#">
							<span class="card-overlay-img"><img src="frontend/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('data/home/vinhphuc.jpg');"></span>
							<div class="card-overlay-body">
								<h2><span>Vĩnh phúc</span></h2>
								<div>100 sản phẩm</div>
							</div>
							<div class="load-more overlay-center text-center">
								<div class="zoom-ico"><i class="icon-search"></i></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-overlay-flex">
						<a class="card-overlay card-overlay-sm outline-effect" href="#">
							<span class="card-overlay-img"><img src="frontend/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('data/home/haiphong.jpg');"></span>
							<div class="card-overlay-body">
								<h2><span>Hải Phòng</span></h2>
								<div>100 sản phẩm</div>
							</div>
							<div class="load-more overlay-center text-center">
								<div class="zoom-ico"><i class="icon-search"></i></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-overlay-flex">
						<a class="card-overlay card-overlay-sm outline-effect" href="#">
							<span class="card-overlay-img"><img src="frontend/images/space-2.gif" alt="" class="w-100 thumb" style="background-image: url('data/home/bacninh.jpg');"></span>
							<div class="card-overlay-body">
								<h2><span>Bắc Ninh</span></h2>
								<div>100 sản phẩm</div>
							</div>
							<div class="load-more overlay-center text-center">
								<div class="zoom-ico"><i class="icon-search"></i></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-6">
					<a class="card-overlay card-overlay-lg outline-effect" href="#">
						<span class="card-overlay-img"><i class="thumb" style="background-image: url('data/home/phutho.jpg');"></i></span>
						<div class="card-overlay-body">
							<h2><span>Phú Thọ</span></h2>
							<div>100 sản phẩm</div>
						</div>
						<div class="load-more overlay-center text-center">
							<div class="zoom-ico"><i class="icon-search"></i></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------------- END SERVICE ------------------->

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/select2.min.js"></script>
<script src="frontend/js/select2-searchInputPlaceholder.js"></script>

<script src="frontend/js/swiper-bundle.min.js"></script>
<script src="frontend/js/simpleLightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="frontend/js/custom.js"></script>

<script>
        var swiper1 = new Swiper(".broker-slider .swiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".broker-slider .swiper-pagination",
                clickable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: ".broker-slider .swiper-button-next",
                        prevEl: ".broker-slider .swiper-button-prev",
                    },
                }
            },
        });

        var swiper2 = new Swiper(".agent-partner-slider .swiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".agent-partner-slider .swiper-pagination",
                clickable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: ".agent-partner-slider .swiper-button-next",
                        prevEl: ".agent-partner-slider .swiper-button-prev",
                    },
                }
            },
        });

        var swiper3 = new Swiper(".service-slider .swiper", {
            slidesPerView: 2,
            spaceBetween: 0,
            pagination: {
                el: ".agent-partner-slider .swiper-pagination",
                clickable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                }
            },
        });

        var swiper4 = new Swiper(".review-project-content .swiper", {
            slidesPerView: 2,
            spaceBetween: 0,
            pagination: {
                el: ".review-project-content .swiper-pagination",
                clickable: true,
            },
        });

        var swiper5 = new Swiper(".thumb-ads-slider .swiper", {
            spaceBetween: 2,
            lazy: true,
            slidesPerView: "auto",
            freeMode: true,
            watchSlidesProgress: true,
            // autoplay: {
            //   delay: 2500,
            // },
        });
        var swiper6 = new Swiper(".main-ads-slider .swiper", {
            spaceBetween: 0,
            lazy: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            thumbs: {
                swiper: swiper5,
            },
        });

        var swiper7 = new Swiper(".product-hot-slider .swiper", {
			slidesPerView: 3,
			loop: true,
			spaceBetween: 30,
			grabCursor: true,
			centeredSlides: true,
			effect: "coverflow",
			coverflowEffect: {
				rotate: 0,
				stretch: 0,
				scale:.9,
				depth: 0,
				modifier: 1,
				slideShadows : false,
			},
			pagination: {
				el: ".product-hot-slider .swiper-pagination",
				clickable: true,
			},
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 2,
					spaceBetween: 0,
					coverflowEffect: {
						
						depth: 10,
					}
				},
				// when window width is >= 480px
				768: {
					slidesPerView: 2,
					spaceBetween: 0,
				},
				// when window width is >= 640px
				1024: {
					slidesPerView: 3,
					spaceBetween: 0,
					navigation: {
						nextEl: ".product-hot-slider .swiper-button-next",
						prevEl: ".product-hot-slider .swiper-button-prev",
					},
				}
			},	
		});


        var swiper8 = new Swiper(".hero-slider .swiper", {
            spaceBetween: 0,
            effect: "fade",
            lazy: true,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".hero-slider .swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".hero-slider .swiper-button-next",
                prevEl: ".hero-slider .swiper-button-prev",
            },
        });
    </script>
<script>
	$('.select2').select2({
		searchInputPlaceholder: "Tìm danh mục",
	});
	// $('.select2-inner-dropdown').select2({ 
	// 	searchInputPlaceholder: "Nhập từ khóa",
	// 	dropdownParent: $('.form-more .dropdown-menu') 
	// });
</script>

@endsection