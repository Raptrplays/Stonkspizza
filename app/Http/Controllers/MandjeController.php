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

        return back();
    }
}
