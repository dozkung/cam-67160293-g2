<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    function index(){
        return $this->mycontroler();
    }
    function mycontroler(){
        return view('Myviwes.index');
    }

    function process(Request $request){
        $data['mynum'] = $request->input('num');
        return view('Myviwes.process', $data);
    }

}
