<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'foto';


    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function komentarfoto()
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
