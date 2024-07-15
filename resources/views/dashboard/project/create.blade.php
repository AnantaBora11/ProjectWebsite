@extends('dashboard.layout.index')
@section('template2')
<form method="post" action="/dashboard/project" enctype="multipart/form-data">
    <a href="/dashboard/project" class="btn btn-secondary">Kembali</a>
    @csrf
    <div>
        <label for="judul" class="form-label">Judul</label>
        <input name="judul" type="text" class="form-control" id="judul" value="{{ Session::get('judul') }}" aria-describedby="emailHelp">
    </div>
    <div>
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea name="deskripsi" type="text" class="form-control">{{ Session::get('deskripsi') }}</textarea>
    </div>
    <div>
        <label for="foto" class="form-label">Foto</label>
        <input name="foto" type="file" class="form-control" id="foto"></input>
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </div>
</form>
@endsection