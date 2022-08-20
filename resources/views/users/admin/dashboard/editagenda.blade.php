@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Agenda</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">

                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('/admin/dashboard/update/'.$agenda->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label class="form-label">Judul Agenda</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ $agenda->nama }}">
                </div>
                {{-- <div class="mb-3">
                  <label  class="form-label">konten</label>
                  <input type="text" class="form-control" id="status" name="status" value="{{ $agenda->status }}">
                </div> --}}
                <label for="body" class="form-label">Body</label>
                <div class="form-group">
                  {{-- <textarea name="body" class="form-control summernote" value="" required> --}}
                    <textarea name="status"class="form-control summernote" id="status" >{{ $agenda->status }}</textarea>
                </div>
                {{-- <div class="mb-3">
                  <label class="form-label">user_id</label>
                  <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $agenda->user_id }}">
                </div> --}}
                <div class="mb-3">
                  <label  class="form-label">Tanggal Pelaksanaan</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $agenda->tanggal }}">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
        </div>
    </div>

@endsection