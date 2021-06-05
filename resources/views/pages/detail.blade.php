@extends('layouts.app')
@section('title')
  {{ $item->nama_wisata }} - Kenal Likupang
@endsection

@section('content')
<main>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 mb-2 animate__animated animate__fadeInLeft animate__faster">
        <div class="card shadow">
          <div class="card-body">
            <h1>{{ $item->nama_wisata }}</h1>
            <p class="nama-desa">
              <i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa {{ $item->alamat }}
            </p>
            @if ($item->galeri->count())
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ Storage::url($item->galeri->first()->gambar) }}" class="xzoom" id="xzoom-default"
                    xoriginal="{{ Storage::url($item->galeri->first()->gambar) }}">
                </div>
                <div class="xzoom-thumbs">
                  @foreach ($item->galeri as $galeri)
                    <a href="{{ Storage::url($galeri->gambar) }}">
                      <img src="{{ Storage::url($galeri->gambar) }}" class="xzoom-gallery" width="128"
                        xpreview="{{ Storage::url($galeri->gambar) }}">
                    </a>
                  @endforeach
                </div>
              </div> 
            @else
              <div class="card mb-3">
                <div class="card-body">
                  <h1 class="text-muted text-center"><i class="far fa-image fa-lg"></i></h1>
                  <h2 class="text-muted text-center">Belum ada gambar</h2>
                </div>
              </div>
            @endif
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sekilas</a>
                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Saran</a>
                <a class="nav-link" id="nav-wahana-tab" data-toggle="tab" href="#nav-wahana" role="tab" aria-controls="nav-wahana" aria-selected="false">Wahana</a>
                <a class="nav-link" id="nav-kegiatan-tab" data-toggle="tab" href="#nav-kegiatan" role="tab" aria-controls="nav-kegiatan" aria-selected="false">Kegiatan</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- Tentang -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-info-circle fa-sm text-info"></i> Tentang wisata</h5>
                    <p class="card-text text-justify">
                      {{ $item->deskripsi }}
                    </p>
                  </div>
                </div>
                <!-- End of tentang -->
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card">
                  <!-- Saran -->
                  <div class="card-body">
                    <div class="alert alert-info" role="alert">
                      Saran dari orang-orang yang sudah pernah mengunjungi tempat ini
                    </div>
                    @forelse ($item->saran as $saran)
                      <div class="row">
                        <div class="col-sm-4 mt-2">
                          <img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name={{ $saran->nama }}" alt="" class="rounded-circle float-left mr-3">
                          <h3>{{ $saran->nama }}</h3>
                          <small>
                            <i>{{ Carbon\Carbon::parse($saran->created_at)->diffForHumans() }}</i>
                          </small>
                        </div>
                        <div class="col-sm-8 saran">
                          <p>{{ $saran->saran }}</p>
                        </div>
                      </div><hr>
                    @empty
                      <p class="text-center text-muted">Belum ada saran</p>
                    @endforelse
                    <form action="{{ route('kirim-saran') }}" method="POST">
                      @csrf
                      <div class="input-group mb-2">
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama..." required>
                      </div>
                      <div class="input-group">
                        {{-- <input type="hidden" name="id_user" value="{{ Auth::user()->id }}"> --}}
                        <input type="hidden" name="id_wisata" value="{{ $item->id_wisata }}">
                        <input type="text" name="saran" class="form-control" placeholder="Berikan saran..." required>
                        <div class="input-group-append">
                          {{-- <button class="btn btn-outline-primary" type="submit"><i class="far fa-paper-plane"></i></button> --}}
                          <livewire:kirim-saran />
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- End of saran -->
                </div>
              </div>
              <div class="tab-pane fade" id="nav-wahana" role="tabpanel" aria-labelledby="nav-wahana-tab">
                <!-- Wahana -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-swimmer fa-sm text-info"></i> Wahana yang tersedia</h5>
                    <ul class="list-unstyled">
                      @forelse ($item->wahana as $wahana)
                        <hr>
                        <li class="media">
                          <a href="" data-toggle="modal" data-target="#gambarWahanaModal-{{ $wahana->id_wahana }}">
                              <img src="{{ Storage::url($wahana->gambara) }}" height="80px" width="80px" class="mr-3 rounded-lg border border-secondary" alt="...">
                            </a>
                          <div class="media-body">
                            <h5 class="mt-0 mb-1">{{ $wahana->nama_wahana }} <small class="float-right text-primary">
                              Rp {{ number_format($wahana->harga, 0, ',', '.') }} / Org
                            </small></h5>
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
                    <h5 class="card-title mb-4"><i class="far fa-calendar-alt fa-sm text-info"></i> Kegiatan yang pernah dilakukan disini</h5>
                    <ul class="list-unstyled">
                      @forelse ($item->kegiatan as $kegiatan)
                        <hr>
                        <li class="media">
                          <a href="" data-toggle="modal" data-target="#gambarKegiatanModal-{{ $kegiatan->id_kegiatan }}">
                            <img src="{{ Storage::url($kegiatan->gambara) }}" height="80px" width="80px" class="mr-3 rounded-lg border border-secondary" alt="...">
                          </a>
                          <div class="media-body">
                            <p class="mt-0 mb-1 font-weight-bold">
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
      <div class="col-sm-4 lokasi animate__animated animate__fadeInRight animate__faster">
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
</main>

@include('includes.modal-wisata')

@endsection

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

@push('addon-script')
  <script>

  </script>
@endpush