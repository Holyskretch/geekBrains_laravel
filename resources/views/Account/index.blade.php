@extends('layouts.auth')

@section('title')
    @parent Account
@endsection

@section('content')
    @if(session()->has('error'))
        <h3 class="pb-4 mb-4 font-italic border-bottom error"> {{session()->get('error')}}</h3>
    @endif

    <div class="col-md-8 blog-main">
        <h1 class="pb-4 mb-4 font-italic border-bottom">Личный кабинет пользователя {{ Auth::user()->name }}</h1>
        <p>Тут какие то возможности пользователя</p>
    </div>
@endsection
