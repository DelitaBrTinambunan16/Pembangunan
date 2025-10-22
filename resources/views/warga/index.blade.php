@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Warga</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('warga.create') }}" class="btn btn-primary">Tambah Warga</a>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $i => $item)
            <tr>
                <td>{{ $items->firstItem() + $i }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->umur }}</td>
                <td>
                    <a href="{{ route('warga.show', $item->warga_id) }}" class="btn btn-sm btn-info">Lihat</a>
                    <a href="{{ route('warga.edit', $item->warga_id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('warga.destroy', $item->warga_id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $items->links() }}
</div>
@endsection
