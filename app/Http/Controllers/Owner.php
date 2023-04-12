<?php

namespace App\Http\Controllers;

use App\Http\Resources\Owner as ResourcesOwner;
use App\Models\Owner as ModelsOwner;
use Illuminate\Http\Request;

class Owner extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = ModelsOwner::all();
        return ResourcesOwner::collection($owners);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $owner = ModelsOwner::create($request->all());
        return new ResourcesOwner($owner);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ModelsOwner::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $owner = ModelsOwner::find($id);
        $owner->update($request->all());
        return $owner;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ModelsOwner::destroy($id);
    }
}
