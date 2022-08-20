@extends('layouts.admin')

@section('title')
Manajamen Berita | Tambah Berita
@endsection

@section('header-scripts')
<link rel="stylesheet" href="<?=url('/')?>/public/assets/vendor/summernote/summernote-bs4.min.css">
@endsection

@php
function tgl_indo($tanggal){
$bulan = array (
1 => 'Januari',
'Februari',
'Maret',
'April',
'Mei',
'Juni',
'Juli',
'Agustus',
'September',
'Oktober',
'November',
'Desember'
);
$pecahkan = explode('-', $tanggal);
return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
@endphp

@section('content-header')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manajemen Berita</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen</li>
                    <li class="breadcrumb-item"><a href="{{url('manajemen/berita')}}">Berita</a> </li>
                    <li class="breadcrumb-item active">Tambah</li>


                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@endsection

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form id="form_berita" enctype="multipart/form-data" action="{{url('/updateberita/'.$berita->id)}}" method="POST">
                        @method('put')
                        @csrf
                        
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Berita</h3>
                        </div>
                        <div class="card-body ">
                         

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul_berita">Judul Berita</label>
                                        <input class="form-control" name="judul" id="judul"
                                        placeholder="Judul Berita....." required value="{{ $berita->judul }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul_berita">Penulis</label>
                                        <input class="form-control" name="penulis" id="penulis"
                                        placeholder="Penulis....." required value="{{ $berita->penulis }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul_berita">Deskripsi</label>
                                        <input class="form-control" name="deskripsi" id="deskripsi"
                                        placeholder="Deskripsi " required value="{{ $berita->deskripsi }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul_berita">Plain Deskripsi</label>
                                        <input class="form-control" name="plain_deskripsi" id="plain_deskripsi"
                                        placeholder="Plain Deskripsi" required value="{{ $berita->plain_deskripsi }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul_berita">slug</label>
                                        <input class="form-control" name="slug" id="slug" required value="{{ $berita->slug }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="gambar" name="gambar">
                              </div>

                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="body" class="form-label">Body</label>
                                    <div class="form-group">
                                        <textarea name="body" class="form-control summernote" required> @php
                                            echo $berita->body
                                        @endphp</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-right">
                               
                                <button type="submit" id="btn_submit" class="btn btn-primary">
                                Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>         
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('modal')

@endsection

@section('footer')
<script src="<?=url('/')?>/public/assets/vendor/summernote/summernote-bs4.min.js"></script>

<script>


    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview_gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file_gambar").change(function () {
        readURL(this);
    });

    $('.summernote').summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
    });

    function get_plain(){
        var plain = $(".note-editable").text();
        $("#plain_deskripsi_berita").val(plain);
        $("#btn_submit").click();
    }

    function pilih_gambar(){
        $("#file_gambar").click();
    }


</script>

@endsection
