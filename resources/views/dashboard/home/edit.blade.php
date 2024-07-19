@extends('dashboard.layout.index')
@section('template2')
<!-- START FORM -->

<form action="{{ route('dashboard.home.update', $data->nama) }}" method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a class="btn btn-secondary" href="{{ url('dashboard/home') }}">kembali</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input value="{{ $data->nama }}" type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi 1</label>
            <div class="col-sm-10">
                <textarea value="{{ $data->deskripsi }}" type="text" class="form-control" name='deskripsi' id="deskripsi"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi2" class="col-sm-2 col-form-label">Deskripsi 2</label>
            <div class="col-sm-10">
                <textarea value="{{ $data->deskripsi2 }}" type="text" class="form-control" name='deskripsi2' id="deskripsi2"></textarea>
            </div>
        </div>
        @if ($data->foto)
            <div class="mb-3">
                <img src="{{ url('foto').'/'.  $data->foto}}" style="max-width: 200px; max-height: 200px" >
            </div>
        @endif
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi2" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
