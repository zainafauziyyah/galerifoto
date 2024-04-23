<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function hal(){
        return view('album');
    }

    public function index(){
        return view('pages.albumaction.createalbum');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'nama_album' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);
    
        if ($request->hasFile('lokasi_file')) {
            $file = $request->file('lokasi_file');
    
            $filename = time() . '_' . $file->getClientOriginalName();
    
            $file->move(public_path('storage/foto'), $filename);
    
            $album = new Album();
            $album->nama_album = $request->nama_album;
            $album->deskripsi_album = $request->deskripsi_album;
            $album->lokasi_file = $filename;
            $album->user_id = 1;
            $album->save();
    
            Session::flash('status', 'success');
            Session::flash('message', 'album created');
            return redirect('pages.albumaction.createalbum');
        }
    }   
}    


