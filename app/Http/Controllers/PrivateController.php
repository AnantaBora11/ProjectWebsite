<?php

namespace App\Http\Controllers;

use App\Models\komen;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function welcome()
{ 
    return view('private.welcome');
}

public function about()
    {
        $data_about = komen::all(); 
        return view('public.about', compact('data_about')); 
    }

}
