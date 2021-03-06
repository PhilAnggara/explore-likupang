@foreach ($item->wahana as $wahana)
<!-- Modal gambar wahana -->
<div class="modal fade" id="gambarWahanaModal-{{ $wahana->id_wahana }}" tabindex="-1" aria-labelledby="gambarWahanaModalLabel" aria-hidden="true">
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
          <div class="col-sm-6 mb-3 mb-sm-0">            
            <img src="{{ Storage::url($wahana->gambara) }}" class="modal-gambar border border-secondary rounded-lg">
          </div>
          <div class="col-sm-6">            
            <img src="{{ Storage::url($wahana->gambarb) }}" class="modal-gambar border border-secondary rounded-lg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@foreach ($item->kegiatan as $kegiatan)
<!-- Modal gambar kegiatan -->
<div class="modal fade" id="gambarKegiatanModal-{{ $kegiatan->id_kegiatan }}" tabindex="-1" aria-labelledby="gambarKegiatanModalLabel" aria-hidden="true">
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
          <div class="col-sm-6 mb-4">            
            <img src="{{ Storage::url($kegiatan->gambara) }}" class="modal-gambar border border-secondary rounded-lg">
          </div>
          <div class="col-sm-6 mb-4">            
            <img src="{{ Storage::url($kegiatan->gambarb) }}" class="modal-gambar border border-secondary rounded-lg">
          </div>
          <div class="col-sm-6 mb-4 mb-sm-0">            
            <img src="{{ Storage::url($kegiatan->gambarc) }}" class="modal-gambar border border-secondary rounded-lg">
          </div>
          <div class="col-sm-6">            
            <img src="{{ Storage::url($kegiatan->gambard) }}" class="modal-gambar border border-secondary rounded-lg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach