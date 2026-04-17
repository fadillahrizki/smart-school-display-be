<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TeacherDuty;
use App\Http\Requests\StoreTeacherDutyRequest;
use App\Http\Requests\UpdateTeacherDutyRequest;

class TeacherDutyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => TeacherDuty::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherDutyRequest $request)
    {
        $teacherDuty = TeacherDuty::create($request->validated());

        return response()->json([
            'message' => 'Teacher duty created successfully',
            'data' => $teacherDuty,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TeacherDuty $teacherDuty)
    {
        return response()->json([
            'data' => $teacherDuty,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherDutyRequest $request, TeacherDuty $teacherDuty)
    {
        $teacherDuty->update($request->validated());

        return response()->json([
            'message' => 'Teacher duty updated successfully',
            'data' => $teacherDuty,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherDuty $teacherDuty)
    {
        $teacherDuty->delete();

        return response()->json([
            'message' => 'Teacher duty deleted successfully',
        ]);
    }
}
