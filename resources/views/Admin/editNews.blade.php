@extends('layouts.admin')

@section('title')
    @parent Admin/editNews
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h1 class="pb-4 mb-4 font-italic border-bottom">Редактирование новости № {{$news->id}}</h1>
        <br>
        <form method="post" action="{{ route('news.update', ['news' => $news->id]) }}">
            @method('PUT')
            @csrf
            <p>Заголовок: <br><input type="text" name="title" value="{{ $news->title  }}" class="form-control"> </p>
            @if($errors->has('title'))
                <div class="alert alert-danger">
                    @foreach($errors->get('title') as $error)
                        <p>">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <p>Краткое описание:<br><input type="text" name="summary" class="form-control" value="{{ $news->summary }}"> </p>
            @if($errors->has('summary'))
                <div class="alert alert-danger">
                    @foreach($errors->get('summary') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <p>Полное описание:<br><input type="text" name="text" class="form-control" value="{{ $news->text }}"> </p>
            @if($errors->has('text'))
                <div class="alert alert-danger">
                    @foreach($errors->get('text') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <button type="submit" class="btn btn-success">Редактировать</button>
        </form>
        <br><br>
        <a href="{{route('news.destroy', ['news'=> $news])}}" class="btn btn-success">Удалить новость</a>
    </div>
@endsection
