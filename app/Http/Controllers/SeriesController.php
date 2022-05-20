<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller 
{
    public function index() {
        $series = [
            'Friends',
            'HIMYM',
            'The Boys'
        ];

        return view(view:'series.index');
    }
}