<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/public/style.css">
</head>
<body>
<div class="container">
    <header>
        <nav>
            <a href="{{route('index')}}">Main</a>
            <a href="{{route('news.authorization')}}">Authorization</a>
            <a href="{{route('admin')}}">Admin</a>
        </nav>
        <div class="logo">
            <a href="{{route('index')}}">
                <img src="/public/img/News_icon.png" alt="newsIcon" width="50px" height="50px">
                <h3 class="headerTitle">A.S.B. news portal for portfolio.</h3>
            </a>
        </div>
    </header>
    <main>
        <div class="mainBlock">
            <h1>News categories</h1>
            @foreach($news as $n)
                    <a href="{{route('news.categoriesItem', ['c'=> $n->id])}}" class="links">{{$n->id}}</a>
            @endforeach
        </div>
    </main>
    <footer>
        <span class="footerText">All rights reserved Geekbrains &copy;</span>
    </footer>
</div>
</body>
</html>
