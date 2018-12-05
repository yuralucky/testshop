@extends('admin.adminka')
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="text-center">Edit tablet</h3>
                {!! Form::open(['method'=>'PATCH','action'=>['AdminTabletController@update',$tablet->id]]) !!}

                <div class="form-group">
                    {!! Form::label('Название товара','Введите название товара') !!}
                    {!! Form::text('name',$tablet->name,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Описание','Введите краткое описание') !!}
                    {!! Form::text('description',$tablet->description,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Цена','Введите цену') !!}
                    {!! Form::number('price',$tablet->price,['class'=>'form-control']) !!}
                </div>

                {{Form::submit('Edit',['class'=>'btn btn-primary btn-block'])}}
                {!! Form::close() !!}
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection