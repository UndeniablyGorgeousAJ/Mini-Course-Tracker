<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminLessonController extends Controller
{
    public function index()
    {
        return view('admin.lessons.index');
    }
}
