<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oglas extends Model
{
    use HasFactory;

    protected $fillable = [
        'marka',
        'model',
        'godiste',
        'gorivo',
        'tip_vozila_id',
        'user_id',
        'cena'
    ];
   
    public function tip_vozila(){
        return $this->belongsTo(TipVozila::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
