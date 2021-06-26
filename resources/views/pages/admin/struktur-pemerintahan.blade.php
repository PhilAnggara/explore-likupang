@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Struktur Pemerintahan</h1>
  </div>

  <div class="row">

    <div class="col-12 col-sm-6">
      <div class="card border-left-prim shadow h-100">
        <div class="card-header d-flex justify-content-between align-items-center">
          Tampilan Desktop
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ubahDesktopModal">
            <i class="far fa-edit"></i>
            Ubah
          </button>
        </div>
        <div class="card-body">
          <img src="{{ $desktop ? Storage::url($desktop->gambar) : '' }}" class="img-fluid" alt="Gambar desktop">
        </div>
      </div>
    </div>
    
    <div class="col-12 col-sm-6 mt-2 mt-sm-0">
      <div class="card border-left-prim shadow h-100">
        <div class="card-header d-flex justify-content-between align-items-center">
          Tampilan Mobile
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ubahMobileModal">
            <i class="far fa-edit"></i>
            Ubah
          </button>
        </div>
        <div class="card-body">
          <img src="{{ $mobile ? Storage::url($mobile->gambar) : '' }}" class="img-fluid" alt="Gambar mobile">
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Modal ubah gambar desktop -->
<div class="modal fade" id="ubahDesktopModal" tabindex="-1" aria-labelledby="ubahDesktopModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahDesktopModalLabel">Ubah untuk Desktop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('struktur-pemerintahan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="custom-file text-truncate">
            <input type="hidden" name="tipe" value="desktop">
            <input type="file" class="custom-file-input" id="gambar" name="gambar">
            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal ubah gambar mobile -->
<div class="modal fade" id="ubahMobileModal" tabindex="-1" aria-labelledby="ubahMobileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahMobileModalLabel">Ubah untuk Mobile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('struktur-pemerintahan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="custom-file text-truncate">
            <input type="hidden" name="tipe" value="mobile">
            <input type="file" class="custom-file-input" id="gambar" name="gambar">
            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
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