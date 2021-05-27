@php
  $items = App\Models\Saran::orderByDesc('id_saran')->limit(3)->get();
  $counter =  App\Models\Saran::all()->count();

  if ( $counter >= 3 ) {
    $count = '3+';
  } else {
    $count = $counter;
  }
@endphp

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter">{{ $count }}</span>
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Notifikasi saran masuk
        </h6>
        @forelse ($items as $item)
          <a class="dropdown-item d-flex align-items-center" href="{{ Route('saran.index') }}">
            <div class="mr-3">
              <img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name={{ $item->user->name }}" class="rounded-circle float-left" width="40px">
            </div>
            <div>
              <div class="small text-gray-500">
                {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}
              </div>
              <span class="font-weight-bold">{{ Str::limit($item->saran, 50) }}</span>
            </div>
          </a>
        @empty
          <p class="text-center my-5">Belum ada notifikasi</p>
        @endforelse
        @if ( $counter >= 3 )
          <a class="dropdown-item text-center small text-gray-500" href="{{ Route('saran.index') }}">
            Tampilkan Semua
          </a>
        @endif
      </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - Informasi User -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small admin-name">
          Admin
        </span>
      </a>
    </li>

    <!-- Tombol Log Out -->
    <li class="nav-item dropdown no-arrow mx-1">
      <span class="nav-link dropdown-toggle">
        <button class="btn btn-dark btn-sm" type="button" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
        </button>
      </span>
    </li>

  </ul>

</nav>