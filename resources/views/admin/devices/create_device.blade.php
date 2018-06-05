@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">Новый товар</h3>
                {!! Form::open(['action'=>'AdminDeviceController@store']) !!}

                <div class="form-group">
                    {!! Form::label('Название товара','Введите название товара') !!}
                    {!! Form::text('name','',['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Описание','Введите краткое описание') !!}
                    {!! Form::text('description','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Путь к изображению','Введите путь') !!}
                    {!! Form::text('path_to_image','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Цена','Введите цену') !!}
                    {!! Form::number('price','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Вес','Введите вес') !!}
                    {!! Form::number('weight','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('memory','Введите ОП') !!}
                    {!! Form::number('memory','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Частота процессора','Введите частоту') !!}
                    {!! Form::number('CPU','',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Категория','Введите номер категории') !!}
                    {!! Form::text('category','',['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Год выпуска','Введите год') !!}
                    {!! Form::number('year_of_made','',['class'=>'form-control']) !!}
                </div>

                {{Form::submit('Создать новый товар',['class'=>'btn btn-primary btn-block'])}}
                {!! Form::close() !!}
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection