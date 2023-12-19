<?php

namespace App\Http\Controllers;
use App\Models\ingredients;
use App\Models\units;
use Illuminate\Http\Request;

class IngredientenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = ingredients::all();
        $units = units::all();
        return view('manager/ingredienten', ['ingredients' => $ingredients, 'units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = units::all();

        return view ('ingredienten.create', ['units' => $units]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $i = new ingredients;
        $naam = $request->name;
        $prijs = $request->price;

        $i->name = $naam;
        $i->price = $prijs;
        $i->save();

        $u = new units;
        $u->unit_id = $i->id;
        $unit_id = $request->unit;
        $u->unit_id = $unit_id;
        $u->save();

        return redirect('index');
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
        $ingredients = ingredients::find($id);
        $units = units::all();

        return view('ingredienten.edit', compact( 'ingredients', 'units'));
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
