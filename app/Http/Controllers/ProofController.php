<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\Proof;
use App\Models\Subpoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProofController extends Controller
{
    public function index($id)
    {
        $subPoin = Subpoin::with('poins')->where('poin_id', $id)->orderBy('subPoin', 'asc')->paginate(10);
        $poin = Poin::findOrFail($id);
        return view('user.sku.proof.index', compact('poin', 'subPoin'));
    }

    public function create($id)
    {
        $subpoin = Subpoin::with('poins')->findOrFail($id);
        return view('user.sku.proof.create', compact('subpoin'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->validate(
            [
                'subpoin_id' => 'required',
                'desc' => 'required',
                'file' => 'mimes:pdf,jpeg,jpg,png|required|max:10000',
                'verification' => 'required',
                'message' => 'required',
                'date' => 'required'
            ]
        );
        $data['proof'] = date('dmyHis') . '.' . $request->file('file')->extension();
        Storage::putFileAs('public/file_bukti', $request->file('file'), $data['proof']);
        unset($data['file']);
        $data['user_id'] = Auth::id();

        Proof::create($data);
        return redirect(route('proof.show', $id))->with('success', 'Berhasil tambah data');
    }

    public function show($id)
    {
        $proofs = Proof::with('subpoins')->where('subpoin_id', $id)->where('user_id', Auth::id())->get();
        $subpoin = Subpoin::findOrFail($id);
        return view('user.sku.proof.show', compact('proofs', 'subpoin'));
    }

    public function edit($id)
    {
        $proof = Proof::findOrFail($id);
        $subpoin = Subpoin::with('poins')->findOrFail($id);
        return view('user.sku.proof.edit', compact('proof', 'subpoin'));
    }

    public function update(Proof $proof, Request $request)
    {
        $data = $request->validate([
            'subpoin_id' => 'required',
            'desc' => 'required',
            'verification' => 'required',
            'message' => 'required',
            'date' => 'required'

        ]);
        if ($request->file('file')) {
            $request->validate([
                'file' => 'mimes:jpeg,jpg,png,pdf|required|max:10000',
            ]);
            $data['proof'] = date('dmyHis') . '.' . $request->file('file')->extension();
            Storage::putFileAs('public/file_bukti', $request->file('file'), $data['proof']);
            unset($data['file']);
        }
        $data['user_id'] = Auth::id();

        $proof->update($data);
        return redirect(route('user'))->with('success', 'Berhasil edit data');
    }
    public function destroy(Proof $proof)
    {
        $proof->delete();

        return redirect(route('user'))->with('success', 'Berhasil hapus data');
    }
}
