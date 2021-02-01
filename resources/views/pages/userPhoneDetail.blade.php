@extends('template')

@section('content')

<div class="container" style="min-height: 100vh">
    <a href="/">Home </a><span> / {{ $phone->type_name}}</span>
    <div class="d-flex justify-content-center mt-5 mb-5">
        
       
        <div class="col-mr-5">
            <img class="card-img-top" style="width: 20rem; height:20rem"
                src="{{ asset('upload/phone/' . $phone->photo) }}" alt="">
        </div>

        <div class="col-md-6">
            <div class="lib-row lib-header">
                <h1 class="text-dark">{{ $phone->type_name }}</h1> 
                <br>

                <h6 class="text-dark" >STOCK {{ $phoneD->stock }}</h6> 
                
                <p class="text-uppercase">Kapasitas : </p>
                
                <div class="form-check">
                    <label class="form-check-label mt-1">
                        <button type="button" class="btn btn-light">{{ $phoneD->storage }} GB</button>
                    </label>
                </div>
                <br>
                <p class="text-uppercase">Warna : <strong>{{ $phoneD->color}}</strong></p>

                <p class="text-uppercase">Harga :
                    <strong><span>Rp {{ number_format($phoneD->price, 0, ',', '.') }}</span></strong>  
                </p> 

                <div class="row mt-5">
                    <div class="col-md-2">
                        <input type="number" name="quantity" id="inputQuantity" class="form-control">
                    </div>
                    <div class="col-md-3 px-0">
                        <a href="/login"><button type="submit" class="btn btn-primary">Add To Cart</button></a>
                    </div>
                </div>
            </div>   
        </div>
       
    </div>
</div>


<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<script src="{{asset('js/app.js')}}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
@endsection