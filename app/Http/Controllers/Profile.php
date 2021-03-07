<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{
    public function index()
    {
        // dd(User::all());
        // $user = Auth()->user();
        $user = User::with('roles')->first();
        dd($user);
        return view('profile.index', ['user' => $user]);
    }
}
