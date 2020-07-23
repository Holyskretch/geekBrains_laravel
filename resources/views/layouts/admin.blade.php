<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Блог - двухколоночный макет блога с пользовательской навигацией, заголовком и содержанием.">

    <title>@section('title')@show</title>
    <link rel="shortcut icon" href="/public/img/newspaper.png" type="image/png">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">

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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('blog.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div>
                    <a href="{{route('admin')}}" class="p-2 text-muted">Main</a>
                    <a href="{{route('news.index')}}" class="p-2 text-muted">All News</a>
                    <a href="{{route('news.create')}}" class="p-2 text-muted">Create News</a>
                    <a href="{{route('categories.index')}}" class="p-2 text-muted">All Categories</a>
                    <a href="{{route('categories.create')}}" class="p-2 text-muted">Create Category</a>
                    <a href="{{route('users.index')}}" class="p-2 text-muted">Users</a>
                    <a href="{{route('index')}}" class="p-2 text-muted site">Site</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                </div>
            </div>
        </header>

        <main role="main">
                @yield('content')
        </main>
        <x-footer></x-footer>
    </div>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
