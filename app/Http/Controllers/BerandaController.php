<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Kepsek;

class BerandaController extends Controller
{
    public function index() {
        $service = Layanan::all();
        $kepsek = Kepsek::all();

        return view('beranda', compact(['service', 'kepsek']));
    }
}
