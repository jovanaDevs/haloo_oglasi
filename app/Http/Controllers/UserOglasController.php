<?php

namespace App\Http\Controllers;

use App\Models\Oglas;
use Illuminate\Http\Request;

class UserOglasController extends Controller
{
    public function index($user_id)
    {
        $oglasi = Oglas::get()->where('user_id', $user_id);
        if (is_null($oglasi))
            return response()->json('Data not found', 404);
        return response()->json($oglasi);
    }
}
