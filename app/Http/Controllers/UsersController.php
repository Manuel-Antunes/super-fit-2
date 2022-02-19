<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $malesCount = User::query()->where("gender", "m")->count();
        $femalesCount = User::query()->where("gender", "f")->count();
        $othersCount = User::query()->where("gender", "o")->count();
        $monthAnniversariants = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthAnniversariants[] = User::query()->whereMonth("birth_date", "=", str_pad($i, 2, 0, STR_PAD_LEFT))->count();
        }
        return view('user.index', ['malesCount' => $malesCount, 'femalesCount' => $femalesCount, 'othersCount' => $othersCount, 'monthAnniversariants' =>        $monthAnniversariants]);
    }
}
