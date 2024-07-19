<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kontak::orderBy('nomor', 'desc')->paginate(1);
        return view('dashboard.kontak.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Check if a data already exists
        if (kontak::count() > 0) {
            // Redirect to the index page with the error message
            return redirect()->route('dashboard.kontak.index')->with('error', 'Hanya dapat membuat 1 data. Hapus data yang sudah ada terlebih dahulu.');
        }

        return view('dashboard.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nomor', $request->nomor);
        Session::flash('youtube', $request->youtube);
        Session::flash('twitter', $request->twitter);
        Session::flash('instagram', $request->instagram);
        Session::flash('facebook', $request->facebook);
        Session::flash('email', $request->email);
        
        $request->validate([
            'nomor' => 'required',
            'youtube' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'email' => 'required'
        ],[
            'nomor.required'=>'Nomor Wajib Diisi',
            'youtube.required'=>'Youtube Wajib Diisi',
            'twitter.required'=>'Twitter Wajib Diisi',
            'instagram.required'=>'Instagram Wajib Diisi',
            'facebook.required'=>'Facebook Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
        ]);
        $data = [ 
            'nomor' => $request->input('nomor'),
            'youtube' => $request->input('youtube'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'email' => $request->input('email')
        ];
        kontak::create($data);
        return redirect('dashboard/kontak')->with('success', 'Data Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kontak::where('nomor', $id)->first();
        return view('dashboard.kontak.edit')->with('data', $data);
    }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $request->validate([
                'nomor' => 'required',
                'youtube' => 'required',
                'twitter' => 'required',
                'instagram' => 'required',
                'facebook' => 'required',
                'email' => 'required'
            ],[
                'nomor.required'=>'Nomor Wajib Diisi',
                'youtube.required'=>'Youtube Wajib Diisi',
                'twitter.required'=>'Twitter Wajib Diisi',
                'instagram.required'=>'Instagram Wajib Diisi',
                'facebook.required'=>'Facebook Wajib Diisi',
                'email.required'=>'Email Wajib Diisi',
            ]);
            $data = [ 
                'nomor' => $request->input('nomor'),
                'youtube' => $request->input('youtube'),
                'twitter' => $request->input('twitter'),
                'instagram' => $request->input('instagram'),
                'facebook' => $request->input('facebook'),
                'email' => $request->input('email')
            ];
            kontak::where('nomor', $id)->update($data); // Use update() instead of create()
            return redirect('dashboard/kontak')->with('success', 'Data Berhasil Diupdate'); 
        }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kontak::where('nomor', $id)->delete();
        return redirect()->to(url('dashboard/kontak'))->with('success', 'Data Berhasil Dihapus');
    }
}