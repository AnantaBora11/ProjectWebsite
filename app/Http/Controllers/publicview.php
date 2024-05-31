<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicview extends Controller
{

public function home()
{
    return view('public.home');
}

}
