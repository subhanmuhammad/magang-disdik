@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-header">
    <h1 class="card-title">Agenda</h1>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        <a href="{{url('admin/dashboard')}}/agenda" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Agenda</a>
      </div>
    </div>
  </div>
<div class="card-body col-lg" >
    <div class="container">
        <div class="row">
          <div class="card-body col-lg" >
            <table id="datatable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td>{{ $row['nama'] }}</td>
                  <td>{{$row->tanggal}}</td>
                  <td>
                    <div class="btn-group">
                        <a href="{{ url('/editagenda/'.$row->id) }}" method="get" class=" btn btn-primary btn-sm">
                            <i class="fa fa-pen"></i>
                        </a>
                    </div>
                    {{-- <div class="btn-group">
                        <a href="" class=" btn btn-warning btn-sm">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div> --}}
                    <form action="{{ url('/hapus/'.$row->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data.?')">
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
        </div>
      </div>




      


@endsection