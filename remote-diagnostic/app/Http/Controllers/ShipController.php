<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ships = Ship::all();
        return view("ship.index", ['ships' => $ships]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ship.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Ship::create([
            'ship_id' => $request['shipId'],
            'ship_name' => $request['shipName'],
            'user_name' => $request['userName'],
            'emission_id' => $request['emissionId'],
        ]);
        return redirect(route('ship.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Ship $ship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ship $ship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ship $ship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ship $ship)
    {
        //
        Ship::destroy($ship->id);
        return redirect(route('ship.index'));
    }
}
