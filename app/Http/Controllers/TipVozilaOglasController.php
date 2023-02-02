<?php

namespace App\Http\Controllers;

use App\Models\Oglas;
use Illuminate\Http\Request;

class TipVozilaOglasController extends Controller
{
    public function index($tip_vozila_id)
    {
        $oglasi = Oglas::get()->where('tip_vozila_id', $tip_vozila_id);
        if (is_null($oglasi))
            return response()->json('Data not found', 404);
        return response()->json($oglasi);
    }
}
