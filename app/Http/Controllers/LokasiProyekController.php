<?php

namespace App\Http\Controllers;

use App\Models\LokasiProyek;
use Illuminate\Http\Request;

class LokasiProyekController extends Controller
{
    public function index()
    {
        $items = LokasiProyek::orderBy('created_at', 'desc')->paginate(15);
        return view('lokasi_proyek.index', compact('items'));
    }

    public function create()
    {
        return view('lokasi_proyek.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'proyek_id' => 'nullable|integer',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'geojson' => 'nullable|string',
        ]);

        LokasiProyek::create($data);

        return redirect()->route('lokasi-proyek.index')->with('success', 'Lokasi proyek berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = LokasiProyek::findOrFail($id);
        return view('lokasi_proyek.show', compact('item'));
    }

    public function edit($id)
    {
        $item = LokasiProyek::findOrFail($id);
        return view('lokasi_proyek.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $lokasi = LokasiProyek::findOrFail($id);

        $data = $request->validate([
            'proyek_id' => 'nullable|integer',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'geojson' => 'nullable|string',
        ]);

        $lokasi->update($data);

        return redirect()->route('lokasi-proyek.index')->with('success', 'Lokasi proyek berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $lokasi = LokasiProyek::findOrFail($id);
        $lokasi->delete();
        return redirect()->route('lokasi-proyek.index')->with('success', 'Lokasi proyek berhasil dihapus.');
    }
}
