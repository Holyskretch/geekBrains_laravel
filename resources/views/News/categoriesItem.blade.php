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
            <h2 class="font-italic blog-main-item-title font-weight-bold">Новости в категории : {{$category->categoryName}} </h2>
            <br><hr>
        @foreach($category->news as $n)
                <div class="blog-main-item">
                    <h3 class="font-italic blog-main-item-title">{{$n->title}}</h3>
                    <p class="font-italic blog-main-item-title"> {{$n->summary}}</p>
                    <span class="font-italic news-time">@if(!is_null($n->updated_at)) {{ $n->updated_at->format('d-m-Y H:i') }}
                        @else {{ $n->created_at->format('d-m-Y H:i') }}  @endif</span>
                    <a href="{{route('news.news', ['news'=> $n])}}" class="blog-main-item-btn">Read full</a>
                </div>

        @endforeach
        </div>
@endsection
