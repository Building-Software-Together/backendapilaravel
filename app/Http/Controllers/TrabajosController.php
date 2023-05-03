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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trabajo = new Trabajo;
        $trabajo->logo = "img/uber-logo.png";
        $trabajo->nombre = "IOS Developer";
        $trabajo->empresa = "Uber";
        $trabajo->direccion = "535 Mission St, San Fransisco, California, United States";
        $trabajo->salario = 30.000;
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
