<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Komentar;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $foto = Foto::all();
        $komentar = Komentar::orderBy('tanggal_komentar', 'desc')->get();
        return view('foto', ['foto' => $foto , 'komentar' => $komentar]);

    }
}
