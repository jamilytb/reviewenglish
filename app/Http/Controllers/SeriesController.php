<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {

        $series = [
            'Punisher',
            'Lost',
            'Revenge'
        ];

        return view('listar-series')->with('series', $series);
    }
}
