@extends('layouts.app')

@section('title')

    @parent News/{{$news->id}}
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h2 class="font-italic news-title">{{$news->title}}</h2>
        <p>{{$news->text}}</p>
        @foreach($source as $c)
            @if($c->id == $news->id)
                <a href="https://{{$c->sourceName}}/">{{$c->sourceName}}</a>
            @endif
        @endforeach
{{--        <a href="https://{{$source->sourceName}}/">{{$source->sourceName}}</a>--}}
        <span class="font-italic news-time">{{$news->created_at}}</span>
    </div>


@endsection
<a href="https://geekbrains.ru/">Geekbrains</a>
