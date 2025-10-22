@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Warga</h1>

    <form action="{{ route('warga.store') }}" method="POST">
        @include('warga._form')
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('warga.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
