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
        <livewire:counter />
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Notifikasi saran masuk
        </h6>        
        <livewire:notifikasi />
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