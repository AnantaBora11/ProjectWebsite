<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = dashboard::orderBy('judul', 'asc')->paginate(5);
        return view('dashboard/project/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/project/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('deskripsi', $request->deskripsi);
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif',
        ],[
            'judul.required'=>'Nomor Induk Wajib Diisi',
            'deskripsi.required'=>'deskripsi Wajib Diisi',
            'foto.required'=>'foto Wajib Diisi',
            'foto.mimes'=>'format Wajib JPEG,JPG,PNG,GIF'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input ('deskripsi'),
            'foto' => $foto_nama
        ];
        dashboard::create($data);
        return redirect('dashboard/project')->with('success', 'Data Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = dashboard::where('judul', $id)->first();
        return view('dashboard/project/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = dashboard::where('judul', $id)->first();
        return view('dashboard/project/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'deskripsi' => 'required',
        ],[
            'deskripsi.required'=>'deskripsi Wajib Diisi',
        ]);
         
        $data = [
            'deskripsi' => $request->input('deskripsi'),
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

            $data_foto = dashboard::where('judul',$id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            $data['foto'] = $foto_nama;
        }

        dashboard::where('judul', $id)->update($data);
        return redirect('dashboard/project')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=dashboard::where('judul', $id)->first();
        File::delete(public_path('foto').'/'. $data->foto);
        dashboard::where('judul', $id)->delete();
        return redirect('dashboard/project')->with('success', 'Data Berhasil Dihapus');
    }
}
