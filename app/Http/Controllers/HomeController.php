<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'https://blockchain.info/ticker';
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        //  var_dump( $response);
        //  die();
        //        dd($response);
        $response = json_decode($response);
        $data=$response;
        //        $data=$data->toArray();
        if($response!=NULL) {
//            dd($data);
            //                        dd($data->USD->buy);
        return view('index',compact('data'));

//            return $response;
        }
        else{
            return view('index',compact('data'));

        }
    }
    public function info()
    {
        return view('info');
    }
    public function currency()
    {
        //    $a=$_GET['a'];
        //    $b=$_GET['b'];
        //    $a=$request->input('a');
        //    $b=$request->input('b');

        $url = 'https://blockchain.info/ticker';
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        //  var_dump( $response);
        //  die();
        $response = json_decode($response);
        $data=$response;
        dd($data);
//        $data=$data->toArray();
        if($response!=NULL) {
                        dd($data);
//                        dd($data->USD->buy);

            return $response;
        }
        else{

            return redirect(route('index'));
        }
        //return view('check',compact('response'));


    }
}
