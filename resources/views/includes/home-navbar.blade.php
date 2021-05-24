<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Explore Likupang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link mr-3 text-white active" href="{{ route('home') }}">Beranda</a>
        <a class="nav-link mr-3 text-white" href="{{ route('objek-wisata') }}">Objek Wisata</a>
        <div class="dropdown">
          <a class="nav-link mr-3 text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Informasi Kecamatan
          </a>
          <div class="dropdown-menu mb-2" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{ route('keadaan-geografis') }}">Keadaan Geografis</a>
            <a class="dropdown-item" href="{{ route('demografi') }}">Demografi</a>
            <a class="dropdown-item" href="{{ route('struktur-pemerintahan') }}">Struktur Pemerintahan</a>
          </div>
        </div>
        <a class="nav-link btn btn-primary text-white px-3" href="login.html">MASUK</a>
      </div>
    </div>
  </div>
</nav>