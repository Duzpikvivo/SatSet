<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';

    protected $fillable = [
        'nama',
        'slug',
        'kategori',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'gambar',
        'harga_mulai',
        'satuan_harga',
        'estimasi_waktu',
        'tags',
        'cakupan',
        'is_aktif',
        'urutan',
    ];

    protected $casts = [
        'tags'     => 'array',
        'cakupan'  => 'array',
        'is_aktif' => 'boolean',
    ];

    // ── SCOPES ──────────────────────────────────────────────

    /** Hanya layanan yang aktif */
    public function scopeAktif($query)
    {
        return $query->where('is_aktif', true)->orderBy('urutan');
    }

    // ── ACCESSORS ───────────────────────────────────────────

    /** URL gambar — pakai picsum sebagai fallback jika belum upload */
    public function getGambarUrlAttribute(): string
    {
        if ($this->gambar && file_exists(public_path('storage/' . $this->gambar))) {
            return asset('storage/' . $this->gambar);
        }

        // Fallback ke picsum berdasarkan slug
        return "https://picsum.photos/seed/{$this->slug}/400/300";
    }

    /** Format harga ke Rupiah: "Rp 150.000" */
    public function getHargaMulaiFormatAttribute(): string
    {
        return 'Rp ' . number_format($this->harga_mulai, 0, ',', '.');
    }
}