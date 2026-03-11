<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

// Nama file: database/seeders/LayananSeeder.php

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'urutan'           => 1,
                'nama'             => 'Service & Cuci AC',
                'slug'             => 'cuci-ac',
                'kategori'         => 'AC',
                'deskripsi_singkat'=> 'Pembersihan menyeluruh unit AC — evaporator, kondensor, dan filter.',
                'deskripsi_lengkap'=> 'Layanan cuci AC profesional mencakup pembersihan menyeluruh komponen indoor dan outdoor. Kami membersihkan evaporator, kondensor, filter udara, dan drain pan. Termasuk pengecekan tekanan freon dan komponen kelistrikan untuk memastikan AC bekerja optimal.',
                'harga_mulai'      => 150000,
                'satuan_harga'     => 'per unit AC',
                'estimasi_waktu'   => '45–90 menit',
                'tags'             => ['AC Split', 'AC Cassette', 'AC Central', 'Floor Standing'],
                'cakupan'          => [
                    'Cuci unit indoor (evaporator)',
                    'Cuci unit outdoor (kondensor)',
                    'Bersihkan filter udara',
                    'Cek tekanan freon',
                    'Cek komponen kelistrikan',
                    'Laporan kondisi unit',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 2,
                'nama'             => 'Isi Ulang Freon',
                'slug'             => 'isi-freon',
                'kategori'         => 'AC',
                'deskripsi_singkat'=> 'Pengisian freon R32, R410A, R22 untuk AC yang kurang dingin.',
                'deskripsi_lengkap'=> 'Pengisian ulang freon dilakukan setelah pengecekan tekanan. Kami menggunakan freon berstandar SNI — R32 dan R410A untuk AC modern, R22 untuk AC lama. Termasuk cek kebocoran pipa freon.',
                'harga_mulai'      => 200000,
                'satuan_harga'     => 'per unit AC',
                'estimasi_waktu'   => '30–60 menit',
                'tags'             => ['R32', 'R410A', 'R22', 'AC Split'],
                'cakupan'          => [
                    'Cek tekanan freon',
                    'Deteksi kebocoran pipa',
                    'Isi ulang freon sesuai tipe',
                    'Uji coba pendinginan',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 3,
                'nama'             => 'Instalasi & Bongkar Pasang',
                'slug'             => 'bongkar-pasang',
                'kategori'         => 'AC',
                'deskripsi_singkat'=> 'Pasang AC baru, pindah unit, dan instalasi pipa freon yang rapi.',
                'deskripsi_lengkap'=> 'Layanan pemasangan unit AC baru maupun pemindahan unit lama ke lokasi baru. Teknisi kami memastikan instalasi pipa freon dan kabel listrik yang rapi, aman, dan sesuai standar pabrik.',
                'harga_mulai'      => 350000,
                'satuan_harga'     => 'per unit AC',
                'estimasi_waktu'   => '2–4 jam',
                'tags'             => ['Pasang Baru', 'Bongkar Pasang', 'Pipa Freon'],
                'cakupan'          => [
                    'Pemasangan bracket unit indoor & outdoor',
                    'Instalasi pipa freon (maks 3 meter)',
                    'Instalasi kabel listrik',
                    'Pengisian freon awal',
                    'Uji coba & setting remote',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 4,
                'nama'             => 'Kulkas & Freezer',
                'slug'             => 'kulkas',
                'kategori'         => 'Elektronik Dapur',
                'deskripsi_singkat'=> 'Perbaikan kompresor, kebocoran freon, pintu tidak menutup rapat.',
                'deskripsi_lengkap'=> 'Service kulkas dan freezer semua merk. Kami menangani berbagai masalah seperti kulkas tidak dingin, kompresor mati, kebocoran freon, pintu tidak menutup rapat, hingga kulkas berbunyi keras.',
                'harga_mulai'      => 150000,
                'satuan_harga'     => 'mulai dari',
                'estimasi_waktu'   => '1–3 jam',
                'tags'             => ['Samsung', 'LG', 'Sharp', 'Polytron', 'Aqua'],
                'cakupan'          => [
                    'Diagnosa kerusakan',
                    'Perbaikan kompresor',
                    'Isi ulang freon kulkas',
                    'Ganti seal pintu',
                    'Perbaikan thermostat',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 5,
                'nama'             => 'Mesin Cuci',
                'slug'             => 'mesin-cuci',
                'kategori'         => 'Elektronik Rumah',
                'deskripsi_singkat'=> 'Service mesin cuci top loading dan front loading semua merk.',
                'deskripsi_lengkap'=> 'Perbaikan mesin cuci top loading dan front loading. Kami menangani masalah mesin tidak mau menyala, tidak mau drain, bunyi berisik, pintu tidak terkunci, hingga error pada papan kontrol.',
                'harga_mulai'      => 150000,
                'satuan_harga'     => 'mulai dari',
                'estimasi_waktu'   => '1–3 jam',
                'tags'             => ['Top Loading', 'Front Loading', 'Samsung', 'LG', 'Panasonic'],
                'cakupan'          => [
                    'Perbaikan motor penggerak',
                    'Ganti pompa air',
                    'Perbaikan bearing',
                    'Servis papan kontrol (PCB)',
                    'Bersihkan tub & filter',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 6,
                'nama'             => 'Televisi & Monitor',
                'slug'             => 'televisi',
                'kategori'         => 'Hiburan',
                'deskripsi_singkat'=> 'Perbaikan TV LED, LCD, OLED — gambar, suara, panel, backlight.',
                'deskripsi_lengkap'=> 'Service televisi dan monitor semua merk dan tipe. Kami menangani masalah layar gelap, gambar bergaris, tidak ada suara, TV tidak mau nyala, backlight mati, hingga kerusakan mainboard.',
                'harga_mulai'      => 150000,
                'satuan_harga'     => 'mulai dari',
                'estimasi_waktu'   => '1–3 jam',
                'tags'             => ['LED', 'LCD', 'OLED', 'Smart TV', 'Monitor'],
                'cakupan'          => [
                    'Perbaikan backlight',
                    'Ganti panel (jika tersedia)',
                    'Perbaikan mainboard',
                    'Perbaikan power supply',
                    'Perbaikan audio',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 7,
                'nama'             => 'Water Heater',
                'slug'             => 'water-heater',
                'kategori'         => 'Sanitasi',
                'deskripsi_singkat'=> 'Perbaikan dan instalasi water heater elektrik & gas semua merk.',
                'deskripsi_lengkap'=> 'Service water heater elektrik dan gas. Masalah yang kami tangani antara lain air tidak panas, elemen pemanas putus, thermostat rusak, safety valve bocor, hingga instalasi water heater baru.',
                'harga_mulai'      => 150000,
                'satuan_harga'     => 'mulai dari',
                'estimasi_waktu'   => '1–2 jam',
                'tags'             => ['Ariston', 'Wika', 'Daalderop', 'Rinnai', 'Modena'],
                'cakupan'          => [
                    'Ganti elemen pemanas',
                    'Ganti thermostat',
                    'Perbaikan safety valve',
                    'Cek instalasi pipa',
                    'Pasang water heater baru',
                ],
                'is_aktif'         => true,
            ],
            [
                'urutan'           => 8,
                'nama'             => 'Microwave & Oven',
                'slug'             => 'microwave',
                'kategori'         => 'Elektronik Dapur',
                'deskripsi_singkat'=> 'Service microwave tidak panas, magnetron lemah, pintu bermasalah.',
                'deskripsi_lengkap'=> 'Perbaikan microwave dan oven semua merk. Kami menangani masalah microwave tidak panas, bunyi keras, pintu tidak tertutup rapat, turntable tidak berputar, hingga kerusakan magnetron dan panel kontrol.',
                'harga_mulai'      => 150000,
                'satuan_harga'     => 'mulai dari',
                'estimasi_waktu'   => '1–2 jam',
                'tags'             => ['Sharp', 'LG', 'Samsung', 'Panasonic', 'Electrolux'],
                'cakupan'          => [
                    'Perbaikan magnetron',
                    'Ganti dioda / kapasitor',
                    'Perbaikan pintu & kunci',
                    'Ganti motor turntable',
                    'Perbaikan panel kontrol',
                ],
                'is_aktif'         => true,
            ],
        ];

        foreach ($data as $item) {
            Layanan::updateOrCreate(
                ['slug' => $item['slug']],   // cek duplikat by slug
                $item
            );
        }

        $this->command->info('✅ ' . count($data) . ' layanan berhasil di-seed!');
    }
}