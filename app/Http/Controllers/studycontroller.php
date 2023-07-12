<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studycontroller extends Controller
{
    //
    public function show()
    {
        return "Hello world";
    }
    public function show2()
    {
        return  view ("Firstphp");
    }
    public function show3()
    {
        return  view ("registration");
    }
}
