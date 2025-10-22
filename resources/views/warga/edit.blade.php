@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Warga</h1>

    <form action="{{ route('warga.update', $item->warga_id) }}" method="POST">
        @method('PUT')
        @include('warga._form')
        <button class="btn btn-primary">Perbarui</button>
        <a href="{{ route('warga.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
