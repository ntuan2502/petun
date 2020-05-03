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
        if($request->username == "test" && $request->password == "test"){
            return response()->json([
                'infomation' => true
            ]);
        }else{
            return response()->json([
                'infomation' => false
            ]);
        }
        // $userdata = array(
        //     'email'     => $request->username,
        //     'password'  => $request->password
        // );

        // if (Auth::attempt($userdata) === false) {
        //     return response()->json([
        //         'infomation' => null
        //     ]);
        // } else {
        //     return response()->json([
        //         'infomation' => Auth::user()
        //     ]);
        // }
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
    public function getSocialMedia(){
        $facebook = "https://www.facebook.com/pkl.nat/";
        $youtube = "https://www.youtube.com/channel/UCXeaaQQ3pFsdLMtD7HaIlfg";
        $discord = "https://discord.gg/JtcN8yF";
        return response()->json([
            'facebook' => $facebook,
            'youtube' => $youtube,
            'discord' => $discord,
        ]);
    }

    public function getServerVersion(){
        return response()->json([
            'version' => "1120"
        ]);
    }
    public function getServerAppVersion(){
        return response()->json([
            'version' => "1.0.2.0",
            'url' => 'https://github.com/bnsvn/bnsvn.github.io/raw/master/BnsvnModInstaller_1.0.2.0.msi'
        ]);
    }
}
