@extends('layout.index')

@section('title'){{ isset($articles->title) ? $articles->title : $articles->name }}@endsection
@section('description'){{$articles->description}}@endsection
@section('keywords'){{$articles->keywords}}@endsection
@section('robots'){{ $articles->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$articles->category->slug.'/'.$articles->slug.'.html'}}@endsection

@section('content')

@include('layout.header_page')

<section id="page-content" class="sidebar-right">
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li><a href="{{asset('')}}">Trang chủ</a></li>
				<li><a href="{{$articles->category->slug}}">{{$articles->category->name}}</a></li>
				<li class="active">{{$articles->name}}</li>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<div class="product">
					<div class="row m-b-40">
						<div class="col-lg-8">
							<div class="product-image">
								<div class="demo">
								    <ul class="lightSlider">
								        <li data-thumb="data/product/80/{{$articles->img}}">
								            <img src="data/product/{{$articles->img}}" />
								        </li>
								        @foreach($articles->images as $val)
								        <li data-thumb="data/product/80/{{$val->img}}">
								            <img src="data/product/{{$val->img}}" />
								        </li>
								        @endforeach
								    </ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="product-description">
								<div class="product-category">{{$articles->category->name}}</div>
								<div class="product-title">
									<h3><a>{{$articles->name}}</a></h3>
								</div>
								<div class="product-price"><ins>{{ isset($articles->product->price) && $articles->product->price != '' ? number_format($articles->product->price)."đ" : '' }}</ins></div>
								<div class="product-rate">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
								<div class="product-reviews"><a href="#">{{rand(10,30)}} Đánh giá</a></div>
								<div class="seperator m-b-5"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="fixed_top">
	<div class="container">
		<ul>
			<li><a href="#Tongquanduan">Tổng quan</a></li>
			<li><a href="#Vitri">Vị trí</a></li>
			<li><a href="">sdfsdf</a></li>
		</ul>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="content col-lg-12">
				<div class="product">
					<div class="row m-b-40">
						<div class="col-lg-8">
							<div class="content_product" id="contents">
								{!! $articles->content !!}
								{!! $articles->content !!}
								{!! $articles->content !!}
								{!! $articles->content !!}
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

@endsection

@section('script')
<style type="text/css">
	#fixed_top{ position: sticky; position: -webkit-sticky; top: 50px; z-index: 9999; background: #fff;}
	#fixed_top ul{ display: flex; border-bottom: 1px solid #ddd;}
	#fixed_top ul li{ list-style: none;padding: 5px; }
	#fixed_top ul li a{ padding: 3px 10px; }
	section {padding: 0;}
	.content{ margin-bottom: 0px; }
	#page-content:not(.no-sidebar){padding-bottom: 0px;}
</style>
<link rel="stylesheet" type="text/css" href="frontend/css/lightslider.css">
<script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
<script type="text/javascript">
$('.lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop:true,
    slideMargin: 0,
    thumbItem: 8
});



</script>
@endsection