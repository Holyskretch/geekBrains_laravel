@extends('layouts.admin')

@section('title')
    @parent Admin/createCategory
@endsection

@section('content')
        <div class="col-md-8 blog-main">
            <h1>Добавление категории</h1>
            <br>
            <form method="post" action="{{ route('categories.store') }}">
                @csrf
                <p>Название категории: <br><input type="text" name="categoryName" value="{{ old('categoryName') }}" class="form-control"> </p>
                <p>Тег:<br><input type="text" name="slug" class="form-control" value="{{ old('slug') }}"> </p>
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>
        </div>
@endsection
