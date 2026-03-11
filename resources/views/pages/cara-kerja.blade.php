{{-- resources/views/pages/cara-kerja.blade.php --}}
@extends('layouts.app')

@section('title', 'Cara Kerja')
@section('meta_description', 'Pelajari bagaimana proses servis SatSet bekerja — dari pemesanan, kunjungan teknisi, pengerjaan, hingga garansi 30 hari.')

@section('content')

  {{-- PAGE HERO --}}
  <section class="page-hero">
    <div class="section-label">Cara Kerja</div>
    <h1 class="section-title">Proses Servis yang <em>Transparan</em></h1>
    <p class="section-sub">Dari pemesanan hingga garansi — semua jelas, cepat, dan dapat diandalkan.</p>
  </section>

  {{-- PROSES UTAMA --}}
  <section style="background: white;">
    <div class="section-label">Langkah demi Langkah</div>
    <div class="section-title">Begini Cara <em>Kami Bekerja</em></div>
    <div class="section-sub">Tidak perlu khawatir — prosesnya mudah dan kami yang urus semuanya.</div>

    <div class="cara-kerja-steps">

      <div class="ck-step">
        <div class="ck-step-num">01</div>
        <div class="ck-step-img">
          <img src="https://picsum.photos/seed/booking-service/600/400" alt="Hubungi & Jadwalkan"/>
        </div>
        <div class="ck-step-body">
          <div class="ck-step-tag">Langkah Pertama</div>
          <h3 class="ck-step-title">Hubungi & Jadwalkan</h3>
          <p class="ck-step-desc">Hubungi kami via WhatsApp, telepon, atau isi form di halaman Kontak. Ceritakan keluhan perangkat Anda dan lokasi, lalu kami akan segera mengatur jadwal kunjungan teknisi yang paling cocok.</p>
          <ul class="ck-step-list">
            <li>Respons WhatsApp dalam 15 menit</li>
            <li>Tersedia 7 hari seminggu, 08.00–20.00</li>
            <li>Bisa pesan untuk hari yang sama</li>
          </ul>
          <a href="{{ route('kontak') }}" class="btn-primary" style="margin-top: 24px; display: inline-block;">Pesan Sekarang</a>
        </div>
      </div>

      <div class="ck-step ck-step-reverse">
        <div class="ck-step-num">02</div>
        <div class="ck-step-img">
          <img src="https://picsum.photos/seed/technician-visit/600/400" alt="Kunjungan Teknisi"/>
        </div>
        <div class="ck-step-body">
          <div class="ck-step-tag">Langkah Kedua</div>
          <h3 class="ck-step-title">Kunjungan & Diagnosa</h3>
          <p class="ck-step-desc">Teknisi bersertifikat kami datang ke lokasi Anda tepat waktu. Mereka akan melakukan pemeriksaan menyeluruh dan memberikan estimasi biaya yang jelas sebelum pengerjaan dimulai — tidak ada kejutan di akhir.</p>
          <ul class="ck-step-list">
            <li>Teknisi tiba dalam 2–3 jam setelah konfirmasi</li>
            <li>Diagnosa gratis, tidak ada biaya kunjungan</li>
            <li>Estimasi harga transparan sebelum mulai</li>
          </ul>
        </div>
      </div>

      <div class="ck-step">
        <div class="ck-step-num">03</div>
        <div class="ck-step-img">
          <img src="https://picsum.photos/seed/ac-repair-work/600/400" alt="Pengerjaan"/>
        </div>
        <div class="ck-step-body">
          <div class="ck-step-tag">Langkah Ketiga</div>
          <h3 class="ck-step-title">Pengerjaan & Perbaikan</h3>
          <p class="ck-step-desc">Servis dilakukan langsung di tempat menggunakan peralatan standar industri dan suku cadang berkualitas original. Kami bekerja rapi, cepat, dan tidak meninggalkan kotoran setelah selesai.</p>
          <ul class="ck-step-list">
            <li>Suku cadang original bergaransi pabrik</li>
            <li>Pengerjaan bersih dan rapi</li>
            <li>Tidak ada biaya tersembunyi</li>
          </ul>
        </div>
      </div>

      <div class="ck-step ck-step-reverse">
        <div class="ck-step-num">04</div>
        <div class="ck-step-img">
          <img src="https://picsum.photos/seed/service-complete/600/400" alt="Uji Coba"/>
        </div>
        <div class="ck-step-body">
          <div class="ck-step-tag">Langkah Keempat</div>
          <h3 class="ck-step-title">Uji Coba & Garansi</h3>
          <p class="ck-step-desc">Setelah perbaikan selesai, perangkat diuji coba langsung di hadapan Anda untuk memastikan semuanya bekerja dengan baik. Kami memberikan garansi 30 hari untuk setiap pengerjaan.</p>
          <ul class="ck-step-list">
            <li>Uji coba dilakukan bersama pelanggan</li>
            <li>Garansi 30 hari untuk semua pengerjaan</li>
            <li>Jika masalah berulang, kami datang gratis</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  {{-- STATS / ANGKA --}}
  <section style="background: var(--navy);">
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2px;">
      <div class="stat-card">
        <div class="stat-num">5.000+</div>
        <div class="stat-label">Pelanggan Puas</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">2–3 Jam</div>
        <div class="stat-label">Waktu Respons</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">30 Hari</div>
        <div class="stat-label">Garansi Pengerjaan</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">10+</div>
        <div class="stat-label">Tahun Pengalaman</div>
      </div>
    </div>
  </section>

  {{-- KEUNGGULAN --}}
  @include('partials.keunggulan')

  {{-- FAQ --}}
  @include('partials.faq')

  {{-- CTA --}}
  @include('partials.cta-hubungi')

