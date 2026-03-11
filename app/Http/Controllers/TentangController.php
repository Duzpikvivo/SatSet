<?php
// app/Http/Controllers/TentangController.php

namespace App\Http\Controllers;

class TentangController extends Controller
{
    public function index()
    {
        return view('pages.tentang');
    }
}