<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Return check view
     */
    public function check()
    {
        return view('check');
    }
}
