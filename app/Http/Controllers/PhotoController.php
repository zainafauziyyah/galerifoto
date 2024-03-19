<?php

namespace App\Http\Controllers;

use App\Models\Foto; // Sesuaikan dengan namespace model Anda
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Menampilkan halaman daftar foto.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mendapatkan data foto dari model Photo
        $Photos = Foto::all();

        // Melewatkan data foto ke view 'photo'
        return view('pages.foto', ['Photo' => $Photos]);
    }
}
