@extends('layouts._layout')
@section('content')
    <div class="container single_product_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$phone->name}}</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>
                                    <li><img src="{{asset('image/'.$phone->image)}}" alt="" ></li>
                                    <li><img src="{{asset('image/'.$phone->image)}}" alt="" ></li>
                                    <li><img src="{{asset('image/'.$phone->image)}}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background" style="background-image:url({{asset('image/'.$phone->image)}})"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2>{{$phone->name}}</h2>
                        <p>{{$phone->description}}</p>
                    </div>
                    <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                        <span class="ti-truck"></span><span>free delivery</span>
                    </div>
                    <div class="original_price">UAH{{$phone->price}}</div>
                    <div class="product_price">UAH{{$phone->price}}</div>
                    <ul class="star_rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    </ul>
                    <div class="product_color">
                        <span>Select Color:</span>
                        <ul>
                            <li style="background: #e54e5d"></li>
                            <li style="background: #252525"></li>
                            <li style="background: #60b3f3"></li>
                        </ul>
                    </div>
                    <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                        <span>Quantity:</span>
                        <div class="quantity_selector">
                            <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            <span id="quantity_value">1</span>
                            <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection