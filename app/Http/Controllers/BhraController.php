<?php
namespace App\Http\Controllers;

class BhraController extends Controller
{
    
    // just return some string - a test
    public function gett()
    {
        return "hello from gett";
    }
    
    // use "view" to generate the html
    public function gettView()
    {
        return view('bhra/gettView');
    }
}


