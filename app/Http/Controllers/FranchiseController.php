<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;


class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Franchise::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        $franchise = Franchise::create($validated);
        return response()->json($franchise, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Franchise::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $franchise = Franchise::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string|max:255',
        ]);
        $franchise->update($validated);
        return response()->json($franchise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Franchise::destroy($id);
    }
}
