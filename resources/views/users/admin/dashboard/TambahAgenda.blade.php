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
            <form action="{{url('/')}}/admin/dashboard/tagenda" method="post">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Judul Agenda</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                  <label  class="form-label">konten</label>
                  <input type="text" class="form-control" id="status" name="status">
                </div>
               
                
                <div class="mb-3">
                  <label  class="form-label">Tanggal Pelaksanaan</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
        </div>
    </div>

@endsection