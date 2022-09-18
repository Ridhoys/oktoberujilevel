<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nik' => 'required|max:255',
            'nama_lengkap' => ['required', 'max:255'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('login');
    }
}
