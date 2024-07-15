<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function index()
{ 
    return view('private.index');
}

public function create()
{
    return view('private.create');
}

public function upload()
{
    return view("private.upload");
}
}
