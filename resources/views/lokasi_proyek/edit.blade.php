@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lokasi Proyek</h1>

    <form action="{{ route('lokasi-proyek.update', $item->lokasi_id) }}" method="POST">
        @method('PUT')
        @include('lokasi_proyek._form')
        <button class="btn btn-primary">Perbarui</button>
        <a href="{{ route('lokasi-proyek.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
