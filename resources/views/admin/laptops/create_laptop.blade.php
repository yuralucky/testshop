@extends('admin.adminka')
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">Новый ноутбук</h3>
                {!! Form::open(['action'=>'AdminLaptopController@store','files'=>true]) !!}
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
                    {!! Form::label('Изображение') !!}
                    {!! Form::file('image',array('form-control')) !!}
                </div>


                {{Form::submit('Создать новый товар',['class'=>'btn btn-primary btn-block'])}}
                {!! Form::close() !!}


            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection