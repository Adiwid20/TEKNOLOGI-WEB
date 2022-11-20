<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function invalue(){
        return view('in-value');
    }

    public function outvalue(Request $request){
        $ip1=$request->get('ip1');
        $ip2=$request->get('ip2');
        $ip3=$request->get('ip3');
        $ip4=$request->get('ip4');
        $ip5=$request->get('ip5');
        $ip6=$request->get('ip6');
        $ip7=$request->get('ip7');
        $ip8=$request->get('ip8');
        $ipk = ($ip1 + $ip2 + $ip3 + $ip4 +$ip5 + $ip6 + $ip7 + $ip8)/'8';
        
        return view('outvalue',[
            'ipk' => $ipk,
            
        ]);
    }

}