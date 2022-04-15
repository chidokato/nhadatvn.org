@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')

@include('layout.header')

<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
	<div class="slide kenburns" data-bg-image="images/slider/notgeneric_bg3.jpg">
		<div class="bg-overlay"></div>
		<div class="container">
			<div class="slide-captions text-center text-light">
				<h1>SỔ TAY TIÊU DÙNG</h1>
				<p>Hãy là “người tiêu dùng thông thái” ... Đó là thông điệp xuyên suốt mà các chuyên gia, các nhà quản lý cùng nhà báo muốn chuyển tải tới độc giả của Nhân Dân ...</p>
				<div><a href="#" class="btn scroll-to">Tìm hiểu ngay</a></div>
			</div>
		</div>
	</div>
</div>

<!-- <section class="p-b-0">
	<div class="container">
		<div class="heading-text heading-section">
			<h2>Review </h2>
			<span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo
			consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
			consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>
		</div>
	</div>
<div class="portfolio">
<div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
	<div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
	<div class="portfolio-item-wrap">
	<div class="portfolio-slider">
	<div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
	<a href="#"><img src="images/portfolio/64.jpg" alt=""></a>
	<a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
	</div>
	</div>
	</div>
	</div>

	<div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
	<div class="portfolio-item-wrap">
	<div class="portfolio-image">
	<a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
	</div>
	<div class="portfolio-description">
	<a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/83l.jpg"><i class="icon-maximize"></i></a>
	<a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
	</div>
	</div>
	</div>

	<div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
	<div class="portfolio-item-wrap">
	<div class="portfolio-image">
	<a href="#"><img src="images/portfolio/61.jpg" alt=""></a>
	</div>
	<div class="portfolio-description">
	<a href="portfolio-page-grid-gallery.html">
	<h3>Let's Go Outside</h3>
	<span>Illustrations / Graphics</span>
	</a>
	</div>
	</div>
	</div>


	<div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
	<div class="portfolio-item-wrap">
	<div class="portfolio-image">
	<a href="#"><img src="images/portfolio/65.jpg" alt=""></a>
	</div>
	<div class="portfolio-description" data-lightbox="gallery">
	<a title="Photoshop Mock-up!" data-lightbox="gallery-image" href="images/portfolio/80l.jpg"><i class="icon-copy"></i></a>
	<a title="Paper Pouch!" data-lightbox="gallery-image" href="images/portfolio/81l.jpg" class="hidden"></a>
	<a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg" class="hidden"></a>
	<a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
	</div>
	</div>
	</div>


<div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
<div class="portfolio-item-wrap">
<div class="portfolio-image">
<a href="#"><img src="images/portfolio/66.jpg" alt=""></a>
</div>
<div class="portfolio-description">
<a href="portfolio-page-grid-gallery.html">
<h3>Last Iceland Sunshine</h3>
<span>Graphics</span>
</a>
</div>
</div>
</div>


<div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
<div class="portfolio-item-wrap">
<div class="portfolio-image">
<a href="#"><img src="images/portfolio/67.jpg" alt=""></a>
</div>
<div class="portfolio-description">
<a title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
<a href="portfolio-page-grid-gallery.html"><i class="icon-link"></i></a>
</div>
</div>
</div>


<div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
<div class="portfolio-item-wrap">
<div class="portfolio-slider">
<div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
<a href="#"><img src="images/portfolio/68.jpg" alt=""></a>
<a href="#"><img src="images/portfolio/71.jpg" alt=""></a>
</div>
</div>
</div>
</div>


<div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
<div class="portfolio-item-wrap">
<div class="portfolio-image">
<a href="#"><img src="images/portfolio/69.jpg" alt=""></a>
</div>
<div class="portfolio-description">
<a href="portfolio-page-grid-gallery.html">
<h3>Luxury Wine</h3>
<span>Graphics / Branding</span>
</a>
</div>
</div>
</div>

</div>

</div>
</section> -->



<!-- <section>
<div class="container">
<div class="heading-text heading-section text-center">
<h2>SERVICES</h2>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
<div class="row">
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-plug"></i></a>
</div>
<h3>Powerful template</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-desktop"></i></a>
</div>
<h3>Flexible Layouts</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-cloud"></i></a>
</div>
<h3>Retina Ready</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="far fa-lightbulb"></i></a>
</div>
<h3>Fast processing</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-trophy"></i></a>
</div>
<h3>Unlimited Colors</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-thumbs-up"></i></a>
</div>
<h3>Premium Sliders</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-rocket"></i></a>
</div>
<h3>Modern Design</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-flask"></i></a>
</div>
<h3>Clean Modern Code</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
<div class="icon-box effect medium border small">
<div class="icon">
<a href="#"><i class="fa fa-umbrella"></i></a>
</div>
<h3>Free Updates & Support</h3>
<p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
</p>
</div>
</div>
</div>
</div>
</section>


