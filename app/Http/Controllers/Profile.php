<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        return view('profile.index', $user);
    }
}
