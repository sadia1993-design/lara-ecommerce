<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
}
