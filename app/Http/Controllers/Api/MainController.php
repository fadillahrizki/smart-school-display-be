<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function stats()
    {
        return response()->json([
            'teacher_count' => Teacher::count(),
            'mata_pelajaran_count' => MataPelajaran::count(),
            'agenda_count' => Agenda::count(),
            'announcement_count' => Announcement::count(),
            'kelas_count' => Kelas::count(),
        ]);
    }
}
