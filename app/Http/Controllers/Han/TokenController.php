<?php

namespace App\Http\Controllers\Han;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class TokenController extends Controller
{
    //

     public function token(){

         $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx359dcf3d654a9c7d&secret=88406e8666aa03356bbbc64a2bb3474d";
            $res=file_get_contents($url);
            echo $res;

     }

    public function token2(){


        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx359dcf3d654a9c7d&secret=88406e8666aa03356bbbc64a2bb3474d";


        // 创建一个新cURL资源
        $ch = curl_init();
            // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    //将返回结果 通过变量接受

            // 抓取URL并把它传递给浏览器
               $response=  curl_exec($ch);
            // 关闭cURL资源，并且释放系统资源
        curl_close($ch);
        echo  $response;
    }

    public function  lianxi(){
               //$res=uniqid();
            $res="バカ野郎";
                echo $res;
    }
    public  function token3(){
        
            $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx359dcf3d654a9c7d&secret=88406e8666aa03356bbbc64a2bb3474d";
            $client= new Client();
            $response=$client->request("GET",$url);
            $data=$response->getBody();
          echo   $data;die;
            //var_dump($response);


    }





}
