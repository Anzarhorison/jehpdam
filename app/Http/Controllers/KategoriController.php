<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Display a listing of the categories
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    // Show the form for creating a new category
    public function create()
    {
        return view('kategori.create');
    }

    // Store a newly created category in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategori',
        ]);

        Kategori::create($request->only('nama'));

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dibuat.');
    }

    // Show the form for editing the specified category
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    // Update the specified category in storage
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategori,nama,' . $kategori->id,
        ]);

        $kategori->update($request->only('nama'));

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil update.');
    }

    // Remove the specified category from storage
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil didelete.');
    }
}
