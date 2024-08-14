<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FristController extends Controller
{
    //
   public  function index()
    {
        return view("first");      
    }
    public function second()
    {
        return view("second");
    }
}
