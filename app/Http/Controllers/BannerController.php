<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::all();
        return view('dashboard.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.banner.create', [
            'banner' => Banner::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
        'keterangan' => 'required|max:255',
        'image' => 'image|file|max:2048',
    ]);
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Banner::create($validatedData);

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
         return view('dashboard.banner.show', [
            'banners' => $banner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('dashboard.banner.edit', [
            'banner' => $banner,
            'Keterangan' => Banner::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $rules = [
        'keterangan' => 'required|max:255',
        'image' => 'image|file|max:1024',
    ];
    $validatedData = $request->validate($rules);
    if($request->file('image')) {
        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('post-images');
    }
        Banner::where('id', $banner->id)
            ->update($validatedData);

        return redirect('/dashboard/banner')->with('success', 'Banner berhasil diupdate!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if($banner->image) {
            Storage::delete($banner->image);
        }
        Banner::destroy($banner->id);
        return redirect('/dashboard/banner')->with('success', 'Banner berhasil Dihapus!');
    }
}
