@extends('admin.adminka')
@section('main_content')
    <h3>Show all categories</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <td> Id категории</td>
        <td> Название категории</td>
        <td>Краткое описание</td>
        <td>Дата создания</td>
        <td> Редактирование</td>
        <td>Удаление</td>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at}}</td>
                <td>

                    <a href="{{action('AdminCategoryController@show',$category->id)}}"> <i class="fa fa-eye fa-2x" ></i>                    </a>
                    <a href="{{action('AdminCategoryController@edit',$category->id)}}"> <i class="fa fa-edit fa-2x" ></i>                    </a>
                </td>
                <td>
                    {!! Form::open(['action'=>['AdminCategoryController@destroy',$category->id],'method'=>'DELETE']) !!}

                    {!! Form::submit('&times;',['class'=>'btn ']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <a href="{{action('AdminCategoryController@create')}}" class="btn btn-danger btn-block">Добавить новую
            категорию</a>
        </tfoot>
    </table>
@endsection