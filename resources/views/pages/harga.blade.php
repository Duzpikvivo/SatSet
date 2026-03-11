{{-- resources/views/pages/harga.blade.php --}}
@extends('layouts.app')

@section('title', 'Paket Harga')
@section('meta_description', 'Harga jasa service AC SatSet yang transparan. Mulai Rp 150.000 per unit, sudah termasuk biaya kunjungan teknisi.')

@section('content')

  {{-- PAGE HERO --}}
  <section class="page-hero">
    <div class="section-label">Paket Harga</div>
    <h1 class="section-title">Harga <em>Transparan</em>,<br>Tanpa Biaya Kejutan</h1>
    <p class="section-sub">Semua harga sudah termasuk biaya kunjungan teknisi ke lokasi Anda di area Jabodetabek. Tidak ada biaya tersembunyi.</p>
  </section>

  {{-- HARGA AC --}}
  <section style="background: var(--cream);">
    <div class="section-label">Layanan AC</div>
    <div class="section-title">Paket <em>Service AC</em></div>
    <div class="section-sub">Pilih paket yang sesuai kebutuhan perawatan AC Anda.</div>
    <div class="harga-grid">

      <div class="harga-card">
        <div class="harga-name">Paket Standar</div>
        <div class="harga-price">Rp 150.000</div>
        <div class="harga-period">per unit AC</div>
        <div class="harga-desc">Cocok untuk perawatan rutin AC yang masih berfungsi normal, setiap 3–6 bulan sekali.</div>
        <ul class="harga-items">
          <li class="harga-item">Cuci unit indoor & outdoor</li>
          <li class="harga-item">Cek tekanan freon</li>
          <li class="harga-item">Cek komponen kelistrikan</li>
          <li class="harga-item">Laporan kondisi unit</li>
        </ul>
        <a href="{{ route('kontak') }}?paket=standar" class="btn-outline" style="width:100%;text-align:center;color:var(--navy);border-color:var(--border);">
          Pesan Paket Ini
        </a>
      </div>

      <div class="harga-card featured">
        <div class="harga-badge-top">Terpopuler</div>
        <div class="harga-name">Paket Lengkap</div>
        <div class="harga-price">Rp 300.000</div>
        <div class="harga-period">per unit AC</div>
        <div class="harga-desc">Paket terlengkap untuk AC yang sudah lama tidak diservis atau mengalami penurunan performa.</div>
        <ul class="harga-items">
          <li class="harga-item">Semua layanan paket standar</li>
          <li class="harga-item">Isi ulang freon R32/R410A</li>
          <li class="harga-item">Bersihkan drain pan</li>
          <li class="harga-item">Cek & kencangkan koneksi listrik</li>
          <li class="harga-item">Garansi 30 hari pengerjaan</li>
        </ul>
        <a href="{{ route('kontak') }}?paket=lengkap" class="btn-primary" style="width:100%;text-align:center;">
          Pesan Paket Ini
        </a>
      </div>

      <div class="harga-card">
        <div class="harga-name">Kontrak Tahunan</div>
        <div class="harga-price">Rp 800.000</div>
        <div class="harga-period">per unit / tahun</div>
        <div class="harga-desc">Servis berkala 4 kali setahun. Hemat 40% dibanding servis satuan — ideal untuk kantor dan kos-kosan.</div>
        <ul class="harga-items">
          <li class="harga-item">4x service per tahun</li>
          <li class="harga-item">Prioritas jadwal teknisi</li>
          <li class="harga-item">Diskon spare part 15%</li>
          <li class="harga-item">Laporan servis digital</li>
          <li class="harga-item">Garansi sepanjang kontrak</li>
        </ul>
        <a href="{{ route('kontak') }}?paket=tahunan" class="btn-outline" style="width:100%;text-align:center;color:var(--navy);border-color:var(--border);">
          Pesan Paket Ini
        </a>
      </div>

    </div>
  </section>

  {{-- HARGA ELEKTRONIK --}}
  <section style="background: white;">
    <div class="section-label">Layanan Elektronik</div>
    <div class="section-title">Harga Service <em>Elektronik</em></div>
    <div class="section-sub">Harga mulai dari — final harga ditentukan setelah diagnosa di lokasi.</div>

    <div class="harga-elektronik-grid">

      <div class="harga-el-card">
        <div class="harga-el-icon">🧊</div>
        <div class="harga-el-name">Kulkas & Freezer</div>
        <div class="harga-el-price">Rp 150.000</div>
        <div class="harga-el-note">mulai dari</div>
        <a href="{{ route('layanan.show', 'kulkas') }}" class="all-card-link" style="margin-top:12px;">Detail layanan</a>
      </div>

      <div class="harga-el-card">
        <div class="harga-el-icon">🫧</div>
        <div class="harga-el-name">Mesin Cuci</div>
        <div class="harga-el-price">Rp 150.000</div>
        <div class="harga-el-note">mulai dari</div>
        <a href="{{ route('layanan.show', 'mesin-cuci') }}" class="all-card-link" style="margin-top:12px;">Detail layanan</a>
      </div>

      <div class="harga-el-card">
        <div class="harga-el-icon">📺</div>
        <div class="harga-el-name">Televisi & Monitor</div>
        <div class="harga-el-price">Rp 150.000</div>
        <div class="harga-el-note">mulai dari</div>
        <a href="{{ route('layanan.show', 'televisi') }}" class="all-card-link" style="margin-top:12px;">Detail layanan</a>
      </div>

      <div class="harga-el-card">
        <div class="harga-el-icon">🚿</div>
        <div class="harga-el-name">Water Heater</div>
        <div class="harga-el-price">Rp 150.000</div>
        <div class="harga-el-note">mulai dari</div>
        <a href="{{ route('layanan.show', 'water-heater') }}" class="all-card-link" style="margin-top:12px;">Detail layanan</a>
      </div>

      <div class="harga-el-card">
        <div class="harga-el-icon">📡</div>
        <div class="harga-el-name">Microwave & Oven</div>
        <div class="harga-el-price">Rp 150.000</div>
        <div class="harga-el-note">mulai dari</div>
        <a href="{{ route('layanan.show', 'microwave') }}" class="all-card-link" style="margin-top:12px;">Detail layanan</a>
      </div>

      <div class="harga-el-card" style="background: var(--navy); border-color: var(--navy);">
        <div class="harga-el-icon">💬</div>
        <div class="harga-el-name" style="color: white;">Tidak ada di daftar?</div>
        <div class="harga-el-price" style="color: var(--gold-light); font-size: 18px; margin-top: 8px;">Hubungi kami</div>
        <div class="harga-el-note" style="color: rgba(255,255,255,0.5);">konsultasi gratis</div>
        <a href="{{ route('kontak') }}" class="btn-primary" style="margin-top:16px; display:block; text-align:center; font-size:12px; padding: 10px 20px;">
          Tanya Sekarang
        </a>
      </div>

    </div>
  </section>

  {{-- CATATAN HARGA --}}
  <section style="background: var(--cream);">
    <div class="section-label">Ketentuan</div>
    <div class="section-title">Yang Perlu <em>Diketahui</em></div>
    <div class="harga-notes-grid">
      <div class="harga-note-item">
        <div class="harga-note-icon">✅</div>
        <div class="harga-note-title">Harga Sudah Termasuk</div>
        <div class="harga-note-text">Biaya kunjungan teknisi ke lokasi Anda di seluruh area Jabodetabek sudah termasuk dalam harga yang tertera.</div>
      </div>
      <div class="harga-note-item">
        <div class="harga-note-icon">🔧</div>
        <div class="harga-note-title">Spare Part Terpisah</div>
        <div class="harga-note-text">Jika dibutuhkan penggantian suku cadang, harganya akan diinformasikan sebelum pemasangan dan memerlukan persetujuan Anda.</div>
      </div>
      <div class="harga-note-item">
        <div class="harga-note-icon">🛡️</div>
        <div class="harga-note-title">Garansi 30 Hari</div>
        <div class="harga-note-text">Semua pengerjaan dijamin dengan garansi 30 hari. Jika masalah yang sama muncul kembali, kami datang ulang tanpa biaya tambahan.</div>
      </div>
      <div class="harga-note-item">
        <div class="harga-note-icon">📍</div>
        <div class="harga-note-title">Di Luar Jabodetabek</div>
        <div class="harga-note-text">Untuk lokasi di luar Jabodetabek, mungkin ada tambahan biaya transportasi. Hubungi kami terlebih dahulu untuk konfirmasi.</div>
      </div>
    </div>
  </section>

  {{-- FAQ --}}
  @include('partials.faq')

  {{-- CTA --}}
  @include('partials.cta-hubungi')

