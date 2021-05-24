@extends('layouts.log')
@section('title', 'Daftar - Explore Likupang')

@section('content')
<section class="login">

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center text-primary">Buat Akun</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-label-group">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama" required autofocus>
                <label for="name">Nama</label>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
              <div class="form-label-group">
                <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" required>
                <label for="alamat">Alamat</label>
                @error('alamat')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                <label for="email">Email</label>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              
              <div class="form-label-group">
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
                <label for="password-confirm">Konfirmasi password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Daftar</button>
              <a class="d-block text-center mt-2" href="{{ url('login') }}">Masuk</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection

@push('addon-script')
  <script>

  </script>
@endpush