<?php

namespace App\Http\Controllers;

use App\Models\Tenis;
use Illuminate\Http\Request;

class SneakersController extends Controller
{
    public function getAllSneakers()
    {
        $snk = Tenis::where('CD_USUARIO', '=', session('user_cd'))->get();
        if (isset($snk)) {
            if (sizeof($snk) > 0) {
                return $snk;
            } else {
                return [];   
            }
        }
    }
}
