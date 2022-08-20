<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Berita;

class AdminDataTes extends Controller
{
	//
	public function dashboard()
	{
		$data_tes = user::get();
		return view('users/admin/dashboard/index', compact('data_tes'));
	}

	public function add()
	{
		return view('users/admin/dashboard/add');
	}

	public function change($id)
	{
		$data_tes = User::where('id', $id)->first();
		return view('users/admin/dashboard/change', compact('data_tes'));
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
		// dd($request);
		$db = new Berita();

		$id = $this->autocode('GBR');
		$db->id = $id;
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
		$db->user_id = $request->user_id;
		$db->body = $request->body;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil ditambah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"




		);
		return redirect('/admin/publikasi')->with($notification);
	}

	public function update(Request $request)
	{
		$db = User::where('id', $request->id)->first();
		$db->nama = $request->nama;
		$db->save();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil diubah',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		);
		return redirect('/admin/dashboard')->with($notification);
	}

	public function delete(Request $request)
	{
		User::where('id', $request->id)->delete();
		$notification = array(
			'kode-notif' => 'berhasil',
			'message' => 'Data berhasil dihapus',
			'color' => "#28a745",
			'icon' => "fas fa-check-circle",
			'header' => "Berhasil"
		);
		return redirect('/admin/dashboard')->with($notification);
	}
	public function publik()
	{
		return view('users/admin/dashboard/publikasi');
	}
}
