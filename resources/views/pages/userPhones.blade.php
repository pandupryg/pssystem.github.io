@extends('template')

@section('content')
<div class="container mt-5" style="min-height: 100vh">

    <h2 class="text-center">{{  $brand->brand_name }}</h2>

    <div class="d-flex justify-content-center mt-5">
        <div class="row mr-5">
            @foreach ($phone as $ph)
            
            <div class="card mt-2 mb-5 mr-3" style="width: 15rem;">
                <a href="/userPhoneDetail/{{ $ph->id }}"><img class="card-img-top" src="{{ asset('upload/phone/' . $ph->photo) }}"
                    alt="Card image cap"></a>
                <div class="card-body" style="background-color:white">
                    <p class="card-text" style="color: black">{{ $ph->type_name }}</p>
                </div>   
               
            </div>
          
            @endforeach
        
        </div>
    </div>

</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
@endsection