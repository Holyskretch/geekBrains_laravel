@extends('layouts.admin')

@section('title')
    @parent Admin/Edit User
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h1 class="pb-4 mb-4 font-italic border-bottom blog-main-item-title">Редактирование профиля пользователя : {{ $user->name}}</h1>

        <form method="post" action="{{ route('users.update', ['user' => $user->id]) }}" class="user-form">
            @method('PUT')
            @csrf
                <div>
                    <b>Роль пользователя :</b><br>
                    <select name="is_admin" class="is-admin">
                        <option value="0" selected>Не админ</option>
                        <option value="1">Админ</option>
                    </select>
                </div><br>
                <button type="submit" class="btn btn-success">Изменить роль</button>
        </form>
        <br><br>
        <a href="{{route('users.destroy', ['user'=> $user])}}" class="btn btn-success">Удалить пользователя</a>
    </div>
@endsection
