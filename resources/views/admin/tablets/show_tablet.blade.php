@extends('admin.adminka')
@section('main_content')


    <h3>Просмотр категории</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id</td>
        {{--<td>Изображение</td>--}}
        <td> Название</td>
        <td> Описание</td>
        <td>Цена</td>
        {{--<td> Вес</td>--}}
        {{--<td>ОП</td>--}}
        {{--<td>Процессор</td>--}}
        {{--<td>Год выпуска</td>--}}
        {{--<td>№категории</td>--}}
        {{--<td>Добавлен</td>--}}
        <td>Редактирование</td>
        <td>Удалить</td>
        </thead>
        <tbody>
        <tr>
            <td>{{$tablet->id}}</td>
            <td>{{$tablet->name}}</td>
            <td>{{$tablet->description}}</td>
            <td>{{$tablet->price}}</td>
            <td>
                <a href="{{action('AdminTabletController@edit',$tablet->id)}}"
                   class="btn btn-small btn-success">Редактировать товар</a>
            </td>
            <td>
                {!! Form::open(['action'=>['AdminTabletController@destroy',$tablet->id],'method'=>'DELETE']) !!}

                {!! Form::submit('&times;',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>

        </tbody>
    </table>
@endsection