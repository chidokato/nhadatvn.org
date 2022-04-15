<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="data/favicon.png" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:site_name" content="site_name" />
<meta property="og:images" content="@yield('img')" />
<meta property="og:image" content="@yield('img')" />
<meta property="og:image:alt" content="@yield('title')" />
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<!-- and twitter -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />
<!-- ================= Style ================== --> 
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
@yield('css')



<!-- ================= js ================== --> 
<link href="frontend/css/tuan.css" rel="stylesheet">

{!! $head_setting->codeheader !!}

</head>
@include('layout.function')
<body> 
@include('layout.header')

@yield('content')

@include('layout.footer')

<!------------------- JS core------------------->
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/custom.js"></script>
<script src="frontend/js/swiper-bundle.min.js"></script>
<script src="frontend/js/simpleLightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="frontend/js/chart.nhaongay.js"></script>
<script>
	const myChart = new Chart(
	  document.getElementById('fluctuatingPrice'),
	  fluctuatingPrice,
	);

	new SimpleLightbox({elements: '.main-ads-slider a'});
</script>
<!-- Initialize Swiper -->
<script>
		var swiper1 = new Swiper(".broker-slider .swiper", {
			slidesPerView: 1,
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
					spaceBetween: 10
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
			slidesPerView: 1,
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
			slidesPerView: 1,
			spaceBetween: 0,
			pagination: {
				el: ".service-slider .swiper-pagination",
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
			slidesPerView: 1,
			spaceBetween: 0,
			pagination: {
				el: ".review-project-content .swiper-pagination",
				clickable: true,
			},	
		});

		var swiper5 = new Swiper(".thumb-ads-slider .swiper", {
			spaceBetween:1,
			lazy: true,
			slidesPerView:"auto",
			freeMode: true,
			watchSlidesProgress: true,
			// autoplay: {
			//   delay: 2500,
			// },
		});
    	var swiper6 = new Swiper(".main-ads-slider .swiper", {
			spaceBetween:0,
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
					slidesPerView: 1,
					spaceBetween: 0
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

@yield('script')

{!! $head_setting->codebody !!}
</body>
</html>