@extends('dashboard.layout.index')
@section('template2')
    <div>
        <a class="brn btn-secondary" href="/dashboard/home">Kembali</a>
        </h1>{{ $data->nama }}<h1>
        <p>
            <b>Judul</b> {{ $data->nama }}
        </p>
        <p>
            <b>Deskripsi</b> {{ $data->deskripsi }}
        </p>
        <p>
            <b>Deskripsi</b> {{ $data->deskripsi2 }}
        </p>
    </div>
@endsection