<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentarfoto';

    protected $fillable = [
        'foto_id',
        'user_id',
        'isi_komentar',
        'tanggal_komentar',
    ];

    protected $dates = [
        'tanggal_komentar',
        'created_at',
        'updated_at',
    ];

    public function foto()
    {
        return $this->belongsTo(Foto::class, 'foto_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
