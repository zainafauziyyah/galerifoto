<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FotoController extends Controller
{
    public function index(){
        return view('foto');
    }
    public function upload(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul_foto' => 'required|string|max:255',
        'deskripsi_foto' => 'required|string',
        'lokasi_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Menambahkan validasi untuk jenis file gambar dan maksimal ukuran file
    ]);

    // Menghasilkan nama unik untuk gambar
    $imageName = time() . '.' . $request->LokasiFile->extension();

    $fotoDirectory = public_path() . '/foto';
    $request->file('lokasi_file')->move($fotoDirectory, $imageName);

    // Membuat instance Carbon untuk tanggal dan waktu saat ini
    $validatedData['tanggal_unggah'] = Carbon::now();

    // Membuat catatan foto dalam database
    Foto::create([
        'judul_foto' => $validatedData['judul_foto'],
        'deskripsi_foto' => $validatedData['deskripsi_foto'],
        'lokasi_file' => $imageName,
        'tanggal_unggah' => $validatedData['tanggal_unggah'],
    ]);

    // Redirect dengan pesan keberhasilan
    return redirect()->route('pages.foto')->with('success', 'Foto berhasil diunggah.');
}
       
}
