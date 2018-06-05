@extends('admin.layouts.app_admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">Редактирование товара</h3>
                {!! Form::model($device,['method'=>'PATCH','action'=>['AdminDeviceController@update',$device->id]]) !!}

                <div class="form-group">
                    {!! Form::label('Название товара','Введите название товара') !!}
                    {!! Form::text('name',$device->name,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Описание','Введите краткое описание') !!}
                    {!! Form::text('description',$device->description,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Путь к изображению','Введите путь') !!}
                    {!! Form::text('path_to_image',$device->path_to_image,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Цена','Введите цену') !!}
                    {!! Form::number('price',$device->price,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Вес','Введите вес') !!}
                    {!! Form::number('weight',$device->weight,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('memory','Введите ОП') !!}
                    {!! Form::number('memory',$device->memory,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Частота процессора','Введите частоту') !!}
                    {!! Form::number('CPU',$device->CPU,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Категория','Введите номер категории') !!}
                    {!! Form::text('category',$device->category,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Год выпуска','Введите год') !!}
                    {!! Form::number('year_of_made',$device->year_of_made,['class'=>'form-control']) !!}
                </div>

                {{Form::submit('Изменить товар',['class'=>'btn btn-primary btn-block'])}}
                {!! Form::close() !!}
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection