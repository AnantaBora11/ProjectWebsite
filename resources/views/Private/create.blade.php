@extends('private.layout.index')
@section('template')
    <form>
        <div>
            <label for="nomor_induk" class="form-label">Nomor Induk</label>
            <input type="text" class="form-control" id="nomor_induk" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="alamat" class="form-label">Alamat</label>
            <textarea type="text" class="form-control" id="nomor_induk" aria-describedby="emailHelp"></textarea>
        </div>
        <div>
            <button type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
