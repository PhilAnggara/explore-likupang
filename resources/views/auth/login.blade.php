@extends('layouts.log')
@section('title', 'Masuk - Explore Likupang')

@section('content')
<section class="login">

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto mt-5">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <div class="text-center">
              <a class="navbar-brand" href="{{ route('home') }}">Explore Likupang</a>
            </div>
            <h5 class="card-title text-center mt-sm-2 text-primary">Masukan Hak Akses Sebagai Admin</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label for="email">Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label for="password">Kata Sandi</label>
              </div>

              <div class="from-label-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">Ingat Saya</label>
                </div>
              </div>

              <hr class="my-4">

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
              {{-- <a class="d-block text-center mt-2 mb-5" href="{{ url('register') }}">Daftar</a> --}}
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