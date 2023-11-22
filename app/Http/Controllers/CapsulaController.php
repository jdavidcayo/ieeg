<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capsula;

class CapsulaController extends Controller
{
    public function index(){
        $capsulas = Capsula::paginate();
        return view('capsula.index', compact('capsulas'))
            ->with('i', (request()->input('page', 1) - 1) * $capsulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $capsula = new Capsula();
        return view('capsula.create', compact('capsula'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
