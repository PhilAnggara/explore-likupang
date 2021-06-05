@extends('layouts.home')
@section('title', 'Kenal Likupang')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid shadow-lg">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ url("frontend/images/slider/slider-1.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ url("frontend/images/slider/slider-2.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ url("frontend/images/slider/slider-3.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ url("frontend/images/slider/slider-4.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ url("frontend/images/slider/slider-5.jpg") }}" class="d-block w-100" alt="...">
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
  <div class="container">
    <h1 class="display-4 text-center animate__animated animate__fadeInUp animate__fast">
      Pengenalan Objek Wisata <br />
      Wilayah Likupang Timur
    </h1>
    <div class="row mt-4 justify-content-center animate__animated animate__fadeInUp">
      <form class="form-inline" action="{{ route('objek-wisata') }}">
        <input name="cari" class="form-control" type="search" placeholder="Cari..." aria-label="Search" autofocus />
        <button class="btn btn-info my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </div>
</div>
<!-- End of jumbotron -->

<!-- Populer -->
<section class="populer">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2>Wisata Populer</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      @foreach ($items as $item)
        <div class="col-sm-3 col-6">
          <div class="card text-center d-flex flex-column h-scale" style="background-image: url('{{ $item->galeri->count() ? Storage::url($item->galeri->first()->gambar) : '' }}');">
            <div class="text-uppercase">
              <p class="travel-location">{{ $item->alamat }}</p>
              <p class="travel-name">{{ $item->nama_wisata }}</p>
            </div>
            <div class="travel-button mt-auto">
              <a href="{{ Route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                Lihat Detail
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- End of populer -->
@endsection

@push('addon-script')
  <script>

  </script>
@endpush