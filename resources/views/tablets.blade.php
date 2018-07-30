@extends('layouts._layout')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right"
                                                          aria-hidden="true"></i>phones</a></li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Main Brands</h5>
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
                                        @foreach($tablets as $tablet)
                                            <div class="col-4">

                                                <div class="card my-1">
                                                    <div class="card-header">
                                                        <a href="{{action('MainController@single',$tablet->id)}}">
                                                            <img src="{{asset('image/note1.jpeg')}}" alt="" class="img-fluid" style="">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$tablet->name}}</h5>
                                                        <p class="card-text">{{$tablet->description}}</p>
                                                        <a href="#" class="btn btn-">Add shopping card</a>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>

                                        @endforeach
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
