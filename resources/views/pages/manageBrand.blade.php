@extends('template1')

@section('content1')
<div class="container">
<div class="d-flex justify-content-center mt-5">
    <div class="row mr-5">
        
        @foreach ($brand as $br)
                <div class="card mt-2 mb-5 mr-5" style="width: 13rem;">
                    
                    <img class="card-img-top" src="{{ asset('upload/phone/' . $br->photo) }}"
                        alt="Card image cap">
                    <div class="card-body w-100" style="background-color:white">
                            <a href="deleteBrand/{{ $br->id }}" class="btn btn-danger w-100 mb-2"
                            style="color: white">Delete Brand</a>
                            
                            
                            <a href="updateBrand/{{ $br->id }}" class="btn btn-primary w-100"
                            style="color: white">Update Brand</a>
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