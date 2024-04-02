<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class FotoController extends Controller
{
    
    public function upload(Request $request)
    {
        $request->validate([
            'judul_foto' => 'required|string|max:255',
            'deskripsi_foto' => 'required|string',
            'lokasi_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('lokasi_file')) {
            $file = $request->file('lokasi_file');
    
            $filename = time() . '_' . $file->getClientOriginalName();
    
            $file->move(public_path('storage/foto'), $filename);
    
            $foto = new Foto(); // Pastikan 'Foto' diawali dengan huruf kapital
            $foto->judul_foto = $request->judul_foto;
            $foto->deskripsi_foto = $request->deskripsi_foto;
            $foto->lokasi_file = $filename;
            $foto->tanggal_unggah = now();
            // $foto->album_id = $album_id;
            $foto->user_id = 1;
            $foto->lokasi_file = $filename;
            $foto->save();
    
            Session::flash('status', 'success');
            Session::flash('message', 'photo uploaded successfully');
            return redirect('foto');
        }
    }

    public function destroy($id)
    {
        // Temukan foto berdasarkan ID
        $foto = Foto::findOrFail($id);

        // Hapus foto dari database
        $foto->delete();

        return redirect()->back()->with('success', 'photo is deleted');
    }

    
}    