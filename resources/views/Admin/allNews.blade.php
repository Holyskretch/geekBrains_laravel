@extends('layouts.admin')

@section('title')
    @parent Admin/allNews
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h1 class="pb-4 mb-4 font-italic border-bottom">
            Все новости портала
        </h1>

        <div class="blog-post">
            @foreach($news as $n)
                <div class="blog-main-item">
                    <h3 class="font-italic blog-main-item-title">{{$n->title}}</h3>
                    <p class="font-italic blog-main-item-title"> {{$n->summary}}</p>
                    <span class="font-italic news-time">@if(!is_null($n->updated_at)) {{ $n->updated_at->format('d-m-Y H:i') }}
                        @else {{ $n->created_at->format('d-m-Y H:i') }}  @endif</span>
                    <a href="{{route('news.edit', ['news'=> $n])}}" class="blog-main-item-btn">Edit</a>
                </div>
            @endforeach
        </div>
        <nav class="blog-pagination">
            {!! $news->links() !!}
        </nav>

    </div>
@endsection
