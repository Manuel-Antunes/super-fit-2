<?php

namespace App\Http\Controllers;

use App\Models\Exercises;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function index()
    {
        $exercises = Exercises::query();
        return view('manage-exercises', ['exercises' => $exercises]);
    }
}
