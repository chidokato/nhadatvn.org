<?php use App\menu; ?>
<!------------------- NAVIGATOR ------------------->
<header class="navhome">
	<nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example">
		<div class="container">
		  <a class="navbar-brand logo" href="{{asset('')}}"><img src="{{asset('')}}data/themes/{{$head_logo->img}}" alt="" class="mw-100"></a>
		  <div class="toggle-menu" data-bs-toggle="button">
				<button class="navbar-toggler ico-menu" id="navbarToggler">
					<div>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
			</div>
	
		  <div class="navbar-collapse flex-grow-1" id="navbarsExample07XL">
			<ul class="collapse navbar-nav mb-lg-0">
				<li class="nav-item {{ isset($active) && $active=='' ? 'active':'' }}">
					<a class="nav-link" href="{{asset('')}}">Trang chủ</a>
				</li>
				@foreach($menu as $val)
				<?php $sub_menus = menu::where('classify','Main menu')->where('status','true')->where('parent', $val->id)->orderBy('view','asc')->get(); ?>
				@if(count($sub_menus) > 0)
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{asset('')}}{{$val->slug}}" data-bs-toggle="dropdown" onclick="myFunctLink(this)">{{$val->name}}</a>
					<a class="expand dropdown-toggle d-lg-none" href="#" data-bs-toggle="dropdown"></a>
					<div class="dropdown-menu">
						<ul>
							@foreach($sub_menus as $sub_menu)
							<li><a href="{{asset('')}}{{$sub_menu->slug}}" class="submenu-link"><i class="icon-next me-2"></i>{{$sub_menu->name}}</a></li>
							@endforeach
						</ul>
					</div>
				</li>
				@else
				<li class="nav-item {{ isset($active) && $active==$val->slug ? 'active':'' }} ">
					<a class="nav-link" href="{{asset('')}}{{$val->slug}}">{{$val->name}}</a>
				</li>
				@endif
				@endforeach
			</ul>
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item cta-btn il">
				  <a class="nav-link" href="#"><span class="cta-ico"><i class="icon-new"></i></span><span class="cta-text">Đăng tin</span></a>
				</li> -->
				@if(Auth::check())
				<li class="nav-item nav-icon dropdown">
					<a class="nav-link avata-header" data-bs-toggle="dropdown" href="#"><img src="{{asset('')}}data/user/{{ isset(Auth::User()->avatar)? Auth::User()->avatar:'no_image.jpg'}}"></a>
					<div class="dropdown-menu">
						<div class="info-user">
							<p class="name">{{Auth::User()->your_name}}</p>
							<p class="mail">{{Auth::User()->email}}</p>
						</div>
						<ul>
							<li><a href="#" class="submenu-link"><i class="icon-user"></i> Thông tin cá nhân</a></li>
							<li><a href="#" class="submenu-link"><i class="icon-experience"></i> Bảng hàng online</a></li>
							<li><a href="#" class="submenu-link"><i class="icon-grid"></i> Quản lý tin đăng</a></li>
							<li><a href="logout" class="submenu-link">Đăng xuất</a></li>
						</ul>
					</div>
				</li>
				@else
				<li class="nav-item cta-btn il">
				  <a style="border: 1px solid #fff;" class="nav-link" href="{{asset('')}}login"><span class="cta-ico"><i class="icon-user"></i></span><span class="cta-text">Đăng nhập</span></a>
				</li>
				@endif
			  </ul>

		  </div>
		</div>
  	</nav>
</header>
<!------------------- END NAVIGATOR ------------------->