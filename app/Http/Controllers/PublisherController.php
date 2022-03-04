<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function findAll() {
        $publishers = Publisher::all();
        return response()->json($publishers, 200);
    }
}
