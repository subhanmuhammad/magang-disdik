@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Banner</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <a href="{{url('/')}}/admin/dashboard/tbhbanner/" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Banner</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="contaioner">
                <div class="row">
                      <div class=" col-md-8   ">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                   
                                    <div class="carousel-inner">
                                        @foreach ($banner as $item)
                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <a href="#">
                                                <img src="{{ asset('public/img/banner/' .$item->id."/thumbnail/1280x720/".$item->gambar) }}" class="d-block w-100" alt="...">
                                            </a>
                                            
                                        </div>
                                        @endforeach
                                    </div>
                          
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                          </div>
                            <div class="col-lg">

                                <div data-spy="scroll" data-target="#scroll-ku" data-offset="0" style="height: 500px;overflow: scroll;">
                                     @foreach ($banner as $item)
                                        <div class="row ml-5">
                                            <div class="card" style="width: 80%;">
                                                <img src="{{ asset('public/img/banner/' .$item->id."/thumbnail/1280x720/".$item->gambar) }}" class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">
                                                    <div class="button-group">
                                                        <form action="{{ url('/hapusbaner/'.$item->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data.?')">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-warning btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                         </div>
                    </div>
                </div>
            </div>  
            </div>
        </div>
    </div>
@endsection



{{-- 
{{ asset('public/img/banner/' .$item->id."/thumbnail/1280x720/".$item->gambar) }} --}}