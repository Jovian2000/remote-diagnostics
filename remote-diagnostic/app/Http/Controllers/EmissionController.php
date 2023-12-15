<?php

namespace App\Http\Controllers;

use App\Models\Emission;
use Illuminate\Http\Request;

class EmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $emissions = Emission::all();
        return view("emission.index", ['emissions' => $emissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('emission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Emission::create([
            'emission_id' => $request['emissionId'],
            'nox_emission' => $request['noxEmission'],
            'co2_emission' => $request['co2Emission'],
            'ship_id' => $request['shipId'],
        ]);
        return redirect(route('emission.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Emission $emission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emission $emission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emission $emission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emission $emission)
    {
        //
        Emission::destroy($emission->id);
        return redirect(route('emission.index'));
    }
}
