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
        $trainsByStartDate = [];
        $trainsByEndDate = [];
        for ($i = 1; $i <= 12; $i++) {
            $trainsByStartDate[] = Train::query()->whereMonth("start_date", "=", str_pad($i, 2, 0, STR_PAD_LEFT))->count();
            $trainsByEndDate[] = Train::query()->whereMonth("end_date", "=", str_pad($i, 2, 0, STR_PAD_LEFT))->count();
        }
        return view('train.index', ['trainsByStartDate' => $trainsByStartDate, 'trainsByEndDate' => $trainsByEndDate]);
    }
}
