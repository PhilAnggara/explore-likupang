@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
  </div>

  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
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

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Pengguna</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Pemasukan (Hari Ini)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 3.000.000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-prim text-uppercase mb-1">Total (Bulan Ini)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 85.000.000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection