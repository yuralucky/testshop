@extends('admin.adminka')
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">Add Image</h3>
                {!! Form::open(['action'=>'MainController@upload','method'=>'post','files'=>true]) !!}
                {!! Form::token() !!}

                {!! Form::label('image') !!}
                {!! Form::file('image',array('form-control')) !!}


                {{Form::submit('Add',['class'=>'btn btn-primary btn-block'])}}
                {!! Form::close() !!}


            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection