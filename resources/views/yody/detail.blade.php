@extends('templates.yody.master')

@section('content')

@include('templates.yody.inc.sidebar')
<style>
   @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

   fieldset, label { margin: 0; padding: 0; }
   /* body{ margin: 20px; } */
   h1 { font-size: 1.5em; margin: 10px; }

   /****** Style Star Rating Widget *****/

   .rating { 
   border: none;
   float: left;
   }

   .rating > input { display: none; } 
   .rating > label:before { 
   margin: 5px;
   font-size: 1.25em;
   font-family: FontAwesome;
   display: inline-block;
   content: "\f005";
   }

   .rating > .half:before { 
   content: "\f089";
   position: absolute;
   }

   .rating > label { 
   color: #ddd; 
   float: right; 
   }

   /***** CSS Magic to Highlight Stars on Hover *****/

   .rating > input:checked ~ label, /* show gold star when clicked */
   .rating:not(:checked) > label:hover, /* hover current star */
   .rating:not(:checked) > label:hover ~ label { color: #fcaf17;  } /* hover previous stars in list */

   .rating > input:checked + label:hover, /* hover current star when changing rating */
   .rating > input:checked ~ label:hover,
   .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
   .rating > input:checked ~ label:hover ~ label { color: #fcaf17;  } 

   

   .contentt {
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px;
      border: 1px solid #c4cdd5;
   }
   .hide {
      display: none;
   }

</style>
<div class="page-product_breadcrumb">
   <section class="bread-crumb d-none d-md-block" style="background:none;">
      <div class="container">
          <div class="row">
              <div class="col-12 a-left">
                  <ul class="breadcrumb" style="text-align: left; padding-left: 15px;">
                     <li class="home">
                        <a href="/"><span>Trang chủ</span></a>
                     </li>
                     <li>
                        @php
                           $slug = Str::slug($arrCat->name);
                           $urlClassify = route('yody.classify', ['slug' => $slug, 'id' => $arrCat->cat_id]);
                        @endphp
                        <a href="{{$urlClassify}}" title="">
                           <span>{{ucwords($arrCat->name)}} / </span>
                        </a>
                     </li>
                     <li>
                        <strong><span>{{ucwords($arrProduct->name)}}</span></strong>
                     </li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
</div>
<section id="product-main" class="product details-main" itemscope="" itemtype="https://schema.org/Product">
   <meta itemprop="category" content="Polo - IRIS">
   <meta itemprop="mpn" content="APN5394-XBI-S">
   <meta itemprop="name" content="{{$arrProduct->name}}">
   <meta itemprop="image" content="https://bizweb.dktcdn.net/thumb/grande/100/438/408/products/apn5394-xbi04.jpg">
   <meta itemprop="description" content="Chất liệu: Vải Modal (95% Modal + 5% spandex)
      Modal là loại vải được làm từ gỗ sồi - 1 loại cây phổ biến ở khu vực Bắc Âu
      Vải Modal sạch và lành tính mang lại cảm giác thoải mái, thoáng mát chon người mặc
      Co giãn nhẹ, form suông cơ bản
      Thiết kế kẻ ngang - Striped Polo mang đến nét trẻ trung ấn tượng
      YODY - Look good. Feel good.">
   <meta itemprop="brand" content="CTCP Thời trang YODY">
   <meta itemprop="model" content="">
   <meta itemprop="sku" content="APN5394-XBI-S">
   <meta itemprop="gtin8" content="2900000858695">
   <div class="d-none" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
      <span itemprop="author">YODY - Mặc Mỗi Ngày, Thoải Mái Mỗi Ngày</span>
      <span itemprop="description">Shop bán những sản phẩm giá cực kì tốt và có tính cạnh tranh cao so với các shop khác, sản phẩm rất chi hài lòng</span>
   </div>
   {{-- <div class="header-form-product d-none">
      <div class="header-product-detail-left">
         <div class="header-product-image-detail">
            <div class="small-image" style="width:66px;">
               <a href="javascript:;">
               <img src="//bizweb.dktcdn.net/thumb/medium/100/438/408/products/apn5394-xla05.jpg" alt="{{$arrProduct->name}}" data-image="//bizweb.dktcdn.net/thumb/1024x1024/100/438/408/products/apn5394-xla05.jpg?v=1669887835227">
               </a>
            </div>
         </div>
         <div class="product-title-detail">
            <div class="title-head">{{$arrProduct->name}}</div>
            <span class="special-price">
               <span class="price product-price">230.300đ</span>
            </span>
            <span class="old-price">
               <del class="price product-price-old">329.000đ</del>
            </span>
         </div>
      </div>
      <div id="add-to-cart-form-header" class="wishItem">
         <div class="form-product">
            <div class="select-swatch">
               <div class="swatch-color swatch clearfix" data-option-index="0" data-view="6">
                  <div class="options-title">Màu sắc: <span class="var"></span></div>
                  <div data-value="Xanh Biển" data-sku="apn5394-xbi" class="swatch-element-header color xanh-bien available">
                     <input id="swatch-header-0-xanh-bien" class="swatch-header-0-xanh-bien" type="radio" name="option-0" value="Xanh Biển" checked="">
                     <label for="swatch-header-0-xanh-bien" title="Xanh Biển">
                     <span style="background-image:url(//bizweb.dktcdn.net/thumb/small/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153);background-size:50px;background-repeat:no-repeat;background-position: center;"></span>
                     </label>
                  </div>
                  <script>
                     jQuery('.swatch[data-option-index="0"] .Xanh Biển').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <script>
                     jQuery('.swatch[data-option-index="0"] .Xanh Biển').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <script>
                     jQuery('.swatch[data-option-index="0"] .Xanh Biển').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <script>
                     jQuery('.swatch[data-option-index="0"] .Xanh Biển').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <div data-value="Đỏ" data-sku="apn5394-ddo" class="swatch-element-header color do available">
                     <input id="swatch-header-0-do" class="swatch-header-0-do" type="radio" name="option-0" value="Đỏ">
                     <label for="swatch-header-0-do" title="Đỏ">
                     <span style="background-image:url(//bizweb.dktcdn.net/thumb/small/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153);background-size:50px;background-repeat:no-repeat;background-position: center;"></span>
                     </label>
                  </div>
                  <script>
                     jQuery('.swatch[data-option-index="0"] .Đỏ').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <div data-value="Xanh Lá" data-sku="apn5394-xla" class="swatch-element-header color xanh-la soldout">
                     <input id="swatch-header-0-xanh-la" class="swatch-header-0-xanh-la" type="radio" name="option-0" value="Xanh Lá">
                     <label for="swatch-header-0-xanh-la" title="Xanh Lá">
                     <span style="background-image:url(//bizweb.dktcdn.net/thumb/small/100/438/408/products/apn5394-xla05.jpg?v=1669887835227);background-size:50px;background-repeat:no-repeat;background-position: center;"></span>
                     </label>
                  </div>
                  <div data-value="Navy" data-sku="apn5394-nav" class="swatch-element-header color navy soldout">
                     <input id="swatch-header-0-navy" class="swatch-header-0-navy" type="radio" name="option-0" value="Navy">
                     <label for="swatch-header-0-navy" title="Navy">
                     <span style="background-image:url(//bizweb.dktcdn.net/thumb/small/100/438/408/products/apn5394-nav07.jpg?v=1666067773153);background-size:50px;background-repeat:no-repeat;background-position: center;"></span>
                     </label>
                  </div>
                  <div data-value="Nâu" data-sku="apn5394-nau" class="swatch-element-header color nau soldout">
                     <input id="swatch-header-0-nau" class="swatch-header-0-nau" type="radio" name="option-0" value="Nâu">
                     <label for="swatch-header-0-nau" title="Nâu">
                     <span style="background-image:url(//bizweb.dktcdn.net/thumb/small/100/438/408/products/apn5394-nau05.jpg?v=1666067773153);background-size:50px;background-repeat:no-repeat;background-position: center;"></span>
                     </label>
                  </div>
               </div>
               <div class=" swatch clearfix" data-option-index="1">
                  <div class="options-title">Kích thước: <span class="var"></span></div>
                  <div data-value="S" data-sku="apn5394-xbi" class="swatch-element-header s size available">
                     <input id="swatch-header-1-s" class="swatch-1-s" type="radio" name="option-1" value="S" checked="">
                     <label title="S" for="swatch-1-s"> S </label>
                  </div>
                  <script>
                     jQuery('.swatch[data-option-index="1"] .S').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <div data-value="M" data-sku="apn5394-xbi" class="swatch-element-header m size available">
                     <input id="swatch-header-1-m" class="swatch-1-m" type="radio" name="option-1" value="M">
                     <label title="M" for="swatch-1-m">
                     M
                     </label>
                  </div>
                  <script>
                     jQuery('.swatch[data-option-index="1"] .M').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <div data-value="L" data-sku="apn5394-xbi" class="swatch-element-header l size available">
                     <input id="swatch-header-1-l" class="swatch-1-l" type="radio" name="option-1" value="L">
                     <label title="L" for="swatch-1-l">
                     L
                     </label>
                  </div>
                  <script>
                     jQuery('.swatch[data-option-index="1"] .L').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <div data-value="XL" data-sku="apn5394-xbi" class="swatch-element-header xl size available">
                     <input id="swatch-header-1-xl" class="swatch-1-xl" type="radio" name="option-1" value="XL">
                     <label title="XL" for="swatch-1-xl">
                     XL
                     </label>
                  </div>
                  <script>
                     jQuery('.swatch[data-option-index="1"] .XL').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
                  <script>
                     jQuery('.swatch[data-option-index="1"] .S').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                  </script>
               </div>
            </div>
            <div class="clearfix from-action-addcart" style="margin-top: 20px">
               <div class="qty-ant clearfix custom-btn-number">
                  <div class="custom custom-btn-numbers clearfix input_number_product">
                     <button onclick="var result = document.getElementById('qtyHeader');var result2 = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ){result.value--; result2.value = result.value } else return false;" class="btn-minus btn-cts" type="button">–</button>
                     <input aria-label="Số lượng" type="text" class="qty input-text" id="qtyHeader" name="quantity" size="4" value="1" maxlength="3" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                     <button onclick="var result = document.getElementById('qtyHeader');var result2 = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) {result.value++; result2.value = result.value; } else return false;" class="btn-plus btn-cts" type="button">+</button>
                  </div>
               </div>
               <div class="btn-mua header-btn-mua">
                  <a href="https://zalo.me/3492644577837657321" class="chat d-block d-md-none" target="_blank" rel="nofollow"><img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/chatico.svg?1672303543027" alt="chat"></a>
                  <button class="btn btn-lg btn-gray btn_buy add_to_cart add_to_cart_header">Thêm Vào Giỏ Hàng</button>
               </div>
            </div>
         </div>
      </div>
   </div> --}}
   <div id="container-wrapper" class="container">
      <div id="all-info-wrapper" class="product-grid">
         <div class="product-grid-item-image">
            <div class="line-box-mobile d-lg-none" style="margin-bottom: 12px;"></div>
            <div id="image-list-panel" class="image-list-panel container d-none d-lg-block">
               <div class="row">
                  @foreach ($arrPictures as $picture)
                  @if ($arrProduct->product_id == $picture->product_id)
                     @php
                        $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                     @endphp
                        <div class="col-6 d-flex justify-content-center">
                           <div class="image-item d-flex justify-content-center"><img src="{{$urlPicture}}" width="400" height="535" alt="image"></div>
                        </div>
                  @endif
                  @endforeach
               </div>
            </div>
            <div class="image-list-slider d-lg-none">
               <div id="image-list-slider" class="slick-initialized slick-slider" style="opacity: 1;">
                  <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: block;">Previous</button>
                  <div class="slick-list draggable">
                     <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);">
                        @foreach ($arrPictures as $picture)
                        @if ($arrProduct->product_id == $picture->product_id)
                           @php
                              $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                           @endphp
                              <div class="image-item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 0px;"><img src="https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi01.jpg?v=1666067773153" width="343" height="458" style="border-radius: 4px;" alt="image"></div>
                        @endif
                        @endforeach
                     </div>
                  </div>
                  <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;" aria-disabled="false">Next</button>
               </div>
               <div class="image-pagination d-flex align-items-center">
                  <div class="image-pagination-current">1</div>
                  <div>/</div>
                  <div class="image-pagination-total">6</div>
               </div>
            </div>
         </div>
         <div class="product-grid-item-info details-pro">
            <div class="sticky-wrapper px-md-2">
               <div id="flashsale-wrapper" class="flashsale-wrapper justify-content-between align-items-center d-none">
                  <div class="flashsale-text">
                     Flash Sale
                  </div>
                  <div class="flashsale-countdown d-flex align-items-stretch">
                     <div class="flashsale-countdown-item flashsale-countdown-hours">--</div>
                     <div class="flashsale-countdown-colon">:</div>
                     <div class="flashsale-countdown-item flashsale-countdown-minutes">--</div>
                     <div class="flashsale-countdown-colon">:</div>
                     <div class="flashsale-countdown-item flashsale-countdown-seconds">--</div>
                  </div>
               </div>
               <div class="box-divider">
                  <h1 class="title-head mb-1" style="margin-left: 0; text-align: left;">{{$arrProduct->name}}</h1>
                  <div class="group-power">
                     <div class="price-box clearfix d-flex align-items-center">
                        @php
                           $reduced_price = round(($arrProduct->price / 100) * (100 - $arrProduct->sale_off), -4);
                        @endphp
                        @if ($arrProduct->sale_off == 0)
                           <span class="special-price">
                              <span class="price product-price" style="color: rgb(23, 25, 28);">{{number_format($arrProduct->price, 0, ',', '.')}}đ</span>
                           </span>
                        @else
                           <span class="special-price">
                              <span class="price product-price">{{number_format($reduced_price, 0, ',', '.')}}đ</span>
                           </span> 
                           <span class="old-price">
                              <del class="price product-price-old">{{number_format($arrProduct->price, 0, ',', '.')}}đ</del>
                           </span>
                           <span class="reduce-price">- {{$arrProduct->sale_off}}%</span> 
                        @endif
                     </div>
                  </div>
               </div>
               <div class="line-box-mobile"></div>
               <form id="add-to-cart-form" action="javascript:" method="GET" class="wishItem MultiFile-intercepted">
                  <div class="form-product">
                     <div id="product-chonsize">
                        <div class="select-swatch">
                           <div class="swatch-color swatch clearfix " data-option-index="0" data-view="6">
                              <div class="options-title">Màu sắc: <span class="var">Xanh Biển</span></div>
                           </div>
                           {{-- <script>
                              $(document).ready(function() {
                                 if ($(window).width() < 767) {
                                       $(".size-guide-box-desktop").remove();
                                       $(".size-chart").css('display','none');
                                 }
                                 else {
                                       $(".size-guide-box-mobile").remove();
                                       $(".size-chart").css('display','none');
                                 }
                              })
                              var href = $('.btn-size').attr('href')+'?view=size';
                              var selector = "#myModalSize .content";
                              //getContent(href, selector);
                              $('.btn-size').on( "click", function() {
                                 $('#myModalSize').addClass('show');
                                 setTimeout(function(){
                                       $('#myModalSize').removeClass('show');
                                 },20000)
                                 return false;
                              })
                              $('#myModalSize .modal-bg, #myModalSize .close').on( "click", function() {
                                 $('#myModalSize').removeClass('show');
                              })
                           </script> --}}
                           <div class=" swatch-size swatch clearfix" data-option-index="1" style="margin-top: 30px">
                              <div class="options-title">Kích thước: <span class="var"></span></div>
                              
                              <div data-value="S" data-sku="apn5394-xbi" class="swatch-element s size   available">
                                 <input id="swatch-1-s" type="radio" name="size" required value="S">
                                 <label title="S" for="swatch-1-s"> S </label>
                              </div>
                              
                              <div data-value="M" data-sku="apn5394-xbi" class="swatch-element m size   available">
                                 <input id="swatch-1-m" type="radio" name="size" required value="M">
                                 <label title="M" for="swatch-1-m"> M </label>
                              </div>
                              
                              <div data-value="L" data-sku="apn5394-xbi" class="swatch-element l size   available">
                                 <input id="swatch-1-l" type="radio" name="size" required value="L">
                                 <label title="L" for="swatch-1-l"> L </label>
                              </div>
                              
                              <div data-value="XL" data-sku="apn5394-xbi" class="swatch-element xl size   available">
                                 <input id="swatch-1-xl" type="radio" name="size" required value="XL">
                                 <label title="XL" for="swatch-1-xl"> XL </label>
                              </div>
                              
                           </div>
                           {{-- <div class="size-guide-box size-guide-box-desktop" style="display: block;" id="product-chonsize">
                              <a href="javascript:" class="d-inline-block" id="btn-open-size">
                                 <p><img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ic_blue_ruler_pen.svg?1672303543027" alt="size"> <span>Giúp bạn chọn size</span></p>
                              </a>
                              <a href="/bang-size-ao-polo-nu-yody" class="text--center btn-size d-none" target="_blank">Bảng size chuẩn</a>
                              <div class="size-suggestion__header"></div>
                              <div class="size-chart" style="display: none;">
                                 <textarea id="sizeGuide" class="d-none">  {"77165021":[{"size":"XS","height":[130,148],"weight":[38,42]},{"size":"S","height":[149,154],"weight":[43,47]},{"size":"M","height":[155,159],"weight":[48,53]},{"size":"L","height":[160,165],"weight":[54,58]},{"size":"XL","height":[166,169],"weight":[59,65]},{"size":"2XL","height":[170,200],"weight":[66,100]}]} </textarea>
                                 <input type="hidden" id="idCateSize" class="" value="77165021">
                                 
                                 <script>
                                    var isTracking  = false;
                                    function loadData() {
                                       var product = {"id":26599975,"name":"{{$arrProduct->name}}","alias":"ao-polo-nu-modal-phoi-ke","vendor":"CTCP Thời trang YODY","type":"Áo polo nữ Yody","content":"<h2 style=\"text-align: center;\"><span style=\"color:#3498db;\">{{$arrProduct->name}} - một thiết kế trẻ trung đang được ưa chuộng nhất tại YODY.</span></h2>\n<p style=\"text-align: center;\"><em>Nằm trong bộ đôi Striped Polo chất liệu Modal, APN5394 nhận về hàng ngàn phản hồi tích cực từ các khách hàng của YODY.</em></p>\n<p style=\"text-align: center;\"><strong>SỞ HỮU NGAY NHÉ!</strong></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"2510\" original-width=\"3751\" src=\"//bizweb.dktcdn.net/100/438/408/files/polo-ke-1-df7a53d6-f5df-4ab3-80d7-c70e458a4ce0.jpg?v=1659936933478\" style=\"width: 1000px; height: 669px;\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-1.jpg?v=1659936980537\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-2.jpg?v=1659936989681\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-3.jpg?v=1659936998771\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-5.jpg?v=1659937007771\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-6.jpg?v=1659937015989\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu ke ngang\" data-thumb=\"original\" original-height=\"1000\" original-width=\"1000\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394.jpg?v=1661161305901\" /></p>\n<p style=\"text-align: center;\"><em>5 Phiên bản màu sắc trẻ trung - tươi mới - ngập tràn cảm hứng</em></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu ke ngang yody\" data-thumb=\"original\" original-height=\"1000\" original-width=\"1000\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394-xla01.jpg?v=1661161286632\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1517\" original-width=\"1138\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394-xbi06.jpg?v=1659937032818\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1517\" original-width=\"1138\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394-ddo06.jpg?v=1659937042469\" /></p>\n<p>&nbsp;</p>","summary":"<p>Chất liệu: Vải Modal (95% Modal + 5% spandex)</p>\n<p>Modal là loại vải được làm từ gỗ sồi - 1 loại cây phổ biến ở khu vực Bắc Âu</p>\n<p>Vải Modal sạch và lành tính mang lại cảm giác thoải mái, thoáng mát chon người mặc</p>\n<p>Co giãn nhẹ, form suông cơ bản</p>\n<p>Thiết kế kẻ ngang - Striped Polo mang đến nét trẻ trung ấn tượng</p>\n<p>YODY - Look good. Feel good.</p>","template_layout":"product","available":true,"tags":["12sale30","Áo polo nữ","danhmuc_Áo polo nữ","dieuchinh_1232","hienthi","Modal","Polo - IRIS","Polo - IRIS - APN","sanphamt7_22","soluong_1800","video_https://cdn.yody.io/videos/website/APN/APN5394.mp4","Xanh","Xanh Biển","yody0774","Đỏ"],"price":230300.0000,"price_min":230300.0000,"price_max":230300.0000,"price_varies":false,"compare_at_price":329000.0000,"compare_at_price_min":329000.0000,"compare_at_price_max":329000.0000,"compare_at_price_varies":false,"variants":[{"id":77165021,"barcode":"2900000858695","sku":"APN5394-XBI-S","title":"Xanh Biển / S","options":["Xanh Biển","S"],"option1":"Xanh Biển","option2":"S","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":137,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165022,"barcode":"2900000858701","sku":"APN5394-XBI-M","title":"Xanh Biển / M","options":["Xanh Biển","M"],"option1":"Xanh Biển","option2":"M","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":202,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165023,"barcode":"2900000858718","sku":"APN5394-XBI-L","title":"Xanh Biển / L","options":["Xanh Biển","L"],"option1":"Xanh Biển","option2":"L","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":153,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165024,"barcode":"2900000858725","sku":"APN5394-XBI-XL","title":"Xanh Biển / XL","options":["Xanh Biển","XL"],"option1":"Xanh Biển","option2":"XL","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":113,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165025,"barcode":"2900000858572","sku":"APN5394-DDO-S","title":"Đỏ / S","options":["Đỏ","S"],"option1":"Đỏ","option2":"S","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":14,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165026,"barcode":"2900000858589","sku":"APN5394-DDO-M","title":"Đỏ / M","options":["Đỏ","M"],"option1":"Đỏ","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165027,"barcode":"2900000858596","sku":"APN5394-DDO-L","title":"Đỏ / L","options":["Đỏ","L"],"option1":"Đỏ","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165028,"barcode":"2900000858602","sku":"APN5394-DDO-XL","title":"Đỏ / XL","options":["Đỏ","XL"],"option1":"Đỏ","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165029,"barcode":"2900000858657","sku":"APN5394-XLA-S","title":"Xanh Lá / S","options":["Xanh Lá","S"],"option1":"Xanh Lá","option2":"S","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165030,"barcode":"2900000858664","sku":"APN5394-XLA-M","title":"Xanh Lá / M","options":["Xanh Lá","M"],"option1":"Xanh Lá","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165031,"barcode":"2900000858671","sku":"APN5394-XLA-L","title":"Xanh Lá / L","options":["Xanh Lá","L"],"option1":"Xanh Lá","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165032,"barcode":"2900000858688","sku":"APN5394-XLA-XL","title":"Xanh Lá / XL","options":["Xanh Lá","XL"],"option1":"Xanh Lá","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165033,"barcode":"2900000858534","sku":"APN5394-NAV-S","title":"Navy / S","options":["Navy","S"],"option1":"Navy","option2":"S","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165034,"barcode":"2900000858541","sku":"APN5394-NAV-M","title":"Navy / M","options":["Navy","M"],"option1":"Navy","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165035,"barcode":"2900000858558","sku":"APN5394-NAV-L","title":"Navy / L","options":["Navy","L"],"option1":"Navy","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165036,"barcode":"2900000858565","sku":"APN5394-NAV-XL","title":"Navy / XL","options":["Navy","XL"],"option1":"Navy","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165037,"barcode":"2900000858619","sku":"APN5394-NAU-S","title":"Nâu / S","options":["Nâu","S"],"option1":"Nâu","option2":"S","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}},{"id":77165038,"barcode":"2900000858626","sku":"APN5394-NAU-M","title":"Nâu / M","options":["Nâu","M"],"option1":"Nâu","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}},{"id":77165039,"barcode":"2900000858633","sku":"APN5394-NAU-L","title":"Nâu / L","options":["Nâu","L"],"option1":"Nâu","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}},{"id":77165040,"barcode":"2900000858640","sku":"APN5394-NAU-XL","title":"Nâu / XL","options":["Nâu","XL"],"option1":"Nâu","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"},"images":[{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo05.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo10.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau01.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau02.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav04.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav10.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi01.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi10.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla04.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla10.jpg?v=1666067773153"}],"options":["Màu sắc","Kích thước"],"created_on":"2022-06-29T09:00:48","modified_on":"2022-12-29T21:07:23","published_on":"2022-12-02T11:38:41"}
                                       var promise = new Promise(function(resolve, reject){
                                             jQuery.getJSON(product.alias + '.json', function (data, textStatus) {
                                                resolve(data);
                                             });
                                       });
                                       promise.then(function(result) {
                                             var jqxhr = $.ajax({
                                                url: 'https://script.google.com/macros/s/AKfycbz5pp28h8ZaIyPUGOS3AVp2sRKs3jwGpJq1hkEl5czVkTPG_xxawPmLkc6TWhwtjxy5/exec',
                                                method: "GET",
                                                dataType: "json",
                                             }).success(function(data){
                                                var sizeGuideList = data.content.filter(function(a) {
                                                   return a[0] == result.product_type;
                                                })
                                                if(sizeGuideList.length == 0) {
                                                   $(".size-guide-box-desktop").css('display','none');
                                                   return;
                                                }
                                                $(".size-guide-box-desktop").css('display','block');
                                                var weightMin = parseInt(sizeGuideList[1][2].split(',')[0]);
                                                var weightMax = parseInt(sizeGuideList[1][2].split(',')[1]);
                                                var heightMin = parseInt(sizeGuideList[1][3].split(',')[0]);
                                                var heightMax = parseInt(sizeGuideList[1][3].split(',')[1]);
                                                
                                                for(var i = 2; i < sizeGuideList.length; i++) {
                                                   var weight = sizeGuideList[i][2].split(',');
                                                   var height = sizeGuideList[i][3].split(',');
                                                   if(parseInt(weight[0]) <= weightMin) {
                                                         weightMin = parseInt(weight[0]);
                                                   }
                                                   if(parseInt(weight[1]) >= weightMax) {
                                                         weightMax = parseInt(weight[1]);
                                                   }
                                                   if(parseInt(height[0]) <= heightMin) {
                                                         heightMin = parseInt(height[0]);
                                                   }
                                                   if(parseInt(height[1]) >= heightMax) {
                                                         heightMax = parseInt(height[1]);
                                                   }
                                                }
                                                $("#hidden_size_info").attr("data-weight",weightMin);
                                                $("#hidden_size_info").attr("data-height",heightMin)
                                                                           
                                                $("#heightRange").attr("value",heightMin);
                                                $("#heightRange").attr("min",heightMin);
                                                $("#heightRange").attr("max",heightMax);
                                                
                                                $("#weightRange").attr("value",weightMin);
                                                $("#weightRange").attr("min",weightMin);
                                                $("#weightRange").attr("max",weightMax);
                                                
                                                var vw = $(window).width();
                                                //var sizeGuideBoard = $('#sizeGuide').length ? $.parseJSON($('#sizeGuide').val()) : '';				
                                                var cateId = $('#idCateSize').val();
                                                console.log({"id":26599975,"name":"{{$arrProduct->name}}","alias":"ao-polo-nu-modal-phoi-ke","vendor":"CTCP Thời trang YODY","type":"Áo polo nữ Yody","content":"<h2 style=\"text-align: center;\"><span style=\"color:#3498db;\">{{$arrProduct->name}} - một thiết kế trẻ trung đang được ưa chuộng nhất tại YODY.</span></h2>\n<p style=\"text-align: center;\"><em>Nằm trong bộ đôi Striped Polo chất liệu Modal, APN5394 nhận về hàng ngàn phản hồi tích cực từ các khách hàng của YODY.</em></p>\n<p style=\"text-align: center;\"><strong>SỞ HỮU NGAY NHÉ!</strong></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"2510\" original-width=\"3751\" src=\"//bizweb.dktcdn.net/100/438/408/files/polo-ke-1-df7a53d6-f5df-4ab3-80d7-c70e458a4ce0.jpg?v=1659936933478\" style=\"width: 1000px; height: 669px;\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-1.jpg?v=1659936980537\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-2.jpg?v=1659936989681\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-3.jpg?v=1659936998771\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-5.jpg?v=1659937007771\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1080\" original-width=\"1080\" src=\"//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-6.jpg?v=1659937015989\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu ke ngang\" data-thumb=\"original\" original-height=\"1000\" original-width=\"1000\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394.jpg?v=1661161305901\" /></p>\n<p style=\"text-align: center;\"><em>5 Phiên bản màu sắc trẻ trung - tươi mới - ngập tràn cảm hứng</em></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu ke ngang yody\" data-thumb=\"original\" original-height=\"1000\" original-width=\"1000\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394-xla01.jpg?v=1661161286632\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1517\" original-width=\"1138\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394-xbi06.jpg?v=1659937032818\" /></p>\n<p style=\"text-align: center;\"><img alt=\"ao polo nu phối kẻ\" data-thumb=\"original\" original-height=\"1517\" original-width=\"1138\" src=\"//bizweb.dktcdn.net/100/438/408/files/apn5394-ddo06.jpg?v=1659937042469\" /></p>\n<p>&nbsp;</p>","summary":"<p>Chất liệu: Vải Modal (95% Modal + 5% spandex)</p>\n<p>Modal là loại vải được làm từ gỗ sồi - 1 loại cây phổ biến ở khu vực Bắc Âu</p>\n<p>Vải Modal sạch và lành tính mang lại cảm giác thoải mái, thoáng mát chon người mặc</p>\n<p>Co giãn nhẹ, form suông cơ bản</p>\n<p>Thiết kế kẻ ngang - Striped Polo mang đến nét trẻ trung ấn tượng</p>\n<p>YODY - Look good. Feel good.</p>","template_layout":"product","available":true,"tags":["12sale30","Áo polo nữ","danhmuc_Áo polo nữ","dieuchinh_1232","hienthi","Modal","Polo - IRIS","Polo - IRIS - APN","sanphamt7_22","soluong_1800","video_https://cdn.yody.io/videos/website/APN/APN5394.mp4","Xanh","Xanh Biển","yody0774","Đỏ"],"price":230300.0000,"price_min":230300.0000,"price_max":230300.0000,"price_varies":false,"compare_at_price":329000.0000,"compare_at_price_min":329000.0000,"compare_at_price_max":329000.0000,"compare_at_price_varies":false,"variants":[{"id":77165021,"barcode":"2900000858695","sku":"APN5394-XBI-S","title":"Xanh Biển / S","options":["Xanh Biển","S"],"option1":"Xanh Biển","option2":"S","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":137,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165022,"barcode":"2900000858701","sku":"APN5394-XBI-M","title":"Xanh Biển / M","options":["Xanh Biển","M"],"option1":"Xanh Biển","option2":"M","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":202,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165023,"barcode":"2900000858718","sku":"APN5394-XBI-L","title":"Xanh Biển / L","options":["Xanh Biển","L"],"option1":"Xanh Biển","option2":"L","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":153,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165024,"barcode":"2900000858725","sku":"APN5394-XBI-XL","title":"Xanh Biển / XL","options":["Xanh Biển","XL"],"option1":"Xanh Biển","option2":"XL","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":113,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"}},{"id":77165025,"barcode":"2900000858572","sku":"APN5394-DDO-S","title":"Đỏ / S","options":["Đỏ","S"],"option1":"Đỏ","option2":"S","option3":null,"available":true,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":14,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165026,"barcode":"2900000858589","sku":"APN5394-DDO-M","title":"Đỏ / M","options":["Đỏ","M"],"option1":"Đỏ","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165027,"barcode":"2900000858596","sku":"APN5394-DDO-L","title":"Đỏ / L","options":["Đỏ","L"],"option1":"Đỏ","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165028,"barcode":"2900000858602","sku":"APN5394-DDO-XL","title":"Đỏ / XL","options":["Đỏ","XL"],"option1":"Đỏ","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"}},{"id":77165029,"barcode":"2900000858657","sku":"APN5394-XLA-S","title":"Xanh Lá / S","options":["Xanh Lá","S"],"option1":"Xanh Lá","option2":"S","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165030,"barcode":"2900000858664","sku":"APN5394-XLA-M","title":"Xanh Lá / M","options":["Xanh Lá","M"],"option1":"Xanh Lá","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165031,"barcode":"2900000858671","sku":"APN5394-XLA-L","title":"Xanh Lá / L","options":["Xanh Lá","L"],"option1":"Xanh Lá","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165032,"barcode":"2900000858688","sku":"APN5394-XLA-XL","title":"Xanh Lá / XL","options":["Xanh Lá","XL"],"option1":"Xanh Lá","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"}},{"id":77165033,"barcode":"2900000858534","sku":"APN5394-NAV-S","title":"Navy / S","options":["Navy","S"],"option1":"Navy","option2":"S","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165034,"barcode":"2900000858541","sku":"APN5394-NAV-M","title":"Navy / M","options":["Navy","M"],"option1":"Navy","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165035,"barcode":"2900000858558","sku":"APN5394-NAV-L","title":"Navy / L","options":["Navy","L"],"option1":"Navy","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165036,"barcode":"2900000858565","sku":"APN5394-NAV-XL","title":"Navy / XL","options":["Navy","XL"],"option1":"Navy","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"}},{"id":77165037,"barcode":"2900000858619","sku":"APN5394-NAU-S","title":"Nâu / S","options":["Nâu","S"],"option1":"Nâu","option2":"S","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}},{"id":77165038,"barcode":"2900000858626","sku":"APN5394-NAU-M","title":"Nâu / M","options":["Nâu","M"],"option1":"Nâu","option2":"M","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}},{"id":77165039,"barcode":"2900000858633","sku":"APN5394-NAU-L","title":"Nâu / L","options":["Nâu","L"],"option1":"Nâu","option2":"L","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}},{"id":77165040,"barcode":"2900000858640","sku":"APN5394-NAU-XL","title":"Nâu / XL","options":["Nâu","XL"],"option1":"Nâu","option2":"XL","option3":null,"available":false,"taxable":false,"price":230300.0000,"compare_at_price":329000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":0,"weight":100,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"}}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"},"images":[{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla05.jpg?v=1669887835227"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo03.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau05.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo05.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-ddo10.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau01.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau02.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nau08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav04.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-nav10.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi01.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi07.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xbi10.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla06.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla04.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla08.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla09.jpg?v=1666067773153"},{"src":"https://bizweb.dktcdn.net/100/438/408/products/apn5394-xla10.jpg?v=1666067773153"}],"options":["Màu sắc","Kích thước"],"created_on":"2022-06-29T09:00:48","modified_on":"2022-12-29T21:07:23","published_on":"2022-12-02T11:38:41"})
                                                $("#hidden_size_info").attr('data-wanted', $('#wantedRange').val());
                                                $('#result_size').hide();
                                                var sliderHeight = '',
                                                   outputHeight = '',
                                                   sliderWeight = '',
                                                   outputWeight = '';
                                                sliderHeight = document.getElementById("heightRange");
                                                outputHeight = document.getElementById("amount_height");
                                                sliderWeight = document.getElementById("weightRange");
                                                outputWeight = document.getElementById("amount_weight");
                                                $('#heightRange, #weightRange').on('input', function () {
                                                   var value = (this.value - this.min) / (this.max - this.min) * 100
                                                   this.style.background = 'linear-gradient(to right, #fcaf17 0%, #fcaf17 ' + value + '%, #F2F2F2 ' + value + '%, #F2F2F2 100%)';
                                                });
                                                if (sliderHeight) {
                                                   outputHeight.innerHTML = sliderHeight.value;
                                                   sliderHeight.oninput = function () {
                                                         outputHeight.innerHTML = this.value;
                                                         $("#hidden_size_info").attr('data-height', this.value);
                                                         $('.input_slider_height, .input_slider_weight').val('');
                                                         setTimeout(function () {
                                                            appProductView.calcSize();
                                                         }, 500);
                                                   };
                                                }
                                                if (sliderWeight) {
                                                   outputWeight.innerHTML = sliderWeight.value;
                                                   sliderWeight.oninput = function () {
                                                         outputWeight.innerHTML = this.value;
                                                         $("#hidden_size_info").attr('data-weight', this.value);
                                                         $('.input_slider_height, .input_slider_weight').val('');
                                                         setTimeout(function () {
                                                            appProductView.calcSize();
                                                         }, 500);
                                                   };
                                                }
                                                var y = 1;
                                                var sliderWanted = document.getElementById("wantedRange");
                                                sliderWanted.oninput = function () {
                                                   $("#hidden_size_info").attr('data-wanted', this.value);
                                                   setTimeout(function () {
                                                         appProductView.calcSize();
                                                   }, 500);
                                                };
                                                $('.level-size').click(function () {
                                                   if (!$(this).hasClass('active')) {
                                                         $('.level-size').removeClass('active');
                                                         $(this).addClass('active');
                                                         $("#hidden_size_info").attr('data-wanted', $(this).attr('data-value'));
                                                   }
                                                });
                                                var appProductView = {
                                                   sizeCus: function (w, h, yw) {
                                                         var flag = false;
                                                         var sizeSelects = [];
                                                         var sizeSelect = {};
                                                         sizeGuideList.forEach(function (v, k) {
                                                            var weightRange = v[2].split(',');
                                                            var heightRange = v[3].split(',');
                                                            if((w >= parseInt(weightRange[0]) && w <= parseInt(weightRange[1])) && (h >= parseInt(heightRange[0]) && h <= parseInt(heightRange[1]))) {
                                                               flag = true;
                                                               sizeSelects.push(v);
                                                            }
                                    
                                                         });
                                                         if (!flag) {
                                                            if ($(window).width()< 768) {
                                                               $('.size-suggestion__header').hide();
                                                            }
                                                            return 'Rất tiếc! YODY không tìm thấy size phù hợp với bạn.<br/>Vui lòng chỉnh sửa lại thông số';
                                                         } else {
                                                            if ($(window).width()< 768) {
                                                               $('.size-suggestion__header').css('display','inline-block');
                                                            }
                                                         }
                                                         sizeSelect = sizeSelects[0]
                                                         $('.size-suggestion__icon .value').text(sizeSelect[1]);
                                                         var flag = false;
                                                         let isSoldout = false;
                                                         $(".swatch-size .swatch-element").each(function() {
                                                            if($(this).hasClass('available')) {
                                                               if($(this).attr('data-value') == sizeSelect[1]) {
                                                                     $(this).find('input').prop("checked", true);
                                                                     $(this).click();
                                                                     $(this).change();
                                                                     $(this).find('input').click();
                                                                     $(this).find('input').change();
                                                                     $('.swatch-size').find('.var').html(sizeSelect[1]);
                                                                     $(".add_guide_size").removeAttr("disabled"); 
                                                               }
                                                            }
                                                            else {
                                                               if($(this).attr('data-value') == sizeSelect[1]) {
                                                                     $(".add_guide_size").attr("disabled","disabled");
                                                               }
                                                            }
                                                            if ($(this).hasClass('soldout') && $(this).attr('data-value') == sizeSelect[1]) {
                                                               isSoldout = true;
                                                            }
                                                            if($(this).attr('data-value') == sizeSelect[1]){
                                                               flag = true;
                                                            }
                                                         })
                                                         if(!flag){
                                                            $(".add_guide_size").attr("disabled","disabled");
                                                         }
                                                         if(!isTracking) {
                                                            trackingGuideSize(w,h,sizeSelect[1])
                                                         }
                                                         
                                                         if (isSoldout) {
                                                            const colorTemp = $(".swatch-color .options-title").eq(0).find(".var").text() === "" ? $(".swatch-color .options-title").eq(1).find(".var").text() : $(".swatch-color .options-title").eq(0).find(".var").text();
                                                            return `Kích thước YODY chọn giúp bạn là: <span id="size_rs" style="color: #8A8A8F;">${sizeSelect[1]}</span><br />
                                                               Rất tiếc, ${sizeSelect[1]}/${colorTemp} đang hết hàng
                                                            `;
                                                         }
                                                         
                                                         return 'Kích thước YODY chọn giúp bạn là: <span id="size_rs">' + sizeSelect[1] + '</span>';
                                    
                                                   },
                                                   calcSize: function () {
                                                         var sizeGuide = $("#hidden_size_info");
                                                         var weight = Number(sizeGuide.attr('data-weight'));
                                                         var height = Number(sizeGuide.attr('data-height'));
                                                         var wanted = Number(sizeGuide.attr('data-wanted'));
                                                         $('#result_size>p').html(appProductView.sizeCus(weight, height, wanted));
                                                         $('#result_sizeMb>p').html(appProductView.sizeCus(weight, height, wanted));
                                                         $('#result_size').show();
                                                         $('#result_sizeMb').show();
                                                   }
                                                };
                                             });
                                       });	  	
                                    }
                                    loadData();
                                    
                                    function trackingGuideSize(height,weight,size) {
                                       dataLayer.push({
                                             'event': 'pangoTrack',
                                             'eventAction': 'size_suggest',
                                             'cdpData': {
                                                properties: {
                                                   'height': height,
                                                   'weight': weight,
                                                   'size': size
                                                }
                                             }
                                       });
                                       isTracking = true;
                                       setTimeout(function() {
                                             isTracking = false;
                                       },30000)
                                    }
                                    
                                    
                                    function getContent(url, selector) {
                                       $.ajax({
                                             type: 'GET',
                                             url: url,
                                             dataType: "html",
                                             beforeSend: function() {
                                                $(selector).html('');
                                             },
                                             success: function(data) {
                                                var content = $(data);
                                                setTimeout(function(){
                                                   $(selector).html(content.html());
                                                   awe_lazyloadImage();
                                                },500);
                                             }
                                       });
                                    }
                                 </script>
                              </div>
                              <div id="myModalSize" class="modal fade" role="dialog">
                                 <div class="modal-bg"></div>
                                 <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <div class="title">HƯỚNG DẪN CHỌN SIZE CHUẨN</div>
                                    <div class="sum">Áo polo nữ Yody</div>
                                    <div class="content"></div>
                                 </div>
                              </div>
                           </div> --}}
                           <script>
                              $(document).ready(function() {
                                 if ($(window).width() < 767) {
                                       $(".size-guide-box-desktop").remove();
                                       $(".size-chart").css('display','none');
                                 }
                                 else {
                                       $(".size-guide-box-mobile").remove();
                                       $(".size-chart").css('display','none');
                                 }
                              })
                              var href = $('.btn-size').attr('href')+'?view=size';
                              var selector = "#myModalSize .content";
                              //getContent(href, selector);
                              $('.btn-size').on( "click", function() {
                                 $('#myModalSize').addClass('show');
                                 setTimeout(function(){
                                       $('#myModalSize').removeClass('show');
                                 },20000)
                                 return false;
                              })
                              $('#myModalSize .modal-bg, #myModalSize .close').on( "click", function() {
                                 $('#myModalSize').removeClass('show');
                              })
                           </script>
                        </div>
                     </div>
                     <div class="line-box-mobile"></div>
                     <div id="from-action-addcart" class="clearfix from-action-addcart d-flex align-items-center" style="margin-top: 20px">
                        <div class="qty-ant clearfix custom-btn-number">
                           <div class="custom custom-btn-numbers clearfix input_number_product">
                              <button id="btn-minus" onclick="var result = document.getElementById('qty'); var result2 = document.getElementById('qtyHeader'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ){result.value--;result2.value = result.value};return false;" class="btn-minus btn-cts" type="button">–</button>
                              <input aria-label="Số lượng" type="text" class="quantity input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" >
                              <button id="btn-plus" onclick="var result = document.getElementById('qty'); var result2 = document.getElementById('qtyHeader'); var qty = result.value; if( !isNaN(qty)) {result.value++;result2.value = result.value};return false;" class="btn-plus btn-cts" type="button">+</button>
                           </div>
                        </div>
                        <input type="hidden" id="price" value="{{$arrProduct->price}}">
                        <div class="btn-mua">
                           <div id="add-to-cart-wrapper" class="add-to-cart-wrapper">
                              <button type="submit" onclick="addCart({{$arrProduct->product_id}})" id="btn-add-to-cart" class="btn-cart btn_buy add_to_cart btn-add-to-cart">Thêm vào giỏ hàng</button>
                              {{-- btn_buy add_to_cart btn-add-to-cart --}}
                              {{-- <a href="/add-cart/{{$arrProduct->product_id}}">haha</a> --}}
                           </div>
                        </div>
                     </div>
                     <div class="line-box-mobile"></div>
                  </div>
               </form>
               <div class="ab_quantitybreak_infor" style="display: none;"></div>
               <div id="bizweb-qty-msg" style="display: none;"></div>
               <div class="conatiner payment-policy-wrapper">
                  <div class="row">
                     <div class="col-6 d-flex flex-column justify-content-start align-items-start" style="margin-bottom: -12px;">
                        <div class="d-flex flex-column align-items-center">
                           <div class="icon">
                              <img class="lazyload loading" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ic_payment_freeship.svg?1672303543027" alt="freeship" data-was-processed="true">
                           </div>
                           <div class="title">
                              Miễn phí vận chuyển<br>với mọi đơn hàng
                           </div>
                           <div class="icon">
                              <img class="lazyload loading" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ic_payment_cod.svg?1672303543027" alt="cod" data-was-processed="true">
                           </div>
                           <div class="title">
                              Thanh toán khi<br>nhận hàng
                           </div>
                        </div>
                     </div>
                     <div class="col-6 d-flex flex-column justify-content-start align-items-end" style="margin-bottom: -12px;">
                        <div class="d-flex flex-column align-items-center">
                           <div class="icon">
                              <img class="lazyload loading" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ic_payment_freechange.svg?1672303543027" alt="freecharge" data-was-processed="true">
                           </div>
                           <div class="title">
                              Miễn phí đổi trả<br>trong 15 ngày
                           </div>
                           <div class="icon">
                              <img class="lazyload loading" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ic_payment_fastship.svg?1672303543027" alt="fastship" data-was-processed="true">
                           </div>
                           <div class="title">
                              Vận chuyển siêu tốc<br>từ 1 đến 3 ngày
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-grid-item-desc description-detail-wrapper">
            <div class="line-box-mobile event-line d-none"></div>
            <div class="wrap-promotion-jean accordion border-0 d-none">
               <div class="promotion-title">
                  <div class="text">
                     Mua Jeans Tặng Quần Chip
                  </div>
                  <div class="accordion-toggle p-0">
                     <div class="show-more">
                        <a>Mua ngay</a>
                     </div>
                  </div>
               </div>
               <div class="promotion-content">
                  <div class="img-left item-content">
                     <img src="//bizweb.dktcdn.net/thumb/medium/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153" alt="quan jean">
                  </div>
                  <div class="dau-cong">
                     <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/dau-cong.svg?1672303543027" alt="quan jean">
                  </div>
                  <div class="img-right item-content">
                     <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/image-qua-tang.png?1672303543027" alt="quan jean">
                  </div>
               </div>
               <div class="accordion-panel" style="transition-duration: 0.25s; width: 100%;">
                  <div class="product-app accordion-content" style="width: 100%;">
                     <div class="sapo-appcombo-module-detail"></div>
                     <script type="text/x-custom-template" data-template="comboModuleDetail">
                        <div class="module-combo">
                           <h4 class="title">${comboName}</h4>
                           <div class="module-content-combo">
                                 <div class="list-product">${listProduct}</div>
                                 <div class="total-action">
                        <hr/>
                                    <div class="total-price-bg">
                                       <p>Giá gốc: <span class="price-regular">${priceRegular}</span><del>${priceOriginal}</del></p>
                                       <p>Tiết kiệm: <span class="price-saving">${priceSaving}</span></p>
                                       <p>Giá combo: <span class="price-combo">${priceCombo}</span></p>
                                    </div>
                                    <div class="action">
                                       <button type="button" class="btn-addtocart-combo" onclick="submitDealCombo(this)"><img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/shopping-cart.svg?1672303543027" alt="cart"/> Thêm vào giỏ hàng</button>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </script>
                     <script type="text/x-custom-template" data-template="comboModuleProduct">
                        <div class="item-product" data-product-id="${productId}">
                           <div class="product-image"><a href="${productUrl}" target="_blank"><img src="${productImage}" alt="${productTitle}"></a></div>
                           <div class="product-content">
                                 <div class="product-title"><a href="${productUrl}" target="_blank">${productTitle}</a></div>
                                 <div class="product-variant">${variantTitle}</div>
                                 <div class="price">
                                    <span class="price-regular" data-price="${productPriceRegular}">${productPriceRegularFormat}</span>
                                    <del class="price-old" data-price="${productPriceOriginal}">${productPriceOriginalFormat}</del>
                                 </div>
                                 ${optionProduct}
                           </div>
                           <input type="text" class="id-item" value="${variantId}" style="display: none;">
                        </div>
                     </script>
                     <div class="sapo-buyxgety-module-detail-v2"></div>
                  </div>
               </div>
            </div>
            <div class="wrap-promotion-gift-by-price d-none">
               <div class="promotion-title">
                  <div class="text">
                     Mua 499.000 Để Nhận 1 Quà Tặng
                  </div>
                  <div class="show-more">
                     <a href="/dai-tiec-tri-an">Xem thêm</a>
                  </div>
               </div>
               <div class="promotion-content">
                  <div class="img-left item-content-2">
                     <img src="//bizweb.dktcdn.net/thumb/medium/100/438/408/products/apn5394-xbi04.jpg?v=1666067773153" alt="sp hien tai">
                     <div class="position-relative img-more-wrapper">
                        <div class="img-more">
                           <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/ic_white_more.svg?1672303543027" alt="load more">
                        </div>
                        <img id="promotion-gift-by-price-more-product" class="" alt="sp khac" src="https://bizweb.dktcdn.net/100/438/408/products/sdk5059-hog-2.jpg?v=1672122796000">
                     </div>
                  </div>
                  <div class="dau-cong-2">
                     <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/dau-cong.svg?1672303543027" alt="quan jean">
                  </div>
                  <div class="img-right item-content">
                     <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/image-qua-tang-499k.png?1672303543027" alt="qua 499k">
                  </div>
               </div>
            </div>
            <div class="line-box-mobile"></div>
            <div class="accordion accordion-line-top accordion-opened" id="special-features">
               <div class="accordion-toggle">
                  <div class="toggle-text">
                     Đặc tính nổi bật
                  </div>
                  <div class="toggle-arrow"></div>
               </div>
               <div class="accordion-panel accordion-panel-mobile-fixed" style="transition-duration: 0.25s; max-height: 170px;">
                  <div class="px-3 pt-3 pb-1 accordion-caption-wrapper">
                     <div class="accordion-caption">
                        <div>Đặc tính nổi bật</div>
                        <div class="accordion-close-wrapper">
                           <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/close.svg?1672303543027" class="accordion-close" width="15" height="15" alt="close">
                        </div>
                     </div>
                  </div>
                  <div class="accordion-content">
                     <div id="product-dactinh" class="km-hot">
                        <div class="box-km">
                           <h2 class="title_km">
                              <img id="toggle-box-promotion" class="d-none" style="float: right;cursor: pointer;margin-right: 45%;" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/right-circle.svg?1672303543027">
                           </h2>
                           <div class="box-promotion">
                              {!!$arrProduct->product_detail!!}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-panel-mobile-fixed-backdrop"></div>
            </div>
            <div class="line-box-mobile"></div>
            {{-- <div id="product-detail-collapse" class="accordion">
               <div class="accordion-toggle">
                  <div class="toggle-text">
                     Chi tiết sản phẩm
                  </div>
                  <div class="toggle-arrow"></div>
               </div>
               <div class="accordion-panel accordion-panel-mobile-fixed">
                  <div class="px-3 pt-3 pb-1 accordion-caption-wrapper">
                     <div class="accordion-caption">
                        <div>Chi tiết sản phẩm</div>
                        <div class="accordion-close-wrapper">
                           <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/close.svg?1672303543027" class="accordion-close" width="15" height="15" alt="close">
                        </div>
                     </div>
                  </div>
                  <div class="accordion-content">
                     <div id="product-content">
                        <div class="product_getcontent rte">
                           <div class="ba-text-fpt">
                              <h2 style="text-align: center;"><span style="color:#3498db;">{{$arrProduct->name}} - một thiết kế trẻ trung đang được ưa chuộng nhất tại YODY.</span></h2>
                              <p style="text-align: center;"><em>Nằm trong bộ đôi Striped Polo chất liệu Modal, APN5394 nhận về hàng ngàn phản hồi tích cực từ các khách hàng của YODY.</em></p>
                              <p style="text-align: center;"><strong>SỞ HỮU NGAY NHÉ!</strong></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="2510" original-width="3751" src="//bizweb.dktcdn.net/100/438/408/files/polo-ke-1-df7a53d6-f5df-4ab3-80d7-c70e458a4ce0.jpg?v=1659936933478" style="width: 1000px; height: 669px;"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1080" original-width="1080" src="//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-1.jpg?v=1659936980537"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1080" original-width="1080" src="//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-2.jpg?v=1659936989681"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1080" original-width="1080" src="//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-3.jpg?v=1659936998771"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1080" original-width="1080" src="//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-5.jpg?v=1659937007771"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1080" original-width="1080" src="//bizweb.dktcdn.net/100/438/408/files/ao-polo-nu-ke-ngang-yodyvn-6.jpg?v=1659937015989"></p>
                              <p style="text-align: center;"><img alt="ao polo nu ke ngang" data-thumb="original" original-height="1000" original-width="1000" src="//bizweb.dktcdn.net/100/438/408/files/apn5394.jpg?v=1661161305901"></p>
                              <p style="text-align: center;"><em>5 Phiên bản màu sắc trẻ trung - tươi mới - ngập tràn cảm hứng</em></p>
                              <p style="text-align: center;"><img alt="ao polo nu ke ngang yody" data-thumb="original" original-height="1000" original-width="1000" src="//bizweb.dktcdn.net/100/438/408/files/apn5394-xla01.jpg?v=1661161286632"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1517" original-width="1138" src="//bizweb.dktcdn.net/100/438/408/files/apn5394-xbi06.jpg?v=1659937032818"></p>
                              <p style="text-align: center;"><img alt="ao polo nu phối kẻ" data-thumb="original" original-height="1517" original-width="1138" src="//bizweb.dktcdn.net/100/438/408/files/apn5394-ddo06.jpg?v=1659937042469"></p>
                              <p>&nbsp;</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-panel-mobile-fixed-backdrop"></div>
            </div> --}}
            <div class="line-box-mobile"></div>
            <div id="review-wrapper" class="accordion review-wrapper">
               <div class="accordion-toggle title">
                  <div class="toggle-text">
                     Đánh giá
                  </div>
               </div>
               <div>
                  <div id="sapo-product-reviews" class="sapo-product-reviews" data-id="">
                     <div>
                        <div id="change-item-rating">
                           <div id="sapo-product-reviews-noitem" >
                              <div>
                                 <div class="content">
                                    @if (count($arrRatings)==0)
                                       <p>Hiện tại sản phẩm chưa có đánh giá nào, bạn hãy trở thành người đầu tiên đánh giá cho sản phẩm này</p>
                                    @endif
                                    <div class="product-reviews-summary-actions">
                                       <button type="button" class="btn-new-review ratings" >Gửi đánh giá của bạn</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="sapo-product-reviews-sub">
                              <div>
                                 <div id="bpr-list" class="sapo-product-reviews-list">
                                    @foreach ($arrRatings as $rating)
                                       @if ($rating->parent_id == 0)
                                          <div id="sapo-review-{{$rating->rating_id}}" class="sapo-review" itemtype="http://schema.org/Review">
                                             <div class="sapo-review-header">
                                                <span class="sapo-review-author" itemprop="author">{{$rating->fullname}}</span>
                                                <fieldset class="rating" style="margin-top: 10px;">
                                                   <fieldset disabled class="rating dis" style="margin: -8px 0 0 10px; font-size: 10px"  >
                                                      <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==5)?"checked":"" }}/><label id="dis"></label>
                                                      <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==4)?"checked":"" }}/><label id="dis"></label>
                                                      <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==3)?"checked":"" }}/><label id="dis"></label>
                                                      <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==2)?"checked":"" }}/><label id="dis"></label>
                                                      <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==1)?"checked":"" }}/><label id="dis"></label>
                                                   </fieldset>
                                                </fieldset>
                                             </div>
                                             <div class="sapo-review-body">
                                                <span class="sapo-review-content-body" itemprop="description">{{$rating->comment}}</span>
                                             </div>
                                             <div class="sapo-review-actions" style="color: #030d78">
                                                <ul>
                                                   <li class="sapo-review-reply" data-rating-id="{{$rating->rating_id}}"><a class="sapo-review-reply-{{$rating->rating_id}}" title="Gửi trả lời" href="javascript: void(0);">Gửi trả lời</a></li>
                                                   <li><span class="s" style="font-size: 12px" itemprop="datePublished">3 phút trước</span></li>
                                                </ul>
                                             </div>
                                             <div class="sapo-review-reply-form hide rep-{{$rating->rating_id}}" id="">
                                                <div>
                                                   <form method="get" action="" id="sapo-review-reply-{{$rating->rating_id}}">
                                                      <input type="hidden" name="product_id" id="reply_comment_id_{{$rating->rating_id}}" value="{{$arrProduct->product_id}}">
                                                      <div class="bpr-form-contact">
                                                         <div class="form-group form-group__multiple">
                                                            <div class="bpr-reply-form-contact-name require">
                                                               <input type="text" maxlength="100" id="reply_author_{{$rating->rating_id}}" name="fullname2" placeholder="Nhập tên của bạn">
                                                               <span class="bpr-reply-form-message-error"></span>
                                                            </div>
                                                            <div class="bpr-reply-form-contact-email require">
                                                               <input type="text" maxlength="50" id="reply_email_{{$rating->rating_id}}" name="email2" value="" placeholder="Địa chỉ Email">
                                                               <span class="bpr-reply-form-message-error"></span>
                                                            </div>
                                                            <div class="bpr-reply-form-contact-phone option">
                                                               <input type="tel" maxlength="15" id="reply_phone_{{$rating->rating_id}}" name="phone2" value="" placeholder="Số điện thoại (nếu có)">
                                                               <span class="bpr-reply-form-message-error"></span>
                                                            </div>
                                                         </div>
                                                         <div class="form-group__textarea">
                                                            <div class="form-group">
                                                               <div class="bpr-reply-form-review-body">
                                                                  <textarea maxlength="1000" id="reply_body_{{$rating->rating_id}}" name="comment" rows="1" placeholder="Nhập trả lời của bạn"></textarea>
                                                               </div>
                                                            </div>
                                                            <div class="bpr-form-actions">
                                                               <button type="button" onclick="addComment({{$rating->rating_id}})" class="bpr-reply-button-submit"><i class="fa fa-spinner fa-pulse" aria-hidden="true"></i><span>Trả lời</span></button>
                                                            </div>
                                                         </div>
                                                         <span class="bpr-reply-form-message-error bpr-reply-form-message-error-body"></span>
                                                      </div>
                                                      <div class="bpr-reply-form-review-error">
                                                         <p class="error"></p>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>

                                             <div class="sapo-review-reply-list" id="comments-{{$rating->rating_id}}">
                                                
                                                @foreach ($arrRatings as $item)
                                                @if ($item->parent_id == $rating->rating_id)
                                                   <div id="sapo-review-reply-{{$item->rating_id}}" class="sapo-review-reply-item">
                                                      <p class="sapo-review-reply-author"><span>{{$item->fullname}}</span></p>
                                                      <p class="sapo-review-reply-body">{{$item->comment}}</p>
                                                      <div class="sapo-review-reply-actions" style="color: #030d78">
                                                         <ul>
                                                            <li><span style="font-size: 12px" itemprop="datePublished">15:26 16/01/2023</span></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                @endif
                                                @endforeach
                                                   
                                             </div>
                                             <div class="sapo-review-reply-form" style="display: none;"></div>
                                             <div style="display:none;" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                                <span itemprop="ratingValue">5</span>
                                             </div>
                                          </div>
                                       @endif   
                                    @endforeach
                                 </div>
                                 <div id="bpr-more-reviews" style="display: none;"></div>
                              </div>
                          </div>
                        </div>
                        <div class="jquery-modal-blocker blocker current hide" id="empModal" style="opacity: 1;">
                           <div id="popup-bpr-form_26599975" class="popup-bpr-form jquerymodal jquery-modal" style="opacity: 1; display: inline-block;">
                              <div class="jquerymodal-content">
                                 <div class="jquerymodal-body">
                                    <a href="javascript:;" rel="jquerymodal:close" class="close-modal ">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                          <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path>
                                       </svg>
                                    </a>
                                    <div class="sapo-product-reviews-form">
                                       <div>
                                          <form method="get" action="javascript::" id="sapo-product-reviews-frm" name="sapo-product-reviews-frm" class="MultiFile-intercepted">
                                             <input type="hidden" name="parent_id" id="review_product_id" value="0">
                                             <div class="title-form">Đánh giá sản phẩm</div>
                                             <div class="review-product-name">{{$arrProduct->name}}</div>
                                             <div class="bpr-form-rating">
                                                <div class="form-group">
                                                   <label>Đánh giá của bạn về sản phẩm:</label>
                                                   <fieldset class="rating" style="margin-left: 10px;" required>
                                                      <input type="radio" id="star5" name="rating" checked value="5" required/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                      <input type="radio" id="star4" name="rating" value="4" required/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                      <input type="radio" id="star3" name="rating" value="3" required/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                      <input type="radio" id="star2" name="rating" value="2" required/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                      <input type="radio" id="star1" name="rating" value="1" required/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                   </fieldset>
                                                </div>
                                                <span class="bpr-form-message-error"></span>
                                            </div>
                                             <div class="bpr-form-contact">
                                                <div class="form-group form-group__multiple">
                                                   <div class="bpr-form-contact-name require">
                                                      <input type="text" maxlength="100" id="review_author" name="fullname" value="" placeholder="Nhập tên của bạn">
                                                      <span class="bpr-form-message-error"></span>
                                                   </div>
                                                   <div class="bpr-form-contact-email require">
                                                      <input type="text" maxlength="50" id="review_email" name="email" value="" placeholder="Địa chỉ Email">
                                                      <span class="bpr-form-message-error"></span>
                                                   </div>
                                                   <div class="bpr-form-contact-phone option">
                                                      <input type="tel" maxlength="15" id="review_phone" name="phone" value="" placeholder="Số điện thoại (nếu có)">
                                                      <span class="bpr-form-message-error"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group__textarea ">
                                                   <div class="form-group" >
                                                      <div class="bpr-form-review-body">
                                                         <textarea maxlength="1000" style="border: 1px solid #c4cdd5;border-radius: 5px 5px 0 0;" id="review_body" name="body" rows="5" placeholder="Nhập nội dung đánh giá của bạn về sản phẩm này"></textarea>
                                                      </div>
                                                   </div>
                                                   {{-- <div id="fileAttach" class="bpr-file-attach option">
                                                      <label class="next-label" for="inputFileAttach">
                                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                                            <path d="M 4 5 C 2.895 5 2 5.895 2 7 L 2 23 C 2 24.105 2.895 25 4 25 L 14.230469 25 C 14.083469 24.356 14 23.688 14 23 C 14 22.662 14.021594 22.329 14.058594 22 L 5 22 L 5 15 L 7.2890625 12.710938 C 8.2340625 11.765937 9.7659375 11.765937 10.710938 12.710938 L 15.720703 17.720703 C 17.356703 15.469703 20.004 14 23 14 C 24.851 14 26.57 14.559578 28 15.517578 L 28 7 C 28 5.895 27.105 5 26 5 L 4 5 z M 23 8 C 24.105 8 25 8.895 25 10 C 25 11.105 24.105 12 23 12 C 21.895 12 21 11.105 21 10 C 21 8.895 21.895 8 23 8 z M 23 16 C 19.134 16 16 19.134 16 23 C 16 26.866 19.134 30 23 30 C 26.866 30 30 26.866 30 23 C 30 19.134 26.866 16 23 16 z M 23 19 C 23.552 19 24 19.447 24 20 L 24 22 L 26 22 C 26.552 22 27 22.447 27 23 C 27 23.553 26.552 24 26 24 L 24 24 L 24 26 C 24 26.553 23.552 27 23 27 C 22.448 27 22 26.553 22 26 L 22 24 L 20 24 C 19.448 24 19 23.553 19 23 C 19 22.447 19.448 22 20 22 L 22 22 L 22 20 C 22 19.447 22.448 19 23 19 z"></path>
                                                         </svg>
                                                         <span>Đính kèm hình ảnh (chọn tối đa 3 hình)</span>
                                                      </label>
                                                      <div class="MultiFile-wrap" id="inputFileAttach">
                                                         <input style="color:#fff;opacity:0;cursor:pointer;" type="file" id="inputFileAttach" name="file" class="with-preview MultiFile-applied" value="">
                                                         <div class="MultiFile-list" id="inputFileAttach_list"></div>
                                                      </div>
                                                   </div> --}}
                                                   {{-- <div class="bpr-form-actions">
                                                      <button type="button" onclick="BPR.submitForm(); return false;" class="bpr-button-submit">
                                                         <i class="fa fa-spinner fa-pulse" aria-hidden="true"></i>
                                                         <span>Gửi đánh giá</span>
                                                      </button>
                                                   </div> --}}
                                                </div>
                                                <span class="bpr-form-message-error bpr-form-message-error-body" style="margin: -25px 0 20px;"></span>
                                             </div>
                                             
                                             <div class="bpr-form-actions" style="margin-top: 0">
                                                <button type="button" onclick="addRating({{$arrProduct->product_id}});" class="bpr-button-submit">
                                                   <i class="fa fa-spinner fa-pulse" aria-hidden="true"></i>
                                                   <span>Gửi đánh giá</span>
                                                </button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="bpr-review-thanks" class="bpr-success-popup jquerymodal">
                           <div class="jquerymodal-content">
                              <div class="jquerymodal-body">
                                 <a href="javascript:;" rel="jquerymodal:close" class="close-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                       <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path>
                                    </svg>
                                 </a>
                                 <div class="icon-checked">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                       <g>
                                          <path d="M12,0A12,12,0,1,1,0,12,12,12,0,0,1,12,0Zm0,1A11,11,0,1,1,1,12,11,11,0,0,1,12,1Zm7,7.46L10,18,5,12.16l.76-.65,4.27,5,8.24-8.75Z" fill-rule="evenodd"></path>
                                       </g>
                                    </svg>
                                 </div>
                                 <b>Cảm ơn bạn đã đánh giá sản phẩm!</b>
                              </div>
                           </div>
                        </div>
                        <div id="bpr-reply-thanks" class="bpr-success-popup jquerymodal">
                           <div class="jquerymodal-content">
                              <div class="jquerymodal-body">
                                 <a href="javascript:;" rel="jquerymodal:close" class="close-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                       <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path>
                                    </svg>
                                 </a>
                                 <div class="icon-checked">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                       <g>
                                          <path d="M12,0A12,12,0,1,1,0,12,12,12,0,0,1,12,0Zm0,1A11,11,0,1,1,1,12,11,11,0,0,1,12,1Zm7,7.46L10,18,5,12.16l.76-.65,4.27,5,8.24-8.75Z" fill-rule="evenodd"></path>
                                       </g>
                                    </svg>
                                 </div>
                                 <b>Cảm ơn bạn đã trả lời đánh giá!</b>
                              </div>
                           </div>
                        </div>
                        <style>.sapo-product-reviews-summary,#sapo-product-reviews-noitem{background-color:rgba(3,13,120,0.1)}.bpr-summary-average{color:#030d78}.sapo-product-reviews-star{color:#fac126}.btn-new-review{background-color:#030d78;border-color:#030d78}#sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter input:checked ~ .checkmark{color:#030d78;border-color:#030d78}#sapo-product-reviews-frm #fileAttach svg path{fill:#030d78}#sapo-product-reviews-frm .bpr-button-submit{background-color:#030d78;border-color:#030d78}.sapo-review-verified, .sapo-review-actions{color:#030d78}.icon-verified path{fill:#030d78}#sapo-product-reviews .sapo-product-reviews-list .sapo-review-reply-list .sapo-review-reply-item .sapo-review-reply-author .is-admin{background-color:#030d78; border-color: #030d78}.simple-pagination li span.current, .simple-pagination li a.current{color:#030d78; border-color:#030d78;}#sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter h4, #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter p{background-color:#030d78;border-color:#030d78;}#sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter h4.active, #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter p.active{color:#030d78}#sapo-product-reviews .sapo-product-reviews-list .sapo-review-reply-list .btn-show-prev{background-color:rgba(3,13,120,0.1); color: #030d78}.bpr-success-popup .icon-checked svg path{fill: #030d78}.sapo-review-reply-form .bpr-form-actions .bpr-reply-button-submit{border-color: #030d78; background: #030d78;}</style>
                        <style>.sapo-product-reviews-summary, #sapo-product-reviews-noitem {
                           background-color: #F2F2F2;
                           }
                           #sapo-product-reviews #sapo-product-reviews-sub {
                           border: 1px solid #f2f2f2;
                           }
                           .sapo-review-time {
                           display: none;
                           }
                           #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-action{
                           width: 40%;
                           }
                           #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-action .sapo-product-reviews-star i{
                           font-size: 38px;
                           margin-right: 8px;
                           }
                           #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-action .bpr-summary-average{
                           font-size: 22px;
                           font-weight: 600;
                           }
                           #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-action p{
                           margin: 0 0 10px;
                           }
                           #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-action .sapo-product-reviews-star{
                           margin: 10px 0 10px;
                           }
                           #sapo-product-reviews .sapo-product-reviews-summary{
                           padding: 30px 10px;
                           }
                        </style>
                     </div>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                     <button id="btn-loadmore-reviews" class="d-none"> Xem thêm đánh giá </button>
                  </div>
                  <script>
                     setTimeout(function() {
                        $(".btn-new-review").click(function(){
                           $(".bpr-button-submit").click(function(e){
                              //e.preventDefault();
                              dataLayer.push({
                                 'event': 'pangoTrack',
                                 'eventAction': 'generate_lead',
                                 user_data: {
                                    email_address: $("#sapo-product-reviews-frm #review_email").val(),
                                    phone_number: $("#sapo-product-reviews-frm #review_phone").val(),
                                    address: {
                                       first_name: $("#sapo-product-reviews-frm #review_author").val(),
                                       last_name: '',
                                       city: '',
                                       region: '',
                                       postal_code: '',
                                       country: ''
                                    },
                                    'form_key': 'form_review',
                                    'form_name': 'Đánh giá sản phẩm',
                                    'form_vs': '', 
                                    'cf': 'cf_02=' + $('#sapo-product-reviews-frm #review_body').val(),
                                 },
                                 'cdpData': {
                                       properties: {
                                          'gender': '',
                                          'birthYear': ''
                                       }
                                 }
                              })
                           });
                        });
                     },3000);
                     
                     $(document).ready(function() {
                     const reviewListWrapper = $("#bpr-list");
                     //const reviewList = reviewList.find(".sapo-review");
                     let counter = 0;
                     let isLoadmoreOpened = false;
                     let timer = setInterval(function() {
                        const reviewList = $(".sapo-review");
                        if (reviewList.length > 0) {
                              for (let i = 0; i < reviewList.length; i += 1) {
                                 if (i > 2) {
                                    reviewList.eq(i).addClass("d-none");
                                 }
                              }
                              if (reviewList.length > 3) {
                                 $("#btn-loadmore-reviews").click(function() {
                                    if (isLoadmoreOpened) {
                                          for (let i = 0; i < reviewList.length; i += 1) {
                                             if (i > 2) {
                                                reviewList.eq(i).addClass("d-none");
                                             }
                                          }
                                          $(this).text("Xem thêm đánh giá");
                                          isLoadmoreOpened = false;
                                          window.scrollTo({
                                             top: $("#review-wrapper").position().top - $(".header-index").height() - $("#scrolling-tabs").height(),
                                             behavior: "smooth",
                                          });
                                    } else {
                                          reviewList.removeClass("d-none");
                                          $(this).text("Thu gọn đánh giá");
                                          isLoadmoreOpened = true;
                                    }
                                 });
                                 $("#btn-loadmore-reviews").removeClass("d-none");
                              }
                              clearInterval(timer);
                        }
                        counter += 1000;
                        if (counter > 10000) {
                              clearInterval(timer);
                        }
                     }, 1000);
                     $("#sapo-product-reviews").removeClass("d-none");	
                     });
                  </script>
               </div>
            </div>
            <div class="line-box-mobile"></div>
         </div>
      </div>
      <div id="prefer-products" class="prefer-products">
         <section class="section-product">
            <div class="container p-0">
               <div class="d-flex justify-content-between prefer-header">
                  <h2 class="title-block">GỢI Ý CHO BẠN</h2>
               </div>
               <div class="list">
                  <div class="row">
                     @foreach ($arrProductConnect as $product)
                        @php
                           $reduced_price = round(($product->price / 100) * (100 - $product->sale_off), -4);
                           // dd($reduced_price);
                           $slug = Str::slug($product->name);
                           $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $product->product_id]);
                           $urlPicture = 'storage/templates/yody/images/'.$product->picture;
                        @endphp    
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 product-col">
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
            </div>
            <script>
               $(document).ready(function($){
                  NewsProduct();
               });
               function NewsProduct(){
                  $.ajax({
                        type: 'GET',
                        url: '/search?query=product_type:(Áo polo nữ Yody)&view=ajaxdetails',
                        success: function(data){
                           if(data && data.trim() === ''){} else {
                              setTimeout(function () {
                                    $('.section-product .list').html(data);
                                    awe_lazyloadImage();
                                    SwatchGrid();
                                    initSwatchColor();
                              }, 500);
                           }
                        }
                  });
               };
               window.NewsProduct = NewsProduct;
            </script>
         </section>
      </div>
   </div>
</section>

@endsection
