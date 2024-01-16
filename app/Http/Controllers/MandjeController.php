<?php

namespace App\Http\Controllers;
use App\Models\pizzas;
use App\Models\ingredienten;
use App\Models\grootte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MandjeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredienten = ingredienten::all();
        $groottes = grootte::all();
        $order = session('order', []);
        return view('mandje', [ 'ingredienten' => $ingredienten, 'groottes' => $groottes, 'order' => $order]);
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
        $requestData = $request->all();
        $order = session('order', []);
        $groottes = Grootte::all();
        $ingredienten = Ingredienten::all();
        
        foreach ($order as $item) {
            $itemId = $item->id;
        
            $selectedGrootte = $requestData['grootte_' . $itemId];
            $selectedIngredient1 = $requestData['ingredient1_' . $itemId];
            $selectedIngredient2 = $requestData['ingredient2_' . $itemId];
        
            $grootte = Grootte::find($selectedGrootte);
            $ingredient1 = Ingredienten::find($selectedIngredient1);
            $ingredient2 = Ingredienten::find($selectedIngredient2);
        
            $itemTotaalprijs = $ingredient1->price + $ingredient2->price * $grootte->pricefactor;
        
            $item->grootte = $grootte;
            $item->ingredient1 = $ingredient1;
            $item->ingredient2 = $ingredient2;
            $item->totaalprijs = $itemTotaalprijs;
        }
        
        $totaalprijs = 0;
        foreach ($order as $item) {
            $totaalprijs += $item->totaalprijs;
        }
        
        return view('mandje', [
            'totaalprijs' => $totaalprijs,
            'order' => $order,
            'ingredienten' => $ingredienten,
            'groottes' => $groottes
        ]);
        
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
    public function destroy(Request $request, string $pizza_id)
    {
        $order = session('order', []);

        // Find the index of the pizza in the order array
        $index = array_search($pizza_id, array_column($order, 'id'));

        // If the pizza is found, remove it from the order
        if ($index !== false) {
            unset($order[$index]);
            session(['order' => array_values($order)]);
        }

        return redirect('mandje');
    }
}
