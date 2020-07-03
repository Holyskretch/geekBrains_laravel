@extends('layouts.admin')

@section('title')
    @parent Admin/adding
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <form action="#">
            <input type="text" name="id" placeholder="id"><br>
            <input type="text" name="title" placeholder="title"><br>
            <input type="password"  name="text" placeholder="text"><br>
            <input type="submit" value="Add news">
        </form>
    </div>
@endsection
