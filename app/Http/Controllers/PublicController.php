<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\komen;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
{
    return view("public/home");
}

public function kontak() 
    {
        return view("public/contact");
    }

    public function storeContact(Request $request)
    {
        // Validation rules
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor' => 'required',
            'komen' => 'required',
        ], [
            // Custom error messages (optional)
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'nomor.required' => 'Nomor telepon wajib diisi',
            'komen.required' => 'Pesan wajib diisi',
        ]);

        // If validation passes, create the komen
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'nomor' => $request->input('nomor'),
            'komen' => $request->input('komen'),
        ];
        komen::create($data);

        return redirect('contact')->with('success', 'Data Berhasil Ditambahkan'); 
    }

    public function about()
    {
        $data_about = about::all(); // Fetch data from your 'About' model
        return view('public.about', compact('data_about')); // Pass the data to the view
    }

}
