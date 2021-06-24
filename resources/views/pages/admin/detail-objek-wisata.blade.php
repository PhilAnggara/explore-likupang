@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $item->nama_wisata }}</h1>
    <p class="mb-0 mt-2 font-weight-bold">
      <i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa {{ $item->alamat }}
      <span class="font-italic font-weight-normal">({{ $item->jarak }} Km dari Manado)</span>
    </p>
    @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      </div>
    @endif
  </div>

  <div class="row">

    <div class="col-sm-8 mb-2">
      <div class="row">

        <div class="col-12 mb-3">
          <div class="row mb-2">
            @forelse ($item->galeri as $galeri)
              <div class="col-6 text-right mb-2">
                <img src="{{ Storage::url($galeri->gambar) }}" class="rounded img-thumbnail">
                <form action="{{ Route('galeri.destroy', $galeri->id_gambar) }}" method="POST">
                  @method('delete')
                  @csrf
                  <button class="btn btn-secondary btn-sm rounded-circle">
                    <i class="far fa-trash-alt"></i>
                  </button>
                </form>
              </div>
            @empty
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h1 class="text-center"><i class="far fa-image fa-lg"></i></h1>
                    <h2 class="text-center">Belum ada gambar</h2>
                  </div>
                </div>
              </div>
            @endforelse
          </div>
          <button type="button" class="btn btn-sm btn-info shadow-sm" data-toggle="modal" data-target="#tambahModal">
            <i class="far fa-image fa-sm"></i> Tambah Gambar
          </button>
        </div>

        <div class="col-12">
          <div class="card border-left-prim shadow h-100">
            <div class="card-body p-0">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sekilas</a>
                  <a class="nav-link" id="nav-wahana-tab" data-toggle="tab" href="#nav-wahana" role="tab" aria-controls="nav-wahana" aria-selected="false">Wahana</a>
                  <a class="nav-link" id="nav-kegiatan-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kegiatan" aria-selected="false">Kegiatan</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <!-- Tentang -->
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-dark mb-4"><i class="fas fa-info-circle fa-sm text-info"></i> Tentang wisata</h5>
                      <p class="card-text text-justify">
                        {{ $item->deskripsi }}
                      </p>
                      <p>
                        <b>Kendaraan</b><br>
                        {{ $item->kendaraan ? $item->kendaraan : '-' }}
                      </p>
                      <p>
                        <b>Retribusi</b><br>
                        {{ $item->retribusi ? $item->retribusi : '-' }}
                      </p>
                      <p>
                        <b>Makanan</b><br>
                        {{ $item->makanan ? $item->makanan : '-' }}
                      </p>
                    </div>
                  </div>
                  <!-- End of tentang -->
                </div>
                <div class="tab-pane fade" id="nav-wahana" role="tabpanel" aria-labelledby="nav-wahana-tab">
                  <!-- Wahana -->
                  <div class="card">
                    <div class="card-body">
                      <div class="d-sm-flex align-items-start justify-content-between">
                        <h5 class="card-title text-dark mb-4 d-inline-block"><i class="fas fa-swimmer fa-sm text-info"></i> Wahana yang tersedia</h5>
                        <button type="button" class="btn btn-sm btn-success shadow-sm d-inline-block" data-toggle="modal" data-target="#tambahWahanaModal">
                          <i class="fas fa-plus fa-sm"></i> Tambah Wahana
                        </button>
                      </div>
                      <ul class="list-unstyled">
                        @forelse ($item->wahana as $wahana)
                          <hr class="mt-0 mb-2">
                          <li class="media">
                            <a href="" data-toggle="modal" data-target="#gambarWahanaModal-{{ $wahana->id_wahana }}">
                              <img src="{{ Storage::url($wahana->gambara) }}" height="80px" width="80px" class="mr-3 rounded-lg border border-secondary" alt="...">
                            </a>
                            <div class="media-body">
                              <h5 class="mt-0 mb-1 text-dark">{{ $wahana->nama_wahana }} <small class="float-right text-primary">Rp {{ number_format($wahana->harga, 0, ',', '.') }} / Org</small></h5>
                              <p class="text-muted text-justify">
                                {{ $wahana->deskripsi }}
                              </p>
                            </div>
                          </li>
                        @empty
                          <p class="text-center text-muted">Belum ada wahana</p>
                        @endforelse
                      </ul>
                    </div>
                  </div>
                  <!-- End of wahana -->
                </div>
                <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
                  <!-- Kegiatan -->
                  <div class="card">
                    <div class="card-body">
                      <div class="d-sm-flex align-items-start justify-content-between">
                        <h5 class="card-title text-dark mb-4 d-inline-block"><i class="far fa-calendar-alt fa-sm text-info"></i> Kegiatan Nasional/Internasional</h5>
                        <button type="button" class="btn btn-sm btn-success shadow-sm d-inline-block" data-toggle="modal" data-target="#tambahKegiatanModal">
                          <i class="fas fa-plus fa-sm"></i> Tambah Kegiatan
                        </button>
                      </div>
                      <ul class="list-unstyled">
                        @forelse ($item->kegiatan as $kegiatan)                            
                          <hr class="mt-0 mb-2">
                          <li class="media">
                            <a href="" data-toggle="modal" data-target="#gambarKegiatanModal-{{ $kegiatan->id_kegiatan }}">
                              <img src="{{ Storage::url($kegiatan->gambara) }}" height="80px" width="80px" class="mr-3 rounded-lg border border-secondary" alt="...">
                            </a>
                            <div class="media-body">
                              <p class="mt-0 mb-1 font-weight-bold text-dark">
                                {{ $kegiatan->nama_kegiatan }}
                                <small class="float-right text-secondary">
                                  {{ Carbon\Carbon::parse($kegiatan->tanggal)->isoFormat('D MMMM YYYY') }}
                                </small>
                              </p>
                              <p class="text-muted text-justify">
                                {{ $kegiatan->deskripsi }}
                              </p>
                            </div>
                          </li>
                        @empty
                          <p class="text-center text-muted">Belum ada kegiatan</p>
                        @endforelse
                      </ul>
                    </div>
                  </div>
                  <!-- End of kegiatan -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="col-sm-4 mb-2">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-map-marked-alt fa-sm text-secondary"></i> Lokasi</h5>
          <hr>
          <div class="embed-responsive embed-responsive-1by1">
            {!! $item->lokasi !!}
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

@include('includes.admin.modal-data-wisata')

@push('addon-style')
  <style>
    img {
      object-fit: cover
    }
    .modal-gambar {
      width: 100%;
      height: 100%;
    }
  </style>
@endpush

@endsection
@push('addon-script')
  <script>
    $(document).on('change', '.custom-file-input', function (event) {
      $(this).next('.custom-file-label').html(event.target.files[0].name);
    })
  </script>
@endpush