<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\Subpoin;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SubPoinController extends Controller
{
    public function create()
    {
        $poins =  Poin::all();
        return view('admin.sku.subpoin.create', compact('poins'));
    }


    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'poin_id' => 'required',
                'subPoin' => 'required',
                'desc' => 'required'
            ]
        );

        $data['slug'] = Str::slug($data['subPoin']);


        subPoin::create($data);

        return redirect(route('admin'))->with('success', 'Berhasil tambah data');
    }

    public function edit(Subpoin $subPoin)
    {
        return view('admin.sku.subpoin.edit',  ['subPoin' => $subPoin]);
    }

    public function update(Subpoin $subPoin, Request $request)
    {
        $data = $request->validate([
            'poin' => 'required',
            'subPoin' => 'required',
            'desc' => 'required'

        ]);

        $data['slug'] = Str::slug($data['subPoin']);

        $subPoin->update($data);
        return redirect(route('admin'))->with('success', 'Berhasil edit data');
    }
    public function destroy(Subpoin $subPoin)
    {
        $subPoin->delete();

        return redirect(route('admin'))->with('success', 'Berhasil hapus data');
    }
}
