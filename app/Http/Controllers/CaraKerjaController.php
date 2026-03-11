<?php
// app/Http/Controllers/CaraKerjaController.php

namespace App\Http\Controllers;

class CaraKerjaController extends Controller
{
    public function index()
    {
        return view('pages.cara-kerja');
    }
}