@endsection

@push('styles')
<style>
  /* ── HARGA ELEKTRONIK ── */
  .harga-elektronik-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .harga-el-card {
    background: var(--cream);
    border: 1px solid var(--border);
    padding: 28px 24px;
    transition: box-shadow 0.2s, transform 0.2s;
  }
  .harga-el-card:hover {
    box-shadow: 0 6px 24px rgba(0,0,0,0.07);
    transform: translateY(-2px);
  }
  .harga-el-icon { font-size: 28px; margin-bottom: 12px; }
  .harga-el-name {
    font-family: 'Cormorant Garamond', serif;
    font-size: 20px; font-weight: 600;
    color: var(--navy); margin-bottom: 8px;
  }
  .harga-el-price {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px; font-weight: 300;
    color: var(--navy); line-height: 1;
  }
  .harga-el-note { font-size: 11px; color: var(--muted); margin-top: 2px; }

  /* ── CATATAN HARGA ── */
  .harga-notes-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
  }
  .harga-note-item {
    background: white;
    border: 1px solid var(--border);
    padding: 28px 24px;
  }
  .harga-note-icon { font-size: 24px; margin-bottom: 14px; }
  .harga-note-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 18px; font-weight: 600;
    color: var(--navy); margin-bottom: 8px;
  }
  .harga-note-text { font-size: 13.5px; color: var(--muted); line-height: 1.7; }

  /* Responsive */
  @media (max-width: 1100px) {
    .harga-elektronik-grid { grid-template-columns: repeat(2, 1fr); }
    .harga-notes-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 900px) {
    .harga-elektronik-grid { grid-template-columns: repeat(2, 1fr); }
    .harga-notes-grid { grid-template-columns: repeat(2, 1fr); }
    .harga-grid { max-width: 100% !important; }
  }
  @media (max-width: 600px) {
    .harga-elektronik-grid { grid-template-columns: 1fr; }
    .harga-notes-grid { grid-template-columns: 1fr; }
  }
</style>
@endpush