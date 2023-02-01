<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipVozila extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv_tipa',
    ];

    public function oglas(){
        return $this->hasMany(Oglas::class);
    }
}
