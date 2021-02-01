@extends('template1')

@section('content1')
<div class="container mb-5" style="min-height: 60vh">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card mb-5">
                <div class="card-header">Add New Detail Phone</div>
                <div class="card-body">
                    
                    <form action="/addDetailPhone/addDetailPhoneVal" method="POST">
                        {{ csrf_field() }} 
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">Brand</label>
                            <div class="col-md-6">
                                <select class="form-control" id="exampleFormControlSelect1" name="phone_id">
                                    @foreach ($phone as $ph)
                                        <option value="{{$ph->id}}">{{$ph->type_name}}</option>
                                    @endforeach
                                </select>
                            </div>      
                        </div>
                    

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Color</label>
                            <div class="col-md-6">
                                <input type="text" name="color" class="form-control"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Memory</label>
                            <div class="col-md-6">
                                <input type="number" name="memory" class="form-control"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Storage</label>
                            <div class="col-md-6">
                                <input type="number" name="storage" class="form-control"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Stock</label>
                            <div class="col-md-6">
                                <input type="number" name="stock" class="form-control"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-6">
                                <input type="number" name="price" class="form-control"> 
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
                                Add
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