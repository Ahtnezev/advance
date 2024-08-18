<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Vista principal de Advance Detail...
    public function __invoke()
    {
        return view('app');
    }
}
