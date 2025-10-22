@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Warga</h1>

    <p><strong>Nama:</strong> {{ $item->nama }}</p>
    <p><strong>NIK:</strong> {{ $item->nik }}</p>
    <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
    <p><strong>Telepon:</strong> {{ $item->telepon }}</p>
    <p><strong>Umur:</strong> {{ $item->umur }}</p>

    <a href="{{ route('warga.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
