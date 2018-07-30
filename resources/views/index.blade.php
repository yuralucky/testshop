@extends('layouts._layout')
@section('content')

    <!-- Slider -->

    <div class="main_slider" style="background-image:url({{asset('image/ban2.jpg')}})">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <!-- Banner -->

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner_item align-items-center"
                         style="background-image:url({{asset('image/phone1.jpg')}})">
                        <div class="banner_category">
                            <a href="/phones">Phones</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center"
                         style="background-image:url({{asset('image/note1.jpeg')}})">
                        <div class="banner_category">
                            <a href="/laptops">Laptops</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center"
                         style="background-image:url({{asset('image/tablet2.jpeg')}})">
                        <div class="banner_category">
                            <a href="/tablets">Tablets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>


    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row">


                <!-- Slide 1 -->
                @foreach($devices as $device)

                    <div class="col-3">

                        <div class="card my-1">
                            <div class="card-header">
                                <img src="{{asset('image/note1.jpeg')}}" alt="" class="img-fluid" style="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$device->name}}</h5>
                                <p class="card-text">{{$device->description}}</p>
                                <a href="#" class="btn btn-primary">Add shopping card</a>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>

        <!-- Benefit -->





@endsection
