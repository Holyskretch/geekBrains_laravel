@extends('layouts.app')

@section('title')
    @parent Main
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>

        <div class="blog-post">
            @foreach($news as $n)
                    <div class="blog-main-item">
                        <h3 class="font-italic blog-main-item-title">{{$n->title}}</h3>
                        <p class="font-italic blog-main-item-title"> {{$n->summary}}</p>
                        <span class="font-italic news-time">{{$n->created_at}}</span>
                        <a href="{{route('news.news', ['id'=> $n->news_id])}}" class="blog-main-item-btn">Read full</a>
                    </div>
            @endforeach
        </div>


        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@endsection
