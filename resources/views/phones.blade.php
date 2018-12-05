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
                                                <li><a href="/phonesByName"> <span>Sorting By Name</span></a>
                                                <li><a href="/phonesByPrice"> <span>Sorting By Price</span></a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>
                                <hr>
                                <hr>

                                <div class="container">
                                    <div class="row">
                                        @foreach($phones as $phone)
                                            <div class="col-4">

                                                <div class="card my-1">
                                                    <div class="card-header">
                                                        <a href="{{action('MainController@single_phone',$phone->id)}}">
                                                            <img src="{{asset('image/'.$phone->image)}}" alt=""
                                                                 class="img-fluid" style="width: auto;height: 220px">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">{{$phone->name}}</h5>
                                                        <p class="card-text text-center">{{$phone->description}}</p>
                                                        <p class="card-text text-center">{{$phone->price}}</p>
                                                        <a href="#" class="btn btn-dark btn-block">Add shopping card</a>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>

                                        @endforeach
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
