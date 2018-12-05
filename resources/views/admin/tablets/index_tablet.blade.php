@extends('admin.adminka')
@section('main_content')
    <h3>Show all tablets</h3>
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
        @foreach($tablets as $tablet)
            <tr>
                <td>{{$tablet->id}}</td>
                <td><img src="{{asset('image/'.$tablet->image)}}" style="width:50px;height: 50px " alt=""></td>
                <td>{{$tablet->name}}</td>
                <td>{{$tablet->description}}</td>
                <td>{{$tablet->price}}</td>
                <td>
                    <a href="{{action('AdminTabletController@show',$tablet->id)}}"><i class="fa fa-eye fa-2x"></i> </a>
                    <a href="{{action('AdminTabletController@edit',$tablet->id)}}"><i class="fa fa-edit fa-2x"></i> </a>
                </td>
                <td>
                    {!! Form::open(['action'=>['AdminTabletController@destroy',$tablet->id],'method'=>'DELETE']) !!}

                    {!! Form::submit('&times;',['class'=>'btn']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <a href="{{action('AdminTabletController@create')}}" class="btn btn-danger btn-block">Add new tablet</a>
        </tfoot>
    </table>
@endsection