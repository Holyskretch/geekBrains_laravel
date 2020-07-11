@extends('layouts.app')

@section('title')
    @parent
        @foreach($categories as $c)
            @if($categoryId == $c->category_id)
                    Category/{{$c->categoryName}}
            @endif
        @endforeach
@endsection

@section('content')
        <div class="col-md-8">
        @foreach($news as $n)
            @if($n->category_id == $categoryId)
                <div class="blog-main-item">
                    <h3 class="font-italic blog-main-item-title">{{$n->title}}</h3>
                    <p class="font-italic blog-main-item-title"> {{$n->summary}}</p>
                    <a href="{{route('news.news', ['id'=> $n->news_id])}}" class="blog-main-item-btn">Read full</a>
                </div>
            @endif
        @endforeach
        </div>
@endsection
