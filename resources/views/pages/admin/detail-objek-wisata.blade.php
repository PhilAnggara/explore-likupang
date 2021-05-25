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
          <div class="card border-left-prim shadow h-100 py-2">
            <div class="card-body">
              {{ $item->deskripsi }}
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

<!-- Modal tambah data -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="custom-file">
            <input type="hidden" name="id_wisata" value="{{ $item->id_wisata }}">
            <input type="file" class="custom-file-input" id="gambar" name="gambar">
            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@push('addon-script')
  <script>
    $(document).on('change', '.custom-file-input', function (event) {
      $(this).next('.custom-file-label').html(event.target.files[0].name);
    })
  </script>
@endpush