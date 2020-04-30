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
                'infomation' => null
            ]);
        } else {
            return response()->json([
                'infomation' => Auth::user()
            ]);
        }
    }

    public function getAio(){
        $xml64 = "https://github.com/bnsvn/bnsvn.github.io/raw/master/aio/2020-4-29/xml64.dat";
        $xml = "https://github.com/bnsvn/bnsvn.github.io/raw/master/aio/2020-4-29/xml.dat";
        $config64 = "https://github.com/bnsvn/bnsvn.github.io/raw/master/aio/2020-4-29/config64.dat";
        $config = "https://github.com/bnsvn/bnsvn.github.io/raw/master/aio/2020-4-29/config.dat";
        return response()->json([
            'xml64' => $xml64,
            'xml' => $xml,
            'config64' => $config64,
            'config' => $config
        ]);
    }
    public function getMod(){
        $xml64 = "https://github.com/bnsvn/bnsvn.github.io/raw/master/cb/2020-4-29/xml64.dat";
        $xml = "https://github.com/bnsvn/bnsvn.github.io/raw/master/cb/2020-4-29/xml.dat";
        $config64 = "https://github.com/bnsvn/bnsvn.github.io/raw/master/cb/2020-4-29/config64.dat";
        $config = "https://github.com/bnsvn/bnsvn.github.io/raw/master/cb/2020-4-29/config.dat";
        return response()->json([
            'xml64' => $xml64,
            'xml' => $xml,
            'config64' => $config64,
            'config' => $config
        ]);
    }
    public function getNormal(){
        $xml64 = "https://github.com/bnsvn/bnsvn.github.io/raw/master/nor/2020-4-29/xml64.dat";
        $xml = "https://github.com/bnsvn/bnsvn.github.io/raw/master/nor/2020-4-29/xml.dat";
        $config64 = "https://github.com/bnsvn/bnsvn.github.io/raw/master/nor/2020-4-29/config64.dat";
        $config = "https://github.com/bnsvn/bnsvn.github.io/raw/master/nor/2020-4-29/config.dat";
        return response()->json([
            'xml64' => $xml64,
            'xml' => $xml,
            'config64' => $config64,
            'config' => $config
        ]);
    }
}
