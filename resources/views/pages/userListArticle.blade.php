@extends('template')

@section('content')
<div class = "container" style="min-height: 100vh">
    <div class="row">
        <h3 class="font-weight-bold mr-2">ARTIKEL </h3>
        <p class="font-weight-normal mb-1 mr-3">PS SYSTEM</p>
    </div>
    
   
    <a href="/">Home /</a><a href="/userListArticle"> Artikel</a>
    <br><br>
        
    @foreach ($article as $ar)
          <div class="row mb-5">
              <a href="/userArticleDetail/{{ $ar->id }}"><img class="card-img-top" style="width: 15rem; height:10rem"
                src="{{ asset('upload/phone/'. $ar->photo) }}" alt=""></a>

              <div class="col">
                  <h3 class="text-left">{{ $ar->title_article}}</h3>
                    <br>
                  <p class="text-sm-justify">{{ $ar->small_desc_article}}</p>
              </div>            
          </div>
    @endforeach

    </div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection