@extends('layouts.app')

@section('title')

    @parent News/{{$news->news_id}}
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h2 class="font-italic news-title">{{$news->title}}</h2>
        <p>{{$news->text}}</p>
        <a href="https://{{$news->sourceName}}/">{{$news->sourceName}}</a>
        <span class="font-italic news-time">{{$news->created_at}}</span>
    </div>
@endsection
<a href="https://geekbrains.ru/">Geekbrains</a>
