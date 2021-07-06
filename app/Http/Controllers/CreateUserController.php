<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateUserController extends Controller
{
    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'ntag' => ['required', 'string', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );



        User::create([
            'name' => $data['name'],
            'email' => null,
            'ntag' => $data['ntag'],
            'role' => 1,
            'agama' => null,
            'alamat' => null,
            'nama_lapang' => null,
            'password' => Hash::make($data['password']),
        ]);

        return redirect(route('admin'))->with('success', 'Berhasil tambah data');
    }
}
