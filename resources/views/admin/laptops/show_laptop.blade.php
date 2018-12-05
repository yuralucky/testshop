@extends('admin.adminka')
@section('main_content')


    <h3>Просмотр ноутбука</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id</td>
        {{--<td>Изображение</td>--}}
        <td> Название</td>
        <td> Описание</td>
        <td>Цена</td>
        <td>Редактирование</td>
        <td>Удалить</td>
        </thead>
        <tbody>
        <tr>
            <td>{{$laptop->id}}</td>
            <td>{{$laptop->name}}</td>
            <td>{{$laptop->description}}</td>
            <td>{{$laptop->price}}</td>

            <td>
                <a href="{{action('AdminLaptopController@edit',$laptop->id)}}"
                   class="btn btn-small btn-success">Редактировать товар</a>
            </td>
            <td>
                {!! Form::open(['action'=>['AdminLaptopController@destroy',$laptop->id],'method'=>'DELETE']) !!}

                {!! Form::submit('&times;',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>

        </tbody>
    </table>
@endsection