@endsection

@push('styles')
<style>
  /* ── CARA KERJA STEPS ── */
  .cara-kerja-steps {
    display: flex;
    flex-direction: column;
    gap: 0;
  }

  .ck-step {
    display: grid;
    grid-template-columns: 80px 1fr 1fr;
    gap: 48px;
    align-items: center;
    padding: 64px 0;
    border-bottom: 1px solid var(--border);
    position: relative;
  }
  .ck-step:last-child { border-bottom: none; }

  .ck-step-reverse {
    grid-template-columns: 80px 1fr 1fr;
    direction: rtl;
  }
  .ck-step-reverse > * { direction: ltr; }

  .ck-step-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 80px;
    font-weight: 300;
    color: rgba(42,111,191,0.12);
    line-height: 1;
    align-self: flex-start;
    padding-top: 8px;
  }

  .ck-step-img {
    overflow: hidden;
    height: 300px;
  }
  .ck-step-img img {
    width: 100%; height: 100%;
    object-fit: cover;
    filter: grayscale(15%);
    transition: transform 0.5s;
  }
  .ck-step:hover .ck-step-img img { transform: scale(1.03); }

  .ck-step-tag {
    font-size: 10px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--blue-acc);
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .ck-step-tag::before {
    content: '';
    width: 24px; height: 1px;
    background: var(--blue-acc);
  }

  .ck-step-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 32px;
    font-weight: 300;
    color: var(--navy);
    margin-bottom: 16px;
    line-height: 1.2;
  }

  .ck-step-desc {
    color: var(--muted);
    font-size: 14.5px;
    line-height: 1.8;
    margin-bottom: 20px;
  }

  .ck-step-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }
  .ck-step-list li {
    font-size: 13.5px;
    color: var(--text);
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .ck-step-list li::before {
    content: '';
    width: 6px; height: 6px;
    background: var(--gold);
    flex-shrink: 0;
  }

  /* ── STATS ── */
  .stat-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(42,111,191,0.15);
    padding: 48px 32px;
    text-align: center;
  }
  .stat-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 52px;
    font-weight: 300;
    color: var(--gold-light);
    line-height: 1;
    margin-bottom: 10px;
  }
  .stat-label {
    font-size: 11px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.5);
  }

  /* Responsive */
  @media (max-width: 900px) {
    .ck-step, .ck-step-reverse {
      grid-template-columns: 1fr;
      direction: ltr;
      gap: 24px;
      padding: 48px 0;
    }
    .ck-step-num { font-size: 56px; }
    .ck-step-img { height: 220px; }
    div[style*="repeat(4, 1fr)"] { grid-template-columns: repeat(2, 1fr) !important; }
  }

  @media (max-width: 600px) {
    .ck-step-title { font-size: 26px; }
    div[style*="repeat(4, 1fr)"] { grid-template-columns: repeat(2, 1fr) !important; }
    .stat-num { font-size: 38px; }
    .stat-card { padding: 32px 20px; }
  }
</style>
@endpush