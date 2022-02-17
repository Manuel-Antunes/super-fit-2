<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $malesCount = User::query()->where("gender", "m")->count();
        $femalesCount = User::query()->where("gender", "f")->count();
        $othersCount = User::query()->where("gender", "o")->count();
        return view('user.index', ['malesCount' => $malesCount, 'femalesCount' => $femalesCount, 'othersCount' => $othersCount]);
    }
}
