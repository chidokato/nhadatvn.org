@extends('admin.layout.index')
@section('dashboard') menu-item-active @endsection
@section('content')
@include('admin.layout.header')

<?php use App\quanlykho; ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-md-2">
        <div class="card shadow mb-2 position_sticky" style="top: 60px">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">File</h6>
            </div>
            <div class="card-body">
                <ul class="list_cat">
                    <li><label class="container"><input name="file[]" type="checkbox" ><span class="checkmark"></span> Vectors </label></li>
                    <li><label class="container"><input name="file[]" type="checkbox" ><span class="checkmark"></span> Psd </label></li>
                </ul>
            </div>

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thể loại</h6>
            </div>
            <div class="card-body">
                <ul class="list_cat">
                    <li><label class="container"><input type="checkbox" id='status_cat' ><span class="checkmark"></span> Tờ rơi </label></li>
                    <li><label class="container"><input type="checkbox" id='status_cat' ><span class="checkmark"></span> Tờ gập </label></li>
                    <li><label class="container"><input type="checkbox" id='status_cat' ><span class="checkmark"></span> Banner </label></li>
                </ul>
            </div>
        </div>


    </div>
    <div class="col-md-10">
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin</h6>
            </div>
            <div class="card-body">
                <div class="grid">
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592958385-687339021.jpg" alt=""> </a></div>
                    <div class="grid-item"><a href=""> <img src="https://pro-media.nhaongay.vn/images/2022/7/1657592813470-391013429.jpg" alt=""> </a></div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<style type="text/css">
    .grid {margin: 1rem auto;}
    .grid .grid-item{width: 250px;height: auto;margin-bottom: 10px;}
    .grid img{width: 100%;height: 100%;}
</style>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js" type="text/javascript"></script>

<script type="text/javascript">
    var colWidth = $(".grid-item").width();
    window.onresize = function(){
      var colWidth = $(".grid-item").width();
    }
    console.log(colWidth);
    var $grid = $(".grid").masonry({
      // options
      itemSelector: ".grid-item",
      columnWidth: ".grid-item",
      // percentPosition: true,
      gutter: 10,
      fitWidth: true
    });

    $grid.imagesLoaded().progress(function() {
      $grid.masonry("layout");
    });

</script>

@endsection
