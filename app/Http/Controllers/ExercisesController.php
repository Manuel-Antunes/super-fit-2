<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('manage-exercises', ['exercises' => $exercises]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
        ]);
        $files = $request->input('media');
        $exercise = Exercise::create($request->only(['name', 'description']));
        foreach ($files as $file) {
            $exercise->media()->attach($file);
        }
        return redirect('/exercises');
    }
}
