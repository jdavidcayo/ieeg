<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manual;

class ManualesController extends Controller
{
    public function index()
    {   
        $manuales = Manual::all();
        return view('manuales', compact('manuales'));
    }

    public function show(string $id)
    {
        $manual = Manual::find($id);
        return view('manual.show', compact('manual'));
    }
}
