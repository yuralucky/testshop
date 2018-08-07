@extends('admin.adminka')
@section('main_content')
    <h3>All users</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id </td>
        <td> Имя</td>
        <td> Почта</td>

        <td>Редактирование</td>
        <td>Удаление</td>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>

                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>

                    {{--<a href="{{action('AdminLaptopController@show',$laptop->id)}}"><i class="fa fa-eye fa-2x" ></i>  </a>--}}
                    {{--<a href="{{action('AdminLaptopController@edit',$laptop->id)}}"><i class="fa fa-edit fa-2x" ></i>  </a>--}}
                </td>
                <td>
                    {{--{!! Form::open(['action'=>['AdminLaptopController@destroy',$laptop->id],'method'=>'DELETE']) !!}--}}

                    {!! Form::submit('&times;',['class'=>'btn']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection