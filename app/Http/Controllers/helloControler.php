<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloControler extends Controller
{
    //
    public function index()
    {
        return view('calc');     
    }
    public function add(Request $request)
    {
     
        echo $request->number1;
        echo"<br />";
        echo $request->number2;
        $num3=$request->number1+$request->number2;
        return view ('result',['result'=>$num3]);
        //echo "the sum is"
        //echo $request->number1+$request->number2;
        


    }
}
