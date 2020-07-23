@extends('layouts.admin')

@section('title')
    @parent Admin/allCategories
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        @foreach($categories as $c)
            <h3 class="font-italic blog-main-item-title">{{$c->categoryName}}</h3>
            <p class="font-italic blog-main-item-title">{{$c->slug}}</p>
            <a href="{{route('categories.edit', ['category'=> $c])}}" class="blog-main-item-btn">Edit</a>
            <br>
        @endforeach
    </div>
@endsection
