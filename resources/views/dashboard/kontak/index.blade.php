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
                <a href="{{ route('dashboard.kontak.create') }}" class="btn btn-primary">+ Tambah Data kontak</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-3">Nomor</th>
                        <th class="col-md-3">Youtube</th>
                        <th class="col-md-3">Twitter</th>
                        <th class="col-md-3">Instagram</th>
                        <th class="col-md-3">Facebook</th>
                        <th class="col-md-3">Email</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $item )   
                    <tr>
                        <td>{{ $item->nomor }}</td>
                        <td>{{ $item->youtube }}</td>
                        <td>{{ $item->twitter }}</td>
                        <td>{{ $item->instagram }}</td>
                        <td>{{ $item->facebook }}</td>
                        <td>{{ $item->email }}</td>
                        
                        <td>
                            <a  href='{{ url('dashboard/kontak',$item->nomor.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form method="post" action="{{ route('dashboard.kontak.destroy', $item->nomor) }}" class="d-inline">
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
