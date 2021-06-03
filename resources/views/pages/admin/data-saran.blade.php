@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Saran Masuk</h1>
  </div>

  <div class="row">

    @foreach ($items as $item)
      <div class="col-12 mb-1">
        <div class="card border-left-prim shadow h-100">
          <div class="card-body py-2">
            <p class="mb-2 font-weight-bold text-secondary">{{ $item->wisata->nama_wisata }}</p>
            <div class="media">
              <img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name={{ $item->nama }}" height="80px" width="80px" class="mr-3 rounded-circle" alt="...">
              <div class="media-body">
                <p class="mt-0 mb-1 font-weight-bold text-primary">
                  {{ $item->nama }}
                  <small class="float-right text-success">
                    {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}
                  </small>
                </p>
                <p class="{{ $loop->iteration <= $unread ? 'font-weight-bold text-dark' : '' }}">
                  {{ $item->saran }}
                </p>
              </div>
            </div>
            <a href="{{ Route('detail',$item->wisata->slug) }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
    @endforeach

  </div>

  <div class="d-flex justify-content-end mt-2">
    {{ $items->links() }}
  </div>

</div>

@endsection