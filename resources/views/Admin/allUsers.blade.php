@extends('layouts.admin')

@section('title')
    @parent Admin/Users
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h1 class="pb-4 mb-4 font-italic border-bottom">Список зарегестрированных пользователей.</h1>
        <div class="blog-post">
            @foreach($users as $u)
                <div class="blog-main-item">
                    <h3 class="font-italic blog-main-item-title">{{$u->name}}</h3>
                    <a href="{{route('users.edit', ['user'=> $u])}}" class="blog-main-item-btn">Edit</a>
                </div>
            @endforeach
        </div>
        <nav class="blog-pagination">
            {!! $users->links() !!}
        </nav>
    </div>
@endsection
