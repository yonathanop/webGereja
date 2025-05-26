<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Jadwal;
use App\Models\Kegiatan;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $jadwal = Jadwal::all();
        $kegiatan = Kegiatan::all();
        $title = 'Home';

        return view('home', compact('banners', 'jadwal', 'kegiatan', 'title'));
    }
}

