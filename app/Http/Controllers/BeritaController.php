<?php

namespace App\Http\Controllers;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;
use Str;
use Image;


class BeritaController extends Controller
{
    //
    public function index()
    {
        $berita = Berita::all();
        return view('users/admin/dashboard/publikasi', compact('berita'));
    }

    public function add()
    {
        return view('users/admin/berita/add');
    }

    public function ubah($id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('users/admin/berita/ubah', compact('berita'));
    }

    public function update(Request $request)
    {
        $validation = \Validator::make($request->all(), [
            'judul_berita' => 'required',
            'penulis_berita' => 'required',
            'deskripsi_berita' => 'required',
        ])->validate();

        $get_id = $request->id;
        $berita = Berita::where('id', $request->id)->first();
        if ($berita->judul != $request->judul_berita) {
            $slug = Str::slug($request->get('judul_berita'));
            $jumlah_slug = Berita::select('slug')->where('slug', $slug)->get()->count();
            if ($jumlah_slug > 0) {
                $jumlah_slug = intVal($jumlah_slug) + 1;
                $slug = $slug . "-" . $jumlah_slug;
            }
            $berita->judul = $request->judul_berita;
            $berita->slug = $slug;
        }
        $berita->penulis = $request->penulis_berita;
        $deskripsi = $request->get('deskripsi_berita');
        if ($berita->deskripsi != $deskripsi) {
            libxml_use_internal_errors(true);
            $dom = new \DomDocument();
            $dom->loadHtml($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {

                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {

                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);

                    $image_name = Str::random(20) . $k . '.png';
                    $path = '/' . $berita->id . '/' . $image_name;

                    \Storage::disk('public')->put("berita/" . $path, $data);

                    $img->removeAttribute('src');
                    $img->setAttribute('src', asset('public/berita') . $path);
                }
            }
            $deskripsi = $dom->saveHTML();

            $berita->deskripsi = $deskripsi;
            $berita->plain_deskripsi = substr($request->plain_deskripsi_berita, 0, 250);
        }

        if ($request->file('file_gambar')) {
            $nama_file = str_replace('/', '_', $request->judul_berita);
            $nama_file = str_replace(' ', '_', $nama_file);
            $files = $request->file('file_gambar');
            $type = $request->file('file_gambar')->getClientOriginalExtension();
            $file_upload = $this->autocode('brt') . "_" . date('H_i_s') . "." . $type;
            $image_path = "public/berita/" . $request->id . "/$berita->gambar";
            $image_path_thumbnail = "public/berita/" . $request->id . "/thumbnail/$berita->gambar";
            \File::delete($image_path);
            \File::delete($image_path_thumbnail);
            \Storage::disk('public')->put("berita/$get_id/" . $file_upload, file_get_contents($files));
            \Storage::disk('public')->put("berita/$get_id/thumbnail/" . $file_upload, file_get_contents($files));
            $img = Image::make("public/berita/$get_id/thumbnail/" . $file_upload)->fit(500, 375);
            $img->save();

            $berita->gambar = $file_upload;
        }

        $berita->save();

        $notification = array(
            'message' => 'Berita Berhasil Tersimpan',
            'alert-type' => 'success'
        );

        return redirect('admin/berita')->with($notification);
    }

    public function autocode($kode)
    {
        $timestamp = time();
        $random = rand(10, 100);
        $current_date = date('mdYs' . $random, $timestamp);
        return $kode . "-" . $current_date;
    }

    public function delete(Request $request)
    {
        $image_path = "public/berita/" . $request->id;
        // dd($image_path);
        \File::deleteDirectory($image_path);
        Berita::where('id', $request->id)->delete();
        $notification = array(
            'kode-notif' => 'berhasil',
            'message' => 'Data berhasil dihapus',
            'color' => "#28a745",
            'icon' => "fas fa-check-circle",
            'header' => "Berhasil"
        );
        return back()->with($notification);
    }


    public function store(Request $request)
    {
        $validation = \Validator::make($request->all(), [
            'judul_berita' => 'required',
            'penulis_berita' => 'required',
            'deskripsi_berita' => 'required',
            'file_gambar' => 'required'

        ])->validate();

        $get_id = $this->autocode('BRT');
        $berita = new Berita;
        $berita->id = $get_id;
        $berita->judul = $request->judul_berita;
        $slug = Str::slug($request->get('judul_berita'));
        $jumlah_slug = Berita::select('slug')->where('slug', $slug)->get()->count();
        if ($jumlah_slug > 0) {
            $jumlah_slug = intVal($jumlah_slug) + 1;
            $slug = $slug . "-" . $jumlah_slug;
        }
        $berita->slug = $slug;
        $berita->penulis = $request->penulis_berita;

        $deskripsi = $request->get('deskripsi_berita');
        libxml_use_internal_errors(true);
        $dom = new \DomDocument();
        $dom->loadHtml($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if (preg_match('/data:image/', $data)) {

                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);

                $image_name = Str::random(20) . $k . '.png';
                $path = '/' . $request->id . '/' . $image_name;

                \Storage::disk('public')->put('program/' . $path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', asset('public/program') . $path);
            }
        }

        // dd($deskripsi);
        $deskripsi = $dom->saveHTML();
        $berita->deskripsi = $deskripsi;
        $berita->plain_deskripsi = substr($request->plain_deskripsi_berita, 0, 250);
        if ($request->file('file_gambar')) {

            $nama_file = str_replace('/', '_', $request->judul_berita);
            $nama_file = str_replace(' ', '_', $nama_file);
            $files = $request->file('file_gambar');
            $type = $request->file('file_gambar')->getClientOriginalExtension();
            $file_upload = $this->autocode('brt') . "_" . date('H_i_s') . "." . $type;

            \Storage::disk('public')->put("berita/$get_id/" . $file_upload, file_get_contents($files));
            \Storage::disk('public')->put("berita/$get_id/thumbnail/" . $file_upload, file_get_contents($files));
            $img = Image::make("public/berita/$get_id/thumbnail/" . $file_upload)->fit(500, 375);
            $img->save();

            $berita->gambar = $file_upload;
        }

        $berita->save();

        $notification = array(
            'message' => 'Berita Berhasil Tersimpan',
            'alert-type' => 'success'
        );

        return redirect('admin/berita')->with($notification);
    }

    public function destroy($id)
    {
        DB::table('beritas')->where('id', $id)->delete();
        return redirect('admin/publikasi')->with('status', 'Data berhasil di hapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }


    public function berita($id)
    {
        $berita = Berita::find($id);
        return view('users/admin/dashboard/berita_terbaru', compact('berita'));
    }
}
