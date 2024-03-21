<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $guarded = ['FotoID'];
    
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'tanggal_unggah',
        'lokasi_file',
    ];

    public function album()
    {
        return $this->belongsToMany(Album::class);
    }

    public function komentar()
    {
        return $this->belongsToMany(Komentar::class);
    }

    public function likefoto()
    {
        return $this->hasMany(likefoto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
