<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust max size as needed
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'), $NamaFoto); // move the uploaded file to a directory (public/images)

            // Here you can save the $imageName to the database if needed

            return redirect()->back()->with('success', 'Image uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload image.');
    }
}

