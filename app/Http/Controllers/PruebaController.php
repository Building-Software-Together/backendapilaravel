<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prueba;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prueba = new Prueba;
        $prueba->nombre = "Sanduche";
        $prueba->precio = 15000;
        $prueba->descripcion = "Ejemplo";
        $prueba->save();
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
    public function show(string $id)
    {
        $comm = DB::table('prueba')
        ->get();

    return view('showCommission', compact('comm') );
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
