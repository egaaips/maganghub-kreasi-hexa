<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        Cast::create($request->all());
        return redirect('/cast')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required'
        ]);

        $cast = Cast::findOrFail($id);
        $cast->update($request->all());
        return redirect('/cast')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = Cast::findOrFail($id);
        $cast->delete();
        return redirect('/cast')->with('success', 'Data berhasil dihapus');
    }
}
