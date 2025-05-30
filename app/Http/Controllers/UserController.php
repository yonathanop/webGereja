<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        
        $users = User::all();
        return view('dashboard.user.index', compact('users'));
    }
    public function toggleAdmin(User $user){
        $user->is_admin = !$user->is_admin;
        $user->save();

        return redirect()->route('user.index')->with('success', 'Status pengguna berhasil diubah');

    }
    public function create(){
        //tanpa create
    }
    public function edit(User $user){
        //kosong
    }
    public function store(Request $request){
        // kosong
    }
    public function update(Request $request, User $user){
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
    ]);

    $user->update($request->only('name', 'email'));

    return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
    }
    public function destroy(User $user)
{
    if (Auth::check() && Auth::user()->id === $user->id) {
        return redirect()->route('user.index')
            ->with('error', 'Akun Anda tidak dapat dihapus');
    }

    $user->delete();

    return redirect()->route('user.index')
        ->with('success', 'User berhasil dihapus');
}
}
