@extends('layouts.app')
@section('title', 'Explore Likupang')

@section('content')
<main class="animate__animated animate__zoomIn animate__faster">
  <div class="container">
    <div class="row">
      @foreach ($items as $item)
        <div class="col-sm-6">
          <div class="card list-wisata mt-2">
            <div class="card-body shadow">
              <div class="row">
                <a href="{{ Route('detail', $item->slug) }}">
                  <img class="rounded" src="{{ $item->galeri->count() ? Storage::url($item->galeri->first()->gambar) : '' }}">
                </a>
                <div class="d-inline">
                  <h2>{{ $item->nama_wisata }}</h2>
                  <div class="text-center-sm">
                    <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa {{ $item->alamat }}</p>
                    <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> {{ $item->jarak }} Km dari pusat kota Manado</p>
                  </div>
                  <a href="{{ Route('detail', $item->slug) }}" class="btn btn-detail">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</main>
@endsection

@push('addon-script')
  <script>

  </script>
@endpush