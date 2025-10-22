@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lokasi Proyek</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('lokasi-proyek.create') }}" class="btn btn-primary">Tambah Lokasi</a>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Proyek ID</th>
                <th>Lat</th>
                <th>Lng</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $i => $item)
            <tr>
                <td>{{ $items->firstItem() + $i }}</td>
                <td>{{ $item->proyek_id }}</td>
                <td>{{ $item->lat }}</td>
                <td>{{ $item->lng }}</td>
                <td>
                    <a href="{{ route('lokasi-proyek.show', $item->lokasi_id) }}" class="btn btn-sm btn-info">Lihat</a>
                    <a href="{{ route('lokasi-proyek.edit', $item->lokasi_id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('lokasi-proyek.destroy', $item->lokasi_id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
