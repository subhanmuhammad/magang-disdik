<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Agenda;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Data_tes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserDashboard extends Controller
{
    public function publikasi()
    {
        $Berita = Berita::get();
        return view('users/admin/dashboard/publikasi', compact('Berita'));
    }

    public function agenda()
    {
        $data = Agenda::all();
        return view('users/admin/dashboard/agenda', compact('data'));
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('users/admin/dashboard/ubah', compact('berita'));
    }

    public function autocode($kode)
    {
        $timestamp = time();
        $random = rand(10, 100);
        $current_date = date('mdYs' . $random, $timestamp);
        return $kode . $current_date;
    }

    public function store($id, Request $request)
    {


        // $db = new Berita();
        // $id = $this->autocode('GBR');
        // $db->id = $id;

        $db = Berita::find($id);

        // dd($db);
        if ($request->file('gambar')) {
            $files = $request->file('gambar');
            $type = $request->file('gambar')->getClientOriginalExtension();
            $file_upload = $this->autocode('GBR') . date('His') . "." . $type;
            \Storage::disk('public')->put("img/berita/$id/" . $file_upload, file_get_contents($files));
            \Storage::disk('public')->put("img/berita/$id/thumbnail/1280x720/" . $file_upload, file_get_contents($files));
            $img = Image::make("public/img/berita/$id/thumbnail/1280x720/" . $file_upload)->fit(1280, 720);
            $img->save();
            $db->gambar = $file_upload;
        }

        $db->judul = $request->judul;
        $db->slug = $request->slug;
        $db->deskripsi = $request->deskripsi;
        $db->plain_deskripsi = $request->plain_deskripsi;
        $db->penulis = $request->penulis;
        $db->body = $request->body;
        $db->save();
        // $berita = Berita::find($id);
        // $berita->update($request->except(['_token', 'submit']));

        return redirect('admin/publikasi')->with('status', 'Data berhasil di hapus');
    }

    public function delete($id)
    {
        DB::table('beritas')->where('id', $id)->delete();
        return redirect('users/admin/dashboard/publikasi')->with('status', 'Data berhasil di hapus');
    }

    public function hapus($id)
    {
        DB::table('agendas')->where('id', $id)->delete();
        return redirect('admin/agenda')->with('status', 'Data berhasil di hapus');
    }

    public function show()
    {
        $Berita = Berita::all();
        return view('users/admin/dashboard/show', compact('berita'));
    }

    public function tambah()
    {
        return view('users/admin/dashboard/TambahAgenda');
    }

    public function editagenda($id)
    {
        $agenda = agenda::find($id);

        return view('users/admin/dashboard/editagenda', compact('agenda'));
    }

    public function banner()
    {
        $banner = Banner::get();
        return view('users/admin/dashboard/banner', compact('banner'));
    }
}
