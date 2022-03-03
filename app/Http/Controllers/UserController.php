<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function findAll() {
        $users = User::all();
        return response()->json($users, 200);
    }
}
