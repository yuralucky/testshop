@extends('admin.adminka')
@section('main_content')
    <h3>Show all devices</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id </td>
        <td>Изображение</td>
        <td> Название</td>
        <td> Описание</td>
        <td>Цена</td>

        <td>Год выпуска</td>
        <td>№категории</td>
        <td>Добавлен</td>
        <td>Редактирование</td>
        <td>Удаление</td>
        </thead>
        <tbody>
        @foreach($devices as $device)
            <tr>
                <td>{{$device->id}}</td>
                <td>{{$device->path_to_image}}</td>
                <td>{{$device->name}}</td>
                <td>{{$device->description}}</td>
                <td>{{$device->price}}</td>
                {{--<td>{{$device->weight}}</td>--}}
                {{--<td>{{$device->memory}}</td>--}}
                {{--<td>{{$device->CPU}}</td>--}}
                <td>{{$device->year_of_made}}</td>
                <td>{{$device->category}}</td>
                <td>{{$device->created_at}}</td>
                <td>

                    <a href="{{action('AdminDeviceController@show',$device->id)}}"><i class="fa fa-eye fa-2x" ></i>  </a>
                    <a href="{{action('AdminDeviceController@edit',$device->id)}}"><i class="fa fa-edit fa-2x" ></i>  </a>
                </td>
                <td>
                    {!! Form::open(['action'=>['AdminDeviceController@destroy',$device->id],'method'=>'DELETE']) !!}

                    {!! Form::submit('&times;',['class'=>'btn']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <a href="{{action('AdminDeviceController@create')}}" class="btn btn-danger btn-block">Добавить новый
            товар</a>
        </tfoot>
    </table>
@endsection