@extends('layouts.app')

@section('title')
    @parent Uploading
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <form action="{{route('form.uploading')}}" method="post">
            @method('PUT')
            @csrf
            <input type="text" placeholder="Ваше имя" name="name" class="form-control"><br>
            <input type="tel" placeholder="Номер телефона" name="phone" class="form-control"><br>
            <input type="email" placeholder="Ваш email" name="email" class="form-control"><br>
            <textarea type="text" placeholder="Что хотите получить" name="text" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection
