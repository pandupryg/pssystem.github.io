@extends('template1')

@section('content1')
<div class="container mb-5" style="min-height: 60vh">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card mb-5">
                <div class="card-header">Add New Brand</div>
                <div class="card-body">
                    
                    <form action="/addNewBrand/addNewBrandVal" method="POST">
                        {{ csrf_field() }} 
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Brand Name</label>
                            <div class="col-md-6">
                                <input type="text" name="brand_name" class="form-control"> 
                            </div>
                        </div>
                       
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Brand Image</label>
                            <div class="file-field">
                                <div class="btn btn-rounded purple-gradient btn-sm float-left ml-2">
                                  <input type="file" name="photo">
                                </div>
                            </div>
                        </div> 

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

                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Add New Brand
                            </button>
                        </div>
                    </form>
                </div>     
            </div>
        </div>
    </div>
</div>

</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection