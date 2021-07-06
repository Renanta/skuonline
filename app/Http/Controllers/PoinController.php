<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\Subpoin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PoinController extends Controller
{

    public function create()
    {
        return view('admin.sku.poin.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required | unique:poins',
                'desc' => 'required'
            ]
        );

        $data['slug'] = Str::slug($data['name']);


        Poin::create($data);

        return redirect(route('admin'))->with('success', 'Berhasil tambah data');
    }

    public function edit(Poin $poin)
    {
        return view('admin.sku.poin.edit', ['poin' => $poin]);
    }

    public function update(Poin $poin, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required'

        ]);

        $data['slug'] = Str::slug($data['name']);

        $poin->update($data);

        return redirect(route('admin'))->with('success', 'Berhasil edit data');
    }

    public function show($id)
    {
        $subPoin = SubPoin::with('poins')->where('poin_id', $id)->orderBy('subPoin', 'asc')->paginate(10);
        $poin = Poin::findOrFail($id);
        return view('admin.sku.poin.show', compact('poin', 'subPoin'));
    }

    public function destroy(Poin $poin)
    {
        $poin->delete();

        return redirect(route('admin'))->with('success', 'Berhasil hapus data');
    }
}
