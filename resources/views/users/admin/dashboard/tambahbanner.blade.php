@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah data</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
            </div>
        </div>
    </div>
    <div class="card-body">
         <form action="{{url('/')}}/admin/dashboard/tbanner" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                  {{-- <div class="mb-3">
                    <label for="urutan" class="form-label">Urutan</label>
                    <input type="text" class="form-control" id="urutan" name="urutan" >
                  </div>
                  <div class="mb-3">
                    <label for="user_id" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" >
                  </div> --}}
                <label for="gambar" class="form-label" @error('gambar') is-invalid @enderror>Input Gambar</label>
                @error('gambar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <input class="form-control" type="file" id="gambar" name="gambar">
              </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </form>

          {{-- slider --}}
          
    </div>
</div>

@endsection