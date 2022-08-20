<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Banner;
use App\Models\Agenda;
use App\Models\Profil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingpageController extends Controller
{
    public function index()
    {

        $berita = Berita::all();
        $agenda = Agenda::all();
        $banner = Banner::all();

        $link = 'http://localhost:8080/api/data_kejuruan';

        $response = Http::get($link);

        // dd($response);

        $kejuruan = $response->json();

        return view('/landingpage.index',  compact('berita', 'banner', 'agenda', 'kejuruan'));
    }

    public function sejarah()
    {
        $profil = Profil::all();
        return view('/landingpage.sejarah', compact('profil'));
    }

    public function beranda()
    {
        return view('/landingpage.index');
    }

    public function visi()
    {
        return view("landingpage.visi-misi");
    }

    public function ekskul()
    {
        return view("landingpage.ekskul");
    }

    public function profilpimpinan()
    {
        return view('landingpage.profil-pimpinan');
    }

    public function sarpras()
    {
        return view('landingpage.sarpras');
    }
    public function siswa()
    {
        return view('landingpage.info-siswa.siswa');
    }

    public function guru()
    {
        return view('landingpage.guru-staff');
    }
}
