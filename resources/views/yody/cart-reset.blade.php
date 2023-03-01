@if (Session()->get('newCart') != "" && count($newCart) != 0)
    @php
        $totalQuantity = 0;
        $totalAll = 0;
    @endphp
    <form action="/cart" method="post" novalidate="" class="cart ajaxcart cartpage container">
        <div class="row">
            <div class="col-12 col-xl-8 order-1 order-xl-1">
                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                    @foreach (Session()->get('newCart') as $key => $item)
                        @php
                        $totalQuantity += $item['quantity'];
                        @endphp
                    @endforeach
                    <p class="title"><span class="text-uppercase">Giỏ hàng</span><span class="total-cart">(<span class="count_item_pr">{{$totalQuantity}}</span>) Sản phẩm<span></span></span></p>
                    <div class="cart-header-info d-none d-md-flex">
                        <div>Sản phẩm</div>
                        <div>Đơn giá</div>
                        <div>Số lượng</div>
                        <div>Tổng tiền</div>
                    </div>
                    <div class="items-available">
                        @foreach (Session()->get('newCart') as $key => $item)
                        @php
                            $slug = Str::slug($item['name']);
                            $urlProduct = route('yody.detail', ['slug' => $slug, 'id' => $item['product_id']]);
                            $total = $item['price'] * $item['quantity'];
                            $totalAll += $total;
                            $urlPicture = 'storage/templates/yody/images/'.$item['picture'];
                        @endphp
                        <div class="ajaxcart__row cart-item  ">
                            <div class="ajaxcart__product cart_product" data-line="{{$key}}">
                                <a href="{{$urlProduct}}" class="ajaxcart__product-image cart_image" title="{{$item['name']}}"><img src="{{$urlPicture}}" alt="{{$item['name']}}"></a>
                                <div class="grid__item cart_info">
                                    <div class="ajaxcart__product-name-wrapper cart_name">
                                    <a href="{{$urlProduct}}" class="ajaxcart__product-name h4" title="{{$item['name']}}">{{$item['name']}}</a>
                                    <span class="ajaxcart__product-meta variant-title d-none d-md-block">Size: {{$item['size']}}</span>
                                    </div>
                                    <div class="grid grid-price-1">
                                    <div class="grid__item one-half text-center cart_prices">
                                        <span class="cart-price cart-price-red">{{number_format($item['price'], 0, ',', '.')}}đ</span>
                                    </div>
                                    </div>
                                    <div class="grid grid-qty">
                                    <span class="ajaxcart__product-meta variant-title-mobile d-md-none">Size: {{$item['size']}}</span>
                                    <div class="grid__item one-half cart_select">
                                        <div class="ajaxcart__qty input-group-btn">
                                            <div class="grid__item one-half text-center cart_prices d-none d-md-block">
                                                <span class="cart-price">{{$item['quantity']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="grid grid-price grid-price-2">
                                    <div class="grid__item one-half text-center cart_prices d-none d-md-block">
                                        <span class="cart-price">{{number_format($item['price'] * $item['quantity'], 0, ',', '.')}}đ</span>
                                    </div>
                                    <p class="remove-cart"><a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{$key}}"></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="cart-gift-list" class="col-12 col-xl-8 order-2 order-xl-3">
                <div class="CartGiftContainer d-none">
                    <div class="cart_body items">
                        <div class="gift-list-wrapper">
                        <div class="gift-list-header">
                            <div class="d-flex">
                                <div class="gift-list-caption">
                                    Quà tặng
                                </div>
                            </div>
                            <div id="gift-list-message" class="gift-list-message">
                                <b>Tổng giá trị gói quà tặng của bạn là 0đ.</b>
                            </div>
                            <div class="gift-list-note">
                                * Nhân viên tư vấn sẽ liên hệ để giúp bạn chọn màu và kích thước của sản phẩm quà tặng 
                            </div>
                        </div>
                        <div id="eventGiftList" class="item_list_wrapper"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 order-3 order-xl-2">
                <div class="ajaxcart__footer_noti">Thanh toàn đơn hàng của bạn</div>
                <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                    <div class="ajaxcart__subtotal">
                        <div class="cart__subtotal">
                        <div class="cart__col-6">Tổng đơn hàng (Tạm tính) :</div>
                        <div class="text-right cart__totle"><span class="total-price">{{number_format($totalAll, 0, ',', '.')}}đ</span></div>
                        </div>
                    </div>
                    <div class="cart__btn-proceed-checkout-dt">
                        <a href="/pay">
                        <button type="button" class="button btn btn-default cart__btn-proceed-checkout" title="Thanh toán">
                            <span class="text-payment">Thanh toán</span> (<span class="count_item_pr">{{$totalQuantity}}</span>)
                        </button>
                        </a>
                    </div>
                    <div class="wrap-popup-confirm-payment">
                    </div>
                    <div class="popup-confirm-payment">
                        <div class="content">
                        Có sản phẩm đang hết hàng, bạn có muốn tiếp tục mua các sản phẩm còn lại không?
                        </div>
                        <button class="button btn btn-back-to-cart">Xem lại giỏ hàng</button>
                        <button class="button btn btn-go-to-payment">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@else
    <div class="cart--empty-message">
        <img src="//bizweb.dktcdn.net/100/438/408/themes/892444/assets/blank_cart.svg?1673660828664" alt="cart">
        <p>Giỏ hàng của bạn trống</p>
        <span class="clearfix"></span>
        <a class="buy-now" href="/">Mua ngay</a>
    </div>
@endif


{{-- <script type="text/javascript">
    $(".remove-item-cart").click(function() {
        $(".wrap-popup-confirm-delete").addClass('show');
        var line = $(this).data('line');
        console.log(line);
        $("#product-cart-line").attr("data-line",line);
    })
    
</script> --}}