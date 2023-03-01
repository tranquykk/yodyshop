@extends('templates.yody.master')

@section('content')
    
    @include('templates.yody.inc.sidebar')
    
    <link rel="preload" as='style' type="text/css" href="/templates/yody/css/popupsale.scss3c85.css">
    <h1 class="d-none">YODY - Mặc Mỗi Ngày, Thoải Mái Mỗi Ngày - YODY - Thương hiệu thời trang uy tín đưa sản phẩm có chất liệu tốt, dịch vụ tốt đến tận tay khách hàng tại Việt Nam và trên thế giới: áo polo, áo thun, sơ mi, quần âu nam nữ, trẻ em...</h1>
    <div class="wrap-main-index">
    <div class="main-index">
    <div class="section_slider section-home-desktop">
       <div class="swiper-container slide-container">
          <div class="swiper-main">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <a href="dai-tiec-tri-an.html" class="clearfix" title="Đại tiệc tri ân">
                        <picture>
                            <source media="(min-width: 992px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/slider_1.jpg">
                            <source media="(min-width: 569px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/slider_1_mb.jpg">
                            <img src="/templates/yody/images/slider_1_mb3c85.jpg" alt="Đại tiệc tri ân" class="img-responsive center-block banner-lazyload" width="420" height="206" />
                        </picture>
                   </a>
                </div>
                <div class="swiper-slide">
                   <a href="ao-khoac.html" class="clearfix" title="Áo khoác YODY">
                      <picture>
                         <source media="(min-width: 992px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/slider_4.jpg">
                         <source media="(min-width: 569px)" srcset="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/slider_4_mb.jpg">
                         <img src="/templates/yody/images/slider_4_mb3c85.jpg" alt="Áo khoác YODY" class="img-responsive center-block banner-lazyload" width="420" height="206" />
                      </picture>
                   </a>
                </div>
             </div>
             <div class="swiper-pagination"></div>
             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
          </div>
       </div>
    </div>
    <script>
        var listSlide =  document.querySelectorAll('.swiper-slide')
        if(listSlide.length <= 1){
            $('.swiper-button-prev').css("display", "none");
            $('.swiper-button-next').css("display", "none");
            $('.swiper-pagination').css("display", "none");
        }
    </script>
    <script>
        $(document).ready(function() {
            if($(window).width() < 768) {
                let isFemaleLoaded = false;
                let isMaleLoaded = false;
                let isChildrenLoaded = false;
                let isUniformLoaded = false;

                /*$(document).on('click', '.item-sale-menu-mb', function() {
                    $('.item-menu-mb').removeClass("active");
                    $('.item-sale-menu-mb').addClass("active");

                    $('.menu_silebar_wrapper').removeClass("slider-active");
                    $('.sale').addClass("slider-active");				
                });*/

                $(document).on('click', '.item-male-menu-mb', function() {
                        $('.item-menu-mb').removeClass("active");
                        $('.item-male-menu-mb').addClass("active");

                        $('.menu_silebar_wrapper').removeClass("slider-active");
                        $('.male').addClass("slider-active");
                        if(!isMaleLoaded) {
                            isMaleLoaded = true;
                            const categoryMobileMaleImgs = $(".menu_silebar_wrapper-male .category-mobile-lazyload");
                            for (let i = 0; i < categoryMobileMaleImgs.length; i += 1) {
                                categoryMobileMaleImgs.eq(i).attr("src", categoryMobileMaleImgs.eq(i).data("src"));
                            }
                        }

                });

                $(document).on('click', '.item-female-menu-mb', function() {
                        $('.item-menu-mb').removeClass("active");
                        $('.item-female-menu-mb').addClass("active");

                        $('.menu_silebar_wrapper').removeClass("slider-active");
                        $('.female').addClass("slider-active");

                });

                $(document).on('click', '.item-children-menu-mb', function() {
                        $('.item-menu-mb').removeClass("active");
                        $('.item-children-menu-mb').addClass("active");

                        $('.menu_silebar_wrapper').removeClass("slider-active");
                        $('.children').addClass("slider-active");
                        if(!isChildrenLoaded) {
                            isChildrenLoaded = true;
                            const categoryMobileChildrenImgs = $(".menu_silebar_wrapper-children .category-mobile-lazyload");
                            for (let i = 0; i < categoryMobileChildrenImgs.length; i += 1) {
                                categoryMobileChildrenImgs.eq(i).attr("src", categoryMobileChildrenImgs.eq(i).data("src"));
                            }
                        }
                });

                $(document).on('click', '.item-uniform-menu-mb', function() {
                        $('.item-menu-mb').removeClass("active");
                        $('.item-uniform-menu-mb').addClass("active");

                        $('.menu_silebar_wrapper').removeClass("slider-active");
                        $('.uniform').addClass("slider-active");
                        if(!isUniformLoaded) {
                            isUniformLoaded = true;
                            const categoryMobileUniformImgs = $(".menu_silebar_wrapper-uniform img");
                            for (let i = 0; i < categoryMobileUniformImgs.length; i += 1) {
                                categoryMobileUniformImgs.eq(i).attr("src", categoryMobileUniformImgs.eq(i).data("src"));
                            }
                        }
                });
                
                //if(!isFemaleLoaded) {
                //	isFemaleLoaded = true;
                //	const categoryMobileFemaleImgs = $(".menu_silebar_wrapper-female .category-mobile-lazyload");
                //	for (let i = 0; i < categoryMobileFemaleImgs.length; i += 1) {
                //		categoryMobileFemaleImgs.eq(i).attr("src", categoryMobileFemaleImgs.eq(i).data("src"));
                //	}
                //}
                
                $(".female-scroll").scroll(function(e) {
                    const itemFirst = $(this).find(".item-first");
                    const wrapperLeft = $(this).find(".item-first").position().left;
                    const wrapperWidth = $(this).width();
                    const paginationWrapper  = $(this).siblings(".swiper-pagination-new").find(".pagination-new");

                    const paginationActive = paginationWrapper.find(".pagination-new-active");
                    const totalWidth = itemFirst.width() * $(this).find(".menu_silebar_item").length;
                    const percentage = paginationWrapper.width() / totalWidth;

                    paginationActive.css("transform", `translateX(${Math.abs(wrapperLeft * percentage)}px)`);
                });

                $(".male-scroll").scroll(function(e) {
                    const itemFirst = $(this).find(".item-first-male");
                    const wrapperLeft = $(this).find(".item-first-male").position().left;
                    const wrapperWidth = $(this).width();
                    const paginationWrapper = $(this).siblings(".swiper-pagination-new-1").find(".pagination-new-1");

                    const paginationActive = paginationWrapper.find(".pagination-new-active-male");
                    const totalWidth = itemFirst.width() * $(this).find(".menu_silebar_item").length;
                    const percentage = paginationWrapper.width() / totalWidth;

                    paginationActive.css("transform", `translateX(${Math.abs(wrapperLeft * percentage)}px)`);
                });

                $(".children-scroll").scroll(function(e) {
                    const itemFirst = $(this).find(".item-first-children");
                    const wrapperLeft = $(this).find(".item-first-children").position().left;
                    const wrapperWidth = $(this).width();
                    const paginationWrapper  = $(this).siblings(".swiper-pagination-new-2").find(".pagination-new-2");

                    const paginationActive = paginationWrapper.find(".pagination-new-active-children");
                    const totalWidth = itemFirst.width() * $(this).find(".menu_silebar_item").length;
                    const percentage = paginationWrapper.width() / totalWidth;

                    paginationActive.css("transform", `translateX(${Math.abs(wrapperLeft * percentage)}px)`);
                });
                
            }
        });
        
    </script>
    {{-- <div class="section-page-home-mobile">
        <section class="section_ao_somi-nam_mb section_element_item_mb d-lg-none" style="order: 4" data-url="/ao-khoac?view=ajax_product_mb">
           <div class="container">
              <div class="header-section">
                 <div class="header-item">
                    <img class="fire-icon" src=/templates/yody/images/fire-icon-new3c85.png alt="icon flash" />
                    <a href="dai-tiec-tri-an.html" class="tilte-header">
                    ÁO KHOÁC ẤM ÁP
                    </a>
                 </div>
                 <div class="header-item">
                    <a href="ao-khoac.html" class="load-more">
                    Xem thêm
                    </a>
                    <img class="right-icon lazyload" src=/templates/yody/images/right-icon-tim3c85.png alt="icon flash" />
                 </div>
              </div>
              <a href="ao-khoac.html" class="img-theme">
              <img class="right-icon scroll-mobile-lazyload" data-src=//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_preivew_sanpham_2_image_mobile.jpg alt="icon theme" />
              </a>
              <div id="dai-tiec-content" class="element_item_content">
              </div>
           </div>
        </section>
        <section class="section_ao_somi-nam_mb section_element_item_mb d-lg-none" style="order: 3" data-url="/hang-moi-ve-thang-qua?view=ajax_product_mb">
            <div class="container">
                <div class="header-section">
                    <div class="header-item">
                        <a href="dai-tiec-tri-an.html" class="tilte-header">
                        HÀNG MỚI VỀ
                        </a>
                    </div>
                    <div class="header-item">
                        <a href="hang-moi-ve-thang-qua.html" class="load-more">
                        Xem thêm
                        </a>
                        <img class="right-icon lazyload" src=/templates/yody/images/right-icon-tim3c85.png alt="icon flash" />
                    </div>
                </div>
                <a href="hang-moi-ve-thang-qua.html" class="img-theme">
                <img class="right-icon scroll-mobile-lazyload" data-src=//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_preivew_sanpham_3_image_mobile.jpg alt="icon theme" />
                </a>
                <div id="dai-tiec-content" class="element_item_content">
                </div>
            </div>
        </section>
        <section class="section_ao_somi-nam_mb section_element_item_mb d-lg-none" style="order: 6" data-url="/ao-len-ao-ni?view=ajax_product_mb">
           <div class="container">
              <div class="header-section">
                 <div class="header-item">
                    <a href="dai-tiec-tri-an.html" class="tilte-header">
                    ÁO LEN/NỈ
                    </a>
                 </div>
                 <div class="header-item">
                    <a href="ao-len-ao-ni.html" class="load-more">
                    Xem thêm
                    </a>
                    <img class="right-icon lazyload" src=/templates/yody/images/right-icon-tim3c85.png alt="icon flash" />
                 </div>
              </div>
              <a href="ao-len-ao-ni.html" class="img-theme">
              <img class="right-icon scroll-mobile-lazyload" data-src=//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_preivew_sanpham_4_image_mobile.jpg alt="icon theme" />
              </a>
              <div id="dai-tiec-content" class="element_item_content">
              </div>
           </div>
        </section>
        <section class="section_ao_somi-nam_mb section_element_item_mb d-lg-none" style="order: 8" data-url="/yody-jeans?view=ajax_product_mb">
           <div class="container">
                <div class="header-section">
                    <div class="header-item">
                        <a href="dai-tiec-tri-an.html" class="tilte-header">
                        YODY JEANS
                        </a>
                    </div>
                    <div class="header-item">
                        <a href="yody-jeans.html" class="load-more">
                        Xem thêm
                        </a>
                        <img class="right-icon lazyload" src=/templates/yody/images/right-icon-tim3c85.png alt="icon flash" />
                    </div>
                </div>
                <a href="yody-jeans.html" class="img-theme">
                <img class="right-icon scroll-mobile-lazyload" data-src=//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_preivew_sanpham_5_image_mobile.jpg alt="icon theme" />
                </a>
                <div id="dai-tiec-content" class="element_item_content">
                </div>
           </div>
        </section>
        <section class="section_ao_somi-nam_mb section_element_item_mb d-lg-none" style="order: 9" data-url="">
           <div class="container">
              <div class="header-section">
                 <div class="header-item">
                    <a href="dai-tiec-tri-an.html" class="tilte-header">
                    BỘ ĐỒ THU ĐÔNG
                    </a>
                 </div>
                 <div class="header-item">
                    <a href="bo-do-thu-dong.html" class="load-more">
                    Xem thêm
                    </a>
                    <img class="right-icon lazyload" src=/templates/yody/images/right-icon-tim3c85.png alt="icon flash" />
                 </div>
              </div>
              <a href="bo-do-thu-dong.html" class="img-theme">
              <img class="right-icon scroll-mobile-lazyload" data-src=//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_preivew_sanpham_6_image_mobile.jpg alt="icon theme" />
              </a>
              <div id="dai-tiec-content" class="element_item_content">
              </div>
           </div>
        </section>
        <section class="section_hang_moi_ve_mb section_element_item_mb d-lg-none" style="order: 4">
           <div class="container">
              <div class="header-section">
                 <div class="header-item">
                    <div class="tilte-header" style="color: black">
                       BỘ SƯU TẬP
                    </div>
                 </div>
              </div>
              <div class="bst_img" style="display: flex; width: 100%; overflow: scroll; gap: 15px; padding: 5px 0 12px;">
                 <a style="flex: 1 0 85%" style="order: 1" class="item" href="ao-khoac-phao-3s-plus-phien-ban-moi-sieu-nhe-sieu-am-sieu-gon-truot-nuoc.html">
                 <img class="scroll-mobile-lazyload" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_bst_1_image.jpg" alt="icon flash" />
                 </a>
                 <a style="flex: 1 0 85%" style="order: 1" class="item" href="ao-gio-3c-plus-can-nuoc-can-gio-can-bui.html">
                 <img class="scroll-mobile-lazyload" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_bst_2_image.jpg" alt="icon flash" />
                 </a>
                 <a style="flex: 1 0 85%" class="item" style="order: 1" href="ao-gio-3c-plus-can-nuoc-can-gio-can-bui.html">
                 <img class="scroll-mobile-lazyload" data-src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/home_bst_3_image.jpg" alt="icon flash" />
                 </a>
              </div>
           </div>
        </section>
        <script id="section-loading-content" type="text/templates">
            <div class="product-loading">
                <div class="product-item-loading">
                    <div class="image">

                    </div>
                    <div class="info">
                        <div class="name">

                        </div>
                        <div class="price">

                        </div>
                        <div class="color">
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item-loading">
                    <div class="image">

                    </div>
                    <div class="info">
                        <div class="name">

                        </div>
                        <div class="price">

                        </div>
                        <div class="color">
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item-loading">
                    <div class="image">

                    </div>
                    <div class="info">
                        <div class="name">

                        </div>
                        <div class="price">

                        </div>
                        <div class="color">
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </script>
        <script>
            var urlFlashsale = "";
            function checkFlashSale() {
                var now = new Date();
                var hour = now.getHours();
                var date = now.getDate();
                $(".section_flash_sale_t10").removeClass("d-none")
                var dayOfWeek = now.getDay();
                urlFlashsale = "/flash-sale-preview-danh-muc?view=ajax_product_mb";
                // Set the date we're counting down to
                var countDownDate = new Date(`December ${date}, 2022 ${hour}:59:59`).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var total_hours = days*24 + hours;
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    $('.count-down .hours span').text(hours < 10 ? `0${hours}` : `${hours}`);
                    $('.count-down .minutes span').text(minutes < 10 ? `0${minutes}` : `${minutes}`);
                    $('.count-down .seconds span').text(seconds < 10 ? `0${seconds}` : `${seconds}`);
                    if (distance < 0) {
                        clearInterval(x);
                        $('.count-down .hours span').text("00");
                        $('.count-down .minutes span').text("00");
                        $('.count-down .seconds span').text("00");
                    }
                }, 1000);
            }

            var now = new Date();
            var isShowFlashSale = true;
            var dateShow = '8,9,10,11,12,17,18,24,25';
            var dateShowArr = dateShow.split(",");
            if(isShowFlashSale && dateShowArr.includes(`${now.getDate()}`)) {
                checkFlashSale();
            }
            
            function getPromise(url) {
                return new  Promise(function(resolve, reject){
                    jQuery.get(url, function (data, textStatus) {
                            resolve(data);
                    })
                })				
            }
            
            const elementItemContents = $(".element_item_content");
            const loadingDom = $("#section-loading-content");
            
            var isSectionMobileLoaded = false;
            //let secondFetchedData = null;

            function getDataMobileFirst() {
                elementItemContents.eq(0).html(loadingDom.html());
                
                //getPromise("/flash-sale-preview-danh-muc?view=ajax_product_mb").then(function(result) {
                //	$('#flash-sale-t12-content').html(result);
                //	awe_lazyloadImage();
                //	initSwatchColor();
                //});
                
                const promises = [];
                const html = $("#section-loading-content").html();
                const sectionPreviewDanhmucs = $(".section_element_item_mb");
                const item = sectionPreviewDanhmucs.eq(0);
                const url = item.attr("data-url");
                item.find(".element_item_content").html(html);
                getPromise(url).then((result) => {
                    $(".btn-mua-ngay").addClass('d-none');
                    
                    item.find(".element_item_content").html(result);
                    $(".background-process").css('width','100%')
                    item.find(".swiper-button-next").removeClass("disabled");
                    awe_lazyloadImage();
                    initSwatchColor();
                    //$(".btn-mua-ngay").addClass('d-none');
                    //$(".background-process").css('width','100%')
                });
            }
            
            // 
            function getDataMobileSecond() {
                const promises = [];
                const html = $("#section-loading-content").html();
                const sectionPreviewDanhmucs = $(".section_element_item_mb");
                const item = sectionPreviewDanhmucs.eq(1);
                const url = item.attr("data-url");
                item.find(".element_item_content").html(html);
                getPromise(url).then((result) => {
                    $(".btn-mua-ngay").addClass('d-none');
                    
                    item.find(".element_item_content").html(result);
                    $(".background-process").css('width','100%')
                    awe_lazyloadImage();
                    initSwatchColor();
                    //$(".btn-mua-ngay").addClass('d-none');
                    //$(".background-process").css('width','100%')
                });
            }
            
            function getDataView() {
                
                const promises = [];
                const html = $("#section-loading-content").html();
                const sectionPreviewDanhmucs = $(".section_element_item_mb");
                sectionPreviewDanhmucs.each(function(index, item) {
                    if(index > 1) {
                        var url = $(this).attr("data-url");
                        $(this).find(".element_item_content").html(html);
                        promises.push(getPromise(url));
                    }
                });	
                Promise.all(promises).then((results) => {
                    sectionPreviewDanhmucs.each(function(index,item) {
                        if(index > 1) {
                            $(this).find(".element_item_content").html(results[index - 2]);
                            awe_lazyloadImage();
                            initSwatchColor();
                        }
                    });
                    
                    
                });
            }
            $(document).ready(function() {
                //if ($(window).width() < 768) {
                //	getDataView();
                //}
                if($(window).width() < 768) {
                    getDataMobileFirst();
                    var isSectionMobileLoaded = false;
                    $(window).scroll(function() {
                        if(!isSectionMobileLoaded && $(window).scrollTop() > 10) {
                            isSectionMobileLoaded = true;
                            const scrollLazyloads = $(".scroll-mobile-lazyload");
                            for (let i = 0; i < scrollLazyloads.length; i += 1) {
                                scrollLazyloads.eq(i).attr("src", scrollLazyloads.eq(i).data("src"));
                            }
                            getDataMobileSecond();
                            getDataView();
                        }group
                    });
                }
            })
        </script>
    </div> --}}
    <div class="section-page-home-desktop">
        {{-- <div class="section_promotion_desktop section-home-desktop">
            <div class="section-home-desktop-wrap">
                <div class="section-promotion-desktop-content">
                    <div class="text-promotion">
                        KHUYẾN MÃI
                    </div>
                    <div class="item-promotion item-1">
                        <div class="wrap-content">
                        <a href="outlet.html">
                                <div class="image">
                                    <img src=/templates/yody/images/icon-xa-hang.png alt="combo tiết kiệm" width="90" height="90" />
                                </div>
                                <div class="title">
                                    <div>
                                        Xả hàng
                                    </div>
                                    <div>
                                        Lẻ size
                                    </div>
                                </div>
                        </a>
                        </div>
                    </div>
                    <div class="item-promotion item-2">
                        <div class="wrap-content">
                        <a href="sale-30-50-hang-ngan-san-pham.html">
                            <div class="image">
                                <img src=/templates/yody/images/icon-30-50.png alt="đồng giá 299k" width="90" height="90" />
                            </div>
                            <div class="title">
                                <div>
                                    Sale 30-50% hàng
                                </div>
                                <div>
                                    ngàn sản phẩm
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="item-promotion item-3">
                        <div class="wrap-content">
                        <a href="yody-jeans.html">
                            <div class="image">
                                <img src=/templates/yody/images/icon-jean-nu.png alt="đồng giá 299k" width="90" height="90" />
                            </div>
                            <div class="title">
                                <div>
                                    Mua jean tặng
                                </div>
                                <div>
                                    quần chip
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="item-promotion item-4">
                        <div class="wrap-content">
                        <a href="dai-tiec-tri-an.html">
                                <div class="image">
                                    <img src=/templates/yody/images/img_promotion_circle_gift_by_price.png alt="dai tiec tri an" />
                                </div>
                                <div class="title">
                                    <div>
                                        Đại tiệc tri ân
                                    </div>
                                    <div>
                                        9999 quà tặng
                                    </div>
                                </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="section-home-desktop section-home-danh-muc" style="order: 2;">
            <div class="section-home-desktop-wrap">
                <div class="menu-list">
                    @foreach ($arrCats as $item)
                        <div class="item-menu-dt item-{{$item->sub_name}}-menu-dt {{$item->cat_id == 1 ? "active" : ""}}" style="order: 1" data-type="{{$item->sub_name}}">{{$item->name}}</div>
                    @endforeach
                    {{-- <div class="item-menu-dt item-male-menu-dt" style="order: 2" data-type="male">Nam</div>
                    <div class="item-menu-dt item-children-menu-dt" style="order: 3" data-type="children">Trẻ em</div> --}}
                </div>
                @foreach ($arrMenu as $category)
                    <div class="menu_silebar_content menu_silebar_content-{{$category->sub_name}} {{$category->cat_id != 1 ? "d-none" : ""}}" data-type="{{$category->sub_name}}">
                        <div class="menu_silebar_wrapper {{$category->sub_name}}">
                            <ul class="menu_silebar_list {{$category->sub_name}}-scroll swiper-wrapper">
                                @foreach ($arrMenu as $classify)
                                @if ($category->cat_id == $classify->parent_id)
                                    {{-- @if ($classify->classifyGroups) --}}
                                    @foreach ($arrMenu as $classifyGroup)
                                    @if ($classify->cat_id == $classifyGroup->parent_id && $classifyGroup->active == 1)
                                        @php
                                            $slug = Str::slug($classifyGroup->name);
                                            $urlGroup = route('yody.group', ['slug' => $slug, 'id' => $classifyGroup->cat_id]);
                                            $urlPicture = 'storage/templates/yody/images/'.$classifyGroup->picture;
                                        @endphp
                                        <li class="menu_silebar_item swiper-slide" style="order:1">
                                            <div class="group_item">
                                                <a href="{{$urlGroup}}" class="category_item">
                                                    <div class="image">
                                                        <img data-src={{$urlPicture}} class="category-desktop-lazyload" width="90" height="90" alt="home_danhmuc_1_child_1_title" />
                                                    </div>
                                                    <div class="title">
                                                        {{$classifyGroup->sub_name}}
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    @endif
                                    @endforeach
                                    {{-- @endif --}}
                                @endif
                                @endforeach

                            </ul>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev disabled"></div>
                    </div>
                @endforeach
                
            </div>
        </div>
        <script>
            if($(window).width() > 768) {
                let isFemaleLoaded = false;
                let isMaleLoaded = false;
                let isChildrenLoaded = false;
                
                if (!isFemaleLoaded) {
                    isFemaleLoaded = true;
                    const categoryDesktopFemaleImgs = $(".menu_silebar_content-female .category-desktop-lazyload");
                    for (let i = 0; i < categoryDesktopFemaleImgs.length; i += 1) {
                        categoryDesktopFemaleImgs.eq(i).attr("src", categoryDesktopFemaleImgs.eq(i).data("src"));
                    }
                }
                
                $(".menu_silebar_content .swiper-button-next").click(function() {
                    if($(this).hasClass("disabled")) {
                        return false;
                    }
                    var parent = $(this).parent('.menu_silebar_content')
                    var totalWidth =$(parent).find('.menu_silebar_item').length*150;
                    var widthTransform = totalWidth - 1000;
                    if($(parent).attr("data-type") == "children") {
                        widthTransform = 112;
                    }
                    $(this).addClass("disabled");
                    $(parent).find(".swiper-button-prev").removeClass("disabled");
                    $(parent).find(".menu_silebar_list").css('transform',`translate3d(-${widthTransform}px, 0px, 0px)`);
                })
                $(".menu_silebar_content .swiper-button-prev").click(function() {
                    if($(this).hasClass("disabled")) {
                        return false;
                    }
                    var parent = $(this).parent('.menu_silebar_content')
                    var totalWidth =$(parent).find('.menu_silebar_item').length*150;
                    var widthTransform = totalWidth - 1040;
                    $(this).addClass("disabled");
                    $(parent).find(".swiper-button-next").removeClass("disabled");
                    $(parent).find(".menu_silebar_list").css('transform',`translate3d(0px, 0px, 0px)`);
                })

                $('.item-menu-dt').click(function() {
                    $(".item-menu-dt").removeClass('active');
                    $(this).addClass('active');
                    const type = $(this).attr("data-type");
                    $(".menu_silebar_content").addClass('d-none');
                    $(`.menu_silebar_content-${type}`).removeClass('d-none');
                    if(type === "male" && !isMaleLoaded) {
                        isMaleLoaded = true;
                        const categoryDesktopMaleImgs = $(".menu_silebar_content-male .category-desktop-lazyload");
                        for (let i = 0; i < categoryDesktopMaleImgs.length; i += 1) {
                            categoryDesktopMaleImgs.eq(i).attr("src", categoryDesktopMaleImgs.eq(i).data("src"));
                        }
                    }
                    if(type === "children" && !isChildrenLoaded) {
                        isChildrenLoaded = true;
                        const categoryDesktopChildrenImgs = $(".menu_silebar_content-children .category-desktop-lazyload");
                        for (let i = 0; i < categoryDesktopChildrenImgs.length; i += 1) {
                            categoryDesktopChildrenImgs.eq(i).attr("src", categoryDesktopChildrenImgs.eq(i).data("src"));
                        }
                    }
                });
            
                var swiperNewh = new Swiper('#menu_silebar_content-female .menu_silebar_wrapper', {
                    //slidesPerView: 6,
                    //centeredSlides: true,
                    loop: false,
                    grabCursor: true,
                    spaceBetween: 10,
                    roundLengths: true,
                    slideToClickedSlide: false,
                    autoplay: false,
                    touchStartPreventDefault: false,
                    navigation: {
                        nextEl: '.menu_silebar_content-female .swiper-button-next',
                        prevEl: '.menu_silebar_content-female .swiper-button-prev',
                    },
                    breakpoints: {
                        300: {
                            slidesPerView: 3.3,
                            spaceBetween: 7
                        },
                        500: {
                            slidesPerView: 3.3,
                            spaceBetween: 7
                        },
                        640: {
                            slidesPerView: 3.3,
                            spaceBetween: 7
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 7
                        },
                        992: {
                            slidesPerView:6,
                            spaceBetween:16
                        },
                        1400: {
                            slidesPerView:7,
                            spaceBetween:16
                        }
                    }
                });
                
            }
        </script>
    
        <div class="section-home-desktop section-preview-danhmuc section-preview-danhmuc-select section-preview-danhmuc__combo-tiet-kiem" style="order: 4" data-position="1" data-url="/ao-khoac?view=ajax_product_mb">
            <div class="section-home-desktop-wrap">
                <div class="preview-danhmuc-wrap">
                    <div class="header-preview">
                        <div class="title title-promotion ">
                            <a style="color: #11006F;" href="ao-khoac.html"> ÁO KHOÁC ẤM ÁP </a>
                        </div>
                        <a class="show-more" href="ao-khoac.html">Xem thêm</a>
                    </div>
                    <div class="content-preview">
                        <a class="banner" href="ao-khoac.html">
                            <img src=/templates/yody/images/home_preivew_sanpham_2_image_desktop3c85.jpg width="191" height="419" alt="icon flash" />
                        </a>
                        <div class="wrap-list-product">
                            <div class="list-product">
                                <div>
                                    <div class="row">
                                        @foreach ($objProductNews as $item)
                                        @php
                                            $slug = Str::slug($item->name);
                                            $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $item->product_id]);
                                            $urlPicture = 'storage/templates/yody/images/'.$item->picture;
                                        @endphp
                                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                                            <div class="item_product_main item_product_main-29111401" data-url="{{$urlProduct}}" data-productid="29111401" data-id="29111401">
                                                <form action="/cart/add" method="post" class="variants product-action wishItem" data-cart-form="" data-id="product-actions-29111401" enctype="multipart/form-data">
                                                    <div data-id="29111401" class="product-thumbnail">
                                                        <a class="image_thumb" href="{{$urlProduct}}" title="Quần Jean Nam Slimfit Rayon Dây Dệt Túi Đồng Hồ">
                                                            <img class="lazyload loaded" src="{{$urlPicture}}" data-src="{{$urlPicture}}" alt="" data-was-processed="true">
                                                        </a>
                                                    </div>
                                                    <div class="product-info product-info-29111401">
                                                        <h3 class="product-name"><a href="{{$urlProduct}}" title="">{{$item->name}}</a></h3>
                                                        <div class="bottom-action">
                                                            <div class="price-box">
                                                                @if ($item->sale_off != 0)
                                                                    <span class="price-flash-sale d-none">{{$item->name}}đ</span>
                                                                @endif
                                                                <span class="price ">{{number_format($item->price, 0, ',', '.')}}đ</span>
                                                                <span class="compare-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="sw-group">
                                                            <div class="option-swath">
                                                                <span class=""></span>
                                                                <div class="swatch-color-wrapper position-relative">
                                                                    <div class="swatch-color  swatch clearfix" data-option-index="0" data-swatches="3">
                                                                        @foreach ($arrPictures as $picture)
                                                                        @if ($item->product_id == $picture->product_id)
                                                                            @php
                                                                                $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                                                                            @endphp
                                                                                <div data-value="Đen" class="swatch-element color Đen 1 ">
                                                                                    <input id="swatch-0-den29111401" type="radio" name="option-0" value="Đen">
                                                                                    <label title="Đen" class="den" style="background-image:url({{$urlPicture}});background-size:37px;background-repeat:no-repeat;background-position: center!important;" data-scolor="{{$urlPicture}}"></label>
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
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-home-desktop section-preview-danhmuc section-preview-danhmuc-select section-preview-danhmuc__combo-tiet-kiem" style="order: 3" data-position="1" data-url="/hang-moi-ve-thang-qua?view=ajax_product_mb">
            <div class="section-home-desktop-wrap">
                <div class="preview-danhmuc-wrap">
                    <div class="header-preview">
                        <div class="title  ">
                            <a style="color: #11006F;" href="hang-moi-ve-thang-qua.html">HÀNG MỚI VỀ</a>
                        </div>
                        <a class="show-more" href="hang-moi-ve-thang-qua.html">Xem thêm</a>
                    </div>
                    <div class="content-preview">
                        <a class="banner" href="hang-moi-ve-thang-qua.html">
                            <img src=/templates/yody/images/home_preivew_sanpham_3_image_desktop3c85.jpg width="191" height="419" alt="icon flash" />
                        </a>
                        <div class="wrap-list-product">
                            <div class="list-product">
                                <div>
                                    <div class="row">
                                        @foreach ($objProductNews as $item)
                                        @php
                                            $slug = Str::slug($item->name);
                                            $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $item->product_id]);
                                            $urlPicture = 'storage/templates/yody/images/'.$item->picture;
                                        @endphp
                                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                                            <div class="item_product_main item_product_main-29111401" data-url="{{$urlProduct}}" data-productid="29111401" data-id="29111401">
                                                <form action="/cart/add" method="post" class="variants product-action wishItem" data-cart-form="" data-id="product-actions-29111401" enctype="multipart/form-data">
                                                    <div data-id="29111401" class="product-thumbnail">
                                                        <a class="image_thumb" href="{{$urlProduct}}" title="Quần Jean Nam Slimfit Rayon Dây Dệt Túi Đồng Hồ">
                                                            <img class="lazyload loaded" src="{{$urlPicture}}" data-src="{{$urlPicture}}" alt="" data-was-processed="true">
                                                        </a>
                                                    </div>
                                                    <div class="product-info product-info-29111401">
                                                        <h3 class="product-name"><a href="{{$urlProduct}}" title="">{{$item->name}}</a></h3>
                                                        <div class="bottom-action">
                                                            <div class="price-box">
                                                                @if ($item->sale_off != 0)
                                                                    <span class="price-flash-sale d-none">{{$item->name}}đ</span>
                                                                @endif
                                                                <span class="price ">{{number_format($item->price, 0, ',', '.')}}đ</span>
                                                                <span class="compare-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="sw-group">
                                                            <div class="option-swath">
                                                                <span class=""></span>
                                                                <div class="swatch-color-wrapper position-relative">
                                                                    <div class="swatch-color  swatch clearfix" data-option-index="0" data-swatches="3">
                                                                        @foreach ($arrPictures as $picture)
                                                                        @if ($item->product_id == $picture->product_id)
                                                                            @php
                                                                                $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                                                                            @endphp
                                                                                <div data-value="Đen" class="swatch-element color Đen 1 ">
                                                                                    <input id="swatch-0-den29111401" type="radio" name="option-0" value="Đen">
                                                                                    <label title="Đen" class="den" style="background-image:url({{$urlPicture}});background-size:37px;background-repeat:no-repeat;background-position: center!important;" data-scolor="{{$urlPicture}}"></label>
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
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-home-desktop section-preview-danhmuc section-preview-danhmuc-select section-preview-danhmuc__combo-tiet-kiem" style="order: 8" data-position="1" data-url="/yody-jeans?view=ajax_product_mb">
            <div class="section-home-desktop-wrap">
                <div class="preview-danhmuc-wrap">
                    <div class="header-preview">
                        <div class="title  ">
                            <a style="color: #11006F;" href="yody-jeans.html"> YODY JEANS </a>
                        </div>
                        <a class="show-more" href="yody-jeans.html"> Xem thêm </a>
                    </div>
                    <div class="content-preview">
                        <a class="banner" href="yody-jeans.html">
                            <img src=/templates/yody/images/home_preivew_sanpham_5_image_desktop3c85.jpg width="191" height="419" alt="icon flash" />
                        </a>
                        <div class="wrap-list-product">
                            <div class="list-product">
                                <div>
                                    <div class="row">
                                        @foreach ($objProductNews as $item)
                                        @php
                                            $slug = Str::slug($item->name);
                                            $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $item->product_id]);
                                            $urlPicture = 'storage/templates/yody/images/'.$item->picture;
                                        @endphp
                                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                                            <div class="item_product_main item_product_main-29111401" data-url="{{$urlProduct}}" data-productid="29111401" data-id="29111401">
                                                <form action="/cart/add" method="post" class="variants product-action wishItem" data-cart-form="" data-id="product-actions-29111401" enctype="multipart/form-data">
                                                    <div data-id="29111401" class="product-thumbnail">
                                                        <a class="image_thumb" href="{{$urlProduct}}" title="Quần Jean Nam Slimfit Rayon Dây Dệt Túi Đồng Hồ">
                                                            <img class="lazyload loaded" src="{{$urlPicture}}" data-src="{{$urlPicture}}" alt="" data-was-processed="true">
                                                        </a>
                                                    </div>
                                                    <div class="product-info product-info-29111401">
                                                        <h3 class="product-name"><a href="{{$urlProduct}}" title="">{{$item->name}}</a></h3>
                                                        <div class="bottom-action">
                                                            <div class="price-box">
                                                                @if ($item->sale_off != 0)
                                                                    <span class="price-flash-sale d-none">{{$item->name}}đ</span>
                                                                @endif
                                                                <span class="price ">{{number_format($item->price, 0, ',', '.')}}đ</span>
                                                                <span class="compare-price"></span>
                                                            </div>
                                                        </div>
                                                        <div class="sw-group">
                                                            <div class="option-swath">
                                                                <span class=""></span>
                                                                <div class="swatch-color-wrapper position-relative">
                                                                    <div class="swatch-color  swatch clearfix" data-option-index="0" data-swatches="3">
                                                                        @foreach ($arrPictures as $picture)
                                                                        @if ($item->product_id == $picture->product_id)
                                                                            @php
                                                                                $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                                                                            @endphp
                                                                                <div data-value="Đen" class="swatch-element color Đen 1 ">
                                                                                    <input id="swatch-0-den29111401" type="radio" name="option-0" value="Đen">
                                                                                    <label title="Đen" class="den" style="background-image:url({{$urlPicture}});background-size:37px;background-repeat:no-repeat;background-position: center!important;" data-scolor="{{$urlPicture}}"></label>
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
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-home-desktop section-preview-danhmuc section-preview-danhmuc-select section-preview-danhmuc__combo-tiet-kiem" style="order: 9" data-position="1">
        <div class="section-home-desktop-wrap">
            <div class="preview-danhmuc-wrap">
                <div class="header-preview">
                    <div class="title  ">
                        <a style="color: #11006F;" href="bo-do-thu-dong.html"> BỘ ĐỒ THU ĐÔNG </a>
                    </div>
                    <a class="show-more" href="bo-do-thu-dong.html"> Xem thêm </a>
                </div>
                <div class="content-preview">
                    <a class="banner" href="bo-do-thu-dong.html">
                        <img src=/templates/yody/images/home_preivew_sanpham_6_image_desktop3c85.jpg width="191" height="419" alt="icon flash" />
                    </a>
                    <div class="wrap-list-product">
                        <div class="list-product">
                            <div>
                                <div class="row">
                                    @foreach ($objProductNews as $item)
                                    @php
                                        $slug = Str::slug($item->name);
                                        $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $item->product_id]);
                                        $urlPicture = 'storage/templates/yody/images/'.$item->picture;
                                    @endphp
                                    <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                                        <div class="item_product_main item_product_main-29111401" data-url="{{$urlProduct}}" data-productid="29111401" data-id="29111401">
                                            <form action="/cart/add" method="post" class="variants product-action wishItem" data-cart-form="" data-id="product-actions-29111401" enctype="multipart/form-data">
                                                <div data-id="29111401" class="product-thumbnail">
                                                    <a class="image_thumb" href="{{$urlProduct}}" title="Quần Jean Nam Slimfit Rayon Dây Dệt Túi Đồng Hồ">
                                                        <img class="lazyload loaded" src="{{$urlPicture}}" data-src="{{$urlPicture}}" alt="" data-was-processed="true">
                                                    </a>
                                                </div>
                                                <div class="product-info product-info-29111401">
                                                    <h3 class="product-name"><a href="{{$urlProduct}}" title="">{{$item->name}}</a></h3>
                                                    <div class="bottom-action">
                                                        <div class="price-box">
                                                            @if ($item->sale_off != 0)
                                                                <span class="price-flash-sale d-none">{{$item->name}}đ</span>
                                                            @endif
                                                            <span class="price ">{{number_format($item->price, 0, ',', '.')}}đ</span>
                                                            <span class="compare-price"></span>
                                                        </div>
                                                    </div>
                                                    <div class="sw-group">
                                                        <div class="option-swath">
                                                            <span class=""></span>
                                                            <div class="swatch-color-wrapper position-relative">
                                                                <div class="swatch-color  swatch clearfix" data-option-index="0" data-swatches="3">
                                                                    @foreach ($arrPictures as $picture)
                                                                    @if ($item->product_id == $picture->product_id)
                                                                        @php
                                                                            $urlPicture = 'storage/templates/yody/images/'.$picture->picture;
                                                                        @endphp
                                                                            <div data-value="Đen" class="swatch-element color Đen 1 ">
                                                                                <input id="swatch-0-den29111401" type="radio" name="option-0" value="Đen">
                                                                                <label title="Đen" class="den" style="background-image:url({{$urlPicture}});background-size:37px;background-repeat:no-repeat;background-position: center!important;" data-scolor="{{$urlPicture}}"></label>
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
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev disabled"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="section-home-desktop section-bo-suu-tap section-home-desktop" style="order: 4">
        <div class="section-home-desktop-wrap">
            <div class="section-wrap">
                <div class="header-section">
                    <div class="title" style="color: black"> BỘ SƯU TẬP </div>
                </div>
                <div class="content-section">
                    @foreach ($arrList as $list)
                    @php
                        $slug = Str::slug($list->name);
                        $urlProduct = route('yody.classify', ['slug' => $slug, 'id' => $list->cat_id]);
                        $urlPicture = 'storage/templates/yody/images/'.$list->picture;
                    @endphp
                        <a class="item" style="order: 1" href="{{$urlProduct}}">
                            <img data-src={{$urlPicture}} class="scroll-desktop-lazyload" width="403" height="179" alt="icon flash" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkFlashSaleDesktop() {
            $(".section-preview-danhmuc__flsahsale-t11").removeClass("d-none");
            var now = new Date();
            var hour = now.getHours();
            var date = now.getDate();
            var url = "";
            var dayOfWeek = now.getDay();
            
            
            url = "/flash-sale-preview-danh-muc?view=ajax_product_mb";
            $(".section-preview-danhmuc__flsahsale-t11").attr('data-url',url);
            
            
            // Set the date we're counting down to
            var countDownDate = new Date(`December ${date}, 2022 ${hour}:59:59`).getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var total_hours = days*24 + hours;
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                $('.count-down-desktop .hours span').text(hours < 10 ? `0${hours}` : `${hours}`);
                $('.count-down-desktop .minutes span').text(minutes < 10 ? `0${minutes}` : `${minutes}`);
                $('.count-down-desktop .seconds span').text(seconds < 10 ? `0${seconds}` : `${seconds}`);
                if (distance < 0) {
                    clearInterval(x);
                    $('.count-down-desktop .hours span').text("00");
                    $('.count-down-desktop .minutes span').text("00");
                    $('.count-down-desktop .seconds span').text("00");
                    //document.getElementById("demo").innerHTML = "EXPIRED";
                    //$('.section_flash_sale').remove()
                }
            }, 1000);
        }
        var now = new Date();
        var isShowFlashSale = true;
        var dateShow = '8,9,10,11,12,17,18,24,25';
        var dateShowArr = dateShow.split(",");
        if(isShowFlashSale && dateShowArr.includes(`${now.getDate()}`)) {
            checkFlashSaleDesktop();
        }
        
    </script>
    </div>
    
    <script>
        $(".section-preview-danhmuc .swiper-button-next").click(function() {
            if($(this).hasClass("disabled")) {
                return false;
            }
            var parent = $(this).parent('.wrap-list-product');
            var totalItem = $(parent).find('.col-6').length;
            var maxPosition = Math.round(totalItem / 4);
            if(maxPosition * 4 < totalItem) {
                maxPosition +=1;
            }
            var position = parseInt($(this).closest(".section-preview-danhmuc").attr("data-position"));
            if(position < maxPosition) {		
                var widthTransform = 254*4*position;
                position++;
                if(position == maxPosition) {
                    $(this).addClass("disabled");
                }
                $(this).closest(".section-preview-danhmuc").attr("data-position",position);
                $(parent).find(".swiper-button-prev").removeClass("disabled");
                $(parent).find(".row").css('transform',`translate3d(-${widthTransform}px, 0px, 0px)`);
            }
        })
        $(".section-preview-danhmuc .swiper-button-prev").click(function() {
            if($(this).hasClass("disabled")) {
                return false;
            }
            var parent = $(this).parent('.wrap-list-product');
            var position = parseInt($(this).closest(".section-preview-danhmuc").attr("data-position"));
            
            if(position > 1) {
                var widthTransform = 254*4*(position-2);
                position--;
                if(position == 1) {
                    $(this).addClass("disabled");
                }	
                $(this).closest(".section-preview-danhmuc").attr("data-position",position);
                $(parent).find(".swiper-button-next").removeClass("disabled");
                $(parent).find(".row").css('transform',`translate3d(-${widthTransform}px, 0px, 0px)`);
            }
            
        })
        function getPromise(url) {
            return new  Promise(function(resolve, reject){
                jQuery.get(url, function (data, textStatus) {
                        resolve(data);
                })
            })				
        }
        
        function getDataViewDesktopFirst() {
            const promises = [];
            const html = $("#templates-loading-product").html();
            const sectionPreviewDanhmucs = $(".section-preview-danhmuc-select");
            const item = sectionPreviewDanhmucs.eq(0);
            const url = item.attr("data-url");
            item.find(".list-product").html(html);
            getPromise(url).then((result) => {
                $(".btn-mua-ngay").addClass('d-none');
                
                item.find(".list-product").html(result);
                $(".background-process").css('width','100%')
                item.find(".swiper-button-next").removeClass("disabled");
                awe_lazyloadImage();
                initSwatchColor();
                //$(".btn-mua-ngay").addClass('d-none');
                //$(".background-process").css('width','100%')
            });
            
        }
        let isSecondLoaded = false;
        let secondFetchedData = null;
        function fetchDataViewDesktopSecond() {
            const promises = [];
            const html = $("#templates-loading-product").html();
            const sectionPreviewDanhmucs = $(".section-preview-danhmuc-select");
            const item = sectionPreviewDanhmucs.eq(1);
            const url = item.attr("data-url");
            item.find(".list-product").html(html);
            getPromise(url).then((result) => {
                secondFetchedData = result;
            });
        }
        
        function renderViewDesktopSecond() {
            if(secondFetchedData && !isSecondLoaded) {
                isSecondLoaded = true;
                const sectionPreviewDanhmucs = $(".section-preview-danhmuc-select");
                const item = sectionPreviewDanhmucs.eq(1);
                item.find(".list-product").html(secondFetchedData);
                item.find(".swiper-button-next").removeClass("disabled");
                awe_lazyloadImage();
                initSwatchColor();
            }
        }
        
        function getDataViewDesktop() {
            const promises = [];
            const html = $("#templates-loading-product").html();
            const sectionPreviewDanhmucs = $(".section-preview-danhmuc-select");
            sectionPreviewDanhmucs.each(function(index, item) {
                if(index > 1) {
                    var url = $(this).attr("data-url");
                    $(this).find(".list-product").html(html);
                    promises.push(getPromise(url));
                }
            });	
            Promise.all(promises).then((results) => {
                sectionPreviewDanhmucs.each(function(index,item) {
                    if(index > 1) {
                        $(this).find(".list-product").html(results[index - 2]);
                        $(this).find(".swiper-button-next").removeClass("disabled");
                        awe_lazyloadImage();
                        initSwatchColor();
                    }
                });
                
                
            });
            
        }
        
        $(document).ready(function() {
            if($(window).width() >= 768) {
                getDataViewDesktopFirst();
                fetchDataViewDesktopSecond();
                var isSectionLoaded = false;
                $(window).scroll(function() {
                    renderViewDesktopSecond();
                    if(!isSectionLoaded && $(window).scrollTop() > 10) {
                        isSectionLoaded = true;
                        const scrollLazyloads = $(".scroll-desktop-lazyload");
                        for (let i = 0; i < scrollLazyloads.length; i += 1) {
                            scrollLazyloads.eq(i).attr("src", scrollLazyloads.eq(i).data("src"));
                        }
                        getDataViewDesktop();
                    }
                });
            }
        })
        
    </script>
            <div class="main-index-sub"></div>
        </div>
    </div>
    <div id="modal-popup_vong-quay-may-man" class="modal fade" role="dialog">
        <div class="modal-bg"></div>
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal"></button>
            <div class="content">
                <iframe id="iframe-upsell" src="vqmmt10.html" width="500" height="780" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="wrap-noti-upsell-success">
        <div class="noti-upsell-success">
            <span>
            Bạn đã nhập thông tin thành công. Nhân viên sẽ liên hệ với bạn trong thời gian sớm nhất!
            </span>
        </div>
    </div>
    <div class="popup-top-product d-none">
        <img class="icon-close-top-product" src="/templates/yody/images/icons8-close-2461cb.png">
        <div class="header-product-detail-left">
            <div class="header-product-image-detail">
                <div class="small-image" style="width:84px;">
                    <a href="javascript:;">
                    <img class="img-popup" src="#" />
                    </a>
                </div>
            </div>
            <div class="product-title-detail">
                <div class="title-head-popup"></div>
                <span class="customer-info">
                <span class="customer-name"></span> đã mua sản phẩm
                </span>
                <a type="button" target="_blank" href="#" class="btn btn-lg btn-gray btn_buy btn_buy_popup">Mua ngay</a>
            </div>
        </div>
    </div>
    <script>
        $('#modal-popup_vong-quay-may-man .modal-bg, #modal-popup_vong-quay-may-man .close').on( "click", function() {
            $('#modal-popup_vong-quay-may-man').removeClass('show');
            setCookieKM("popup-vqmm-count",1,0.5);
        })
        
        $(document).ready(function() {
            setTimeout(function() {
                if ($(window).width() > 1000) {
                    if(getCookieKM("popup-vqmm-count") !== undefined) {
                        //$(".modal-popup_vong-quay-may-man").css("display","none"); 
                        //$("#modal-popup_vong-quay-may-man").addClass('show');
                    }
                    else {
                        //$(".modal-popup_vong-quay-may-man").css("display","flex");
                        //$("#modal-popup_vong-quay-may-man").addClass('show');
                    }
                }
            },5000)
            
            setTimeout(function(){
                var iframe = $('#iframe-upsell').contents();
                $('#iframe-upsell').contents().find(".ladi-spin-lucky-start").click(function() {
                    setCookieKM("popup-vqmm-count",1,99999);
                    
                    var name = $(iframe).find('.ladi-form input[name="name"]').val();
                    var phone = $(iframe).find('.ladi-form input[name="phone"]').val();
                    if(name.trim() == "") {
                        return false;
                    }
                    if(phone.trim() == "") {
                        return false;
                    }
                    else if(!checkphone(phone)){
                        return false;
                    }

                })
                $('#iframe-upsell').contents().find(".ladipage-message-close").click(function() {
                    setCookieKM("popup-vqmm-count",1,99999);
                })
            },7000);
            
        });
        function checkphone(phone) {
            var pattern = /((09|03|07|08|05|296|254|209|204|291|222|275|256|274|271|252|290|292|206|236|262|261|215|251|277|269|219|226|24|239|220|225|293|28|218|221|258|297|260|213|263|205|214|272|228|238|229|259|210|257|232|235|255|203|233|299|212|276|227|208|237|234|273|294|207|270|211|216)+([0-9]{8})\b)/g;
            if(phone.match(pattern)){return true;}else {return false;}
        }
        function getCookieKM (cname) { // Lấy nhận cookie
            var name = cname + "=";
            var ca   = document.cookie.split (';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt (0) == ' ') c = c.substring (1);
                if (c.indexOf (name) == 0) return c.substring (name.length, c.length);
            }
            return undefined;
        }

        function setCookieKM (key, value, e) { // Ghi nhận, cài đặt thời gian lưu cookie
            var d = new Date ();
            d.setTime (d.getTime () + ( e * 24 * 60 * 60 * 1000 ));
            var ee = "expires=" + d.toUTCString ();
            document.cookie = key + "=" + value + "; " + ee + "; path=/";
        }
        
        
        $(".close-popup-vqmm").click(function() {
            $(".modal-popup_vong-quay-may-man").css("display","none");
            if(getCookieKM("popup-vqmm-count") !== undefined) {
                var count = parseInt(getCookieKM("popup-vqmm-count"));
                count++;
                setCookieKM("popup-vqmm-count",count,99999);
            }
            else {
                setCookieKM("popup-vqmm-count",1,99999);
            }	
        })

    </script>
    <div class="ab-most-view-product-module ab-hide"></div>
    ﻿
    <div class="ab-selling-product-module ab-hide" data-ab-collection-id="0" data-ab-product-id="0" data-ab-is-index="1">
    </div>

    <script src="/templates/yody/js/search_smart3c85.js" async defer></script>

@endsection