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
                        <a class="image_thumb" href="{{$urlGroup}}" title="{{$product->sale_off}}">
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