@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Lokasi Proyek</h1>

    <p><strong>Proyek ID:</strong> {{ $item->proyek_id }}</p>
    <p><strong>Lat:</strong> {{ $item->lat }}</p>
    <p><strong>Lng:</strong> {{ $item->lng }}</p>
    <p><strong>GeoJSON:</strong> <pre>{{ $item->geojson }}</pre></p>

    <a href="{{ route('lokasi-proyek.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
