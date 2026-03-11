<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Support\Facades\Log;

// Nama file: app/Http/Controllers/HomeController.php

class HomeController extends Controller
{
    public function index()
    {
        // Tangkap error jika tabel belum ada (sebelum migrate)
        try {
            $semuaLayanan = Layanan::aktif()->take(8)->get();
        } catch (\Exception $e) {
            Log::error('HomeController: tabel layanan belum ada — ' . $e->getMessage());
            $semuaLayanan = null; // partial akan fallback ke data statis
        }

        return view('pages.home', compact('semuaLayanan'));
    }
}