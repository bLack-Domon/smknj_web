<?php

namespace App\Http\Controllers;

use App\Models\Gavideo;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function video()
    {
        $video = Gavideo::all();
        return view('galeri-video', compact('video'));
    }
}
