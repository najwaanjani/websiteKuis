<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function create()
    {
        return view('kuis.create');
    }

    public function add()
    {
        return view('kuis.create');
    }

    public function edit()
    {
        return view('kuis.edit');
    }
}
