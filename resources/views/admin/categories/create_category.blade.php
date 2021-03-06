@extends('admin.adminka')
@section('main_content')

    <h3>Create new category</h3>
    {!! Form::open(['action'=>'AdminCategoryController@store']) !!}

    <div class="form-group">
        {!! Form::label('Название категории','Введите название категории') !!}
        {!! Form::text('category_name','',['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('Описание','Введите краткое описание категории') !!}
        {!! Form::text('description','',['class'=>'form-control']) !!}
    </div>

    {{Form::submit('Создать новую категорию',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection