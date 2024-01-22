@extends('page.partials.layout')

@section('title', 'Trang chủ')

@section('content')

@push('home-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
@endpush
<section id="slider">
    <!--slider-->

    <div class="container">


        @include('partials.message')

        <div class="row">

            <div class="col-sm-12">

                <div id="slider-carousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>AMIBAKESHOP, </span> chất lượng hơn số lượng</h1>
                                <h2>Thưởng thức, đẹp mắt, tận tâm</h2>
                                <p>AMIBAKESHOP, chỉ cần bạn quan tâm tôi sẽ cho bạn yêu thích</p>
                                <button type="button" class="btn btn-default get">Vào ngay</button>
                            </div>
                            <div class="col-sm-6">
                                @if(!empty($slides->image))
                                
                                <img src="data:image;base64,{{$slides->image}}" style="margin-left: 100px;"
                                    width="400px" height="400px" class="girl img-responsive" alt="" />
                                @endif
                            </div>
                        </div>
                        @foreach ($slides1 as $slide)
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>AMIBAKESHOP, </span> chất lượng hơn số lượng</h1>
                                <h2>Thưởng thức, đẹp mắt, tận tâm</h2>
                                <p>AMIBAKESHOP, chỉ cần bạn quan tâm tôi sẽ cho bạn yêu thích</p>
                                <button type="button" class="btn btn-default get">Vào ngay</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="data:image;base64,{{$slide->image}}" style="margin-left: 100px;"
                                    width="400px" height="400px" class="girl img-responsive" alt="" />
                                {{-- <img src="images/home/pricing.png" class="pricing" alt="" /> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>
<!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Loại sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach ($types as $type)

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('categoryDetail', $type->slug)}}">{{ $type->name }}</a></h4>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <!--/category-products-->

                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Sản phẩm</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <span class="pull-right">Số lượng
                                    </span>Tên sản phẩm
                                </li>
                            </ul>
                            @foreach ($products as $product)
                            <ul class="nav nav-pills nav-stacked">

                                <li><a href="{{ route('productdetail', $product->id) }}">
                                        <span class="pull-right">{{ $product->amount }}
                                        </span>{{ $product->name }}
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <?php $i = 0 ;?>
                    <h2 class="title text-center">Danh sách sản phẩm</h2>
                    @foreach ($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper" style="margin-bottom: 10px">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ route('productdetail', $product->id) }}">
                                        @if($product->amount > 0)
                                        <img src="data:image;base64,{{$product->image}}" alt="" height="180px" /></a>
                                    @else
                                    <img src="data:image;base64,{{$product->image}}" alt="" height="180px"
                                        style="-webkit-filter: blur(2px);" /></a>
                                    @endif

                                    {{-- <form action="{{ route('AddShoppingCart', $product->id) }}" method="GET">
                                    @csrf --}}
                                    @if($product->amount > 0)
                                    <h2>{{ number_format($product->price) }} VND</h2>

                                    <input type="hidden" value="{{ $product->amount }}"
                                        name="check_stock">

                                    <a onclick="AddCartPost({{ $product->id }})"
                                        class=" btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>

                                    @else

                                    <h2><span style="color:red">Hết hàng</span> <br>
                                        <span
                                            style="color: #b2b2b2; text-decoration: line-through">{{ number_format($product->price) }}
                                            VND
                                        </span>
                                    </h2>

                                    @endif
                                    {{-- </form> --}}
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <?php $i++?>
                    @endforeach
                </div>
                <!--features_items-->
                <div class="wrap-show-advance-info-box style-1 has-countdown">
                    <h3 class="title-box">Sản phẩm mới nhất</h3>
                    <br>
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false">
                       @if ($products->count() > 0 )
                       @foreach($products as $product)
                       <div class="product product-style-2 equal-elem ">
                          <div class="product-thumnail">
                            <a href="{{ route('productdetail', $product->id) }}">
                                @if($product->sum('amount') > 0)
                                <img src="data:image;base64,{{$product->image}}" alt="" style="width:153px; height:180px"  /></a>
                            @else
                            <img src="data:image;base64,{{$product->image}}" alt=""
                                style="-webkit-filter: blur(2px);width:153px; height:180px" /></a>
                            @endif
                             <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                             </div>
                             <div class="wrap-btn">
                                <a href="" class="function-link">quick view</a>
                             </div>
                          </div>
                          <div class="product-info">
                             <a href="" class="product-name"><span>{{$product->name}}</span></a>
                             <div class="wrap-price"><ins><p class="product-price">{{ number_format($product->price) }}
                                VND</p></div>
                          </div>
                       </div>
                       @endforeach
                       @else
                       <h4>Oops, No Product Found !</h4>
                       @endif
                    </div>
                 </div>
                <!--/category-tab-->
                <!--/recommended_items-->
               
            </div>
        </div>
    </div>
</section>
@endsection
@push('home-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/home_js.js"></script>
@endpush