<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $username;

    public function __construct(Request $request)
    {
        $this->username = $request->username;
    }


    public function show()
    {
        $user = User::where('username', '=', $this->username)->first();
        return view('profiles.show')->with('user', $user);
    }
}
