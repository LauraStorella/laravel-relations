<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',
        'year',
        'url',        
    ];
    
    // Creo Relazione tab Albums <---> tab Songs
    //   --> fun prende il nome della tab a cui fa riferimento nel db e con cui creo la relazione (Laravel naming convention)
    public function songs() {
        return $this->hasMany('App\Models\Song');
    }
}
