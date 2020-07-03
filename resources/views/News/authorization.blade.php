@extends('layouts.app')

@section('title')
    @parent Authorization
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <form action="#">
            <input type="text" name="login" placeholder="login"><br>
            <input type="password"  name="password" placeholder="password"><br>
            <input type="submit" value="Register">
        </form>
    </div>
@endsection
