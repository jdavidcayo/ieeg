<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilsController extends Controller
{
    public function generarpwd()
    {
        // $pwd = Hash::make('12345678');
        $pwd = Str::random(12);
        return $pwd;
    }
}
