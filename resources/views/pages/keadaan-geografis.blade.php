@extends('layouts.app')
@section('title', 'Kenal Likupang')

@section('content')
<main>
  <div class="container animate__animated animate__fadeInUp animate__faster animate__faster">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h1 class="text-center">Keadaan Geografis</h1>
            <hr>
            <p class="nama-desa mt-4 text-justify">
              &emsp;Kecamatan Likupang Timur adalah salah satu Kecamatan di kabupaten Minahasa Utara, tepatnya di bagian utara pantai Minahasa Utara, merupakan jazirah bagian Utara dari Pulau Sulawesi, wilayahnya terbagi atas tiga bagian yaitu Daerah Pesisir Pantai, Daratan dan Pulau-pulau. Jarak ibu kota Kecamatan Likupang Timur Ke Ibu Kota Kabupaenn Minahasa Utara (Airmadidi) sekitar 29 Km dan Ke Ibu Kota Provinsi (Manado) sekitar 46 Km.
              <br><br>
              &emsp;Menurut letaknya, Kecamatan Likupang Timur berbatasan dengan : <br>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">
                    Sebelah Utara
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">
                    Sebelah Timur
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">
                    Sebelah Selatan
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="false">
                    Sebelah barat
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Sangihe Talaud</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/sangihe.png') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/talaud.png') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Sangihe Talaud, adalah sebuah kepualauan di barat laut pulau Sulawesi, Kabupaten Kepulauan Sangihe memiliki luas mencapai 11.863,58 km2 terdiri dari Lautan 11.126,61 km2 dan Daratan 736,97 km2. Ibu kota berkedudukan di Tahuna secara keseluruhan jumlah pulau yang ada di kepulauan ini berjumlah 105 pulau dan posisinya terletak di ujung utara Sulawesi dengan berbatasan dengan Pulau Mindanao (Republik Filipina). 
                        <br><br>
                        Pada Tahun 2002 Kabupaten Kepulauan Sangihe dimekarkan (pada saat itu masih Kabupaten Kepulauan Sangihe dan Talaud) menjadi 2 Kabupaten berdasarkan Undang-Undang Nomor 5 Tahun 2002, yaitu Kabupaten Kepulauan Sangihe dan Kabupaten Kepulauan Talaud. Pemekaran kembali dilakukan di Kabupaten Induk (Kabupaten Sangihe) menjadi Kabupaten Kepulauan Sangihe dan Kabupaten Kepulauan Siau Tagulandang Biaro (SITARO) pada Tahun 2007 sesuai Undang-Undang Nomor 15 Tahun 2007 tanggal 2 januari 2007
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Kota Bitung</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/bitung-1.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/bitung-2.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Kota Bitung adalah salah satu kota di provinsi Sulawesi Utara. Kota ini memiliki perkembangan yang cepat karena terdapat pelabuhan laut yang mendorong percepatan pembangunan. Kota Bitung terletak di timur laut Tanah Minahasa.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Likupang Selatan</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/likupang-selatan-1.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/likupang-selatan-2.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Likupang Selatan adalah sebuah kecamatan di Kabupaten Minahasa Utara, Sulawesi Utara, Indonesia.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Likupang Barat</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/likupang-barat-1.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/geografis/likupang-barat-2.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Likupang Barat adalah sebuah kecamatan di Kabupaten Minahasa Utara, Sulawesi Utara, Indonesia.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <br> &emsp;Luas Wilayah Kecamatan Likupang Timur adalah 290,841 km<sup>2</sup>. Musim panas terjadi pada bulan Maret sampai bulan Agustus, sedangkan musim hujan disertai angin barat dan timur terjadi pada bulan September sampai dengan bulan Februari setiap tahun. Suhu minimum terjadi pada musim penghujan dengan suhu minimum rata-rata 20 &#8451; dan suhu maksimum terjadi pada musim kemarau dengan suhu maksimum rata-rata 30 &#8451;, sedangkan curah hujan reta-rata 177 mm / tahun.
              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('addon-style')
  <style>
    img {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>
@endpush
@push('addon-script')
  <script>

  </script>
@endpush