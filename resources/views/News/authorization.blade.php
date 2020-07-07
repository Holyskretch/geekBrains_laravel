@extends('layouts.app')

@section('title')
    @parent Authorization
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <form action="#">
            <input type="text" name="login" placeholder="login" class="form-control"><br>
            <input type="password"  name="password" placeholder="password" class="form-control"><br>
            <input type="submit" value="Register" class="btn btn-success">
        </form>
    </div>
@endsection
