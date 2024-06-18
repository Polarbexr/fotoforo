@extends('layouts.app')

@section('content')



<style>
  .carousel-item img {
      object-fit: cover;
      width: 100%;
      max-height: 575px; /* Puedes ajustar esta altura según tus necesidades */
  }
  .carousel-caption h5{
    color: rgb(225, 225, 225);
    font-size: 30px;
    font-weight: 900;
    text-shadow: 1px 1px 1px black;

  }
  .carousel-caption p{
    color: rgb(98, 27, 27);
    font-size: 25px;
    font-weight: 300;
    text-shadow: 1px 1px 1px black;
  }
  
</style>

<div id="carouselExampleCaptions" class="carousel slide px-4" style="width: 100%;" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{asset('img/Default_Pintura_pintor_blanco_y_negro_lienzo_acuarela_arte_bel_3.jpg')}}" class="d-block w-100 img-cover" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/Default_Pintura_pintor_blanco_y_negro_lienzo_acuarela_arte_bel_1.jpg')}}" class="d-block w-100 img-cover" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placehold  er content for the second slide.</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="{{asset('img/Default_Pintura_pintor_blanco_y_negro_lienzo_acuarela_arte_bel_0.jpg')}}" class="d-block w-100 img-cover" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
          </div>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</div>



@endsection
