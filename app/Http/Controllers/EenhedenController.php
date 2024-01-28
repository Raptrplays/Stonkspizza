<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\units;

class EenhedenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = units::all();
        return view('manager/eenheden', ['units' => $units]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = units::all();

        return view ('eenheden.create', ['units' => $units]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $u = new units;
        $name = $request->name;

        $u->name = $name;

        $u->save();

        return redirect('eenheden');
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
        $unit = units::find($id);

        return view('eenheden.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $u = units::find($id);
        $name = $request->name;

        $u->name = $name;

        $u->save();

        return redirect('eenheden');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $units = units::find($id);
        $units->delete();

        return redirect('eenheden');
    }
}
