@extends('layouts.admin')

@section('title')
    @parent Admin/editCategory
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Редактирование категории : {{$category->categoryName}}</h1>
        <br>
        <form method="post" action="{{ route('categories.update', ['category'=>$category]) }}">
            @method('PUT')
            @csrf
            <p>Название категории: <br><input type="text" name="categoryName" value="{{ old('categoryName') }}" class="form-control"> </p>
            @if($errors->has('categoryName'))
                <div class="alert alert-danger">
                    @foreach($errors->get('categoryName') as $error)
                        <p>">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <p>Тег:<br><input type="text" name="slug" class="form-control" value="{{ old('slug') }}"> </p>
            @if($errors->has('slug'))
                <div class="alert alert-danger">
                    @foreach($errors->get('slug') as $error)
                        <p>">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
