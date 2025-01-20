<?php

namespace App\Http\Controllers;

use App\Models\Disco;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $discos = Disco::all();
        return view('discos')->with(['discos' => $discos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Disco $disco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disco $disco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disco $disco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disco $disco)
    {
        //
    }
}
