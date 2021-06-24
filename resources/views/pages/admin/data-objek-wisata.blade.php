@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Objek Wisata</h1>
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambahModal">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
    </button>
  </div>

  <div class="row">

    <div class="col">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-responsive-sm text-center text-nowrap">
            <thead class="thead-light">
              <tr>
                <th scope="col">Objek Wisata</th>
                <th scope="col">Alamat</th>
                <th scope="col" width="110px">Jarak</th>
                <th scope="col" width="110px">Gambar</th>
                <th scope="col" width="110px">Populer</th>
                <th scope="col" width="150px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
                <tr>
                  <td>{{ $item->nama_wisata }}</td>
                  <td>Desa {{ $item->alamat }}</td>
                  <td>{{ $item->jarak }} Km</td>
                  <td>{{ $item->galeri->count() }}</td>
                  <td><i class="{{ $item->populer == 1 ? 'far fa-check-circle text-success' : '' }}"></i></td>
                  <td>
                    <a href="{{ Route('data-objek-wisata.show', $item->id_wisata) }}" class="btn btn-primary btn-sm">
                      <i class="far fa-eye"></i>
                      detail
                    </a>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal-{{ $item->id_wisata }}">
                      <i class="far fa-edit"></i>
                      Ubah
                    </button>
                  </td>
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

<!-- Modal tambah data -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Objek Wisata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('data-objek-wisata.store') }}" method="POST">
        @csrf
        <div class="modal-body">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_wisata">Objek Wisata</label>
              <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" required>
            </div>
            <div class="form-group col-md-6">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="lokasi">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
            <div class="form-group col-md-6">
              <label for="jarak">Jarak (Km)</label>
              <input type="number" class="form-control" id="jarak" name="jarak" required>
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" placeholder="Tuliskan tentang tempat wisata ini" id="deskripsi" name="deskripsi" required rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="kendaraan">Kendaraan</label>
            <textarea class="form-control" id="kendaraan" name="kendaraan" required rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="retribusi">Retribusi</label>
            <textarea class="form-control" id="retribusi" name="retribusi" required rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="makanan">Makanan</label>
            <textarea class="form-control" id="makanan" name="makanan" required rows="2"></textarea>
          </div>
          <div class="from-group">
            <div class="form-check">
              <input type="hidden" name="populer" value="0">
              <input class="form-check-input" type="checkbox" id="populer" name="populer" value="1">
              <label class="form-check-label" for="populer">Tambahkan sebagai <b>Wisata Populer</b></label>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit data -->
@foreach ($items as $edit)
<div class="modal fade" id="editModal-{{ $edit->id_wisata }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Ubah Objek Wisata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('data-objek-wisata.update', $edit->id_wisata) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_wisata">Objek Wisata</label>
              <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" required value="{{ $edit->nama_wisata }}">
            </div>
            <div class="form-group col-md-6">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required value="{{ $edit->alamat }}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="lokasi">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi" required value="{{ $edit->lokasi }}">
            </div>
            <div class="form-group col-md-6">
              <label for="jarak">Jarak (Km)</label>
              <input type="number" class="form-control" id="jarak" name="jarak" required value="{{ $edit->jarak }}">
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" placeholder="Tuliskan tentang tempat wisata ini" id="deskripsi" name="deskripsi" required rows="5">{{ $edit->deskripsi }}</textarea>
          </div>
          <div class="form-group">
            <label for="kendaraan">Kendaraan</label>
            <textarea class="form-control" id="kendaraan" name="kendaraan" required rows="2">{{ $edit->kendaraan }}</textarea>
          </div>
          <div class="form-group">
            <label for="retribusi">Retribusi</label>
            <textarea class="form-control" id="retribusi" name="retribusi" required rows="2">{{ $edit->retribusi }}</textarea>
          </div>
          <div class="form-group">
            <label for="makanan">Makanan</label>
            <textarea class="form-control" id="makanan" name="makanan" required rows="2">{{ $edit->makanan }}</textarea>
          </div>
          <div class="from-group">
            <div class="form-check">
              <input type="hidden" name="populer" value="0">
              <input class="form-check-input" type="checkbox" id="populer-{{ $edit->id_wisata }}" name="populer" value="1" {{ $edit->populer == 1 ? 'checked' : '' }}>
              <label class="form-check-label" for="populer-{{ $edit->id_wisata }}">Wisata Populer</label>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

@endsection