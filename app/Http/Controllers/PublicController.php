<?php

namespace App\Http\Controllers;
use App\Models\dashboard;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
{
    return view("public/home");
}

public function contact()
{
    return view("public/contact");
}

public function about()
{
    $data=dashboard::all();
    return view("public/about")->with('data', $data);
}

}