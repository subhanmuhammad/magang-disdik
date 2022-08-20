@extends('layouts.admin')

@section('header')
<link rel="stylesheet" href="<?=url('/')?>/public/template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?=url('/')?>/public/template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" 
rel="stylesheet"/>
<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
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
?>
<style type="text/css">
  .select2-container .select2-selection--single {
    height: 38px;
    border: 1px solid #ced4da;
  }

</style>
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Buat Berita  </h3>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        {{-- <a href="{{url('/')}}/admin/dashboard" class="btn btn-warning"><i class="fa fa-chevron-left"></i>&nbsp;Daftar Guru</a> --}}
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="striped-rows" enctype="multipart/form-data" action="{{url('/')}}/admin/dashboard/store" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label >Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" rows="3">
      </div>
        {{-- <div class="form-group">
          <label >Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" rows="3">
        </div> --}}
        <div class="form-group">
          <label >Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3">
        </div>
        <div class="form-group">
          <label >Plain_Deskripsi</label>
          <input type="text" class="form-control" id="plain_deskripsi" name="plain_deskripsi" >
        </div>
        <div class="form-group">
          <label >Penulis</label>
          <input type="text" class="form-control" id="-penulis" name="penulis" >
        </div>
        {{-- <div class="form-group">
          <label >user_id</label>
          <input type="text" class="form-control" id="-user_id" name="user_id" >
        </div> --}}
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input class="form-control" type="file" id="gambar" name="gambar">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <input id="body" type="hidden" name="body">
          <trix-editor input="body"></trix-editor>
        </div>
        <button class="btn btn-success" type="submit">Simpan</button>
      </form>
      <hr>
      
  </div>
</div>


<script>

</script>
@endsection

@section('footer')

<!-- DataTables -->
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
   const judul = document.querySelector('#judul');
   const slug = document.querySelector('#slug');

  judul.addEventListener('change', function() {
    fetch('/user/admin/dashboard/checkSlug?judul=' + judul.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

</script>
@endsection