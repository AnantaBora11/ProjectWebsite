@extends('dashboard.layout.index')
@section('template2')
        <thead >
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto)
                            <img style="max-width:50px;max-height:50px " src="{{ url('foto'). '/' . $item->foto }}">
                        @endif
                    </td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href='{{ url('/dashboard/project/'. $item->judul) }}'>Detail</a>
                        <a class="btn btn-warning btn-sm" href='{{ url('/dashboard/project/'. $item->judul. '/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Yakin data dihapus?')" class="d-inline" action="{{ '/dashboard/project/'.$item->nomor_induk }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Del</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection