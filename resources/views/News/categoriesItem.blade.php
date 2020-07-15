@extends('layouts.app')

@section('title')
    @parent
{{--        @foreach($categories as $c)--}}
{{--            @if($categoryId == $c->id)--}}
                    Category/ {{$category->categoryName}}
{{--            @endif--}}
{{--        @endforeach--}}
@endsection

@section('content')
        <div class="col-md-8">
        @foreach($category->news as $n)
                <div class="blog-main-item">
                    <h3 class="font-italic blog-main-item-title">{{$n->title}}</h3>
                    <p class="font-italic blog-main-item-title"> {{$n->summary}}</p>
                    <a href="{{route('news.news', ['news'=> $n])}}" class="blog-main-item-btn">Read full</a>
                </div>

        @endforeach
        </div>
@endsection
