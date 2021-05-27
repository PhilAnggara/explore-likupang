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