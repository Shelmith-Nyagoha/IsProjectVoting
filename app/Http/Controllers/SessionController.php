<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request){
        if($request->session()->has('topic')){
            echo $request->session()->get('topic');
        }
        else{
            echo 'Session doesnt exist';
        }
    }

    public function storeSession(Request $request){
        $request->session()->put('topic','Laravel session');
        echo 'Session stored';
}

public function deleteSession(Request $request){
    $request->session()->forget('topic');
    echo 'Session deleted';
}
}
