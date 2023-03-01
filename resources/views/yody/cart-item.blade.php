@if (Session()->get('newCart') != "" && count($newCart) != 0)

    <div class="top-cart-content">
        <img style="position: absolute; top: -10px; left: 213px;" src="//bizweb.dktcdn.net/100/438/408/themes/891802/assets/arrow-cart.png?1673503623261">
        <div class="CartHeaderContainer">
        
            <form action="/cart" method="post" novalidate="" class="cart ajaxcart cartheader MultiFile-intercepted">
                <div class="cart-top">
                    <a href="/cart" style="padding: 15px">
                        GIỎ HÀNG CỦA BẠN
                    </a>
                </div>
                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                    @php
                        $totalAll = 0;
                        $totalQuantity = 0;
                    @endphp
                    @foreach ($newCart as $key => $item)
                        @php
                            // var_dump($item);
                            $slug = Str::slug($item['name']);
                            $url = route('yody.detail', ['slug' => $slug, 'id' => $key]);
                            $urlImage = 'storage/templates/yody/images/'.$item['picture'];
                            $total = $item['price'] * $item['quantity'];
                            $totalAll += $total;
                            $totalQuantity += $item['quantity'];
                        @endphp
                        <div class="ajaxcart__row " data-id="{{$key}}">
                            <div class="ajaxcart__product cart_product" data-line="{{$key}}">
                                <a href="{{$url}}" class="ajaxcart__product-image cart_image" title="{{$item['name']}}"><img width="80" height="100" src="{{$urlImage}}" alt="{{$item['name']}}"></a>
                                <div class="grid__item cart_info">
                                    <div class="ajaxcart__product-name-wrapper cart_name" data-gtm-vis-has-fired-31449744_225="1">
                                        <a href="{{$url}}" class="ajaxcart__product-name" title="{{$item['name']}}">{{$item['name']}}</a>
                                        <span class="cart-price">{{number_format($item['price'], 0, ',', '.')}}đ</span>
                                        <span class="ajaxcart__product-meta variant-title">Size: {{$item['size']}}</span>
                                        <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{$key}}"></a>
                                    </div>
                                    
                                    <div class="grid grid-gift">
                                        <div class="grid__item one-half cart_select cart_item_name">
                                            <div class="ajaxcart__qty input-group-btn">
                                                <span class="ajaxcart__product-meta variant-title">Số lượng: {{$item['quantity']}}</span>
                                            </div>
                                        </div>
                                        <div class="grid__item one-half text-right cart_prices">
                                            Tạm tính: <span class="cart-price">{{number_format($total, 0, ',', '.')}}đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                    <div class="ajaxcart__subtotal">
                        <div class="cart__subtotal">
                            <div class="text-right cart__totle">Tổng cộng: <span class="total-price">{{number_format($totalAll, 0, ',', '.')}}đ</span></div>
                        </div>
                    </div>
                    <div class="cart__btn-proceed-checkout-dt">
                        <button onclick="location.href='/cart'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Xem giỏ hàng">Xem giỏ hàng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@else
    <div class="top-cart-content">
        <img style="position: absolute; top: -10px; left: 310px;" src="//bizweb.dktcdn.net/100/438/408/themes/893280/assets/arrow-cart-white.png?1675669129675">
        <div class="CartHeaderContainer">
            <div class="cart--empty-message">
                <img src="//bizweb.dktcdn.net/100/438/408/themes/893280/assets/blank_cart.svg?1675669107801" alt="cart">
                <p>Giỏ hàng của bạn trống</p>
                <span class="clearfix"></span>
                <a class="buy-now" href="{{route('yody.index')}}">Mua ngay</a>
            </div>
        </div>
    </div>
@endif


<script type="text/javascript">
    $(".remove-item-cart").click(function() {
        $(".wrap-popup-confirm-delete").addClass('show');
        var line = $(this).data('line');
        console.log(line);
        $("#product-cart-line").attr("data-line",line);
    })
    
</script>