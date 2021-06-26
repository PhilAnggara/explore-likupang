<ul class="navbar-nav bg-gradient-prim sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ Route('home') }}">
    <div class="sidebar-brand-icon">
      <i class="far fa-compass"></i>
    </div>
    <div class="sidebar-brand-text mx-3 mr-5">Kenal Likupang</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('dashboard') }}">
      <i class="fas fa-fw fa-home"></i>
      <span>Beranda</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider mb-0">

  <li class="nav-item {{ Request::is('admin/data-objek-wisata*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('data-objek-wisata.index') }}">
      <i class="fas fa-fw fa-map-marked-alt"></i>
      <span>Objek Wisata</span>
    </a>
  </li>
  <li class="nav-item {{ Request::is('admin/saran') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('saran.index') }}">
      <i class="fas fa-fw fa-comment-alt"></i>
      <span>Saran</span>
    </a>
  </li>

  <li class="nav-item {{ Request::is('admin/informasi-kecamatan*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-info"></i>
      <span>Informasi Kecamatan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Informasi Kecamatan:</h6>
        <a class="collapse-item {{ Request::is('admin/informasi-kecamatan/keadaan-geografis*') ? 'active' : '' }}" href="{{ route('keadaan-geografis.index') }}">
          Keadaan Geografis
        </a>
        <a class="collapse-item {{ Request::is('admin/informasi-kecamatan/demografi*') ? 'active' : '' }}" href="{{ route('demografi.index') }}">
          Demografi
        </a>
        <a class="collapse-item {{ Request::is('admin/informasi-kecamatan/struktur-pemerintahan*') ? 'active' : '' }}" href="{{ route('struktur-pemerintahan.index') }}">
          Struktur Pemerintahan
        </a>
      </div>
    </div>
  </li>
  {{-- <li class="nav-item {{ Request::is('admin/laporan') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('laporan.index') }}">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Laporan</span>
    </a>
  </li> --}}
  {{-- <li class="nav-item {{ Request::is('admin/pengguna') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('pengguna.index') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Pengguna</span>
    </a>
  </li> --}}

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>