<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroler extends Controller
{
    function TestFun(){
        //echo "hii this is controller";
        return view('test');
    }
}
