<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\Subpoin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $subPoin = Subpoin::with('poins')->orderBy('subPoin', 'asc')->get();
        $poins =  Poin::orderBy('id', 'asc')->get();
        return view('user.sku.index', compact('poins', 'subPoin'));
    }
}
