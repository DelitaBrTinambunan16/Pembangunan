<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $items = Warga::orderBy('created_at', 'desc')->paginate(15);
        return view('warga.index', compact('items'));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:50|unique:warga,nik',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:50',
            'umur' => 'nullable|integer|min:0',
        ]);

        Warga::create($data);

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = Warga::findOrFail($id);
        return view('warga.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Warga::findOrFail($id);
        return view('warga.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:50|unique:warga,nik,' . $warga->warga_id . ',warga_id',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:50',
            'umur' => 'nullable|integer|min:0',
        ]);

        $warga->update($data);

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();
        return redirect()->route('warga.index')->with('success', 'Data warga berhasil dihapus.');
    }
}
