@extends('admin.adminka')
@section('main_content')


    <h3>Просмотр категории</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <th> Id категории</th>
        <th> Название категории</th>
        <th>Краткое описание</th>
        <th>Дата создания</th>
        <th> Редактирование</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at}}</td>
                <td>
                    <a href="{{action('AdminCategoryController@edit',$category)}}" class="btn btn-small btn-default">Редактировать категорию</a>

                </td>
            </tr>

        </tbody>
    </table>
@endsection