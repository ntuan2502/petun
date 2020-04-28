<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBackground()
    {
        $background = "https://raw.githubusercontent.com/bnsvn/bnsvn.github.io/master/background.png";
        return response()->json([
            'url' => $background
        ]);
    }
}
