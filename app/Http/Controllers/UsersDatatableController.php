<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersDatatableController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return ['data' => $users, 'recordsTotal' => sizeof($users), 'recordsFiltered' => sizeof($users), 'draw' => $request->input('draw')];
    }
}
