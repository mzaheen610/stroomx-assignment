<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Guardian;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Guardian::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guardians,email',
            'phone' => 'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'franchise_id' => 'required|exists:franchises,id',
        ]);
        $guardian = Guardian::create($validated);
        return response()->json($guardian, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Guardian::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guardian = Guardian::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:guardians,email' . $id,
            'phone' => 'sometimes|required|string|max:255',
            'relationship' => 'sometimes|required|string|max:255',
            'franchise_id' => 'sometimes|required|exists:franchises,id',
        ]);
        $guardian->update($validated);
        return response()->json($guardian);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Guardian::destroy($id);
    }
}
