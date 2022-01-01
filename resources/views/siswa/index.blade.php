@extends('layouts.app')

@section('content')
<a href="{{ url("siswa/create") }}">tambahkan siswa</a>
<table>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Action</th>
    </tr>
    @foreach ($siswa as $siswa)
        <tr>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->no_telp }}</td>
            <td>
                @can('update', $siswa)
                <a href="{{ url("/siswa/{$siswa->id}/edit") }}">edit</a>
                @endcan
                @can('delete', $siswa)
                <form action="{{ url("/siswa/{$siswa->id}/delete") }}" method="post">
                    @csrf
                    <input type="submit" value="hapus">
                </form>
                @endcan
                {{-- <a href="{{ url("/siswa/{$siswa->id}/delete") }}">hapus</a> --}}
            </td>
        </tr>
    @endforeach
</table>
@endsection