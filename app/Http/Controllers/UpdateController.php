<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Berita;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect;
use App\Models\Banner;

class UpdateController extends Controller
{
    public function Update()
    {
        return view('users/admin/dashboard/add');
    }

    // public function store(Request $request)
    // {
    //     $validasi = $request->validate([
    //         'judul' => 'required|max:255',
    //         'slug' => 'required'
    //     ]);
    // }

    public function tambah()
    {
        $data = Agenda::get();
        $dta = array();

        // $i = 0;
        // foreach ($data as $k) {
        //     $dta[$i]['id'] = $k->id;
        //     $dta[$i]['nama'] = substr($k->nama, 0, 20);
        //     // $dta[$i]['deskripsi'] = substr($k->deskripsi, 0, 40);
        //     $i++;

        return view('users/admin/dashboard/TambahAgenda', compact('dta'));
    }

    public function tagenda(Request $request)
    {
        agenda::create($request->except(['_token']));
        return redirect('admin/agenda');
    }

    public function store($id, Request $request)
    {
        $agenda = agenda::find($id);
        $agenda->Update($request->except(['_token', 'submit']));
        return redirect('admin/agenda');
    }

    public function tbanner(Request $request)
    {
        return $request->file('image')->store('post-images');
        // Banner = Banner::fi
    }
}
