@extends('admin.adminka')
@section('main_content')
    <h3>Show all Laptop</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id</td>
        <td>Изображение</td>
        <td> Название</td>
        <td> Описание</td>
        <td>Цена</td>
        <td>Редактирование</td>
        <td>Удаление</td>
        </thead>
        <tbody>
        @foreach($laptops as $laptop)
            <tr>
                <td>{{$laptop->id}}</td>
                <td><img src="{{asset('image/'.$laptop->image)}}" style="height: 50px;width: 50px" alt=""></td>
                <td>{{$laptop->name}}</td>
                <td>{{$laptop->description}}</td>
                <td>{{$laptop->price}}</td>
                <td>

                    <a href="{{action('AdminLaptopController@show',$laptop->id)}}"><i class="fa fa-eye fa-2x"></i> </a>
                    <a href="{{action('AdminLaptopController@edit',$laptop->id)}}"><i class="fa fa-edit fa-2x"></i> </a>
                </td>
                <td>
                    {!! Form::open(['action'=>['AdminLaptopController@destroy',$laptop->id],'method'=>'DELETE']) !!}

                    {!! Form::submit('&times;',['class'=>'btn']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <a href="{{action('AdminLaptopController@create')}}" class="btn btn-danger btn-block">Add new laptop</a>
        </tfoot>
    </table>
@endsection