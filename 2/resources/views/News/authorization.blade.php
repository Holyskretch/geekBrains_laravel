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
        <a href="{{route('index')}}">
            <img src="/public/img/News_icon.png" alt="newsIcon" width="50px" height="50px">
            <h3 class="headerTitle">A.S.B. news portal for portfolio.</h3>
        </a>
    </header>
    <main>
        <form action="#">
            <input type="text" name="login" placeholder="login"><br>
            <input type="password"  name="password" placeholder="password"><br>
            <input type="submit" value="Register">
        </form>
    </main>
    <footer>
        <span class="footerText">All rights reserved Geekbrains &copy;</span>
    </footer>
</div>
</body>
</html>
