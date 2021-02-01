@extends('template1')

@section('content1')
<div class="container mb-5" style="min-height: 100vh">
<div class="d-flex justify-content-center mt-5">
    
        <div class="col-mr-5">
            <img class="card-img-top" style="width: 25rem; height:20rem"
                src="{{ asset('upload/phone/' . $article->photo) }}" alt="">
        </div> 
    

<div class="col-md-6">
    <div class="lib-row lib-header">
        <form action="/editArticleVal/{{$article->id}}" method="POST"> 
            {{ csrf_field() }}          
            {{method_field('PUT')}}   
            
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">Title Article</label>
                    <div class="col-md-6">
                        <input type="text" name="title_article" class="form-control" value="{{ $article->title_article }}" > 
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">Description Article</label>
                    <div class="col-md-6">
                        <input type="text" name="description_article" class="form-control" value="{{ $article->description_article }}" > 
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">Small Description Article</label>
                    <div class="col-md-6">
                        <input type="text" name="small_desc_article" class="form-control" value="{{ $article->small_desc_article }}" > 
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">Article Image</label>
                    <div class="file-field">
                        <div class="btn btn-rounded purple-gradient btn-sm float-left ml-2">
                        <input type="file" name="photo">
                        </div>
                    </div>
                </div> 
            
                
                    
                
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
                    <input type="submit" class="btn btn-success" value="Edit"> 
                </div>
                
            </div>
        </form>
    
        </div>
</div>
</div>
</div>
@endsection