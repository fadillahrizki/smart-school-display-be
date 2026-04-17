<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Http\Requests\StoreAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => Agenda::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgendaRequest $request)
    {
        $agenda = Agenda::create($request->validated());

        return response()->json([
            'message' => 'Agenda created successfully',
            'data' => $agenda,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        return response()->json([
            'data' => $agenda,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendaRequest $request, Agenda $agenda)
    {
        $agenda->update($request->validated());

        return response()->json([
            'message' => 'Agenda updated successfully',
            'data' => $agenda,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return response()->json([
            'message' => 'Agenda deleted successfully',
        ]);
    }
}
