<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiauthController extends Controller
{
    public function index()
    {
        return view('apiauth.index');
    }
}
