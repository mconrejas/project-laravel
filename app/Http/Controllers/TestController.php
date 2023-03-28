<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class TestController extends Controller
{
    public function show()
    {
        $users = new User();

        return view('about', [
            'users' => $users->get()
        ]);
    }
}
