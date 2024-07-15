<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = home::orderBy('nama', 'desc')->paginate(20);
        return view('dashboard.home.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('deskripsi', $request->deskripsi);
        Session::flash('deskripsi2', $request->deskripsi2);
        
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'deskripsi2' => 'required',
        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'deskripsi.required'=>'Deskripsi Wajib Diisi',
            'deskripsi2.required'=>'Deskripsi 2 Wajib Diisi',
        ]);
        $data = [ 
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'deskripsi2' => $request->input('deskripsi2'),
        ];
        home::create($data);
        return redirect('dashboard/home')->with('success', 'Data Berhasil Ditambahkan'); 
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
        $data = home::where('nama', $id)->first();
        return view('dashboard.home.edit')->with('data', $data);
    }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'deskripsi2' => 'required',
            ],[
                'nama.required'=>'Nama Wajib Diisi',
                'deskripsi.required'=>'Deskripsi Wajib Diisi',
                'deskripsi2.required'=>'Deskripsi 2 Wajib Diisi',
            ]);
            $data = [ 
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'deskripsi2' => $request->input('deskripsi2'),
            ];
            home::where('nama', $id)->update($data); // Use update() instead of create()
            return redirect('dashboard/home')->with('success', 'Data Berhasil Diupdate'); 
        }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        home::where('nama', $id)->delete();
        return redirect()->to(url('dashboard/home'))->with('success', 'Data Berhasil Dihapus');
    }
}
