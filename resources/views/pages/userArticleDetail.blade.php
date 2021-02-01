@extends('template')


@section('content')
    <br>
  
    <div class="container" style="min-height: 100vh">
        <a href="/">Home / </a><a href="/userListArticle">Artikel</a><span> / {{ $article->title_article}}</span>
        <br><br>
        <div class="col-md">
            <h3 class="text-left">{{ $article->title_article}}</h3>
            <br>
            <img src="{{ asset('upload/phone/'. $article->photo) }}" style="width: 50rem">
            <br><br>
            <p class="text-justify">{{ $article->description_article}}</p>
        </div>
        

    </div>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection