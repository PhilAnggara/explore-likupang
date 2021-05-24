@extends('layouts.app')
@section('title', 'Explore Likupang')

@section('content')
<main>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 mb-2 animate__animated animate__fadeInLeft animate__faster">
        <div class="card shadow">
          <div class="card-body">
            <h1>Pantai Paal</h1>
            <p class="nama-desa">
              <i class="fas fa-map-marker-alt fa-sm text-danger"></i> Desa Marinsow
            </p>
            <div class="gallery">
              <div class="xzoom-container">
                <img src="frontend/images/pantai-paal-1.JPG" class="xzoom" id="xzoom-default"
                  xoriginal="frontend/images/pantai-paal-1.JPG">
              </div>
              <div class="xzoom-thumbs">
                <a href="frontend/images/pantai-paal-1.JPG">
                  <img src="frontend/images/pantai-paal-1.JPG" class="xzoom-gallery" width="128"
                    xpreview="frontend/images/pantai-paal-1.JPG">
                </a>
                <a href="frontend/images/pantai-paal-2.JPG">
                  <img src="frontend/images/pantai-paal-2.JPG" class="xzoom-gallery" width="128"
                    xpreview="frontend/images/pantai-paal-2.JPG">
                </a>
                <a href="frontend/images/pantai-paal-3.JPG">
                  <img src="frontend/images/pantai-paal-3.JPG" class="xzoom-gallery" width="128"
                    xpreview="frontend/images/pantai-paal-3.JPG">
                </a>
                <a href="frontend/images/pantai-paal-4.JPG">
                  <img src="frontend/images/pantai-paal-4.JPG" class="xzoom-gallery" width="128"
                    xpreview="frontend/images/pantai-paal-4.JPG">
                </a>
              </div>
            </div>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sekilas</a>
                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Saran</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- Tentang -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-info-circle fa-sm text-info"></i> Tentang wisata</h5>
                    <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, dicta! Facilis est dignissimos omnis adipisci laboriosam, veniam sapiente suscipit eveniet quidem alias consectetur quaerat minus nobis quasi necessitatibus expedita culpa similique labore ipsa fugit deleniti aut quibusdam animi. Molestiae velit distinctio perferendis impedit dolores totam rerum, nobis sint veritatis, eos doloribus nulla. Repellendus reprehenderit molestiae tempore facilis illum soluta, voluptatem optio hic, modi veritatis eos commodi iste nisi dolor delectus totam praesentium id eligendi asperiores! Doloremque dignissimos voluptate aut incidunt! Veritatis, tempora! Sapiente vero error amet corporis! Suscipit, aperiam exercitationem? Maxime iure quo voluptatum consectetur veritatis praesentium, cum vero laudantium.</p>
                  </div>
                </div>
                <!-- End of tentang -->
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card">
                  <!-- Saran -->
                  <div class="card-body">
                    <div class="alert alert-info" role="alert">
                      Komentar dari orang-orang yang sudah pernah mengunjungi tempat ini
                    </div>
                    <div class="row">
                      <div class="col-sm-4 mt-2">
                        <img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name=Rudolfo Sombouwadil" alt="" class="rounded-circle float-left mr-3">
                        <h3>Rudolfo Sombouwadil</h3>
                        <small><i>1 minggu lalu</i></small>
                      </div>
                      <div class="col-sm-8 saran">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, nam fugiat. Harum alias quasi cumque.</p>
                      </div>
                    </div><hr>
                    <div class="row">
                      <div class="col-sm-4 mt-2">
                        <img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name=Ticoalu Ambrosius" alt="" class="rounded-circle float-left mr-3">
                        <h3>Ticoalu Ambrosius</h3>
                        <small><i>2 minggu lalu</i></small>
                      </div>
                      <div class="col-sm-8 saran">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis soluta tempore minima veritatis mollitia id excepturi quia facilis odio perspiciatis?</p>
                      </div>
                    </div><hr>
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Berikan saran...">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary" type="submit"><i class="far fa-paper-plane"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- End of saran -->
                </div>
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11280.228508593556!2d125.15575457200369!3d1.650488130793118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287b1bfffffffff%3A0xc6fde198deb15181!2sPantai%20Paal!5e0!3m2!1sid!2sid!4v1620828126882!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('addon-script')
  <script>

  </script>
@endpush