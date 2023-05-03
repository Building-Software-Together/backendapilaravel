<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Trabajo;

class TrabajosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trabajos = Trabajo::all();

        return view('companies', compact('trabajos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trabajo = new Trabajo;
        $trabajo->logo = "img/twitter.png";
        $trabajo->nombre = "Marketing Holder";
        $trabajo->empresa = "Twitter";
        $trabajo->direccion = "4th Avenue, New York, NY, United States";
        $trabajo->salario = 32000;
        $trabajo->tiempo = "Full Time";
        $trabajo->save();
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
