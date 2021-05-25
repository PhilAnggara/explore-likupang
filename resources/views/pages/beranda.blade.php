@extends('layouts.home')
@section('title', 'Explore Likupang')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid shadow-lg">
  <div class="container">
    <h1 class="display-4 text-center animate__animated animate__fadeInUp animate__fast">
      Pengenalan Objek Wisata <br />
      Wilayah Likupang Timur
    </h1>
    <div class="row mt-4 justify-content-center animate__animated animate__fadeInUp">
      <form class="form-inline" action="pencarian.html">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" autofocus />
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