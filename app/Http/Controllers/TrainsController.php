<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->validate([
            'personal_id' => ['required', 'exists:users,id'],
            'client_id' => ['required', 'exists:users,id'],
            'date' => ['required', 'date'],
        ]);

        $train = Train::create($data);

        return $train;
    }

    public function index()
    {
        return view('train.index');
    }
}
