<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\Subpoin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $subPoins = Subpoin::with('poins')->orderBy('poin_id', 'asc')->orderBy('subPoin', 'asc')->paginate(10);
        $poins =  Poin::orderBy('id', 'asc')->paginate(10);
        return view('admin.sku.index', compact('poins', 'subPoins'));
    }
}
