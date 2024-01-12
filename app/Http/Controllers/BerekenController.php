<?php

namespace App\Http\Controllers;
use App\Http\Controllers\IngredientenController;
use App\Models\ingredienten;
use App\Models\grootte;

use Illuminate\Http\Request;

class BerekenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
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
        $ingredient = $request->ingredient;
        $ingredient2 = $request->ingredient2;
        $grootte = $request->grootte;

        $groottes = grootte::all();
        $ingredienten = Ingredienten::all();
        $order = session('order', []);

        $ingredient = Ingredienten::find($ingredient);
        $ingredient2 = Ingredienten::find($ingredient2);
        $grootte = Grootte::find($grootte);

        $totaalprijs = $ingredient->price + $ingredient2->price * $grootte->pricefactor;
        
      
        return view('mandje', ['totaalprijs' => $totaalprijs, 'order' => $order, 'ingredienten' => $ingredienten, 'groottes' => $groottes]);
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
