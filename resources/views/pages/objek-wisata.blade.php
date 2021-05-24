@extends('layouts.app')
@section('title', 'Explore Likupang')

@section('content')
<main class="animate__animated animate__zoomIn animate__faster">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/pantai-paal-1.JPG">
              </a>
              <div class="d-inline">
                <h2>Pantai Paal</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Marinsow</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/pantai-pulisan-1.JPG">
              </a>
              <div class="d-inline">
                <h2>Pantai Pulisan</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Pulisan</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/bukit-larata-1.JPG">
              </a>
              <div class="d-inline">
                <h2>Bukit Larata</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Kinunang</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/pantai-kalinaun-1.jpeg">
              </a>
              <div class="d-inline">
                <h2>Pantai Kalinaun</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Kalinaun</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/pantai-kinunang-1.JPG">
              </a>
              <div class="d-inline">
                <h2>Pantai Kinunang</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Kinunang</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/pantai-surabaya-1.JPG">
              </a>
              <div class="d-inline">
                <h2>Pantai Surabaya</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Wineru</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card list-wisata mt-2">
          <div class="card-body shadow">
            <div class="row">
              <a href="detail.html">
                <img class="rounded" src="frontend/images/puncak-pulisan-1.JPG">
              </a>
              <div class="d-inline">
                <h2>Puncak Pulisan</h2>
                <div class="text-center-sm">
                  <p class="alamat"><i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Pulisan</p>
                  <p class="jarak"><i class="fas fa-road fa-sm text-secondary"></i> 40Km dari Manado</p>
                </div>
                <a href="detail.html" class="btn btn-detail">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('addon-script')
  <script>

  </script>
@endpush