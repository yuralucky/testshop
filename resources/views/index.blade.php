@extends('layouts._layout')
@section('content')
    @include('layouts.carousel')
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 text-align-center">Hello</h1>
        <p class="leader">
            Assign responsive-friendly margin or padding values to an element or a subset of its sides with shorthand
            classes. Includes support for individual properties, all properties, and vertical and horizontal properties.
            Classes are built from a default Sass map ranging from .25rem to 3rem
        </p>
    </div>


    <nav>
        <div class=" border-top text-center ">
            <a href="#" class="btn">Сортировать по названию</a>
            <a href="#" class="btn">Сортировать по цене</a>
            <a href="#" class="btn">Сортировать по популярности</a>
        </div>

    </nav>
    <hr>

    <div class="container">
        <div class="row">

                @foreach($devices as $device)
                    <div class="col-4 ">
                        <div class="card mb-4 text-center">
                            <div class="card-header text-center">{{$device->name}}</div>

                            <div class="card-body">
                                <img src="{{asset('image/'.$device->path_to_image.'.png')}}" alt=""
                                     class="card-img-top max-h">
                                <ul class="list-unstyled">
                                    <li><b>Категория</b></li>
                                    <li>Количество страниц</li>
                                    <li>{{$device->year_of_made}}</li>
                                    <li>Издательство</li>
                                </ul>
                                <hr>
                                <h3>$ {{$device->price}}</h3>
                            </div>
                            <div class="footer">
                                <a href="#" class="btn btn-block btn-primary">Купить</a>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>
@endsection
