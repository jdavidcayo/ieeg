<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function documentos()
    {
        return view('documentos');
    }
}
