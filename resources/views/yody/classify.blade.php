@extends('templates.yody.master')

@section('content')

@include('templates.yody.inc.sidebar')
<div class="section_cate">
    <script>
       window.addEventListener('DOMContentLoaded', (event) => {
           var swiperNewh = new Swiper('.list-cate .swiper-main', {
               slidesPerView: 5,
               //centeredSlides: true,
               loop: false,
               grabCursor: true,
               spaceBetween: 20,
               roundLengths: true,
               slideToClickedSlide: false,
               autoplay: false,
               touchStartPreventDefault: false,
               slidesPerColumn: 2,
               slidesPerColumnFill: 'row',
               pagination: {
                   el: '.list-cate .swiper-pagination',
               },
               breakpoints: {
                   300: {
                       slidesPerView: 2,
                       slidesPerGroup:2,
                       spaceBetween: 10,
                       slidesPerColumn: 4,
                   },
                   500: {
                       slidesPerView: 2,
                       slidesPerGroup:2,
                       spaceBetween: 10,
                       slidesPerColumn: 4,
                   },
                   640: {
                       slidesPerView: 2,
                       slidesPerGroup:2,
                       spaceBetween: 10
                   },
                   768: {
                       slidesPerView: 3,
                       slidesPerGroup:3,
                       spaceBetween: 7
                   },
                   992: {
                       slidesPerView:4,
                       slidesPerGroup:4,
                       spaceBetween:14
                   },
                   1200: {
                       slidesPerView:4,
                       slidesPerGroup:4,
                       spaceBetween:15
                   },
                   1400: {
                       slidesPerView:5,
                       slidesPerGroup:5,
                       spaceBetween: 20
                   }
               }
           });
       })
    </script>
</div>
<div class="section_slider" style="">
    <div class="swiper-container slide-container">
    <div class="swiper-main swiper-container-initialized swiper-container-horizontal" style="cursor: grab;">
        <div class="swiper-wrapper" id="swiper-wrapper-981eb523fc3d1f84" aria-live="off" style="transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 1" style="width: 1240px;">
                <a href="#" class="clearfix" title="Thời trang nữ, quần áo nữ đẹp">
                <picture>
                    <source media="(min-width: 1200px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/page_nu_slider_1.jpg?1672303543027">
                    <source media="(min-width: 992px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/page_nu_slider_1.jpg?1672303543027">
                    <source media="(min-width: 569px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/page_nu_slider_1_mb.jpg?1672303543027">
                    <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/grande/100/438/408/themes/890667/assets/page_nu_slider_1_mb.jpg?1672303543027">
                    <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/page_nu_slider_1.jpg?1672303543027" alt="Thời trang nữ, quần áo nữ đẹp" class="img-responsive center-block">
                </picture>
                </a>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide "></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    </div>
    <a href="" class="d-block d-md-none" title="Miễn phí vận chuyển"><img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/banner_km.jpg?1672303543027" alt="Miễn phí vận chuyển"></a>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            var swiper = new Swiper('.section_slider .swiper-main', {
                pagination: {
                    el: '.section_slider .swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 1,
                centeredSlides: false,
                loop: false,
                grabCursor: true,
                spaceBetween: 0,
                roundLengths: true,
                slideToClickedSlide: false,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                }
            });
        })
    </script>
