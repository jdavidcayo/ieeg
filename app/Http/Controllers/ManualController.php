<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manual;

class ManualController extends Controller
{
    public function index()
    {   
        $manuales = Manual::all();
        return view('manual.index', compact('manuales'));
    }

    public function show(string $id)
    {
        $manual = Manual::find($id);
        return view('manual.show', compact('manual'));
    }
}
