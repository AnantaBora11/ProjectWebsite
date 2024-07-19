<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        // Check if a data already exists
        if (home::count() > 0) {
            return redirect()->back()->with('error', 'Hanya dapat membuat 1 data. Hapus data yang sudah ada terlebih dahulu.');
        }

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
            'foto' => 'required|mimes:jpeg,jpg,png,gif'
        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'deskripsi.required'=>'Deskripsi Wajib Diisi',
            'deskripsi2.required'=>'Deskripsi 2 Wajib Diisi',
            'foto.required'=>'Foto Wajib Diisi',
            'foto.mimes'=>'format Wajib JPEG,JPG,PNG,GIF'
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [ 
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'deskripsi2' => $request->input('deskripsi2'),
            'foto' => $foto_nama
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

            if($request->hasFile('foto')){
                $request->validate([
                    'foto =>mimes:jpeg,jpg,png,gif'
                ],[
                    'foto.mimes' => 'Format Foto wajib JPEG, JPG, PNG, dan GIF'
                ]);
                $foto_file = $request->file('foto');
                $foto_ekstensi = $foto_file->extension();
                $foto_nama = date('ymdhis'). "." . $foto_ekstensi;
                $foto_file->move(public_path('foto'), $foto_nama);

                $data_foto = home::where('nama',$id)->first();
                File::delete(public_path('foto').'/'.$data_foto->foto);

                $data['foto'] = $foto_nama;
            }
            home::where('nama', $id)->update($data); // Use update() instead of create()
            return redirect('dashboard/home')->with('success', 'Data Berhasil Diupdate'); 
        }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = home::where('nama', $id)->first();
        file::delete(public_path('foto').'/'. $data->foto);
        home::where('nama', $id)->delete();
        return redirect()->to(url('dashboard/home'))->with('success', 'Data Berhasil Dihapus');
    }
}
