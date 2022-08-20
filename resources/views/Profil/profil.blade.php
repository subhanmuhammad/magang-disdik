@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">PROFIL</div>
        <div class="card-tools">
            <div class="input-group input-group-sm">
              <a href="{{url('/profil/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah PROFIL</a>
            </div>
        </div>
    </div>


    <div class="card-body col-lg">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp

                @foreach ( $dta  as $row)
                    <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $row['jenis'] }}</td>
                    <td>{{$row['deskripsi']}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ url('/profil/'. $row['id'].'/edit') }}" method="get" class=" btn btn-danger btn-sm">
                                <i class="fa fa-pen"></i>
                            </a>
                        </div>
                        <form action="{{ url('/profil/'.$row['id']) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data.?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-warning btn-sm">
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
@endsection