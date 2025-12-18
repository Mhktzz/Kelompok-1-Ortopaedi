<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function indexManajer()
    {
        $layanan = Layanan::latest()->get();
        return view('dashboard.manajer.layanan.index', compact('layanan'));
    }

    public function showManajer(Layanan $layanan)
    {
        return view('dashboard.manajer.layanan.show', compact('layanan'));
    }
    // INDEX
    public function index()
    {
        $layanan = Layanan::latest()->get();
        return view('dashboard.manajer.layanan.index', compact('layanan'));
    }

    // CREATE
    public function create()
    {
        $kategoriList = [
            'Pemeriksaan',
            'Tindakan Medis',
            'Laboratorium',
            'Rawat Jalan',
            'Lainnya',
        ];

        return view('dashboard.manajer.layanan.create', compact('kategoriList'));
    }

    // STORE (ADD)
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'nama_layanan' => 'required|string|max:255',
            'tarif' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        Layanan::create($request->all());

        return redirect()
            ->route('dashboard.manajer.layanan.index')
            ->with('success', 'Layanan berhasil ditambahkan');
    }

    // VIEW
    public function show(Layanan $layanan)
    {
        return view('dashboard.manajer.layanan.show', compact('layanan'));
    }

    // DELETE
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();

        return redirect()
            ->route('dashboard.manajer.layanan.index')
            ->with('success', 'Layanan berhasil dihapus');
    }
    // EDIT
    public function edit(Layanan $layanan)
    {
        $kategoriList = [
            'Pemeriksaan',
            'Tindakan Medis',
            'Laboratorium',
            'Rawat Jalan',
            'Lainnya',
        ];

        return view('dashboard.manajer.layanan.edit', compact('layanan', 'kategoriList'));
    }

    // UPDATE
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'kategori' => 'required|string',
            'nama_layanan' => 'required|string|max:255',
            'tarif' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $layanan->update($request->all());

        return redirect()
            ->route('dashboard.manajer.layanan.index')
            ->with('success', 'Layanan berhasil diperbarui');
    }
}
