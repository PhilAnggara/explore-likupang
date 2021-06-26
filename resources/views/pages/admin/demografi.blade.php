@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Demografi</h1>
  </div>

  <div class="row">

    @if(session('message'))
      <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('message')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    @endif

    <div class="col">
      <div class="card border-left-prim shadow h-100">
        <form action="{{ route('demografi.store') }}" method="post">
          <div class="card-body">
            @csrf

            <textarea name="text" class="form-control" id="text" rows="12" autofocus>{{ $text }}</textarea>
            
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-info">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

</div>

@endsection

@push('addon-script')
  <script>
    
  </script>
@endpush