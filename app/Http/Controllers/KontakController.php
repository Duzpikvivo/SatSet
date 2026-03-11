<?php

namespace App\Http\Controllers;

use App\Models\PesananServis;
use Illuminate\Http\Request;

// Nama file: app/Http/Controllers/KontakController.php

class KontakController extends Controller
{
    public function index()
    {
        return view('pages.kontak');
    }

    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:100',
            'telepon' => 'required|string|max:20',
            'alamat'  => 'required|string|max:255',
            'layanan' => 'required|string',
            'keluhan' => 'nullable|string|max:1000',
        ], [
            'nama.required'    => 'Nama wajib diisi.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
            'alamat.required'  => 'Alamat wajib diisi.',
            'layanan.required' => 'Pilih jenis layanan.',
        ]);

        // Tangkap paket dari query string jika ada (?paket=lengkap)
        $validated['paket'] = $request->query('paket');

        PesananServis::create($validated);

        return redirect()
            ->route('kontak')
            ->with('success', 'Terima kasih! Permintaan servis Anda sudah kami terima. Tim kami akan menghubungi Anda segera.');
    }
}