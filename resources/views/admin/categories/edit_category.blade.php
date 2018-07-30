@extends('admin.adminka')
@section('main_content')
    <h3>Отредактируйте категорию</h3>
    {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoryController@update',$category->id]]) !!}

    <div class="form-group">
        {!! Form::label('Название категории','Введите название категории') !!}
        {!! Form::text('category_name',$category->category_name,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('Описание','Введите краткое описание категории') !!}
        {!! Form::text('description',$category->description,['class'=>'form-control']) !!}
    </div>

    {{Form::submit('Сохранить изменения категории',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection