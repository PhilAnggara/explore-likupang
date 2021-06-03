@extends('layouts.app')
@section('title', 'Explore Likupang')

@section('content')
<main>
  <div class="container animate__animated animate__fadeInUp animate__faster">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h1>Demografi</h1>
            <p class="nama-desa mt-4 text-justify">
              &emsp;Wilayah Kecamatan Likupang Timur terdiri dari 18 Desa dan 80 Jaga, yakni 14 Desa di daratan, dan 4 Desa di Pulau Bangka. Masyarakat Kecamatan Likupang Timur terdiri dari beberapa suku, yaitu : <br>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">
                    Suku Minahasa
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">
                    Suku Sangihe dan Talaud
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">
                    Suku Lainnya
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Suku Minahasa (35%)</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/demografi/minahasa-1.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/demografi/minahasa-2.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Suku Minahasa adalah kelompok etnis yang berasal dari Semenanjung Minahasa di bagian utara pulau Sulawesi di Indonesia. Wilayah-wilayah administratif tempat bermukim mayoritas orang-orang Minahasa (atau Minahasa Raya) adalah Kabupaten Minahasa, Kabupaten Minahasa Selatan, Kabupaten Minahasa Tenggara, Kabupaten Minahasa Utara, Kota Bitung, Kota Manado, dan Kota Tomohon.
                        <br><br>
                        Seluruh kawasan administratif ini terletak di Provinsi Sulawesi Utara dan suku Minahasa merupakan suku bangsa terbesar di provinsi ini.Hal ini juga yang menyebabkan dalam percakapan awam, orang Minahasa sering kali disamakan dengan sebutan orang Manado yang adalah ibukota Sulawesi Utara. Suku Minahasa merupakan gabungan dari kelompok-kelompok sub-etnis yaitu Bantik, Pasan/Ratahan, Ponosakan, Tombulu, Tondano (Toulour), Tonsawang (Tombatu), Tonsea, dan Tontemboan.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Suku Sangihe dan Talaud (50%)</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/demografi/sangihe-1.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/demografi/sangihe-2.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Suku bangsa Sangihe Talaud, di Provinsi Sulawesi Utara, sejak lama percaya nenek moyang mereka berasal dari Filipina Selatan lewat migrasi ribuan tahun lampau. Bahkan yang terakhir, tokoh Gumansalangi, kulano tua pendiri kedatuan “Tampunganglawo” (Sangihe) disebut sebagai seorang pangeran dari Mindanao, Filipina.
                        <br><br>
                        Orang suku Sangir dan Talaud berasal dari Provinsi Sulawesi Utara. Sebagian besar dari mereka mendiami gugusan kepulauan di bagian utara Sulawesi Utara dan memanjang ke daerah wilayah berbatasan Filipina, negara tetangganya. Kepulauan ini dinamakan kepulauan Sangir dan Talaud atau lebih sering dikenal dengan nama kepulauan Nusa Utara.
                        <br><br>
                        Menurut etimologi, pendapat terbanyak mengatakan bahwa kata Sangir berasal dari kata Zanger dalam bahasa Belanda. Zanger dalam bahasa Indonesia memiliki arti yaitu "penyanyi". Dulu, Belanda memberikan nama ini dengan alasan bahwa orang yang dikenal sebagai suku Sangir sangat menggemari nyanyian atau suka bernyanyi dalam kehidupan sehari-hari.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                  <div class="card shadow-sm">
                    <div class="card-body">
                      <h5 class="card-title">Suku Jawa (15%)</h5>
                      <div class="row mb-3">
                        <div class="col-6">
                          <img src="{{ url('frontend/images/demografi/jawa-1.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                        <div class="col-6">
                          <img src="{{ url('frontend/images/demografi/jawa-2.jpg') }}" class="rounded-lg shadow-sm">
                        </div>
                      </div>
                      <p class="card-text text-justify">
                        Suku Jawa merupakan suku terbesar yang berada di Indonesia. Suku ini terkenal akan tatakrama, lemah lembut, dan sopan. Masyarakatnya tidak hanya berada di Jawa saja, melainkan tersebar ke seluruh pelosok Indonesia. Hal ini karena penduduk Pulau Jawa ikut program transmigrasi saat pemerintahan Orde Baru.
                        <br><br>
                        Kebesaran suku Jawa tak bisa dilepaskan dari sejarahnya yang panjang. Hasil kebudayaan berupa peradaban suku Jawa menjadi salah satu yang paling maju. Hal ini dibuktikan dengan adanya kerajaan-kerajaan adidaya yang berdiri di tanah Jawa beserta beragam warisannya yang masih dapat dilihat hingga saat ini. Misalnya kerajaan Mataram dan Majapahit, serta candi-candi seperti Borobudur atau Prambanan, menjadi bukti besarnya kekuatan yang pernah berjaya di suku Jawa. Selain itu sebagian besar suku Jawa juga masih mempercayai mitos-mitos leluhurnya.
                      </p>
                    </div>
                  </div>
                </div>

              <br> &emsp;Jumlah penduduk Kecamatan Likupang Timur sebanyak 19.216 jiwa yang terdiri dari laki-laki 9.785 jiwa, perempuan 9.431 jiwa dan 5.720 kepala keluarga. Mata pencarian masyarakat Kecamatan Likupang Timur yaitu: petani/pekebun 35%, nelayan/perikanan 25%, ASN/TNI-POLRI 15%, karyawan swasta 10%, tukang 10% dan lain-lain 5%. Agama yang dianut masyarakat Kecamatan Likupang Timur yaitu kristen protestan 50%, katolik 10%, islam 35% dan lainnya (hindu dan budha) 5%.
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