<section class="text-light p-t-150 p-b-150 " data-bg-parallax="images/parallax/12.jpg">
<div class="bg-overlay"></div>
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="text-center">
<div class="icon"><i class="fa fa-3x fa-code"></i></div>
<div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>LINES OF CODE</p>
</div>
</div>
<div class="col-lg-3">
<div class="text-center">
<div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
<div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>CUPS OF COFFEE</p>
</div>
</div>
<div class="col-lg-3">
<div class="text-center">
<div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
<div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>FINISHED PROJECTS</p>
</div>
</div>
<div class="col-lg-3">
<div class="text-center">
<div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
<div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>SATISFIED CLIENTS</p>
</div>
</div>
</div>
</div>
</section> -->



<section class="content background-grey">
<div class="container">
<div class="heading-text heading-section">
<h2>BẢN TIN MỚI NHẤT</h2>
<!-- <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span> -->
</div>
<div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
@foreach($articles as $val)
<div class="post-item border">
<div class="post-item-wrap">
<div class="post-image">
	<a href="{{$val->category->slug}}/{{$val->slug}}">
	<img data-src="data/news/{{$val->img}}" class="lazyload" >

	</a>
	<span class="post-meta-category"><a href="#">{{$val->category->name}}</a></span>
</div>
<div class="post-item-description">
 <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
<span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
Comments</a></span>
<h2><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h2>
<p class="detail">{{$val->detail}}</p>
<a href="{{$val->category->slug}}/{{$val->slug}}" class="item-link">Xem thêm <i class="icon-chevron-right"></i></a>
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>



<section class="p-t-60">
<div class="container">
<div class="heading-text heading-section text-center">
<h2>KHÁCH HÀNG & ĐỐI TÁC</h2>
<span class="lead">Những khách hàng tuyệt vời của chúng tôi, chúng tôi rất hân hạnh được làm việc cùng họ! </span>
 </div>
<div class="carousel client-logos" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay="3000" data-loop="true">
	<div>
		<a href="#"><img data-src="images/clients/1.png" class="lazyload"> </a>
	</div>
	<div>
		<a href="#"><img data-src="images/clients/2.png" class="lazyload"> </a>
	</div>
	<div>
		<a href="#"><img data-src="images/clients/3.png" class="lazyload"> </a>
	</div>
	<div>
		<a href="#"><img data-src="images/clients/4.png" class="lazyload"> </a>
	</div>
	<div>
		<a href="#"><img data-src="images/clients/5.png" class="lazyload"> </a>
	</div>
	<div>
		<a href="#"><img data-src="images/clients/6.png" class="lazyload"> </a>
	</div>
	
</div>
</div>
</section>



<section class="background-grey">
<div class="container">
<div class="heading-text heading-section text-center">
<h2>ĐỘI NGŨ NHÂN SỰ</h2>
<!-- <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus. -->
</p>
</div>
<div class="row team-members">
<div class="col-lg-3">
<div class="team-member">
<div class="team-image">
<img data-src="images/team/6.jpg" class="lazyload">
</div>
<div class="team-desc">
<h3>Alea Smith</h3>
<span>Software Developer</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
<div class="align-center">
<a class="btn btn-xs btn-slide btn-light" href="#">
<i class="fab fa-facebook-f"></i>
<span>Facebook</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
<i class="fab fa-twitter"></i>
<span>Twitter</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
<i class="fab fa-instagram"></i>
<span>Instagram</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
<i class="icon-mail"></i>
<span>Mail</span>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="team-member">
<div class="team-image">
<img data-src="images/team/7.jpg" class="lazyload">
</div>
 <div class="team-desc">
<h3>Ariol Doe</h3>
<span>Software Developer</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
<div class="align-center">
<a class="btn btn-xs btn-slide btn-light" href="#">
<i class="fab fa-facebook-f"></i>
<span>Facebook</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
<i class="fab fa-twitter"></i>
<span>Twitter</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
<i class="fab fa-instagram"></i>
<span>Instagram</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
<i class="icon-mail"></i>
<span>Mail</span>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="team-member">
<div class="team-image">
<img data-src="images/team/8.jpg" class="lazyload">
</div>
<div class="team-desc">
<h3>Emma Ross</h3>
<span>Software Developer</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
<div class="align-center">
<a class="btn btn-xs btn-slide btn-light" href="#">
<i class="fab fa-facebook-f"></i>
<span>Facebook</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
<i class="fab fa-twitter"></i>
<span>Twitter</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
<i class="fab fa-instagram"></i>
<span>Instagram</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
<i class="icon-mail"></i>
<span>Mail</span>
</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="team-member">
<div class="team-image">
<img data-src="images/team/9.jpg" class="lazyload">
</div>
<div class="team-desc">
<h3>Victor Loda</h3>
<span>Software Developer</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
<div class="align-center">
<a class="btn btn-xs btn-slide btn-light" href="#">
<i class="fab fa-facebook-f"></i>
<span>Facebook</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
<i class="fab fa-twitter"></i>
<span>Twitter</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
<i class="fab fa-instagram"></i>
<span>Instagram</span>
</a>
<a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
<i class="icon-mail"></i>
<span>Mail</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
