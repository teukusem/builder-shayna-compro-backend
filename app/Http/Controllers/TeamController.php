<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return response()->json(Team::all());
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean',
            'is_view_all' => 'nullable|boolean',
        ]);
        $team = Team::create($validated);
        return response()->json($team, 201);
    }

    // Display the specified resource.
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return response()->json($team);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'role' => 'sometimes|required|string|max:255',
            'location' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean',
            'is_view_all' => 'nullable|boolean',
        ]);
        $team->update($validated);
        return response()->json($team);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
