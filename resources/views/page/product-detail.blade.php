@extends('page.partials.layout')

@section('title', 'Product-Detail')

@section('content')
@push('detail-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
@endpush
<section>
    <div class="container">

        @include('partials.message')

        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Loại sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        <div class="panel panel-default">

                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach ($category as $categories)
                                        <li><a href="">{{ $categories->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @foreach ($category as $categories)
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <h4 class="panel-title"><a href="{{route('categoryDetail', $categories->slug)}}">{{ $categories->name }}</a></h4>
                                </h4>
                            </div>
                            <div id="men" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach ($products as $product)
                                        @if($product->id_category = $categories->id)
                                        <li><a href="">{{ $product->name }}</a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
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
                                    </span>Sản phẩm
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
                    <!--/brands_products-->
                    <div class="shipping text-center">
                        <!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div>
                    <!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="data:image;base64,{{$id_product->image}}" alt="" />
                            <h3>Sản phẩm</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
								
                            <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                  <div class="item active">
                                    <a href=""><img src="data:image;base64,{{$id_product->image}}" alt="" width="85px" height="85px"></a>
                                    <a href=""><img src="data:image;base64,{{$id_product->image1}}" alt="" width="85px" height="85px"></a>
                                    <a href=""><img src="data:image;base64,{{$id_product->image2}}" alt="" width="85px" height="85px"></a>
                                  </div>
                                  <div class="item ">
                                    <a href=""><img src="data:image;base64,{{$id_product->image}}" alt="" width="85px" height="85px"></a>
                                    <a href=""><img src="data:image;base64,{{$id_product->image1}}" alt="" width="85px" height="85px"></a>
                                    <a href=""><img src="data:image;base64,{{$id_product->image2}}" alt="" width="85px" height="85px"></a>
                                  </div>
                                  <div class="item ">
                                    <a href=""><img src="data:image;base64,{{$id_product->image}}" alt="" width="85px" height="85px"></a>
                                    <a href=""><img src="data:image;base64,{{$id_product->image1}}" alt="" width="85px" height="85px"></a>
                                    <a href=""><img src="data:image;base64,{{$id_product->image2}}" alt="" width="85px" height="85px"></a>
                                  </div>
                                  
                              </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                              <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                              <i class="fa fa-angle-right"></i>
                            </a>
                      </div>
                    </div>
                    <div class="col-sm-7">
                        <input type="hidden" value="{{ $id_product->amount }}">


                        <div class="product-information">
                            <!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />

                            @if($id_product->amount < 1) <h2
                                style='color: white; font-size: 30px; font-weight: bold; border: solid red; max-width: 230px; text-align: center; background: red;'>
                               Hết hàng</h2>

                                <h2>{{ $id_product->name }}</h2>
                                <p><b>Loại sản phẩm:</b> {{ $id_product->category['name'] }}</p>
                                <span>
                                    <span
                                        style="text-decoration: line-through; color: #b2b2b2"><b>Giá sản phẩm:</b>{{ number_format($id_product->price) }}
                                        VND</span>
                                </span>
                                @else
                                <h2>{{ $id_product->name }}</h2>
                                <p><b>Loại sản phẩm: </b> {{ $id_product->category['name'] }}</p>

                                    <span style="margin-top:0px !important"><b>Giá sản phẩm: </b>{{ number_format($id_product->price) }}
                                        VND</span>
                                {{-- <div style="margin-top: 10px;">
                                @if(Auth::user())
                                    @if($id_product->amount > 0)
                                    <a href="{{ route('productdetail', $id_product->id) }}" class="btn btn-default add-to-cart"
                                        style="border: none" href="javascript:"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                                    @else
                                    <a href="javascript:window.location.href=window.location.href"
                                        class="btn primary-btn pd-cart disabled" aria-disabled="true">Chi tiết</a>
                                    @endif
                                @endif
                                </div> --}}
                                <input type="hidden" id="check_stock" name="check_stock"
                                    value="{{ $id_product->amount }}" style="display: flex">
                                <p style="padding-top:0px !important;" id="quantity" name="qty"><b>Số lượng:</b>
                                    {{ $id_product->amount }} sản phẩm</p>
                                <p><b>Status:
                                        @if( $id_product->new == 1)
                                    </b> Mới</p>
                                @else
                                </b> Cũ</p>
                                @endif
                                <p><b>Nhà phân phối:</b> {{ $id_product->producer->name }}</p>
                                {{-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                                alt="" /></a> --}}

                                @endif
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-phone" aria-hidden="true"></i> Gọi ngay
                                  </button>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Gọi AMIBAKESHOP</h5>
                                          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button> --}}
                                        </div>
                                        <div class="modal-body">
                                          <p><i class="fa fa-phone" aria-hidden="true"></i> Liên hệ: 0822175675</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                          <button type="button" class="btn btn-primary" style="margin-top:0px !important">Gọi</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                        </div>
                        {{--  </form>  --}}

                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

                <div class="category-tab shop-details-tab">
                    <!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab" role="tab">Xem sản phẩm</a></li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">Xem chi tiết sản phẩm</a>
                            </li>
                            <li class="active"><a href="#reviews" data-toggle="tab" role="tab">Số lượng comment
                                    ({{$comment !=0 ? count($comment):0 }})</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details">
                            @foreach ($products as $product)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{ route('productdetail', $product->id) }}">
                                                @if($product->sum('amount') > 0)

                                                <img src="data:image;base64,{{$product->image}}" alt="" /></a>
                                            @else
                                            <img src="data:image;base64,{{$product->image}}" alt=""
                                                style="-webkit-filter: blur(2px);" /></a>
                                            @endif
                                            @if($product->sum('amount') > 0)
                                            <h2>{{ $product->price }}</h2>
                                            <a href="{{ route('productdetail', $product->id) }}"
                                                class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Chi tiết</a>
                                            @else

                                            <h2><span style="color:red">Hết hàng</span> <br>
                                                <span
                                                    style="color: #b2b2b2; text-decoration: line-through">{{ number_format($product->price) }}
                                                    VND</span></h2>

                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">
                            <div class="specification-table">
                                <table>

                                    <tr>
                                        <td class="p-catagory">Giá sản phẩm</td>
                                        <td>
                                            <div class="p-price">
                                                    {{ number_format($id_product->price) }} VND
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Số lượng đặt hàng</td>
                                        <td>
                                            <div class="p-stock">{{ $id_product->amount }} trong kho
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="p-catagory">Kích thước</td>
                                        <td>
                                            <div class="p-size"> @foreach ($id_product->size_product as $size)
                                                {{ $size->size->name }} &nbsp;
                                                @endforeach</div>
                                        </td>
                                    </tr> --}}
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade active in" id="reviews">
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                </ul>
                                <img src="data:image;base64,{{$id_product->image}}" style=" aligh:center;width: 60rem;
                                    height: 40rem;" alt="" />
                                <br>
                                <p aligh:"center"><b>Giới thiệu sản phẩm: </b> {!! $id_product->description !!}</p>

                                @if(Auth::user())

                                {{-- {{ $id_product->description }} --}}

                                <div class="container">
                                    @comments(['model' => $id_product])
                                </div>

                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <!--/category-tab-->
                <div class="wrap-show-advance-info-box style-1 has-countdown">
                    <h3 class="title-box">Sản phẩm mới nhất</h3>
                    <br>
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false">
                       @if ($product1->count() > 0 )
                       @foreach($product1 as $product)
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
               

            </div>
        </div>
    </div>
</section>

@endsection

@push('qty')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/home_js.js"></script>
<script>
    $('.equipCatValidation').on('keyup keydown', function(e){
        for(i = 0; i < 100; i++) {
            var availability = $(this).data("id"+i);
            console.log(availability);
            var KeysPressedTrue = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 46, 8, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123].indexOf(e.which) > -1;
            if(!KeysPressedTrue) {
                return false;
            }
            if ($(this).val() > availability) {
                e.preventDefault();
                $(this).val(availability);
            }
        }
    });
    $('.qtyexample').on('keyup keydown', function(e){
        var totalqty = $(this).data("id");
        var KeysPressedTrue = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 46, 8, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123].indexOf(e.which) > -1;
        if(!KeysPressedTrue) {
            return false;
        }
        if ($(this).val() > totalqty) {
            e.preventDefault();
            $(this).val(totalqty);
        }
    });
</script>
<script>
    $(document).ready(function() {
  $('label').click(function() {
    $('label').removeClass('active');
    $(this).addClass('active');
  });
 });
</script>
@endpush
