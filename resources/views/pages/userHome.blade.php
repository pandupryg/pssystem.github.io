@extends('template')

@section('content')
<div class="row">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('upload/iklan_samsung.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('upload/iklan_apple.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('upload/iklan_oppo.png') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
</div>

<section id="brands" class="brands">
<div class="container" data-aos="zoom-in">

  <div class="row d-flex align-items-center">
      @foreach ($brand as $br)
      <div class="col-lg-2 col-md-4 col-6">
        <a href="/userPhones/{{$br->id}}"><img src="{{ asset('upload/phone/' . $br->photo) }}" class="img-fluid" alt=""></a>
      </div>
      @endforeach
  </div>

</div>
</section>

<br><br><br>
<div class="container">

  <h3>REKOMENDASI PRODUK</h3>
  <br>

  <div class="container">
    <div class="">
      @foreach ($brand as $br)
     
      <div class="row">
        <h5 class="text-uppercase mr-2">{{$br->brand_name}} | </h5>
        <a href="/userPhones/{{$br->id}}" class="mt-1">LIHAT SEMUA >></a>
      </div>

        <div class="d-flex justify-content-center mt-5">
          <div class="row mr-5">
            @foreach ($phone as $ph)
              @if ($ph->brand_id==$br->id)
              <div class="card mt-2 mb-5 mr-3" style="width: 11rem;">
                <img class="card-img-top" src="{{ asset('upload/phone/'. $ph->photo) }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$ph->type_name}}</p>
                </div>
                <div class="overlay-btn p-1">
                  <a href="/userPhoneDetail/{{ $ph->id }}" class="btn m-auto"><i class="icon-eye-open"></i> Quick View</a>
                  <a href="/login" class="btn m-auto"> Wishlist</a>
                </div> 
              </div>  
              @endif
            @endforeach
          </div>
        </div> 
     
      @endforeach

    </div>
  </div>
</div>
<section id="article-us" class="article-us">
  <div class="container">
    <div class="row">
      <h3 class="font-weight-bold mr-2">ARTIKEL </h3>
      <p class="font-weight-normal mb-1 mr-3">PS SYSTEM | </p>
      <a href="/userListArticle" class="mt-2">LIHAT SEMUA >></a>
      
    </div>
    <div class="row mr-5">
      @foreach ( $article as $ar)
      <div class="col-md-5" data-aos="fade-up">
          <div class="box" >
            <a href="/userArticleDetail/{{ $ar->id }}"><img src="{{ asset('upload/phone/'. $ar->photo) }}" style="width: 20rem"></a>
            <span>{{ $ar->title_article }}</span>
            
          </div>
        
      </div>   
      @endforeach
    </div>

  </div>
</section><!-- End Why Us Section -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).foundation();

    $('.carousel').carousel({
    interval: 2000
    })
</script>



@endsection
