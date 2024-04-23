<?php

namespace App\Http\Controllers;
use App\Models\Komentar;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Date;

class KomentarController extends Controller
{
    public function index() {
        $komentar = Komentar::all();
        return view('foto', [
            "komentar" => $komentar
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'foto_id',
        'user_id',
        'isi_komentar',
        'tanggal_komentar',

        ]);
        $validated['tanggal_komentar'] = Date::now();
        $validated['user_id'] = auth()->user()->id;

        Komentar::create($validated);

        return redirect()->route('foto');
    }
}