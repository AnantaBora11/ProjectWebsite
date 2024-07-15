@extends('dashboard.layout.index')
@section('template2')
<a href="/dashboard/project" class="btn btn-secondary">Kembali</a>
<form method="post" action="{{ '/dashboard/project/'.$data->judul }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h1>Judul: {{ $data->judul }}</h1>
    </div>
    <div>
        <label for="deskripsi" class="form-label">Alamat</label>
        <textarea name="deskripsi" type="text" class="form-control" id="judul" aria-describedby="emailHelp">{{ $data->deskripsi }}</textarea>
    </div>
    @if ($data->foto)
        <div class="mb3">
            <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto }}">
        </div>
    @endif
    <div>
        <label for="foto" class="form-label">Foto</label>
        <input name="foto" type="file" class="form-control" id="foto"></input>
    </div>
    <div class="md-3">
        <button type="submit">Update</button>
    </div>
</form>
@endsection