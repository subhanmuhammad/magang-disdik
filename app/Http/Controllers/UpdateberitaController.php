<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect;
use App\Models\Banner;

class UpdateberitaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('users/admin/dashboard/publikasi', compact('berita'));
    }

    public function update(Request $request)
    {
        $berita = Berita::create($request->except(['_token']));

        return redirect('/admin/publikasi', compact('berita'));
    }

    public function store($id, Request $request)
    {

        $berita = Berita::find($id);
        $berita->Update($request->except(['_token', 'submit']));
        return redirect('/admin/publikasi');    
    }
}
