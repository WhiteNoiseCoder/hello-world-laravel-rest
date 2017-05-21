<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelloWorld;

class HelloWorldController extends Controller
{
    public function index()
    {
        $hw = HelloWorld::all();
        return $hw->toJson();
    }
}
