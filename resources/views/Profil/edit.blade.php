@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Profil</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">

                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('/profil/'.$profil->id)}}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="Jenis" name="Jenis" value="{{ $profil->jenis }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" >{{ $profil->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection