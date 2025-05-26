<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

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
        return view('dashboard.jadwal.create', [
            'jadwal' => Jadwal::all()
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
        'namaPendeta' => 'required|string',
    ]);
        jadwal::create($validatedData);

        return redirect()->route('jadwal.index')->with('success', 'jadwal berhasil ditambahkan!');
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
        return view('dashboard.jadwal.edit', [
            'jadwal' => $jadwal,
            'informasi' => Jadwal::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
         $rules = [
        'informasi' => 'required|string',
        'waktu' => 'required|date',
        'namaPendeta' => 'required|string',
    ];
        $validatedData = $request->validate($rules);
        Jadwal::where('id', $jadwal->id)
            ->update($validatedData);

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
