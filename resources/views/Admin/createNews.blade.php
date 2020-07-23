@extends('layouts.admin')

@section('title')
    @parent Admin/createNews
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Добавление новости</h1>
        <br>
        <form method="post" action="{{ route('news.store') }}">
            @csrf
            <p>Заголовок: <br><input type="text" name="title" value="{{ old('title') }}" class="form-control"> </p>
            @if($errors->has('title'))
                <div class="alert alert-danger">
                    @foreach($errors->get('title') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <p>Краткое описание:<br><input type="text" name="summary" class="form-control" value="{{ old('summary') }}"> </p>
            @if($errors->has('summary'))
                <div class="alert alert-danger">
                    @foreach($errors->get('summary') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <p>Полное описание:<br><input type="text" name="text" class="form-control" value="{{ old('text') }}"> </p>
            @if($errors->has('text'))
                <div class="alert alert-danger">
                    @foreach($errors->get('text') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <b>Категории к которым относится новость:</b>
            <div class="form-categories-block">
                @foreach($categories as $c)
                    <p><input type="checkbox" name="categoryId[]" value="{{$c->id}}"> {{$c->categoryName}}</p>
                @endforeach
            </div>

            <div>
                <b>Источник информации :</b><br>
                <select name="sourceId">
                    @foreach($sources as $s)
                        <option value="{{$s->id}}">{{$s->sourceName}}</option>
                    @endforeach
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
@endsection


{{--@if($errors->has('categoryId'))--}}
{{--    <div class="alert alert-danger">--}}
{{--        @foreach($errors->get('categoryId') as $error)--}}
{{--            <p>{{ $error }}</p>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--@endif--}}
