<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'username' => 'required|min:8|max:12|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:8|max:20'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        
        return redirect('/login')->with('sukses', 'Pendaftaran berhasil! Silahkan login');
    }
}
