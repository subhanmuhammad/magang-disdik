@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-header">
      <h3 class="card-title">Berita</h3>
      <div class="card-tools">
        <div class="input-group input-group-sm">
          <a href="{{url('admin/dashboard')}}/tambah" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Berita</a>
        </div>
      </div>
    </div>
<div class="card-body col-lg" >
    <table id="datatable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($Berita as $row)
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>
            <img src="{{ asset('public/img/berita/' .$row->id."/thumbnail/1280x720/".$row->gambar) }}" alt="" width="100px">
          </td>
          <td>{{$row->judul}}</td>
          <td>{{ $row->penulis }}</td>
          <td>
            <div class="btn-group">
                <a href="{{ url('/admin/ubah'.$row->id) }}" class=" btn btn-primary btn-sm">
                    <i class="fa fa-pen"></i>
                </a>
            </div>
             <div class="btn-group">
                <a href="{{ url('show/'.$row->id) }}" class=" btn btn-warning btn-sm">
                    <i class="fa fa-eye"></i>
                </a>
            </div> 
            <form action="{{ url('/berita/'.$row->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data.?')">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection