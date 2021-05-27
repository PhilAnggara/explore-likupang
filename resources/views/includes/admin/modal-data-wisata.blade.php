<!-- Modal tambah gambar -->
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

<!-- Modal tambah wahana -->
<div class="modal fade" id="tambahWahanaModal" tabindex="-1" aria-labelledby="tambahWahanaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahWahanaModalLabel">Tambah Wahana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('wahana.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="nama_wahana">Nama Wahana</label>
            <input type="text" class="form-control" id="nama_wahana" name="nama_wahana" required>
            <input type="hidden" name="id_wisata" value="{{ $item->id_wisata }}">
          </div>
          <div class="form-group">
            <label for="harga">Harga / Orang</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="gambara">Gambar 1</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambara" name="gambara" required>
                <label class="custom-file-label" for="gambara">Pilih Gambar</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="gambarb">Gambar 2</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambarb" name="gambarb" required>
                <label class="custom-file-label" for="gambarb">Pilih Gambar</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" placeholder="Tuliskan tentang wahana ini" id="deskripsi" name="deskripsi" required rows="5"></textarea>
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

<!-- Modal tambah kegiatan -->
<div class="modal fade" id="tambahKegiatanModal" tabindex="-1" aria-labelledby="tambahKegiatanModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahKegiatanModalLabel">Tambah Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
            <input type="hidden" name="id_wisata" value="{{ $item->id_wisata }}">
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="gambara">Gambar 1</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambara" name="gambara" required>
                <label class="custom-file-label" for="gambara">Pilih Gambar</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="gambarb">Gambar 2</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambarb" name="gambarb" required>
                <label class="custom-file-label" for="gambarb">Pilih Gambar</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="gambarc">Gambar 3</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambarc" name="gambarc" required>
                <label class="custom-file-label" for="gambarc">Pilih Gambar</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="gambard">Gambar 4</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambard" name="gambard" required>
                <label class="custom-file-label" for="gambard">Pilih Gambar</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" placeholder="Tuliskan tentang kegiatan ini" id="deskripsi" name="deskripsi" required rows="5"></textarea>
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

<!-- Modal gambar wahana -->
<div class="modal fade" id="gambarWahanaModal" tabindex="-1" aria-labelledby="gambarWahanaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="gambarWahanaModalLabel">Gambar Wahana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">            
            <img src="{{ Storage::url($item->galeri->first()->gambar) }}" class="img-fluid border border-secondary rounded-lg mb-3 mb-sm-0">
          </div>
          <div class="col-sm-6">            
            <img src="{{ Storage::url($item->galeri->last()->gambar) }}" class="img-fluid border border-secondary rounded-lg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal gambar kegiatan -->
<div class="modal fade" id="gambarKegiatanModal" tabindex="-1" aria-labelledby="gambarKegiatanModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="gambarKegiatanModalLabel">Gambar Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">            
            <img src="{{ Storage::url($item->galeri->first()->gambar) }}" class="img-fluid border border-secondary rounded-lg mb-3">
          </div>
          <div class="col-sm-6">            
            <img src="{{ Storage::url($item->galeri->last()->gambar) }}" class="img-fluid border border-secondary rounded-lg mb-3">
          </div>
          <div class="col-sm-6">            
            <img src="{{ Storage::url($item->galeri->last()->gambar) }}" class="img-fluid border border-secondary rounded-lg mb-3 mb-sm-0">
          </div>
          <div class="col-sm-6">            
            <img src="{{ Storage::url($item->galeri->first()->gambar) }}" class="img-fluid border border-secondary rounded-lg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>