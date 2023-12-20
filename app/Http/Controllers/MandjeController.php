<?php

namespace App\Http\Controllers;
use App\Models\pizzas;
use App\Models\ingredienten;
use App\Models\grootte;
use Illuminate\Http\Request;

class MandjeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = pizzas::all();
        $ingredienten = ingredienten::all();
        $groottes = grootte::all();
        return view('mandje', ['pizzas' => $pizzas, 'ingredienten' => $ingredienten, 'groottes' => $groottes]);
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
