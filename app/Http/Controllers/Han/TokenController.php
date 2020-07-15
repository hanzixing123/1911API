<?php

namespace App\Http\Controllers\Han;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    //

     public function token(){

         $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx359dcf3d654a9c7d&secret=88406e8666aa03356bbbc64a2bb3474d";
            $res=file_get_contents($url);
            echo $res;




     }


}
