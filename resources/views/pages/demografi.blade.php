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
              <span class="row">
                <span class="col-sm-6 col-7"><b>1.</b>&emsp;Suku Minahasa</span>
                <span class="col-1"> : </span>
                <span class="col-sm-5 col-3">&emsp;35%</span>
              </span>
              <span class="row">
                <span class="col-sm-6 col-7"><b>2.</b>&emsp;Suku Sangihe dan Talaud</span>
                <span class="col-1"> : </span>
                <span class="col-sm-5 col-3">&emsp;50%</span>
              </span>
              <span class="row">
                <span class="col-sm-6 col-7"><b>3.</b>&emsp;Suku lainnya (Gorontalo, Makasar, Bolomong, Jawa)</span>
                <span class="col-1"> : </span>
                <span class="col-sm-5 col-3">&emsp;15%</span>
              </span>
              <br> &emsp;Jumlah penduduk Kecamatan Likupang Timur sebanyak 19.216 jiwa yang terdiri dari laki-laki 9.785 jiwa, perempuan 9.431 jiwa dan 5.720 kepala keluarga. Mata pencarian masyarakat Kecamatan Likupang Timur yaitu: petani/pekebun 35%, nelayan/perikanan 25%, ASN/TNI-POLRI 15%, karyawan swasta 10%, tukang 10% dan lain-lain 5%.
              <br><br> &emsp;Agama yang dianut masyarakat Kecamatan Likupang Timur yaitu kristen protestan 50%, katolik 10%, islam 35% dan lainnya (hindu dan budha) 5%.
            </p>
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