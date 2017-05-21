<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelloWorld;
use JWTAuth;

class HelloWorldController extends Controller
{
    function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['index']]);
    }

    public function index()
    {
        JWTAuth::parseToken()->authenticate();
        $hw = HelloWorld::all();
        return $hw->toJson();
    }
}
