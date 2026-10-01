<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ReglamentoController extends Controller
{
    public function index(): View
    {
        return view('reglamento.index');
    }
}
