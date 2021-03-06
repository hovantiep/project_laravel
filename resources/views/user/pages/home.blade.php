@extends('user.master')
@section('description','')
@section('content')
        <!-- Slider Start-->
@include('user.blocks.slider')
        <!-- Slider End-->
<!-- Section Start-->
@include('user.blocks.otherdetail')
        <!-- Section End-->
<!-- Featured Product-->
<section id="featured" class="row mt40">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Sản phẩm nổi bật</span><span class="subtext"> Xem sản phẩm nổi bật nhất của chúng tôi</span>
        </h1>
        <ul class="thumbnails">
            @foreach( $featuredProduct as $item)
                <li class="span3">
                    <a class="prdocutname" href="{!! route("chiTietSanPham",[$item->id,$item->alias]) !!}">{!! $item->name !!}</a>

                    <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="{!! route("chiTietSanPham",[$item->id,$item->alias]) !!}"><img alt="" src="{!! url('resources/upload/'.$item->image) !!}"></a>

                        <div class="pricetag">
                            <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>

                            <div class="price">
                                <div class="pricenew">{!! number_format($item->price,0,',','.') !!} Đ</div>
                                <div class="priceold"></div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<!-- Latest Product-->
<section id="latest" class="row">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Sản phẩm mới nhất</span><span class="subtext"> Xem sản phẩm mới nhất của chúng tôi</span>
        </h1>
        <ul class="thumbnails">
            @foreach($latestProduct as $item)
                <li class="span3">
                    <a class="prdocutname" href="{!! route("chiTietSanPham",[$item->id,$item->alias]) !!}">{!! $item->name !!}</a>

                    <div class="thumbnail">
                        <span class="new tooltip-test">New</span>
                        <a href="{!! route("chiTietSanPham",[$item->id,$item->alias]) !!}"><img alt="" src="{!! asset('resources/upload/'.$item->image) !!}"></a>

                        <div class="pricetag">
                            <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>

                            <div class="price">
                                <div class="pricenew">{!! number_format($item->price,0,',','.') !!} Đ</div>
                                <div class="priceold"></div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection