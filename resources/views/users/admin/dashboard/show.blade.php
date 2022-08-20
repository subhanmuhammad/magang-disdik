@extends('layouts.admin')

@section('content')


<h2 class="mb-5">Halaman berita</h2>
    
 

    @foreach ($Beritas as $post)

        <h1 class="mb-5"> {{ $post->judul }}</h1>

    @endforeach


@endsection