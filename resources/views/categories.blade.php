@extends('layouts._layout')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right"
                                                                   aria-hidden="true"></i>'s</a></li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            @foreach($categories as $category)
                                <li><a href="/{{$category->category_name}}">{{$category->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span>
                                                </li>
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
                                                    <span>Product Name</span></li>
                                            </ul>
                                        </li>

                                    </ul>
                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="page_current">
                                            <span>1</span>
                                            <ul class="page_selection">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                        <div class="page_total"><span>of</span> 3</div>
                                        <div id="next_page" class="page_next"><a href="#"><i
                                                        class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>
                                <hr>
                                <hr>

                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="product_slider_container">
                                                <div class="owl-carousel owl-theme product_slider">


                                                    @foreach($devices as $device)

                                                        <div class="owl-item product_slider_item">
                                                            <div class="product-item">
                                                                <div class="product discount">
                                                                    <div class="product_image">
                                                                        <img src="{{asset('image/note1.jpeg')}}" alt="">
                                                                    </div>
                                                                    <div class="favorite favorite_left"></div>
                                                                    <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                                        <span>-$20</span></div>
                                                                    <div class="product_info">
                                                                        <h6 class="product_name"><a
                                                                                    href="#">{{$device->name}}</a></h6>
                                                                        <div class="product_price">
                                                                            UAH {{$device->price}}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_bottom clearfix">

                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="page_current">
                                            <span>1</span>
                                            <ul class="page_selection">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                        <div class="page_total"><span>of</span> 3</div>
                                        <div id="next_page_1" class="page_next"><a href="#"><i
                                                        class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
