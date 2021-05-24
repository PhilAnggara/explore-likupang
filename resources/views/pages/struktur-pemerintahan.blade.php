@extends('layouts.app')
@section('title', 'Explore Likupang')

@section('content')
<main>
  <div class="container animate__animated animate__fadeInUp animate__faster">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h1>Struktur Pemerintahan</h1>
            <div class="text-center">
              <img class="struktur-lg" src="frontend/images/struktur-lg.png" alt="">
              <img class="struktur-sm" src="frontend/images/struktur-sm.png" alt="">
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