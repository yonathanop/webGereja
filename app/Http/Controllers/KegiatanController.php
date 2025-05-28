<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('dashboard.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kegiatan.create', [
            'kegiatan' => Kegiatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'informasi' => 'required|string',
        'waktu' => 'required|date',
        'organisasi' => 'required|string',
    ]);
        kegiatan::create($validatedData);

        return redirect()->route('kegiatan.index')->with('success', 'kegiatan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.edit', [
            'kegiatan' => $kegiatan,
            'informasi' => Kegiatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $rules = [
        'informasi' => 'required|string',
        'waktu' => 'required|date',
        'organisasi' => 'required|string',
    ];
        $validatedData = $request->validate($rules);
        Kegiatan::where('id', $kegiatan->id)
            ->update($validatedData);

        return redirect('/dashboard/kegiatan')->with('success', 'Kegiatan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        Kegiatan::destroy($kegiatan->id);
        return redirect('/dashboard/kegiatan')->with('success', 'Kegiatan berhasil Dihapus!');
    }
}
