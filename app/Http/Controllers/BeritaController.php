<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $berita = Berita::all();
        return view('daftar-berita', compact('berita'));
    }
    
    public function detail_berita($id) {
        $berita = Berita::findOrFail($id)->get();
        // dd($berita);
        return view('detail-berita', compact('berita'));
    }

}
