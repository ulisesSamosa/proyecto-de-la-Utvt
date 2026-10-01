<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MasFrecuentesController extends Controller
{
    public function index(): View
    {
        return view('mas-frecuentes.index');
    }
}
