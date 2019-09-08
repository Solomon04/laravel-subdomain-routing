<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $username;

    public function __construct(Request $request)
    {
        $this->username = $request->username;
    }


    public function index()
    {
        return $this->username;
    }
}
