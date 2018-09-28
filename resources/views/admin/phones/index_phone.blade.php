@extends('admin.adminka')
@section('main_content')
    <h3>Show all phones</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id </td>
        <td> Название</td>
        <td> Описание</td>
        <td>Цена</td>
        <td>Редактирование</td>
        <td>Удаление</td>
        </thead>
        <tbody>
        @foreach($phones as $phone)
            <tr>
                <td>{{$phone->id}}</td>
                <td>{{$phone->name}}</td>
                <td>{{$phone->description}}</td>
                <td>{{$phone->price}}</td>
                <td>
                    <a href="{{action('AdminPhoneController@show',$phone->id)}}"><i class="fa fa-eye fa-2x" ></i>  </a>
                    <a href="{{action('AdminPhoneController@edit',$phone->id)}}"><i class="fa fa-edit fa-2x" ></i>  </a>
                </td>
                <td>
                    {!! Form::open(['action'=>['AdminPhoneController@destroy',$phone->id],'method'=>'DELETE']) !!}

                    {!! Form::submit('&times;',['class'=>'btn']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <a href="{{action('AdminPhoneController@create')}}" class="btn btn-danger btn-block">Add new phone</a>
        </tfoot>
    </table>
@endsection