<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $foto = Foto::all();
        return view('foto', ['foto' => $foto]);

    }
}
