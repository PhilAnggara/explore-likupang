<div wire:poll=updateInfo>
  <div class="row">

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Objek Wisata</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $wisata }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Saran Masuk (Hari Ini)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $saran_hari }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comment-dots fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Saran Masuk (Bulan Ini)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $saran_bulan }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Pengunjung Online</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Pengunjung (Hari Ini)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
