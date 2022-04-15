@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection
@section('css')
<link href="frontend/css/widget.css" rel="stylesheet">
@endsection
@section('content')
<!------------------- BREADCRUMB ------------------->
<section class="sec-breadcrumb">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tin tức</li>
			</ol>
		</nav>
	</div>
</section>
<!------------------- END: BREADCRUMB ------------------->
<!------------------- CARD ------------------->
<section class="card-grid news-sec">
	<div class="container">
		<h3 class="text-uppercase title-subpage">Thị trường bất động sản</h3>
		<div class="row">
			<div class="col-lg-9">
				<div class="news-hightlight">
					<div class="row">
						<div class="col-md-8">
							<a class="card-overlay outline-effect" href="news-detail.htm">
								<span class="card-overlay-img"><img src="frontend/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');"></span>
								<div class="card-overlay-body">
									<div class="card-overlay-body-wrap">
										<div class="time-box">
											<span>21/10</span>
											<span><i class="icon-time me-1"></i>2022</span>
										</div>
										<p class="text-truncate-set text-truncate-set-2">Mật độ xay dựng là gì? Cách tính mật độ xây dựng chuẩn nhất 2022</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<div class="card-overlay-flex">
								<a class="card-overlay card-overlay-sm outline-effect" href="news-detail.htm">
									<span class="card-overlay-img"><img src="frontend/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://sayhi.vn/blog/wp-content/uploads/2019/09/image7-1.png');"></span>
									<div class="card-overlay-body">
										<div class="card-overlay-body-wrap">
											<div class="time-box">
												<span>21/10</span>
												<span><i class="icon-time me-1"></i>2022</span>
											</div>
											<p class="text-truncate-set text-truncate-set-2">Mật độ xay dựng là gì? Cách tính mật độ xây dựng chuẩn nhất 2022</p>
										</div>
									</div>
								</a>
								<a class="card-overlay card-overlay-sm outline-effect" href="news-detail.htm">
									<span class="card-overlay-img"><img src="frontend/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://truongvietnam.net/wp-content/uploads/2021/10/Nganh-bat-dong-san.png');"></span>
									<div class="card-overlay-body">
										<div class="card-overlay-body-wrap">
											<div class="time-box">
												<span>21/10</span>
												<span><i class="icon-time me-1"></i>2022</span>
											</div>
											<p class="text-truncate-set text-truncate-set-2">Mật độ xay dựng là gì? Cách tính mật độ xây dựng chuẩn nhất 2022</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row row-cols-1 g-4 horizontal-view" id="show-setting">

					<div class="col">
						<div class="card card-s card-s4">
							<a href="news-detail.htm">
								<span><img src="frontend/images/space-3.gif" class="card-img-top" style="background-image: url('https://eaglereal.net/wp-content/uploads/2020/04/phoi-canh-du-an-green-square-1024x768.jpg');" alt="..."></span>
							</a>
							<div class="card-body">
								<div class="card-body-wrap">
									<h5 class="card-title"><a href="news-detail.htm">Vì sao giá bất động sản ven sông lại có biên độ tăng giá tốt nhất TP.HCM hiện nay?</a></h5>
									<div class="card-info">
										<span><i class="icon-time me-2"></i>2 ngày trước</span>
										<span><i class="icon-user me-2"></i>Minh Hoàng</span>
									</div>
									<p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn 2 ngủ diện tích thông thủy 78m2 full đồ, khách mua chỉ cần dọn quần áo đến có thể ở ngay</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 d-none d-lg-block">

				<div class="widget widget-list mb-3">
					<h4><span>Tin tức</span></h4>
					<ul>
						<li><a href="#"><i class="icon-next me-2"></i>Tư vấn tài chính</a></li>
					</ul>
				</div>

				<div class="widget widget-list widget-news mb-3">
					<h4><span>Tin tức nổi bật</span></h4>
					<a href="#" class="news-item">
						<span><img src="frontend/images/space-3.gif" style="background-image: url('https://media.ex-cdn.com/EXP/media.taichinhdoanhnghiep.net.vn/files/news/2021/03/26/ha-noi-diem-danh-nhieu-ong-trum-bat-dong-san-tri-hoan-nop-tien-dat-134146.jpg');" alt="" class="w-100"></span>
						<div class="news-item-body">
							<span class="date"><i class="icon-time me-1"></i>2 ngày trước</span>
							<p class="mb-0 text-truncate-set text-truncate-set-2">Chính chủ cần chuyển nhượng gấp căn hộ diện tích 80m2</p>
						</div>
					</a>
					
				</div>

			</div>
		</div>
	</div>
</section>
<!------------------- END CARD ------------------->

@endsection