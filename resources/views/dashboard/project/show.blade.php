@extends('dashboard.layout.index')
@section('template2')
    <div>
        <a class="brn btn-secondary" href="/dashboard/project">Kembali</a>
        </h1>{{ $data->nama }}<h1>
        <p>
            <b>Judul</b> {{ $data->judul }}
        </p>
        <p>
            <b>Deskripsi</b> {{ $data->deskripsi }}
        </p>
    </div>
@endsection