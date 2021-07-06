<?php

namespace App\Http\Controllers;

use App\Models\Proof;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProofAdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 1)->paginate(10);
        return view('admin.sku.proof.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::get($id);
        $proofs = Proof::where('user_id', $id)->get();
        return view('admin.sku.proof.show', compact('proofs'));
    }

    public function edit($id)
    {
        $proof = Proof::findOrFail($id);
        return view('admin.sku.proof.edit', compact('proof'));
    }

    public function update(Proof $proof, Request $request)
    {
        $data = $request->validate(
            [
                'verification' => 'required',
                'message' => 'required'
            ]
        );


        $proof->update($data);

        return redirect(route('proofAdmin.index'))->with('success', 'Berhasil edit data');
    }
}
