<?php

namespace App\Http\Controllers;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Pendeta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DashboardPostController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::with('pendeta')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('dashboard.posts.create', [
            'pendeta' => Pendeta::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
         $validatedData = $request->validate([
        'title' => 'required|max:255',
        'slug' => 'required|unique:posts',
        'pendeta_id' => 'required|exists:pendeta,id',
        'image' => 'image|file|max:2048',
        'body' => 'required',
    ]);
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['excerpt'] = str()->limit(strip_tags($request->body), 100);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Renungan baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post->load('pendeta')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'pendeta' => Pendeta::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
        'title' => 'required|max:255',
        'slug' => 'required|unique:posts,slug,' . $post->id,
        'pendeta_id' => 'required|exists:pendeta,id',
        'image' => 'image|file|max:1024',
        'body' => 'required',
    ];
    $validatedData = $request->validate($rules);
    if($request->file('image')) {
        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('post-images');
    }
        $validatedData['excerpt'] = str()->limit(strip_tags($request->body), 100);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Renungan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Renungan berhasil Dihapus!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    



}
