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