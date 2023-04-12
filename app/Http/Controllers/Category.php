<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category as ResourcesCategory;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ModelsCategory::all();
        return ResourcesCategory::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = ModelsCategory::create($request->all());
        return new ResourcesCategory($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ModelsCategory::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = ModelsCategory::find($id);
        $category->update($request->all());
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ModelsCategory::destroy($id);
    }
}
