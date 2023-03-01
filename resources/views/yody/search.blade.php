@extends('templates.yody.master')
@section('content')
@include('templates.yody.inc.sidebar')
<section class="bread-crumb d-none d-md-block" style="background: white">
    <div class="container">
        <div class="row">
            <div class="col-12 a-left">
                <ul class="breadcrumb">
                <li class="home">
                    <a href="/"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;/&nbsp;</span>
                </li>
                <li>
                    <strong><span>Tìm kiếm</span></strong>
                </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@if (count($arrProducts) >= 1)
    <section class="signup search-main wrap_background background_white clearfix">
        <div class="container">
            <div class="row bg_page clearfix">
                <div class="col-12 col-xl-12 col-lg-12 title-page" style="text-align: center; color: #fcaf17;font-weight: 600;">
                    <h1>
                        <span class="search-product">KẾT QUẢ TÌM KIẾM SẢN PHẨM "{{$_GET['key']}}"</span>
                    </h1>
                    <script></script>
                </div>
                <div class="search-page col-12">
                    <div class="products-view products-view-grid ">
                        <div class="row search-items">
                            @foreach ($arrProducts as $product)
                                @php
                                    $reduced_price = round(($product->price / 100) * (100 - $product->sale_off), -4);
                                    $slug = Str::slug($product->name);
                                    $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $product->product_id]);
                                    $urlPicture = 'storage/templates/yody/images/'.$product->picture;
                                @endphp 
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 product-col ">
                                    <div class="item_product_main item_product_main-26599975" data-url="" data-productid="" data-id="">
                                        <form action="/cart/add" method="post" class="variants product-action wishItem" data-cart-form="" data-id="product-actions-26599975" enctype="multipart/form-data">
                                            <div data-id="26599975" class="product-thumbnail {{$product->sale_off != 0 ? 'sale' : ''}} discount" data-sale="-{{$product->sale_off}}%">
                                                <a class="image_thumb" href="{{$urlProduct}}" title="{{$product->sale_off}}">
                                                    <img class="lazyload loaded" src="{{$urlPicture}}" data-src="{{$urlPicture}}" alt="{{$product->name}}" data-was-processed="true">
                                                </a>
                                            </div>
                                            <div class="product-info product-info-26599975">
                                                <h3 class="product-name">
                                                    <a href="{{$urlProduct}}" title="">{{$product->name}}</a>
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
                    <div class="section next-search clearfix next-search-product">
                        <span data-page="14" data-number="4" data-key="a" data-type="product">Xem thêm sản phẩm</span>
                    </div>
                    <div class="a-center d-none">
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
            </div>
        </div>
    </section>
@else
<section class="signup search-main wrap_background background_white clearfix">
    <div class="container">
    <div class="row bg_page clearfix">
        <div class="col-12 col-xl-12 col-lg-12 text-center">
            <h1>
                <span class="search-product">KẾT QUẢ TÌM KIẾM SẢN PHẨM "{{$_GET['key']}}"</span>
            </h1>
            <img class="image-search" src="//bizweb.dktcdn.net/100/438/408/themes/892554/assets/search-page.svg?1673857901737" alt="No item">
            <div class="search-terms search-product">Tìm kiếm <b>{{$_GET['key']}}</b> của bạn không có sản phẩm phù hợp</div>
            <div class="check-again">
                <p>HÃY THỬ LẠI CÁCH KHÁC NHƯ</p>
                <p>Sử dụng thuật ngữ chung nhiều hơn</p>
                <p>Kiểm tra chính tả của bạn</p>
            </div>
            <form action="/search" method="get" class="form-search">
                <input type="text" class="input-control" name="key">
                <button class="button"></button>
            </form>
        </div>
    </div>
    </div>
</section>
@endif
@endsection