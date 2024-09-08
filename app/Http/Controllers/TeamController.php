<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    // Fetch all teams
    public function index() {
        return Team::all();  // Retrieves all teams
    }

    // Fetch a specific team by ID
    public function show($id) {
        return Team::findOrFail($id);  // Retrieves a specific team by team_id
    }

    // Create a new team
    public function store(Request $request) {
        $team = Team::create($request->all());
        return response()->json($team, 201);  // 201 = Created
    }

    // Update an existing team
    public function update(Request $request, $id) {
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return response()->json($team, 200);  // 200 = Success
    }

    // Delete a team
    public function destroy($id) {
        Team::destroy($id);
        return response()->json(null, 204);  // 204 = No Content
    }
}
