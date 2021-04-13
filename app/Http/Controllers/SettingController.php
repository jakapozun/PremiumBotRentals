<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(User $user)
    {
        if($user->id == auth()->id()){
            return view('main.settings', compact('user'));
        }
        else{
            auth()->logout();
        }

    }
}