</div>
<div class="section_services">
    <div class="container">
        <div class="list-service">
            <div class="content-service" onclick="window.location.href='/chinh-sach-giao-nhan-hang-online'">
                <div class="service-left">
                    <img class="lazyload loaded" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_1.png?1672303543027" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_1.png?1672303543027" alt="YODY - Mặc Mỗi Ngày, Thoải Mái Mỗi Ngày" data-was-processed="true">
                </div>
                <div class="service-right">
                    <div class="title-service">
                    Miễn phí vận chuyển
                    </div>
                    <div class="service-sumary">
                    <span>FREESHIP</span> mọi đơn hàng &gt;498K
                    </div>
                </div>
            </div>
            <div class="content-service" onclick="window.location.href='/chinh-sach-ship-cod-tai-yody'">
                <div class="service-left">
                    <img class="lazyload loaded" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_2.png?1672303543027" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_2.png?1672303543027" alt="YODY - Mặc Mỗi Ngày, Thoải Mái Mỗi Ngày" data-was-processed="true">
                </div>
                <div class="service-right">
                    <div class="title-service">
                    Đa dạng hình thức thanh toán
                    </div>
                    <div class="service-sumary">
                    Momo, VNPay, COD
                    </div>
                </div>
            </div>
            <div class="content-service" onclick="window.location.href='/chinh-sach-giao-nhan-hang-online'">
                <div class="service-left">
                    <img class="lazyload loaded" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_3.png?1672303543027" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_3.png?1672303543027" alt="YODY - Mặc Mỗi Ngày, Thoải Mái Mỗi Ngày" data-was-processed="true">
                </div>
                <div class="service-right">
                    <div class="title-service">
                    Giao hàng nhanh
                    </div>
                    <div class="service-sumary">
                    Chỉ từ <span>2-5 ngày</span>
                    </div>
                </div>
            </div>
            <div class="content-service" onclick="window.location.href='/chinh-sach-doi-tra'">
                <div class="service-left">
                    <img class="lazyload loaded" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_4.png?1672303543027" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ser_4.png?1672303543027" alt="YODY - Mặc Mỗi Ngày, Thoải Mái Mỗi Ngày" data-was-processed="true">
                </div>
                <div class="service-right">
                    <div class="title-service">
                    Miễn phí <span>ĐỔI, TRẢ</span>
                    </div>
                    <div class="service-sumary">
                    Trong <span>15 ngày</span> tại 200+ điểm bán
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" id="">try{dataLayer.push({eventCategory:null,eventAction:null,eventLabel:null,ecommerce:null,cdpData:{properties:null}})}catch(a){};</script>
<section class="bread-crumb d-none d-md-block" style="padding-top: 10px; background:none;margin: -35px 0 20px">
    <div class="container">
        <div class="row">
            <div class="col-12 a-left">
                <ul class="breadcrumb">
                    <li class="last" style="font-size: 22px">
                        <strong><span>Cửa hàng {{$arrCat->name}}</span></strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container ">
    <div class="bg_collection section">
        <div class="row">
            <aside class="dqdt-sidebar sidebar left-content col-lg-3 col-md-4 col-sm-4">
                <div class="wrap_background_aside asidecollection">
                    <style>
                        .loading-bg{
                        position: absolute;
                        text-align: center;
                        height: 100%;
                        width: 100%;
                        background: #80808066;
                        opacity: 0.7;
                        border-radius: 4px;
                        }
                        .aside-item.filter-tag-style-1 .filter-item.active{
                        pointer-events: none;
                        }
                        .loadingFilter{
                        margin-top: 150px;
                        }
                        .aside-item.filter-tag-style-1 .filter-item input:checked+span.active{
                        border-color: transparent;
                        background: #F2F2F2;
                        }
                        @media (max-width: 991px){
                        .dqdt-sidebar .aside-filter .end_fillter{
                        position: fixed;
                        width: 92%;
                        bottom: 13px;
                        z-index: 990;
                        vertical-align: top;
                        display: inline-block;
                        }
                        .dqdt-sidebar.openf .wrap_background_aside{
                        height: 92%;
                        overflow: auto;
                        }
                        .dqdt-sidebar .aside-filter{
                        margin-bottom: 20px;
                        }
                        .dqdt-sidebar.openf{
                        position: fixed;
                        height: 100%;
                        -webkit-transform: translate3d(0, 0, 0);
                        }
                        }
                    </style>
                    <div class="filter-content aside-filter">
                        <div class="title-aside-filter d-block d-md-none">
                            <span class="close_filter"><img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/i-close.svg?1672303543027" width="16" height="16"></span>BỘ LỌC
                        </div>
                        <div class="filter-container">
                            <div class="filter-container__selected-filter" style="display: none;">
                                <div class="filter-container__selected-filter-header clearfix">
                                    <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                    <a href="javascript:void(0)" class="filter-container__clear-all">Bỏ hết </a>
                                </div>
                                <div class="filter-container__selected-filter-list">
                                    <ul></ul>
                                </div>
                            </div>
                            <aside class="aside-item filter-mb aside-itemxx filter-tag-style-1 filter-type clearfix">
                                <div class="aside-title">
                                    <h2 class="title-filter title-head margin-top-0"><span>Loại sản phẩm</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                            <label for="filter-ao-polo-nu-yody">
                                            <input type="checkbox" id="filter-ao-polo-nu-yody" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="Áo polo nữ Yody" >
                                            <span class="itemFitter">Cửa hàng {{$arrCat->name}}</span>
                                            </label>
                                            </span>
                                        </li>
                                    </ul>
                                        <p class="showmore more text-center">
                                            Xem thêm
                                        <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672303543027" alt="more">
                                    </p>
                                </div>
                            </aside>
                            <div class="move-fillter">
                                <aside class="aside-item filter-tag-style-1 clearfix">
                                    <div class="aside-title">
                                    <h2 class="title-filter title-head margin-top-0"><span>Màu sắc</span></h2>
                                    </div>
                                    <div class="aside-content filter-group">
                                        {{-- @php
                                            $color = [];
                                            $color_arr = [];

                                            if(isset($_GET['color'])) {
                                                $color = $_GET['color'];
                                            } else {
                                                $color = $color.',';
                                            }
                                            $color_arr = explode(",", $color);
                                        @endphp --}}

                                        @php
                                            $listColors = [
                                                [
                                                    "id"    => 'filter-den',
                                                    "icon"  => '<i class="fa den" style="background-color:#000000;"></i>',
                                                    'value' => 'Đen',
                                                ],
                                                [
                                                    "id"    => 'filter-trang',
                                                    "icon"  => '<i class="fa trang" style="background-color:#FFFFFF;border:1px solid #ebebeb;"></i>',
                                                    'value' => 'Trắng',
                                                ],
                                                [
                                                    "id"    => 'filter-xanh-la',
                                                    "icon"  => '<i class="fa xanh-la" style="background-color:#62BF5E;"></i>',
                                                    'value' => 'Xanh lá',
                                                ],
                                                [
                                                    "id"    => 'filter-nau',
                                                    "icon"  => '<i class="fa nau" style="background-color:#613B0D;"></i>',
                                                    'value' => 'Nâu',
                                                ],
                                                [
                                                    "id"    => 'filter-xam',
                                                    "icon"  => '<i class="fa xam" style="background-color:#C1C5C0;"></i>',
                                                    'value' => 'Xám',
                                                ],
                                                [
                                                    "id"    => 'filter-do',
                                                    "icon"  => '<i class="fa do" style="background-color:#F10008;"></i>',
                                                    'value' => 'Đỏ',
                                                ],
                                                [
                                                    "id"    => 'filter-xanh',
                                                    "icon"  => '<i class="fa xanh" style="background-color:#6BBBDD;"></i>',
                                                    'value' => 'Xanh',
                                                ],
                                                [
                                                    "id"    => 'filter-vang',
                                                    "icon"  => '<i class="fa vang" style="background-color:#EFE159;"></i>',
                                                    'value' => 'Vàng',
                                                ],
                                                [
                                                    "id"    => 'filter-hong',
                                                    "icon"  => '<i class="fa hong" style="background-color:#DC85AC;"></i>',
                                                    'value' => 'Hồng',
                                                ],
                                                [
                                                    "id"    => 'filter-cam',
                                                    "icon"  => '<i class="fa cam" style="background-color:#F19F00;"></i>',
                                                    'value' => 'Cam',
                                                ],
                                                [
                                                    "id"    => 'filter-tim',
                                                    "icon"  => '<i class="fa tim" style="background-color:#C48FE2;"></i>',
                                                    'value' => 'Tím',
                                                ],
                                                [
                                                    "id"    => 'filter-xanh-co-vit',
                                                    "icon"  => '<i class="fa xanh-co-vit" style="background-color:#00867D;"></i>',
                                                    'value' => 'Xanh cổ vịt',
                                                ],
                                                [
                                                    "id"    => 'filter-hoa-tiet',
                                                    "icon"  => '<i class="fa hoa-tiet" style="background-color:#FBEFF3;"></i>',
                                                    'value' => 'Họa tiết',
                                                ]
                                            ]
                                        @endphp
                                        <ul class="ul-color ul-filter-color">

                                            @foreach ($listColors as $color)
                                                <li class="filter-item color filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="{{$color['id']}}">
                                                            <input type="checkbox" 
                                                                id="{{$color['id']}}" 
                                                                name="color"  
                                                                data-filter="color" 
                                                                class="filter-color" 
                                                                value="{{ $color['value']}}" 
                                                                {{in_array($color['value'], explode(",", Request::get('color'))) ? 'checked' : ''}} >

                                                            <span>
                                                                {!! $color['icon'] !!} {{ $color['value']}}
                                                            </span>
                                                        </label>
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <p class="showmore more text-center">
                                            Xem thêm
                                            <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672303543027" alt="more">
                                        </p>
                                    </div>
                                </aside>
                            </div>
                            <br>
                            {{-- <aside class="aside-item filter-mb filter-price f-left clearfix">
                                <div class="aside-title">
                                    <h2 class="title-filter title-head margin-top-0"><span>Khoảng giá (VNĐ)</span></h2>
                                </div>
                                <div class="aside-content margin-top-0 filter-group content_price">
                                    <ul class="ul-filter-price">
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label data-filter="100-000d" for="filter-duoi-100-000d">
                                                <input type="checkbox" id="filter-duoi-100-000d" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" >
                                                <i class="fa"></i>
                                                Nhỏ hơn 100.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                            <label data-filter="200-000d" for="filter-100-000d-200-000d">
                                                <input type="checkbox" id="filter-100-000d-200-000d" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)" >
                                                <i class="fa"></i>
                                                Từ 100.000đ - 200.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                        <label data-filter="350-000d" for="filter-200-000d-350-000d">
                                        <input type="checkbox" id="filter-200-000d-350-000d" data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 350.000đ" value="(>=200000 AND <=350000)" >
                                        <i class="fa"></i>
                                        Từ 200.000đ - 350.000đ
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                        <label data-filter="500-000d" for="filter-350-000d-500-000d">
                                        <input type="checkbox" id="filter-350-000d-500-000d" data-group="Khoảng giá" data-field="price_min" data-text="350.000đ - 500.000đ" value="(>=350000 AND <=500000)" >
                                        <i class="fa"></i>
                                        Từ 350.000đ - 500.000đ
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                        <label data-filter="700-000d" for="filter-500-000d-700-000d">
                                        <input type="checkbox" id="filter-500-000d-700-000d" data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 700.000đ" value="(>=500000 AND <=700000)" >
                                        <i class="fa"></i>
                                        Từ 500.000đ - 700.000đ
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                        <span>
                                        <label data-filter="700-000d" for="filter-tren700-000d">
                                        <input type="checkbox" id="filter-tren700-000d" data-group="Khoảng giá" data-field="price_min" data-text="Trên 700.000đ" value="(>700000)" >
                                        <i class="fa"></i>
                                        Lớn hơn 700.000đ
                                        </label>
                                        </span>
                                    </li>
                                    </ul>
                                    <p class="showmore more text-center">
                                        Xem thêm
                                        <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672303543027" alt="more">
                                    </p>
                                </div>
                            </aside> --}}
                            <div class="end_fillter d-block d-md-none">
                                <span class="text">39 sản phẩm</span>
                                <div>
                                    <span class="end finish close_and_search">Áp dụng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        
                        $(".ul-filter-color .filter-item input").change(function() {
                            pushTrackingFilter();
                        })
                        $(".ul-filter-size .filter-item input").change(function() {
                            pushTrackingFilter();
                        })
                        $(".ul-filter-material .filter-item input").change(function() {
                            pushTrackingFilter();
                        })
                        $(".ul-filter-price .filter-item input").change(function() {
                            pushTrackingFilter();
                        })
                        
                        function pushTrackingFilter() {
                            var colors = [];
                            var materials = [];
                            var sizes = [];
                            var prices = [];
                            $(".ul-filter-color .filter-item").each(function() {
                                var input = $(this).find("input");
                                if($(input).is(":checked")) {
                                    colors.push((input).attr("data-text"));
                                }
                            });
                            $(".ul-filter-size .filter-item").each(function() {
                                var input = $(this).find("input");
                                if($(input).is(":checked")) {
                                    sizes.push((input).attr("data-text"));
                                }
                            });
                            $(".ul-filter-material .filter-item").each(function() {
                                var input = $(this).find("input");
                                if($(input).is(":checked")) {
                                    materials.push((input).attr("data-text"));
                                }
                            });
                            $(".ul-filter-price .filter-item").each(function() {
                                var input = $(this).find("input");
                                if($(input).is(":checked")) {
                                    prices.push((input).attr("data-text"));
                                }
                            });
                            dataLayer.push({
                                'event': 'pangoTrack',
                                'eventAction': 'product_filter',
                                'cdpData': {
                                    properties: {
                                        'material': materials.toString(),
                                        'color': colors.toString(),
                                        'size': sizes.toString(),
                                        'price': prices.toString(),
                                    }
                                }
                            })
                        }
                    
                    </script>
                </div>
            </aside>
            <div class="main_container collection col-lg-9 col-md-12 col-sm-12">
                <div class="section_sort clearfix ">
                    <span class="count">{{count($arrProducts)}} sản phẩm</span>
                    @php
                        if(isset($_GET['color'])) {
                            $color = $_GET['color'];
                            // dd($color);
                        } else {
                            $color = 0;
                        }
                    @endphp
                    <div class="sort-cate-left">
                        <label class="title">Sắp xếp theo<span class="text text-order" style="width: 220px">Mặc định</span></label>
                        <ul>
                            <li class="btn-quick-sort default active">
                                <a href="javascript:;" onclick="sortby('default', {{$arrCat->cat_id}}, '{{$color}}')"><i></i>Mặc định</a>
                            </li>
                            <li class="btn-quick-sort alpha-asc">
                                <a href="javascript:;" onclick="sortby('alpha-asc', {{$arrCat->cat_id}}, '{{$color}}')" ><i></i>Từ A-Z</a>
                            </li>
                            <li class="btn-quick-sort alpha-desc">
                                <a href="javascript:;" onclick="sortby('alpha-desc', {{$arrCat->cat_id}}, '{{$color}}')" ><i></i>Từ Z-A</a>
                            </li>
                            <li class="btn-quick-sort price-asc">
                                <a href="javascript:;" onclick="sortby('price-asc', {{$arrCat->cat_id}}, '{{$color}}')" ><i></i>Giá tăng dần</a>
                            </li>
                            <li class="btn-quick-sort price-desc">
                                <a href="javascript:;" onclick="sortby('price-desc', {{$arrCat->cat_id}}, '{{$color}}')" ><i></i>Giá giảm dần</a>
                            </li>
                            <li class="btn-quick-sort created-desc">
                                <a href="javascript:;" onclick="sortby('created-desc', {{$arrCat->cat_id}}, '{{$color}}')"><i></i>Mới nhất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-container">
                        <script>
                            var wDWs = $(window).width();
                            if (wDWs < 991) {
                                $('.move-fillter').appendTo('.section_sort .filter-container');
                                $(document).on('click', '.closenav', function(){
                                    $('.header_nav_main').removeClass('current');
                                    $('.closeMenuMobile').removeClass('current');
                                    $('.opacity_menu').removeClass('current');
                                    $('.dqdt-sidebar, .open-filters').removeClass('openf');
                                })
                                $(document).on('click', '.category-action', function(){
                                    $('.header_nav_main').addClass('current');
                                    $('.closeMenuMobile').addClass('current');
                                    $('.opacity_menu').addClass('current');
                                    $('.dqdt-sidebar, .open-filters').removeClass('openf');
                                })
                                $(document).on('click', '.opacity_menu,.closeMenuMobile', function(){
                                    $('.header_nav_main').removeClass('current');
                                    $('.closeMenuMobile').removeClass('current');
                                    $('.opacity_menu').removeClass('current');
                                    $('.dqdt-sidebar, .open-filters').removeClass('openf');
                                })
                                $(document).on('click', '.open-filters,.end_fillter span.finish,.title-aside-filter span,.open-filter-mb', function(e){
                                    e.stopPropagation();
                                    if($('.dqdt-sidebar').hasClass('openf')){
                                        
                                    }else{
                                    renderFillter()
                                    }
                                    
                                    $('.has-banner-top').toggleClass('overflow-none-body')
                                    $('.open-filters').toggleClass('openf');
                                    $('.dqdt-sidebar').toggleClass('openf');
                                    $(this).closest('.header_nav_main').removeClass('current');
                                    $('.opacity_menu').toggleClass('current');
                                    
                                });
                            }
                        </script>
                    </div>
                    <span class="open-filter-mb">Bộ lọc</span>
                </div>
                <div class="category-products products">
                    <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                        <div>
                            <div class="a-center loading_collect d-none">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                    <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                                        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                    </rect>
                                    <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                                        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                    </rect>
                                    <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                                        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                    </rect>
                                </svg>
                            </div>
                        </div>
                        <div id="order-div">
                            <div class="row list-collect">
                                
                                @foreach ($arrProducts as $product)
                                    @php
                                        $reduced_price = round(($product->price / 100) * (100 - $product->sale_off), -4);
                                        $slug = Str::slug($product->name);
                                        $urlGroup = route('yody.detail', ['slug' => $slug, 'id' => $product->product_id]);
                                        $urlPicture = 'storage/templates/yody/images/'.$product->picture;
                                    @endphp    
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 product-col">
                                        <div class="item_product_main item_product_main-26599975" data-url="" data-productid="" data-id="">
                                            <form action="/cart/add" method="post" class="variants product-action wishItem" data-cart-form="" data-id="product-actions-26599975" enctype="multipart/form-data">
                                                <div data-id="26599975" class="product-thumbnail {{$product->sale_off != 0 ? 'sale' : ''}} discount" data-sale="-{{$product->sale_off}}%">
                                                    <a class="image_thumb" href="{{$urlGroup}}" title="{{$product->name}}">
                                                        <img class="lazyload loaded" src="{{$urlPicture}}" data-src="{{$urlPicture}}" alt="{{$product->name}}" data-was-processed="true">
                                                    </a>
                                                </div>
                                                <div class="product-info product-info-26599975">
                                                    <h3 class="product-name">
                                                        <a href="{{$urlGroup}}" title="">{{$product->name}}</a>
                                                    </h3>
                                                    <div class="bottom-action">
                                                        <div class="price-box">
                                                            @if ($product->sale_off == 0)
                                                                <span class="price ">{{number_format($product->price, 0, ',', '.')}}đ</span>
                                                            @else
                                                                <span class="price discout-price">{{number_format($reduced_price, 0, ',', '.')}}đ</span>
                                                                <span class="compare-price">{{number_format($product->price, 0, ',', '.')}}đ</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="sw-group">
                                                        <div class="option-swath">
                                                            <span class=""></span>
                                                            <div class="swatch-color-wrapper position-relative">
                                                                <div class="swatch-color  swatch clearfix" data-option-index="0" data-swatches="6" data-view="6">
                                                                    @foreach ($arrPictures as $picture)
                                                                    @if ($product->product_id == $picture->product_id)
                                                                        @php
                                                                            $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                                                                        @endphp
                                                                            <div data-value="Xanh Biển" class="swatch-element color Xanh Biển 1 ">
                                                                                <input id="swatch-0-xanh-bien265999752" type="radio" name="option-0" value="Xanh Biển">
                                                                                <label title="Xanh Biển" class="xanh-bien" for="swatch-0-xanh-bien265999752" style="background-image:url({{$urlPicture}});background-size:37px;background-repeat:no-repeat;background-position: center!important;" data-scolor="{{$urlPicture}}"></label>
                                                                            </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <div class="block-des"> </div>    
            </div>
        </div>
    </div>
</div>

@endsection