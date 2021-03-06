<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Блог - двухколоночный макет блога с пользовательской навигацией, заголовком и содержанием.">

    <title>@section('title')@show</title>
    <link rel="shortcut icon" href="/public/img/newspaper.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">

    <!-- Favicons -->
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('blog.css')}}" rel="stylesheet">

</head>

<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center header">
            <div class="menu">
                <a href="{{route('index')}}" class="p-2 text-muted">Main</a>
                <a href="{{route('form.feedback')}}" class="p-2 text-muted">Feedback</a>
                <a href="{{route('form.uploading')}}" class="p-2 text-muted">Uploading</a>

                <div class="login-menu">
                    @if(!Auth::check())
                        <a href="{{route('login')}}" class="p-2 text-muted">Log In</a>
                        <a href="{{route('register')}}" class="p-2 text-muted">Registration</a>
                    @else
                        <a href="{{route('account')}}" class="p-2 text-muted">Personal account <span class="user-name">({{ Auth::user()->name }})</span></a>
                        <a href="{{route('logout')}}" class="p-2 text-muted">Log Out</a>
                    @endif
                    @if(Auth::user()['name'] == 'admin')
                        <a href="{{route('admin')}}" class="p-2 text-muted">For Admin</a>
                    @endif
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @if(isset($categories))
            @foreach($categories as $c)
                <a href="{{route('news.categoriesItem', ['slug'=> $c->slug])}}" class="p-2 text-muted">{{$c->categoryName}}</a>
            @endforeach
            @endif
        </nav>
    </div>
    <x-top-news></x-top-news>

</div>

<main role="main" class="container">
    <div class="row">
        @yield('content')
        <x-sidebar></x-sidebar>

    </div><!-- /.row -->

</main><!-- /.container -->

<x-footer></x-footer>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
