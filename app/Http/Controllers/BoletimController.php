<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BoletimController extends Controller
{
    public function index()
    {
        return view('boletim.index');
    }
}
