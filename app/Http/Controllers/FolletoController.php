<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folleto;

class FolletoController extends Controller
{
    public function index()
    {
        $folletos = Folleto::all();
        return view('folletos.index', compact('folletos'));
    }
}
