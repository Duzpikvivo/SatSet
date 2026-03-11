{{-- resources/views/partials/hero.blade.php --}}

<section class="hero">
  <div class="hero-img-panel">
    <img src="https://picsum.photos/seed/acservice/900/1000" alt="Service AC"/>
  </div>
  <div class="hero-tag">Jasa Service Profesional</div>
  <h1>Ahli <em>AC</em> &<br>Elektronik Rumah</h1>
  <p>Solusi perawatan dan perbaikan AC serta perangkat elektronik Anda. Teknisi berpengalaman, bergaransi, dan tepat waktu.</p>
  <div class="hero-actions">
    <a href="{{ route('kontak') }}" class="btn-primary">Pesan Servis Sekarang</a>
    <a href="{{ route('layanan.index') }}" class="btn-outline">Lihat Semua Layanan</a>
  </div>
  <div class="hero-infobar">
    <div class="info-item">
      <div class="info-label">Jam Operasional</div>
      <div class="info-value">Senin – Minggu, 08.00–20.00</div>
    </div>
    <div class="info-item">
      <div class="info-label">Respon Cepat</div>
      <div class="info-value">Teknisi tiba dalam 2–3 jam</div>
    </div>
    <div class="info-item">
      <div class="info-label">Garansi Servis</div>
      <div class="info-value">30 hari garansi pengerjaan</div>
    </div>
    <div class="info-item">
      <div class="info-label">Cakupan Area</div>
      <div class="info-value">Jabodetabek & Sekitarnya</div>
    </div>
  </div>
</section>