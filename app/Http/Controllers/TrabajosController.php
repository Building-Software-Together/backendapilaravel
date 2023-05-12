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
       // $trabajos = Trabajo::all();

        return view('companies', ["trabajos"=>Trabajo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trabajo = new Trabajo;
        $trabajo->logo = "img/twitter.png";
        $trabajo->nombre = "ingeniero sistemas";
        $trabajo->empresa = "Twitter";
        $trabajo->direccion = "cr 50 barrio xx";
        $trabajo->salario = 50000;
        $trabajo->tiempo = "tiempo completo";
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
