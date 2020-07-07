@extends('layouts.app')

@section('title')
    @parent Feedback
@endsection

@section('content')
    <div class="col-md-8 blog-main">

        <form action="{{route('form.feedback')}}" method="post">
            @method('PUT')
            @csrf
            <input type="text" placeholder="Имя пользователя" name="login" class="form-control"><br>
            <textarea type="text" placeholder="Ваш комментарий" name="comment" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection
