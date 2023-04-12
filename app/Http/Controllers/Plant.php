<?php

namespace App\Http\Controllers;

use App\Http\Resources\Plant as ResourcesPlant;
use App\Models\Plant as ModelsPlant;
use Illuminate\Http\Request;

class Plant extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plants = ModelsPlant::all();
        return ResourcesPlant::collection($plants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plants = ModelsPlant::create($request->all());
        return new ResourcesPlant($plants);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ModelsPlant::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plant = ModelsPlant::find($id);
        $plant->update($request->all());
        return $plant;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ModelsPlant::destroy($id);
    }
}
