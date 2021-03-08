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

        $user = User::with('roles')->find(Auth()->user()->getAuthIdentifier());
        // dd($user);
        // $user = User::with('roles')->get();
        // dd(compact($user));
        return view('profile.index', $user);
    }
}
