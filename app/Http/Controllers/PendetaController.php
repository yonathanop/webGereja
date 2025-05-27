<?php

namespace App\Http\Controllers;

use App\Models\Pendeta;
use Illuminate\Http\Request;

class PendetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendeta = Pendeta::all();
        return view('dashboard.pendeta.index', compact('pendeta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('dashboard.pendeta.create', [
            'pendeta' => Pendeta::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'namaPendeta' => 'required|string',
    ]);
        Pendeta::create($validatedData);

        return redirect()->route('pendeta.index')->with('success', 'Berhasil menambahkan Pendeta!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendeta $pendeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendeta $daftarPendeta)
    {
        return view('dashboard.pendeta.edit', [
            'pendeta' => $daftarPendeta,
            'daftarPendeta' => Pendeta::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendeta $daftarPendeta)
    {
        $rules = [
        'namaPendeta' => 'required|string',
    ];
        $validatedData = $request->validate($rules);
        Pendeta::where('id', $daftarPendeta->id)
            ->update($validatedData);

        return redirect('/dashboard/pendeta')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendeta $daftarPendeta)
    {
        $daftarPendeta->delete();
        return redirect('/dashboard/pendeta')->with('success', 'Data berhasil Dihapus!');
    }
}
