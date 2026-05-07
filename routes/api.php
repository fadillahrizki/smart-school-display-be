<?php

use App\Http\Controllers\Api\AgendaController;
use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\MataPelajaranController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\TeacherDutyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('mata_pelajaran', MataPelajaranController::class);
Route::apiResource('kelas', KelasController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('agendas', AgendaController::class);
Route::apiResource('announcements', AnnouncementController::class);
Route::apiResource('schedules', ScheduleController::class);
Route::apiResource('teacher_duties', TeacherDutyController::class);

Route::get('/stats', [\App\Http\Controllers\Api\MainController::class, 'stats']);
