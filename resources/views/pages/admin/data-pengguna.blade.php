@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
  </div>

  <div class="row">

    <div class="col">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-responsive-sm text-center text-nowrap">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->alamat }}</td>
                  <td>{{ $item->email }}</td>
                </tr>
              @empty
                <tr>
                  <th colspan="10" class="text-center align-middle" height="100px">
                    Data Kosong
                  </th>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

</div>

@endsection

@push('addon-script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable( {
        language: {
          search: "",
          searchPlaceholder: "Cari...",
          zeroRecords: "Data tidak ditemukan"
        },
        paging:  false,
        info: false,

        dom: '<lf<t>ip>'
      });
    });
  </script>
@endpush