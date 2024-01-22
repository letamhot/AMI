<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Sản phẩm</h2>
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <?php $i = 0 ;?>

                @foreach ($product1 as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ route('productdetail', $product->id) }}">
                                    @if($product->sum('amount') > 0)
                                    <img src="{{asset(Storage::url($product->image )) }}" alt=""
                                        height="180px" /></a>
                                @else
                                <img src="{{asset(Storage::url($product->image )) }}" alt=""
                                    height="180px" style="-webkit-filter: blur(2px);" /></a>
                                @endif

                                {{-- <form action="{{ route('addCart', $product->id) }}" method="GET">
                                @csrf --}}
                                @if($product->sum('amount') > 0)
                                <h2>{{ number_format($product->price) }} VND</h2>

                                <input type="hidden" value="{{ $product->sum('amount') }}"
                                    name="check_stock">

                                <a href="{{ route('productdetail', $product->id) }}"
                                    class=" btn btn-default add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>

                                @else

                                <h2><span style="color:red">Hết hàng</span> <br>
                                    <span
                                        style="color: #b2b2b2; text-decoration: line-through">{{ number_format($product->price) }}
                                        VND</span></h2>

                                @endif
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++?>

                @endforeach
            </div>

            <div class="item">

                @foreach ($product2 as $item)

                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset(Storage::url($item->image )) }}"
                                    alt="{{ $item->name }}" height="180px"/>
                                <h2>{{ number_format($item->price) }} VND</h2>
                                <a href="{{ route('productdetail', $product->id) }}" class=" btn
                                    btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>