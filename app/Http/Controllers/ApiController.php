<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getBackground()
    {
        $background = "https://raw.githubusercontent.com/bnsvn/bnsvn.github.io/master/background.png";
        return response()->json([
            'url' => $background
        ]);
    }

    public function postLogin(Request $request)
    {
        $userdata = array(
            'email'     => $request->username,
            'password'  => $request->password
        );

        if (Auth::attempt($userdata) === false) {
            return response()->json([
                'status' => 0,
            ]);
        } else {
            return response()->json([
                'status' => 1,
                'infomation' => Auth::user()
            ]);
        }
    }
}
