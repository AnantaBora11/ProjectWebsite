@extends('dashboard.layout.index')
@section('template2')
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <a href="{{ route('dashboard.home.create') }}" class="btn btn-primary">+ Tambah Data</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-3">Foto</th>
                        <th class="col-md-3">Nama</th>
                        <th class="col-md-4">Deskripsi 1</th>
                        <th class="col-md-2">Deskripsi 2</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $item )   
                    <tr>
                        <td>
                            @if ($item->foto)
                                <img style="max-width: 100px; max-height:100px" src="{{ url('foto').'/'.$item->foto }}" alt="">
                            @endif
                        </td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->deskripsi2 }}</td>
                        <td>
                            <a  href='{{ url('dashboard/home',$item->nama.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form method="post" action="{{ route('dashboard.home.destroy', $item->nama) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" name="submit">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- AKHIR DATA -->
    </main>
@endsection
