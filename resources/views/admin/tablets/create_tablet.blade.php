@extends('admin.adminka')
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">New tablet</h3>
                {!! Form::open(['action'=>'AdminTabletController@store','files'=>true]) !!}
                {!! Form::token() !!}
                <div class="form-group">
                    {!! Form::label('Название товара','Введите название товара') !!}
                    {!! Form::text('name','',['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Описание','Введите краткое описание') !!}
                    {!! Form::text('description','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Цена','Введите цену') !!}
                    {!! Form::number('price','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('image') !!}
                    {!! Form::file('image',array('form-control')) !!}

                </div>

                <div class="form-group">
                    {{Form::submit('Add',['class'=>'btn btn-primary btn-block'])}}
                    {!! Form::close() !!}

                </div>


            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection