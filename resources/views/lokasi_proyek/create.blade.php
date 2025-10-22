@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Lokasi Proyek</h1>

    <form action="{{ route('lokasi-proyek.store') }}" method="POST">
        @include('lokasi_proyek._form')
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('lokasi-proyek.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
