@extends('template1')

@section('content1')

<div class="container mb-5">
<div class="d-flex justify-content-center mt-5">
                    
    <div class="col-mr-5">
        <img class="card-img-top" style="width: 20rem; height:20rem"
            src="{{ asset('upload/phone/' . $phone->photo) }}" alt="">
    </div>

    
    <div class="col-md-6">
        <div class="lib-row lib-header">
            <form action="/updatePhoneVal/{{$phone->id}}" method="POST">
                {{ csrf_field() }}         
                {{method_field('PUT')}} 
            
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">Brand</label><br>
                <div class="col-md-6">
                    <select class="form-control" id="exampleFormControlSelect1" name="brand_id">
                       
                            <option value="{{$phone->brand_id}}">{{$phone->Brand->brand_name}}</option>
                       
                    </select>
                </div>
                
            </div>
            
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">Type Name</label>
                <div class="col-md-6">
                    <input type="text" name="type_name" class="form-control" value="{{ $phone->type_name }}" > 
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">Phone Image</label>
                <div class="file-field">
                    <div class="btn btn-rounded purple-gradient btn-sm float-left ml-2">
                      <input type="file" name="photo">
                    </div>
                </div>
            </div> 
            <br><br>
            
           
        

            {{-- code laravel untuk menampilkan alert apabila terdapat error --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group row">
                <div class="form-group ml-3">
                    <input type="submit" class="btn btn-success" value="Update"> 
                    <a href="/updatePhoneDetail/{{ $phone->id }}" class="btn btn-success" style="color: white">Update Phone Detail</a>
                </div>
                  
            </div>
            
           
        </form>
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