<div class="container container-mb d-flex d-lg-none" id="menu-bar">
    <div class="sibar" style="flex: 1">
        <img style="width: 28px; height: 28px" src="/templates/yody/images/menu3c85.jpg">
    </div>
    <div class="logo" style="flex: 1; padding-left: 20px;">
        <a href="index.html">
            <img src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/logo.svg">
        </a>
    </div>
    <div class="theme-search-smart d-lg-none d-none">
        <div class="header_search theme-searchs">
            <form action="https://yody.vn/search" class="input-group search-bar theme-header-search-form ultimate-search" role="search">
                <input type="text" aria-label="Tìm sản phẩm" name="query" value="" autocomplete="off" placeholder="Cần tìm áo khoác, áo polo..." class="search-auto auto-search" required="" />
                <input type="hidden" name="type" value="product" />
                <button type="submit" class="btn icon-fallback-text input-group-btn button-submit-mb" aria-label="Justify"></button>
            </form>
        </div>
    </div>
    <nav class="header-nav d-none d-lg-flex">
        <ul class="item_big">
            
            @foreach ($arrMenu as $category)
            @if ($category->parent_id == 0)
                @php
                    $slug = Str::slug($category->name);
                    $urlCat = route('yody.category', ['slug' => $slug, 'id' => $category->cat_id]);
                    $urlPicture = 'storage/templates/yody/images/'.$category->picture_menu;
                @endphp
                <li class="nav-item has-child  has-mega">
                    <a class="a-img caret-down" href="{{$urlCat}}" title="{{$category->name}}">{{$category->name}}<i class="fa"></i> </a>
                    <ul class="mega_type_2_group mega_menu">
                        <li class="parrent-mega">
                            <ul>
                                @foreach ($arrMenu as $classify)
                                @if ($category->cat_id == $classify->parent_id)
                                    @php
                                        // dd($classify);
                                        $slug = Str::slug($classify->name);
                                        $urlClassify = route('yody.classify', ['slug' => $slug, 'id' => $classify->cat_id]);
                                    @endphp
                                    <li class="li-item-1">
                                        <a class="title-m caret-down" href="{{$urlClassify}}" title="{{$classify->name}}">{{$classify->name}}</a>
                                        <ul>
                                            @foreach ($arrMenu as $classifyGroup)
                                            @if ($classify->cat_id == $classifyGroup->parent_id)
                                                @php
                                                    // dd($classfyGroup);
                                                    $slug = Str::slug($classifyGroup->name);
                                                    $urlGroup = route('yody.group', ['slug' => $slug, 'id' => $classifyGroup->cat_id]);
                                                @endphp
                                                <li>
                                                    <a href="{{$urlGroup}}" title="{{ucwords($classifyGroup->name)}}" class="a3">{{ucwords($classifyGroup->name)}}</a>
                                                </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="banner banner_2">
                            <a href="ao-giu-nhiet-nu.html">
                                <img class="lazyload" src="{{$urlPicture}}" alt="{{$category->name}}" />
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @endforeach
            <li class="nav-item has-child  ">
                <a class="a-img caret-down" href="javascript:void(0)" title="BỘ SƯU TẬP"> BỘ SƯU TẬP<i class="fa"></i> </a>
                
                <ul class="item_small child">
                    @foreach ($arrList as $item)
                    @php
                        $slug = Str::slug($item->name);
                        $urlClassify = route('yody.classify', ['slug' => $slug, 'id' => $item->cat_id]);
                    @endphp
                        <li>
                            <a class="" href="{{$urlClassify}}" title="{{$item->name}}">{{$item->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <div class="cart-drop d-none d-lg-block">
            <a href="cart.html">
                <img width="28" height="28" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/cart.svg" alt="giỏ hàng" />
                <span class="count_item count_item_pr hidden-count">0</span>
                <span class="gio-hang">Giỏ hàng</span>
            </a>
            <div class="top-cart-content">
                <div class="CartHeaderContainer"> </div>
            </div>
        </div>
    </nav>
    <div class="header-tool d-lg-none">
        <div class="user">
            <a href="account/logina3b1.html">
                <img width="28" height="28" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/user.svg" alt="tài khoản" />
            </a>
            <ul class="account_header">
                <li>
                    <a href="{{route('yody.auth.register')}}">Đăng ký</a>
                </li>
                <li>
                    {{-- <a href="{{route('yody.auth.login')}}">Đăng nhập</a> --}}
                </li>
            </ul>
        </div>
        <div id="search_header" style="padding: 7px 2px;">
            <img width="35" height="35" src="/templates/yody/images/search_icon3c85.jpg" alt="message" />
        </div>
        <div class="cart-drop">
            <a href="cart.html">
                <img width="24" height="24" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/cart.svg" alt="giỏ hàng" />
                <span class="count_item count_item_pr hidden-count">0</span>
            </a>
            <div class="top-cart-content">
                <div class="CartHeaderContainer"></div>
            </div>
            <div class="noti-cart">
                <div class="noti-cart-title"></div>
                <a href="cart.html"> Xem giỏ hàng</a>
            </div>
        </div>
        <a class="chat-zalo d-none" href="https://zalo.me/3492644577837657321">
            <img width="24" height="24" src="/templates/yody/images/messages3c85.png" alt="message" />
        </a>
    </div>
</div>
<div class="menu_sidebar_mobile d-lg-none">
    <div class="sidebar_title">
        <button class="close_sidebar">
            <img src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/closemenu.svg" alt="vecter_x" />
        </button>
    </div>
    <div class="sidbar_content">
        <h6 class="item_trangchu">
            <a href="{{ROUTE('yody.index')}}" class="second_child_link resert_menu">TRANG CHỦ</a>
        </h6>
        @foreach ($arrMenu as $category)
        @if ($category->parent_id == 0)
            <div class="sidbar_item">
                <div class="item_child">
                    <h6>{{$category->name}}</h6>
                    <button>
                        <img class="sub_icon" src="/templates/yody/images/plus3c85.png" alt="plus" />
                    </button>
                </div>
                <div class="menu_item_child d-none">
                    <div class="menuTask">
                        @foreach ($arrMenu as $classify)
                        @if ($category->cat_id == $classify->parent_id)
                            <div class="second_child">
                                <div class="second_child_item submenu">
                                    <h6>{{$classify->name}}</h6>
                                    <button class="open_menu_second">
                                        <img class="sub_icon_second" src="/templates/yody/images/plus3c85.png" alt="plus" />
                                    </button>
                                </div>
                                <div class="menu_second_child d-none ">
                                    @foreach ($arrMenu as $classifyGroup)
                                    @if ($classify->cat_id == $classifyGroup->parent_id)
                                        @php
                                            $slug = Str::slug(ucwords($classifyGroup->name));
                                            $urlGroup = route('yody.group', ['slug' => $slug, 'id' => $classifyGroup->cat_id]);
                                        @endphp
                                        <a href="{{$urlGroup}}" class="third_child resert_menu">{{ucwords($classifyGroup->name)}}</a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        @endforeach

        <div class="sidbar_item">
            <div class="item_child">
                <h6>
                    BỘ SƯU TẬP
                </h6>
                <button>
                    <img class="sub_icon" src="/templates/yody/images/plus3c85.png" alt="plus" />
                </button>
            </div>
            <div class="menu_item_child d-none">
                <div class="menuTask">
                    @foreach ($arrList as $item)
                    @php
                        $slug = Str::slug($item->name);
                        $urlClassify = route('yody.classify', ['slug' => $slug, 'id' => $item->cat_id]);
                    @endphp
                        <div class="second_child">
                            <div class="second_child_item submenu">
                                <h6 style="padding: 0">
                                    <a style="padding: 8px;" href="{{$urlClassify}}" class="second_child_link resert_menu">
                                        {{ucwords($item->name)}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
            
        <div class="sidbar_contact">
            <div class="item_contact item_not_level">
                <img class="sub_icon" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/messages.svg" alt="message" />
                <a href="https://zalo.me/3492644577837657321">Tư vấn qua Zalo</a>
            </div>
            <div class="item_contact item_not_level">
                <img class="sub_icon" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/vector_userui.svg" alt="user" />
                <a href="{{route('yody.auth.login')}}">Đăng nhập</a>
            </div>
            <div class="item_contact item_not_level click_theo_doi">
                <img class="sub_icon" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/car.svg" alt="delivery" />
                <a href="{{route('yody.cart')}}">Đơn hàng của tôi</a>
            </div>
            <div class="item_contact item_not_level" style="padding-bottom: 2px;">
                <img class="sub_icon" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/location.svg" alt="location" />
                <a href="{{route('yody.shopSystem')}}">Hệ thống cửa hàng</a>
            </div>
            {{-- <div class="sidbar_item ">
                <div class="item_child">
                    <h6 style="font-weight: 500">
                    <img src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/security-user.svg" alt="delivery" /> <span style="margin-left: 4px;">Chính sách hỗ trợ khách hàng</span>
                    </h6>
                    <button>
                    <img class="sub_icon" src="/templates/yody/images/plus3c85.png" alt="plus" />
                    </button>
                </div>
                <div class="menu_item_child d-none">
                    <div class="second_child contact_item">
                    <div class="second_child_item  ">
                        <a href="chinh-sach-doi-tra.html">
                        Bảo hành - đổi trả
                        </a>
                    </div>
                    </div>
                    <div class="second_child contact_item">
                    <div class="second_child_item  ">
                        <a class="third_child" href="chinh-sach-giao-nhan-hang-online.html">
                        Giao - nhận hàng trực tuyến
                        </a>
                    </div>
                    </div>
                    <div class="second_child contact_item">
                    <div class="second_child_item  ">
                        <a class="third_child" href="bang-size-chuan.html">
                        Hướng dẫn chọn size
                        </a>
                    </div>
                    </div>
                    <div class="second_child contact_item">
                    <div class="second_child_item  ">
                        <a class="third_child" href="chinh-sach-bao-mat.html">
                        Bảo mật thanh toán
                        </a>
                    </div>
                    </div>
                    <div class="second_child contact_item">
                    <div class="second_child_item  ">
                        <a class="third_child" href="chinh-sach-bao-mat-thong-tin-khach-hang-1.html">
                        Bảo mật thông tin khách hàng
                        </a>
                    </div>
                    </div>
                    <div class="second_child contact_item">
                    <div class="second_child_item  ">
                        <a class="third_child" href="chinh-sach-khach-hang-than-thiet.html">
                        Khách hàng thân thiết
                        </a>
                    </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<script>
    $("#menu-bar").addClass('banner-show');
</script>
    </div>
    <div class="search_sidebar d-lg-none">
            <div class="title">
                <button class="close_search">
                    <img width="24" height="24" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/arrow-left-search.svg" alt="message" />
                </button>
                <h5>
                    Tìm kiếm sản phẩm
                </h5>
            </div>
            <div class="theme-search-smart d-lg-none ">
                <div class="header_search theme-searchs">
                    <form action="https://yody.vn/search" class="input-group search-bar theme-header-search-form ultimate-search resertSearch" role="search">
                        <input type="text" id="search_input" oninput="inputFunctionSearch()" aria-label="Tìm sản phẩm" name="query" value="" autocomplete="off" placeholder="Cần tìm áo khoác, áo polo..." class="search-auto auto-search" required="">
                        <input type="hidden" name="type" value="product">
                        <button type="submit" id="btn_search" class="btn icon-fallback-text input-group-btn button-submit-mb resertSearch" aria-label="Justify"></button>
                    </form>
                    <button class="delete_search d-none">
                        <img width="17.5px" height="17.5px" src="http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/close-livestream-19-10.svg" alt="message" />
                    </button>
                </div>
            </div>
            <div class="result-search-sidebar"></div>
        </div>
        <script>
            $("#menu-bar").addClass('banner-show');
        </script>
    </div>
    <div class="header-mask"></div>
    <div class="header_nav_main header-mobile-menu d-block d-lg-none"></div>
    {{-- <script type="text/x-custom-templates" data-templates="navmobile">
    <ul class="menu-mobile">
            <li class="active" data-id="mmenu-1"><a href="javascript:;">NỮ</a></li>
            <li  data-id="mmenu-2"><a href="javascript:;">NAM</a></li>
            <li  data-id="mmenu-3"><a href="javascript:;">TRẺ EM</a></li>
        </ul>
        <ul id="mmenu-1" class="lv1 active">
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ÁO">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/ao-len-nu-7c4b9c2a-0621-45b8-bd78-3326090b37a9.jpg?v=1665479479367" alt="ÁO"/>ÁO
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ÁO</li>
                    <li>
                        <a href="/ao-khoac-nu" title="ÁO KHOÁC">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-khoac-nu.jpg?v=1665463255247" alt="ÁO KHOÁC"/>ÁO KHOÁC
                        </a>
                    </li>
                    <li>
                        <a href="/ao-giu-nhiet-nu" title="ÁO GIỮ NHIỆT">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-giu-nhiet-nu.jpg?v=1636703184577" alt="ÁO GIỮ NHIỆT"/>ÁO GIỮ NHIỆT
                        </a>
                    </li>
                    <li>
                        <a href="/ao-len-nu" title="ÁO LEN/ NỈ NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-len-nu.jpg?v=1665463072727" alt="ÁO LEN/ NỈ NỮ"/>ÁO LEN/ NỈ NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/ao-polo-nu" title="ÁO POLO NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-polo-nu.jpg?v=1665463489830" alt="ÁO POLO NỮ"/>ÁO POLO NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/ao-thun-ao-phong-nu" title="ÁO THUN NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-thun-nu.jpg?v=1636710874283" alt="ÁO THUN NỮ"/>ÁO THUN NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/ao-thun-hoa-tiet-cho-nu" title="ÁO THUN HỌA TIẾT">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/6-ddfd713d-223a-4756-8885-5c36b548c894.jpg?v=1653029587403" alt="ÁO THUN HỌA TIẾT"/>ÁO THUN HỌA TIẾT
                        </a>
                    </li>
                    <li>
                        <a href="/ao-so-mi-nu" title="ÁO SƠ MI NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-so-mi-nu.jpg?v=1665463956793" alt="ÁO SƠ MI NỮ"/>ÁO SƠ MI NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/ao-chong-nang-nu" title="ÁO CHỐNG NẮNG">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/acn5010-ghs-21.jpg?v=1652165631297" alt="ÁO CHỐNG NẮNG"/>ÁO CHỐNG NẮNG
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="QUẦN">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/quan-jeans-nu-febb09d0-57f7-4072-923c-5fa8b9ccae9d.jpg?v=1665479755253" alt="QUẦN"/>QUẦN
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">QUẦN</li>
                    <li>
                        <a href="/quan-jean-nu" title="QUẦN JEAN NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-jeans-nu.jpg?v=1665464040850" alt="QUẦN JEAN NỮ"/>QUẦN JEAN NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/quan-au-nu" title="QUẦN ÂU NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/qan4096-nca-3.jpg?v=1637114239573" alt="QUẦN ÂU NỮ"/>QUẦN ÂU NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/quan-kaki-nu" title="QUẦN KAKI NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-au-nu.jpg?v=1637114400223" alt="QUẦN KAKI NỮ"/>QUẦN KAKI NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/quan-ni-nu" title="QUẦN NỈ NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-ni-nu.jpg?v=1667355089423" alt="QUẦN NỈ NỮ"/>QUẦN NỈ NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/quan-short-nu" title="QUẦN SHORT NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-short-nu.jpg?v=1636709854767" alt="QUẦN SHORT NỮ"/>QUẦN SHORT NỮ
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="BỘ ĐỒ NỮ">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/bodo.jpg?v=1636467720970" alt="BỘ ĐỒ NỮ"/>BỘ ĐỒ NỮ
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">BỘ ĐỒ NỮ</li>
                    <li>
                        <a href="/do-bo-nu-mac-nha" title="BỘ ĐỒ NỮ MẶC NHÀ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/z3337218259310-e6e949f6db925d4c2d06573dd8e5f700-8673a44e-cc05-470b-935e-dff5f6dfdbbd.jpg?v=1649837605040" alt="BỘ ĐỒ NỮ MẶC NHÀ"/>BỘ ĐỒ NỮ MẶC NHÀ
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ĐỒ THỂ THAO">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/sport-6c1efd43-1018-4a48-af26-64ab98f58a46.jpg?v=1646964792980" alt="ĐỒ THỂ THAO"/>ĐỒ THỂ THAO
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ĐỒ THỂ THAO</li>
                    <li>
                        <a href="/ao-thun-the-thao-cho-nu" title="ÁO THUN">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/1.jpg?v=1653028074383" alt="ÁO THUN"/>ÁO THUN
                        </a>
                    </li>
                    <li>
                        <a href="/ao-polo-the-thao-cho-nu" title="ÁO POLO">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/2.jpg?v=1653028102757" alt="ÁO POLO"/>ÁO POLO
                        </a>
                    </li>
                    <li>
                        <a href="/bo-do-the-thao-cho-nu" title="BỘ ĐỒ THỂ THAO">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/bdn.jpg?v=1654846363270" alt="BỘ ĐỒ THỂ THAO"/>BỘ ĐỒ THỂ THAO
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="VÁY NỮ">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/vay.jpg?v=1637142599783" alt="VÁY NỮ"/>VÁY NỮ
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">VÁY NỮ</li>
                    <li>
                        <a href="/chan-vay" title="CHÂN VÁY">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/chan-vay-nu.jpg?v=1636703414020" alt="CHÂN VÁY"/>CHÂN VÁY
                        </a>
                    </li>
                    <li>
                        <a href="/chan-vay-dam-lien-than" title="VÁY LIỀN THÂN">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/vay-66fbcb72-8904-49a1-b1de-adff97674655.jpg?v=1637142617033" alt="VÁY LIỀN THÂN"/>VÁY LIỀN THÂN
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ĐỒ MẶC TRONG">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/do-lot.jpg?v=1636389620637" alt="ĐỒ MẶC TRONG"/>ĐỒ MẶC TRONG
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ĐỒ MẶC TRONG</li>
                    <li>
                        <a href="/ao-hai-day-ba-lo" title="ÁO 2 DÂY - ÁO BA LỖ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/balo.jpg?v=1655255983267" alt="ÁO 2 DÂY - ÁO BA LỖ"/>ÁO 2 DÂY - ÁO BA LỖ
                        </a>
                    </li>
                    <li>
                        <a href="/do-lot-nu" title="ĐỒ LÓT NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/do-lot-nu.jpg?v=1636703158177" alt="ĐỒ LÓT NỮ"/>ĐỒ LÓT NỮ
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="PHỤ KIỆN">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/phukiennu.jpg?v=1636389596880" alt="PHỤ KIỆN"/>PHỤ KIỆN
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">PHỤ KIỆN</li>
                    <li>
                        <a href="/giay-nu" title="GIÀY NỮ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/giay-nu.jpg?v=1636711796083" alt="GIÀY NỮ"/>GIÀY NỮ
                        </a>
                    </li>
                    <li>
                        <a href="/tui-xach" title="TÚI XÁCH">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/tui-xach.jpg?v=1636707213100" alt="TÚI XÁCH"/>TÚI XÁCH
                        </a>
                    </li>
                    <li>
                        <a href="/that-lung-nu" title="THẮT LƯNG">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/that-lung-nu.jpg?v=1636702427397" alt="THẮT LƯNG"/>THẮT LƯNG
                        </a>
                    </li>
                    <li>
                        <a href="/phu-kien-nu-khac" title="PHỤ KIỆN NỮ KHÁC">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/tat-nu-2.jpg?v=1636702352653" alt="PHỤ KIỆN NỮ KHÁC"/>PHỤ KIỆN NỮ KHÁC
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul id="mmenu-2" class="lv1">
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ÁO">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/ao-len-nam-87872d1a-9c9d-42ec-a710-45159aeb4cc8.jpg?v=1665479101363" alt="ÁO"/>ÁO
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ÁO</li>
                    <li>
                        <a href="/ao-khoac-nam" title="ÁO KHOÁC NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-khoac-nam.jpg?v=1665463336023" alt="ÁO KHOÁC NAM"/>ÁO KHOÁC NAM
                        </a>
                    </li>
                    <li>
                        <a href="/ao-len-nam" title="ÁO LEN/ NỈ NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-len-nam.jpg?v=1665463135817" alt="ÁO LEN/ NỈ NAM"/>ÁO LEN/ NỈ NAM
                        </a>
                    </li>
                    <li>
                        <a href="/ao-polo-nam" title="ÁO POLO NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-polo-nam.jpg?v=1665463614397" alt="ÁO POLO NAM"/>ÁO POLO NAM
                        </a>
                    </li>
                    <li>
                        <a href="/ao-giu-nhiet-nam" title="ÁO GIỮ NHIỆT NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-giu-nhiet-nam.jpg?v=1636704438003" alt="ÁO GIỮ NHIỆT NAM"/>ÁO GIỮ NHIỆT NAM
                        </a>
                    </li>
                    <li>
                        <a href="/ao-thun-ao-phong-nam" title="ÁO THUN">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-thun-nam.jpg?v=1636703739063" alt="ÁO THUN"/>ÁO THUN
                        </a>
                    </li>
                    <li>
                        <a href="/ao-thun-hoa-tiet-cho-nam" title="ÁO THUN HỌA TIẾT">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/7.jpg?v=1653029596877" alt="ÁO THUN HỌA TIẾT"/>ÁO THUN HỌA TIẾT
                        </a>
                    </li>
                    <li>
                        <a href="/ao-ba-lo-nam" title="ÁO BA LỖ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-ba-lo-nam.jpg?v=1636710683700" alt="ÁO BA LỖ"/>ÁO BA LỖ
                        </a>
                    </li>
                    <li>
                        <a href="/ao-so-mi-nam" title="ÁO SƠ MI NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-so-mi-nam.jpg?v=1665463778330" alt="ÁO SƠ MI NAM"/>ÁO SƠ MI NAM
                        </a>
                    </li>
                    <li>
                        <a href="/ao-vest-nam" title="ÁO VEST NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-vest-nam.jpg?v=1639185782313" alt="ÁO VEST NAM"/>ÁO VEST NAM
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="QUẦN">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/quan.jpg?v=1636387511163" alt="QUẦN"/>QUẦN
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">QUẦN</li>
                    <li>
                        <a href="/quan-jean-nam" title="QUẦN JEAN NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-jeans-nam.jpg?v=1665464105763" alt="QUẦN JEAN NAM"/>QUẦN JEAN NAM
                        </a>
                    </li>
                    <li>
                        <a href="/quan-tay-quan-au-nam" title="QUẦN TÂY NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-au-nam.jpg?v=1636704786233" alt="QUẦN TÂY NAM"/>QUẦN TÂY NAM
                        </a>
                    </li>
                    <li>
                        <a href="/quan-kaki-nam" title="QUẦN KAKI NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-kaki-nam.jpg?v=1636704638117" alt="QUẦN KAKI NAM"/>QUẦN KAKI NAM
                        </a>
                    </li>
                    <li>
                        <a href="/quan-short-nam" title="QUẦN SHORT NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-short-nam.jpg?v=1636704663373" alt="QUẦN SHORT NAM"/>QUẦN SHORT NAM
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ĐỒ THỂ THAO">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/sport.jpg?v=1646964775360" alt="ĐỒ THỂ THAO"/>ĐỒ THỂ THAO
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ĐỒ THỂ THAO</li>
                    <li>
                        <a href="/ao-thun-the-thao-cho-nam" title="ÁO THUN">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/3.jpg?v=1653028803583" alt="ÁO THUN"/>ÁO THUN
                        </a>
                    </li>
                    <li>
                        <a href="/ao-polo-the-thao-cho-nam" title="ÁO POLO">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/4.jpg?v=1653028823360" alt="ÁO POLO"/>ÁO POLO
                        </a>
                    </li>
                    <li>
                        <a href="/quan-the-thao-cho-nam" title="QUẦN THỂ THAO">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/6.jpg?v=1653028850477" alt="QUẦN THỂ THAO"/>QUẦN THỂ THAO
                        </a>
                    </li>
                    <li>
                        <a href="/bo-do-the-thao-cho-nam" title="BỘ ĐỒ THỂ THAO">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/5.jpg?v=1653028892223" alt="BỘ ĐỒ THỂ THAO"/>BỘ ĐỒ THỂ THAO
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ĐỒ MẶC TRONG">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/dolotnam.jpg?v=1636388675510" alt="ĐỒ MẶC TRONG"/>ĐỒ MẶC TRONG
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ĐỒ MẶC TRONG</li>
                    <li>
                        <a href="/do-lot-nam" title="ĐỒ LÓT">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/do-lot-nam.jpg?v=1636707827910" alt="ĐỒ LÓT"/>ĐỒ LÓT
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="PHỤ KIỆN">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/giay.jpg?v=1637142749837" alt="PHỤ KIỆN"/>PHỤ KIỆN
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">PHỤ KIỆN</li>
                    <li>
                        <a href="/giay-nam" title="GIÀY NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/giay-nam.jpg?v=1636686598433" alt="GIÀY NAM"/>GIÀY NAM
                        </a>
                    </li>
                    <li>
                        <a href="/vi-nam" title="VÍ NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/vi-nam.jpg?v=1636703662697" alt="VÍ NAM"/>VÍ NAM
                        </a>
                    </li>
                    <li>
                        <a href="/that-lung-nam" title="THẮT LƯNG NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/that-lung-nam.jpg?v=1636703980473" alt="THẮT LƯNG NAM"/>THẮT LƯNG NAM
                        </a>
                    </li>
                    <li>
                        <a href="/mu-nam" title="MŨ NAM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/mu-nam.jpg?v=1636704413140" alt="MŨ NAM"/>MŨ NAM
                        </a>
                    </li>
                    <li>
                        <a href="/phu-kien-nam-khac" title="PHỤ KIỆN KHÁC">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/phu-kien.jpg?v=1636704390637" alt="PHỤ KIỆN KHÁC"/>PHỤ KIỆN KHÁC
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul id="mmenu-3" class="lv1">
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="ÁO">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/aokid.jpg?v=1636389932777" alt="ÁO"/>ÁO
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">ÁO</li>
                    <li>
                        <a href="/ao-khoac-tre-em" title="ÁO KHOÁC">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-khoac-kid.jpg?v=1636702032590" alt="ÁO KHOÁC"/>ÁO KHOÁC
                        </a>
                    </li>
                    <li>
                        <a href="/ao-len-tre-em" title="ÁO LEN/ NỈ TRẺ EM">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-len.jpg?v=1636705467053" alt="ÁO LEN/ NỈ TRẺ EM"/>ÁO LEN/ NỈ TRẺ EM
                        </a>
                    </li>
                    <li>
                        <a href="/ao-polo-tre-em" title="ÁO POLO">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-polo-kid.jpg?v=1636702020533" alt="ÁO POLO"/>ÁO POLO
                        </a>
                    </li>
                    <li>
                        <a href="/ao-thun-ao-phong-tre-em" title="ÁO THUN">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-thun.jpg?v=1636702006750" alt="ÁO THUN"/>ÁO THUN
                        </a>
                    </li>
                    <li>
                        <a href="/ao-thun-hoa-tiet-cho-be" title="ÁO THUN HỌA TIẾT">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/8.jpg?v=1653029605827" alt="ÁO THUN HỌA TIẾT"/>ÁO THUN HỌA TIẾT
                        </a>
                    </li>
                    <li>
                        <a href="/ao-so-mi-tre-em" title="ÁO SƠ MI">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/ao-so-mi.jpg?v=1636711503410" alt="ÁO SƠ MI"/>ÁO SƠ MI
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="QUẦN">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/quantreem.jpg?v=1637316009573" alt="QUẦN"/>QUẦN
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">QUẦN</li>
                    <li>
                        <a href="/quan-dai-cho-be" title="QUẦN DÀI">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-22f98fff-90af-4588-b767-243cfa79a2cd.jpg?v=1636702230567" alt="QUẦN DÀI"/>QUẦN DÀI
                        </a>
                    </li>
                    <li>
                        <a href="/quan-short-tre-em" title="QUẦN SHORT">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/quan-short-tre-em.jpg?v=1636702245317" alt="QUẦN SHORT"/>QUẦN SHORT
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="javascript:;" class="no-link" title="VÁY ĐẦM TRẺ EM">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/438/408/collections/dambegai.jpg?v=1636389987847" alt="VÁY ĐẦM TRẺ EM"/>VÁY ĐẦM TRẺ EM
                    <i></i>
                </a>
                <ul class="lv2">
                    <li class="first">VÁY ĐẦM TRẺ EM</li>
                    <li>
                        <a href="/chan-vay-cho-be" title="CHÂN VÁY">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/chan-vay.jpg?v=1636702304580" alt="CHÂN VÁY"/>CHÂN VÁY
                        </a>
                    </li>
                    <li>
                        <a href="/vay-tre-em" title="VÁY CHO BÉ">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/compact/100/438/408/collections/vay-dam.jpg?v=1636702292107" alt="VÁY CHO BÉ"/>VÁY CHO BÉ
                        </a>
                    </li>
                </ul>
            </li>
            <li >
                <a href="/do-bo-tre-em" title="BỘ ĐỒ">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/438/408/collections/bo-do-kid.jpg?v=1636706651353" alt="BỘ ĐỒ"/>BỘ ĐỒ
                </a>
            </li>
            <li >
                <a href="/yody-sport-tre-em" title="ĐỒ THỂ THAO">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/438/408/collections/sport-6c1efd43-1018-4a48-af26-64ab98f58a46-e6637ae3-9bf9-4190-93dc-3496fb741c35.jpg?v=1653030110660" alt="ĐỒ THỂ THAO"/>ĐỒ THỂ THAO
                </a>
            </li>
            <li >
                <a href="/phu-kien-tre-em" title="PHỤ KIỆN">
                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/438/408/collections/phukientreem.jpg?v=1636390005340" alt="PHỤ KIỆN"/>PHỤ KIỆN
                </a>
            </li>
        </ul>
        <div class="bottom-menu-mobile">
            <a href="index.html">
                <span>
                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.2043 11.4585C17.8223 11.4585 17.5131 11.7677 17.5131 12.1497V18.7157H4.38113V12.1497C4.38113 11.7677 4.07192 11.4585 3.68997 11.4585C3.30801 11.4585 2.99881 11.7677 2.99881 12.1406V20.0798H18.8864V12.1406C18.8954 11.7677 18.5862 11.4585 18.2043 11.4585Z" fill="black"></path>
                        <path d="M21.6965 10.7493L10.9471 0L0.197799 10.7493C-0.0659328 11.0131 -0.0659328 11.4496 0.197799 11.7224C0.325117 11.8497 0.497907 11.9225 0.67979 11.9225C0.861674 11.9225 1.03446 11.8497 1.16178 11.7224L10.9471 1.94616L20.7234 11.7224C20.9871 11.9861 21.4236 11.9952 21.6965 11.7224C21.9602 11.4496 21.9602 11.0131 21.6965 10.7493Z" fill="black"></path>
                    </svg>
                </span>
            </a>
            <a href="/yeu-thich">
                <span>
                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C11 20 10.3847 19.457 10.1496 19.2507C9.26062 18.4735 8.40383 17.7436 7.64801 17.0992L7.64414 17.0957C5.42781 15.2071 3.51398 13.5762 2.18195 11.9698C0.693516 10.174 0 8.47096 0 6.61067C0 4.80323 0.620039 3.13585 1.74539 1.91528C2.88406 0.6801 4.44684 0 6.14582 0C7.41555 0 8.57871 0.401272 9.60266 1.19307C10.1191 1.59263 10.5875 2.08154 11 2.65209C11.4129 2.08154 11.8809 1.59263 12.3978 1.19307C13.4213 0.401272 14.5845 0 15.8542 0C17.5532 0 19.1159 0.6801 20.2546 1.91528C21.3804 3.13585 22 4.80323 22 6.61067C22 8.47096 21.3069 10.174 19.818 11.9698C18.4864 13.5766 16.5726 15.2075 14.3563 17.0957C13.5992 17.741 12.7407 18.4722 11.8499 19.2512C11.6153 19.457 11 20 11 20ZM6.14582 1.28845C4.81078 1.28845 3.58445 1.82119 2.69242 2.78828C1.78707 3.77041 1.2882 5.1276 1.2882 6.61024C1.2882 8.17494 1.87 9.57424 3.17367 11.1475C4.43395 12.668 6.30867 14.2653 8.47945 16.1149L8.48332 16.1183C9.24215 16.7649 10.1024 17.4979 10.9979 18.2806C11.8985 17.4966 12.76 16.7623 13.5205 16.1145C15.6909 14.2649 17.5656 12.668 18.8259 11.1471C20.1296 9.57381 20.7114 8.17451 20.7114 6.60981C20.7114 5.12674 20.2125 3.76955 19.3071 2.78785C18.4151 1.82033 17.1888 1.28802 15.8542 1.28802C14.8762 1.28802 13.9786 1.59864 13.1858 2.21172C12.4863 2.75262 11.9969 3.4353 11.7073 3.91777C11.5646 4.15535 11.0391 5.14478 11.0391 5.14478C11.0391 5.14478 10.456 4.1923 10.3009 3.93238C10.0126 3.44905 9.52059 2.75821 8.81375 2.21172C8.02141 1.5995 7.12379 1.28845 6.14582 1.28845Z" fill="black"></path>
                    </svg>
                    <span class="headerWishlistCount hidden-count"></span>
                </span>
            </a>
            <a href="/cart">
                <span>
                    <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33754 11.7046C6.93522 11.7046 6.60907 11.3784 6.60907 10.9761L6.60907 6.31393C6.60907 3.33675 9.02255 0.923265 11.9997 0.923266C14.9769 0.923265 17.3904 3.33675 17.3904 6.31393L17.3904 10.9761C17.3904 11.3784 17.0643 11.7046 16.6619 11.7046C16.2596 11.7046 15.9335 11.3784 15.9335 10.9761L15.9335 6.31393C15.9335 4.14139 14.1723 2.3802 11.9997 2.3802C9.82719 2.3802 8.066 4.14139 8.06601 6.31393L8.06601 10.9761C8.06601 11.3784 7.73986 11.7046 7.33754 11.7046Z" fill="#222222"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.91606 6.75H17.0838C18.0599 6.74998 18.8629 6.74996 19.5026 6.83303C20.1737 6.92018 20.7629 7.1089 21.251 7.55809C21.7392 8.00728 21.9762 8.57871 22.1188 9.24032C22.2547 9.87092 22.3214 10.6711 22.4024 11.6439L23.0094 18.9277C23.0553 19.4773 23.0958 19.9629 23.0743 20.3561C23.0511 20.7816 22.9516 21.2182 22.6169 21.582C22.2822 21.9457 21.8553 22.0811 21.4333 22.1396C21.0432 22.1936 20.5559 22.1936 20.0044 22.1935H3.99543C3.44392 22.1936 2.95659 22.1936 2.56658 22.1396C2.14449 22.0811 1.71761 21.9457 1.38292 21.582C1.04823 21.2182 0.948727 20.7816 0.925519 20.3561C0.904075 19.9629 0.944584 19.4773 0.99043 18.9277L1.59742 11.6439C1.67846 10.6711 1.74512 9.87092 1.88103 9.24032C2.02362 8.57871 2.26061 8.00728 2.74879 7.55809C3.23697 7.1089 3.8261 6.92018 4.49727 6.83303C5.13698 6.74996 5.93996 6.74998 6.91606 6.75ZM4.68488 8.27783C4.1707 8.3446 3.91624 8.46373 3.73529 8.63022C3.55435 8.79671 3.4145 9.0404 3.30526 9.54726C3.19162 10.0745 3.13141 10.7798 3.04523 11.814L2.44632 19.0009C2.39532 19.6129 2.36501 19.9965 2.38029 20.2767C2.3941 20.5299 2.44119 20.5806 2.45418 20.5945L2.45506 20.5955L2.45592 20.5964C2.46876 20.6105 2.51528 20.6616 2.76647 20.6964C3.04447 20.7349 3.42924 20.7366 4.04341 20.7366H19.9564C20.5706 20.7366 20.9554 20.7349 21.2334 20.6964C21.4846 20.6616 21.5311 20.6105 21.5439 20.5964L21.5448 20.5955L21.5457 20.5945C21.5586 20.5806 21.6057 20.5299 21.6195 20.2767C21.6348 19.9965 21.6045 19.6129 21.5535 19.0009L20.9546 11.814C20.8684 10.7798 20.8082 10.0745 20.6946 9.54726C20.5853 9.0404 20.4455 8.79671 20.2645 8.63022C20.0836 8.46373 19.8291 8.3446 19.315 8.27783C18.7801 8.20838 18.0722 8.20694 17.0345 8.20694H6.96537C5.92763 8.20694 5.21978 8.20838 4.68488 8.27783Z" fill="#222222"></path>
                    </svg>
                    <span class="count_item_pr hidden-count"></span>
                </span>
            </a>
            <a href="/account">
                <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C8.51067 0 5.67188 2.8388 5.67188 6.32812C5.67188 9.81745 8.51067 12.6562 12 12.6562C15.4893 12.6562 18.3281 9.81745 18.3281 6.32812C18.3281 2.8388 15.4893 0 12 0ZM12 11.25C9.28608 11.25 7.07812 9.04205 7.07812 6.32812C7.07812 3.6142 9.28608 1.40625 12 1.40625C14.7139 1.40625 16.9219 3.6142 16.9219 6.32812C16.9219 9.04205 14.7139 11.25 12 11.25Z" fill="black"></path>
                        <path d="M19.8734 16.7904C18.1409 15.0313 15.8442 14.0625 13.4062 14.0625H10.5938C8.15588 14.0625 5.85909 15.0313 4.12659 16.7904C2.40258 18.5409 1.45312 20.8515 1.45312 23.2969C1.45312 23.6852 1.76794 24 2.15625 24H21.8438C22.2321 24 22.5469 23.6852 22.5469 23.2969C22.5469 20.8515 21.5974 18.5409 19.8734 16.7904ZM2.89031 22.5938C3.24258 18.6053 6.56302 15.4688 10.5938 15.4688H13.4062C17.437 15.4688 20.7574 18.6053 21.1097 22.5938H2.89031Z" fill="black"></path>
                    </svg>
                </span>
            </a>
        </div>	
    </script> --}}
    <div class="closeMenuMobile">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.88 9.00009L16.6133 3.28008C16.8644 3.02901 17.0054 2.68849 17.0054 2.33342C17.0054 1.97835 16.8644 1.63782 16.6133 1.38675C16.3622 1.13568 16.0217 0.994629 15.6666 0.994629C15.3116 0.994629 14.9711 1.13568 14.72 1.38675L8.99998 7.12009L3.27998 1.38675C3.02891 1.13568 2.68838 0.994629 2.33331 0.994629C1.97824 0.994629 1.63772 1.13568 1.38665 1.38675C1.13557 1.63782 0.994524 1.97835 0.994524 2.33342C0.994524 2.68849 1.13557 3.02901 1.38665 3.28008L7.11998 9.00009L1.38665 14.7201C1.26168 14.844 1.16248 14.9915 1.09479 15.154C1.0271 15.3165 0.992249 15.4907 0.992249 15.6668C0.992249 15.8428 1.0271 16.017 1.09479 16.1795C1.16248 16.342 1.26168 16.4895 1.38665 16.6134C1.5106 16.7384 1.65806 16.8376 1.82054 16.9053C1.98302 16.973 2.1573 17.0078 2.33331 17.0078C2.50933 17.0078 2.6836 16.973 2.84608 16.9053C3.00856 16.8376 3.15603 16.7384 3.27998 16.6134L8.99998 10.8801L14.72 16.6134C14.8439 16.7384 14.9914 16.8376 15.1539 16.9053C15.3164 16.973 15.4906 17.0078 15.6666 17.0078C15.8427 17.0078 16.0169 16.973 16.1794 16.9053C16.3419 16.8376 16.4894 16.7384 16.6133 16.6134C16.7383 16.4895 16.8375 16.342 16.9052 16.1795C16.9729 16.017 17.0077 15.8428 17.0077 15.6668C17.0077 15.4907 16.9729 15.3165 16.9052 15.154C16.8375 14.9915 16.7383 14.844 16.6133 14.7201L10.88 9.00009Z" fill="white"></path>
        </svg>
    </div>
    <script>
        $(".click_theo_doi").click(function(e){
            localStorage.setItem("click_theo_doi", JSON.stringify('active'));
        })
        $(".item_trangchu").on('click', function(e) {
            //e.preventDefault();
            $(this).addClass('active');
            $('.menu_sidebar_mobile ').css('transform',`translateX(-100%)`);
            $('.menu_sidebar_mobile ').css('transition',`all .5s linear`);
            
        })
        
        var thirdChild = document.querySelectorAll('.third_child')
        for(let i = 0; i< thirdChild.length; i++){
            var temp = thirdChild[i]
            thirdChild[i].addEventListener('click', function(e){ 
                for(let j = 0; j< thirdChild.length; j++){
                    thirdChild[j].classList.remove('active')
                }
                thirdChild[i].classList.add('active')
            })
            
        }
        
        
        var secondChildLink = document.querySelectorAll('.second_child_link')
        for(let i = 0; i< secondChildLink.length; i++){
            var temp = secondChildLink[i]
            secondChildLink[i].addEventListener('click', function(e){ 
                for(let j = 0; j< secondChildLink.length; j++){
                    secondChildLink[j].classList.remove('active')
                }
                secondChildLink[i].classList.add('active')
                $('.menu_sidebar_mobile ').css('transform',`translateX(-100%)`);
                $('.menu_sidebar_mobile ').css('transition',`all .5s linear`);
                
            })
            secondChildLink[i].classList.remove('active')
        }

        var itemContactChild = document.querySelectorAll('.contact_item')
        for(let i = 0; i< itemContactChild.length; i++){
            var temp = itemContactChild[i]
            itemContactChild[i].addEventListener('click', function(e){ 
                for(let j = 0; j< itemContactChild.length; j++){
                    itemContactChild[j].classList.remove('active')
                }
                itemContactChild[i].classList.add('active')
            })
            
        }
        
        
        var itemContact = document.querySelectorAll('.item_not_level')
        for(let i = 0; i< itemContact.length; i++){
            var temp = itemContact[i]
            itemContact[i].addEventListener('click', function(e){ 
                for(let j = 0; j< itemContact.length; j++){
                    itemContact[j].classList.remove('active')
                }
                itemContact[i].classList.add('active')
            })
            
        }
        
        var arrSearch = []
        
        $('.resert_menu').on('click', function(e) {
            setTimeout(function(){
            var listSidebarItemChild = document.querySelectorAll('.item_child ')
            console.log('listSidebarItemChild', listSidebarItemChild)
            for(let i = 0; i< listSidebarItemChild.length; i++){ 
                listSidebarItemChild[i].classList.remove('active')
                var btnIcon = listSidebarItemChild[i].querySelector('.sub_icon')
                
                var parent = listSidebarItemChild[i].parentElement
                var submenueChild = parent.querySelector('.menu_item_child ')
                submenueChild.classList.add('d-none')
                btnIcon.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/plus.png`
                
                var thirdChild = document.querySelectorAll('.third_child')
                for(let i = 0; i< thirdChild.length; i++){
                    thirdChild[i].classList.remove('active')

                }
                var secondChildLink = document.querySelectorAll('.second_child_link')
                for(let i = 0; i< secondChildLink.length; i++){
                    secondChildLink[i].classList.remove('active')
                }
                
            }		
            
            }, 500)
        })
        
        $('.sibar').on('click', function(){
            $('.menu_sidebar_mobile ').css('transform',`translateX(0px)`);
            $('.has-banner-top').addClass('overflow-none-body')
            //var listSidebarItemChild = document.querySelectorAll('.item_child ')
                //	console.log('listSidebarItemChild', listSidebarItemChild)
                //for(let i = 0; i< listSidebarItemChild.length; i++){ 
                //	listSidebarItemChild[i].classList.remove('active')
                //}
        })
        $('.close_sidebar').on('click', function(){
            $('.menu_sidebar_mobile ').css('transform',`translateX(-100%)`);
            $('.has-banner-top').removeClass('overflow-none-body')
        })
        
        var listSidebarItemChild = document.querySelectorAll('.item_child ')
        var listSidebarSecondChild = document.querySelectorAll('.second_child ')
        
        for(let i = 0; i< listSidebarItemChild.length; i++){

            listSidebarItemChild[i].addEventListener('click', function(e){ 
            
                var btnIcon = listSidebarItemChild[i].querySelector('.sub_icon')
                
                
                var parent = listSidebarItemChild[i].parentElement
                var submenueChild = parent.querySelector('.menu_item_child ')
                
                var menu = document.querySelectorAll('.menu_item_child ')
                
                for(let j = 0; j< menu.length; j++){
                    if(menu[j] == submenueChild){
                        if(submenueChild.classList.contains('d-none')){
                            submenueChild.classList.remove('d-none')
                            listSidebarItemChild[i].classList.add('active')
                            btnIcon.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/minus.png`
                        }else{
                            listSidebarItemChild[i].classList.remove('active')
                            submenueChild.classList.add('d-none')
                            btnIcon.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/plus.png`
                        }
                    }else{
                        var menuChild = menu[j].parentElement
                        var btnChild = menuChild.querySelector('.sub_icon')
                        var elementLV1 = menuChild.querySelector('.item_child ')
                        elementLV1.classList.remove('active')
                        menu[j].classList.add('d-none')
                        btnChild.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/plus.png`
                    }
                    
                }
                
            
            })
        }
        
        window.onbeforeunload = function() {
            var current_href = location.href;
        }
        
        
        
        function formatMenu(){
            for(let k = 0; k< listSidebarSecondChild.length; k++){
                    var flag = true
                listSidebarSecondChild[k].addEventListener('click', function(e){
                var btnIconSecond = listSidebarSecondChild[k].querySelector('.sub_icon_second')
                var submenuThird = listSidebarSecondChild[k].querySelector('.menu_second_child ')
                
                if(submenuThird != null){
                    var thirdSubmenu = submenuThird.querySelectorAll('.third_child')
                    if(thirdSubmenu.length > 0){
                        
                        for(let n = 0; n < thirdSubmenu.length; n++){
                                thirdSubmenu[n].addEventListener('click', function(e){ 
                                    flag = false
                                    submenuThird.classList.remove('d-none')
                                    $('.menu_sidebar_mobile ').css('transform',`translateX(-100%)`);
                                    $('.menu_sidebar_mobile ').css('transition',`all .5s linear`);
                                    //activeItemMenu()
                                })
                                
                            }
                        //flag = true
                    }else{
                        flag =  true
                    }
                }
                
                var menuSecond = document.querySelectorAll('.menu_second_child ')
                for(let t = 0; t< menuSecond.length; t++){
                    if(menuSecond[t] == submenuThird){
                        if(submenuThird.classList.contains('d-none')){
                            submenuThird.classList.remove('d-none')
                            listSidebarSecondChild[k].classList.add('active')
                            btnIconSecond.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/minus.png`
                        }else{
                            listSidebarSecondChild[k].classList.remove('active')
                            if(flag){
                                submenuThird.classList.add('d-none')
                            }
                            
                            btnIconSecond.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/plus.png`
                        }
                    }else{
                        var menuChildSecondParent = menuSecond[t].parentElement
                        var btnChildOldSecond = menuChildSecondParent.querySelector('.sub_icon_second')
                        menuSecond[t].classList.add('d-none')
                        menuChildSecondParent.classList.remove('active')
                        btnChildOldSecond.src = `//bizweb.dktcdn.net/100/438/408/themes/890667/assets/plus.png`
                    }
                }
                    
            })
                
                
            }
        }
        
        
        formatMenu()
        function inputFunctionSearch(){
            var search = document.querySelector('#search_input')
            var btnIconSearch = document.querySelector('#btn_search')
            var delete_searchS = document.querySelector('.delete_search')
            var result =  document.querySelector('.results-box')
                result.classList.remove('d-none')
            
            if(search.value){
                delete_searchS.classList.remove('d-none')
                btnIconSearch.style.backgroundColor= "#FCAF17";
            }else{
                delete_searchS.classList.add('d-none')
                btnIconSearch.style.backgroundColor= "#D9D9D9";
            }
        }
        
        function deleteSearch(){
            var search = document.querySelector('#search_input')
            var result =  document.querySelector('.results-box')
            search.value = ''
            result.classList.add('d-none')
            btnIconSearch.style.background=`url(http://bizweb.dktcdn.net/100/438/408/themes/890667/assets/icon_search.svg) center center no-repeat`;
            
        }
        
        function genHtmlHistorySearch() {
            $('.result-search-sidebar').html('');
            var historySearch = JSON.parse(localStorage.getItem("view_key"))	
            if( historySearch != null  ){
                if(historySearch.length  > 0 ){
                    $('.result-search-sidebar').append(`<div class="tim_kiem_gan_day ">
                <h6>
                    Tìm kiếm gần đây 
                </h6>
                <ul class="list_history">

                </ul>
            </div>`)	
                    var count = 0;
                    for(let i=0; i < historySearch.length; i++){
                        console.log('alo', historySearch[i])
                        count++
                        $('.list_history').append(`<li onclick="submitForm('${historySearch[i].name}')"><a class="key_item resertSearch">${historySearch[i].name.length > 50 ? historySearch[i].name.slice(0, 50) + "... ": historySearch[i].name }</a></li>`)
                        if(count == 3) break
                    }

            }



                }
                $('.result-search-sidebar').append(`<div class="tin_noi_bat">
                <h6>
                    Tìm kiếm nổi bật
                </h6>
                <ul>
                    <li onclick="submitForm('Áo khoác nữ')">
                        <a class="key_item resertSearch">Áo khoác nữ</a>
                    </li>
                    <li onclick="submitForm('Áo khoác nam')">
                        <a class="key_item resertSearch">Áo khoác nam</a>
                    </li>
                    <li onclick="submitForm('Áo polo')">
                        <a class="key_item resertSearch">Áo polo</a>
                    </li>
                </ul>
            </div>`)
                
                
                
            $(".key_item").on('click', function(e) {
                    console.log(e)
                    e.preventDefault();
                    $(this).addClass('active');
            })

        }
        
        function submitForm (text){
                    var getAllKeySearch = JSON.parse(localStorage.getItem("view_key"))
                    var search = document.querySelector('#search_input')
                    
                    console.log(getAllKeySearch)
                    
                    search.value = text
                    document.querySelector('#btn_search').style.backgroundColor= "#FCAF17";
                    var keySearch = {
                        name: text
                    }
                    if(getAllKeySearch != null ){
                        getAllKeySearch = getAllKeySearch.filter(current => current.name != text)
                        getAllKeySearch.unshift(keySearch)
                        localStorage.setItem("view_key", JSON.stringify(getAllKeySearch));
                    }
                    else{
                        var historySearch = []
                        historySearch.unshift(keySearch)
                        localStorage.setItem("view_key", JSON.stringify(historySearch));
                    }
                    document.querySelector('#btn_search').click()
                }
        
        var submitSearch  = document.querySelector('.theme-header-search-form')

        submitSearch.addEventListener('submit', function(e){
            var notElement = $('.note ')
            if(notElement.hasClass('notfound')){
                    e.preventDefault();
            $('.search_sidebar ').css('transform',`translateX(0)`);
                return
            }

            document.querySelector('#btn_search').click()
        })
                

        setTimeout(function(){
            window.scroll({
                top: 0,
                behavior: 'auto',
            });	
        }, 500);

    </script>
    