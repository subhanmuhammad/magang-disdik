<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::get();
        return view('users/admin/dashboard/tambahbanner', compact('banner'));
    }

    public function autocode($kode)
    {
        $timestamp = time();
        $random = rand(10, 100);
        $current_date = date('mdYs' . $random, $timestamp);
        return $kode . $current_date;
    }

    public function store(Request $request)
    {
        $db = new Banner;
        $id = $this->autocode('BNR');
        $db->id = $id;
        if ($request->file('gambar')) {
            $files = $request->file('gambar');
            $type = $request->file('gambar')->getClientOriginalExtension();
            $file_upload = $this->autocode('BNR') . date('His') . "." . $type;
            \Storage::disk('public')->put("img/banner/$id/" . $file_upload, file_get_contents($files));
            \Storage::disk('public')->put("img/banner/$id/thumbnail/1280x720/" . $file_upload, file_get_contents($files));
            $img = Image::make("public/img/banner/$id/thumbnail/1280x720/" . $file_upload)->fit(1280, 720);
            $img->save();
            $db->gambar = $file_upload;
        }
        $db->urutan = $request->urutan;
        $db->user_id = Auth()->user()->id;
        $db->save();
        $notification = array(
            'kode-notif' => 'berhasil',
            'message' => 'Data berhasil ditambah',
            'color' => "#28a745",
            'icon' => "fas fa-check-circle",
            'header' => "Berhasil"
        );
        return Redirect('admin/banner')->with($notification);
    }

    public function destroy($id)
    {

        // dd($id);
        DB::table('banners')->where('id', $id)->delete();
        return redirect('admin/banner')->with('status', 'Data berhasil di hapus');
    }



    // public function create(Request $request)
    // {

    //     $validateData = $request->validate([
    //         'urutan' => 'required',
    //         'user_id' => 'required',
    //         'gambar' => 'image|file',
    //     ]);

    //     $banner = Banner::create($request->except(['_token']));
    //     return redirect('admin/banner', compact('banner'));
    // }
}
