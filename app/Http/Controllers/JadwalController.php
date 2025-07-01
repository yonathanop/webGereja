<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Models\Pendeta;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('dashboard.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namaPendeta = Pendeta::all();
        return view('dashboard.jadwal.create', compact('namaPendeta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'informasi' => 'required|string',
        'waktu' => 'required|date|after_or_equal:today',
        'pendeta_id' => 'required|exists:pendeta,id',
    ]);
        jadwal::create($validatedData);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        $namaPendeta = Pendeta::all();
        return view('dashboard.jadwal.edit', compact('jadwal', 'namaPendeta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
         $rules = [
        'informasi' => 'required|string',
        'waktu' => 'required|date|after_or_equal:today',
        'pendeta_id' => 'required|exists:pendeta,id',
    ];
        $validatedData = $request->validate($rules);
        $jadwal->update($validatedData);

        return redirect('/dashboard/jadwal')->with('success', 'Jadwal berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);
        return redirect('/dashboard/jadwal')->with('success', 'Jadwal berhasil Dihapus!');
    }
}
