@extends('admin.adminka')
@section('main_content')


    <h3>Просмотр категории</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id</td>
        <td>Изображение</td>
        <td> Название</td>
        <td> Описание</td>
        <td>Цена</td>
        {{--<td> Вес</td>--}}
        {{--<td>ОП</td>--}}
        <td>Процессор</td>
        <td>Год выпуска</td>
        <td>№категории</td>
        <td>Добавлен</td>
        <td>Редактирование</td>
        <td>Удалить</td>
        </thead>
        <tbody>
        <tr>
            <td>{{$device->id}}</td>
            <td><img src="{{asset('image/'.$device->path_to_image.'.png')}}" class="img-fluid" style="width:80px;height: 60px" ></td>
            <td>{{$device->name}}</td>
            <td>{{$device->description}}</td>
            <td>{{$device->price}}</td>
            {{--<td>{{$device->weight}}</td>--}}
            {{--<td>{{$device->memory}}</td>--}}
            <td>{{$device->CPU}}</td>
            <td>{{$device->year_of_made}}</td>
            <td>{{$device->category}}</td>
            <td>{{$device->created_at}}</td>
            <td>
                <a href="{{action('AdminDeviceController@edit',$device->id)}}"
                   class="btn btn-small btn-success">Редактировать товар</a>
            </td>
            <td>
                {!! Form::open(['action'=>['AdminDeviceController@destroy',$device->id],'method'=>'DELETE']) !!}

                {!! Form::submit('&times;',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>

        </tbody>
    </table>
@endsection