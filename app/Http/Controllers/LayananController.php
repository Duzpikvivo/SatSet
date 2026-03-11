<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

// Nama file: app/Http/Controllers/LayananController.php

class LayananController extends Controller
{
    public function index()
    {
        $semuaLayanan = Layanan::aktif()->get();

        return view('pages.layanan.index', compact('semuaLayanan'));
    }

    public function show(string $slug)
    {
        $layanan = Layanan::where('slug', $slug)
            ->where('is_aktif', true)
            ->firstOrFail();

        $layananTerkait = Layanan::where('kategori', $layanan->kategori)
            ->where('id', '!=', $layanan->id)
            ->aktif()
            ->take(3)
            ->get();

        return view('pages.layanan.show', compact('layanan', 'layananTerkait'));
    }
}