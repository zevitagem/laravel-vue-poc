<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use stdClass;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $data = new stdClass();
        $data->name = "Jose";

        return Inertia::render('User/Show', [
            'user' => $data
        ]);
    }
}
