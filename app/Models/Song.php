<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'album_id',
    ];

    // Relazione inversa Song (entità secondaria) <---> Album (entità primaria)
    public function album() {
        return $this->belongsTo('App\Models\Album');
    }
}
