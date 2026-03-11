<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Nama file: app/Models/PesananServis.php

class PesananServis extends Model
{
    protected $table = 'pesanan_servis';

    protected $fillable = [
        'nama',
        'telepon',
        'alamat',
        'layanan',
        'keluhan',
        'status',
        'paket',
    ];
}