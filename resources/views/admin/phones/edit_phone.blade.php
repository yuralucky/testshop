@extends('admin.adminka')
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">Редактирование товара</h3>
                {!! Form::open(['method'=>'PATCH','action'=>['AdminPhoneController@update',$phone->id]]) !!}

                <div class="form-group">
                    {!! Form::label('Название товара','Введите название товара') !!}
                    {!! Form::text('name',$phone->name,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Описание','Введите краткое описание') !!}
                    {!! Form::text('description',$phone->description,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Цена','Введите цену') !!}
                    {!! Form::number('price',$phone->price,['class'=>'form-control']) !!}
                </div>

                {{Form::submit('Изменить товар',['class'=>'btn btn-primary btn-block'])}}
                {!! Form::close() !!}
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection