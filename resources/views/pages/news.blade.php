@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection
@section('css')
<link href="{{asset('')}}frontend/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('')}}frontend/css/fonts.css" rel="stylesheet">
<link href="{{asset('')}}frontend/css/common.css" rel="stylesheet">
<link href="{{asset('')}}frontend/css/header.css" rel="stylesheet">
<link href="{{asset('')}}frontend/css/footer.css" rel="stylesheet">
<link href="{{asset('')}}frontend/css/widget.css" rel="stylesheet">
<link href="{{asset('')}}frontend/css/card.css" rel="stylesheet">
@endsection
@section('content')
<!------------------- BREADCRUMB ------------------->
<section class="sec-breadcrumb">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
			</ol>
		</nav>
	</div>
</section>
<!------------------- END: BREADCRUMB ------------------->
<!------------------- CARD ------------------->
<section class="card-grid news-sec">
	<div class="container">
		<h3 class="text-uppercase title-subpage">{{$category->name}}</h3>
		<div class="row">
			<div class="col-lg-9">
				
				<div class="news-hightlight">
					<div class="row">
						@foreach($articles as $key => $val)
						@if($key==0)
						<div class="col-md-8">
							<a class="card-overlay outline-effect" href="{{$val->category->slug}}/{{$val->slug}}">
								<span class="card-overlay-img"><img src="{{asset('')}}frontend/images/space-4.gif" alt="" class="w-100" style="background-image: url('{{asset('')}}data/news/{{$val->img}}');"></span>
								<div class="card-overlay-body">
									<div class="card-overlay-body-wrap">
										<div class="time-box">
											<span>{{date('d/m',strtotime($val->created_at))}}</span>
											<span><i class="icon-time me-1"></i>{{date('Y',strtotime($val->created_at))}}</span>
										</div>
										<h2 class="card-title text-truncate-set text-truncate-set-2">{{$val->name}}</h2>
									</div>
								</div>
							</a>
						</div>
						@endif
						@endforeach
						<div class="col-md-4">
							<div class="card-overlay-flex">
								@foreach($articles as $key => $val)
								@if($key==1)
								<a class="card-overlay card-overlay-sm outline-effect" href="{{$val->category->slug}}/{{$val->slug}}">
									<span class="card-overlay-img"><img src="{{asset('')}}frontend/images/space-4.gif" alt="" class="w-100" style="background-image: url('{{asset('')}}data/news/{{$val->img}}');"></span>
									<div class="card-overlay-body">
										<div class="card-overlay-body-wrap">
											<div class="time-box">
												<span>{{date('d/m',strtotime($val->created_at))}}</span>
												<span><i class="icon-time me-1"></i>{{date('Y',strtotime($val->created_at))}}</span>
											</div>
											<h2 class="card-title text-truncate-set text-truncate-set-2">{{$val->name}}</h2>
										</div>
									</div>
								</a>
								@endif
								@if($key==2)
								<a class="card-overlay card-overlay-sm outline-effect" href="{{$val->category->slug}}/{{$val->slug}}">
									<span class="card-overlay-img"><img src="{{asset('')}}frontend/images/space-4.gif" alt="" class="w-100" style="background-image: url('{{asset('')}}data/news/{{$val->img}}');"></span>
									<div class="card-overlay-body">
										<div class="card-overlay-body-wrap">
											<div class="time-box">
												<span>{{date('d/m',strtotime($val->created_at))}}</span>
												<span><i class="icon-time me-1"></i>{{date('Y',strtotime($val->created_at))}}</span>
											</div>
											<h2 class="card-title text-truncate-set text-truncate-set-2">{{$val->name}}</h2>
										</div>
									</div>
								</a>
								@endif
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="row row-cols-1 g-4 horizontal-view" id="show-setting">
					@foreach($articles as $key => $val)
					@if($key>2)
					<div class="col">
						<div class="card card-s card-s4">
							<a href="{{$val->category->slug}}/{{$val->slug}}">
								<span><img src="{{asset('')}}frontend/images/space-3.gif" class="card-img-top" style="background-image: url('{{asset('')}}data/news/{{$val->img}}');" alt="..."></span>
							</a>
							<div class="card-body">
								<div class="card-body-wrap">
									<h2 class="card-title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h2>
									<div class="card-info">
										<span><i class="icon-time me-2"></i>{{date('d/m/Y',strtotime($val->created_at))}}</span>
										<span><i class="icon-user me-2"></i>{{$val->user->name}}</span>
									</div>
									<p class="mb-0 text-truncate-set text-truncate-set-2">{{$val->detail}}</p>
								</div>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>

			</div>
			<div class="col-lg-3 d-none d-lg-block">

				<div class="widget widget-list mb-3">
					<h4><span>Tin tức</span></h4>
					<ul>
						@foreach($cat_new as $val)
						<li><a href="{{$val->slug}}"><i class="icon-next me-2"></i>{{$val->name}}</a></li>
						@endforeach
					</ul>
				</div>

				<div class="widget widget-list widget-news mb-3">
					<h4><span>Tin tức nổi bật</span></h4>
					@foreach($news_hits as $val)
					<a href="{{$val->category->slug}}/{{$val->slug}}" class="news-item">
						<span><img src="{{asset('')}}frontend/images/space-3.gif" style="background-image: url('{{asset('')}}data/news/80/{{$val->img}}');" alt="" class="w-100"></span>
						<div class="news-item-body">
							<span class="date"><i class="icon-time me-1"></i>{{date('d/m/Y',strtotime($val->updated_at))}} | <i class="icon-eye me-1"></i>{{$val->hits}} view</span>
							<p class="mb-0 text-truncate-set text-truncate-set-2">{{$val->name}}</p>
						</div>
					</a>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</section>
<!------------------- END CARD ------------------->

@endsection

@section('script')
<script src="{{asset('')}}frontend/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}frontend/js/custom.js"></script>
@endsection