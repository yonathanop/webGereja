<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('dashboard.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak', [
            'kontak' => Kontak::all()
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'nama' => 'required|min:4',
        'no_HP' => 'required|max:15',
        'pesan' => 'required',
        ]);
        Kontak::create($validated);
        return redirect('kontak')->with('success', 'Berhasil mengirim ke kontak admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        // return view('dashboard.kontak.show', [
        //     'kontak' => $kontak
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        Kontak::destroy($kontak->id);
        return redirect('/dashboard/kontak')->with('success', 'Pesan berhasil Dihapus!');
    }
}
