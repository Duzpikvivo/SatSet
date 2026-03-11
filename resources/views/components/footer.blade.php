{{-- resources/views/components/footer.blade.php --}}

<footer>
  <div class="footer-grid">
    <div>
      <div class="footer-brand-name">Sat<span>Set</span></div>
      <p style="font-size:13.5px;line-height:1.8;margin-bottom:18px;">
        Jasa service AC dan elektronik profesional, bergaransi, dan terpercaya
        untuk kebutuhan rumah dan bisnis Anda di Jabodetabek.
      </p>
      <div class="contact-line">
        <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        {{ config('satSet.phone', '0812-3456-7890') }}
      </div>
      <div class="contact-line">
        <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
        {{ config('satSet.email', 'info@SatSet.id') }}
      </div>
      <div class="contact-line">
        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        {{ config('satSet.address', 'Jl. Raya Bekasi No. 45, Jakarta Timur') }}
      </div>
    </div>

    <div>
      <div class="footer-col-title">Halaman</div>
      <ul class="footer-links">
        <li><a href="{{ route('home') }}">Beranda</a></li>
        <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
        <li><a href="{{ route('layanan.index') }}">Layanan</a></li>
        <li><a href="{{ route('harga') }}">Paket Harga</a></li>
        <li><a href="{{ route('kontak') }}">Kontak</a></li>
      </ul>
    </div>

    <div>
      <div class="footer-col-title">Layanan AC</div>
      <ul class="footer-links">
        <li><a href="{{ route('layanan.show', 'cuci-ac') }}">Cuci AC</a></li>
        <li><a href="{{ route('layanan.show', 'isi-freon') }}">Isi Freon</a></li>
        <li><a href="{{ route('layanan.show', 'pasang-ac-baru') }}">Pasang AC Baru</a></li>
        <li><a href="{{ route('layanan.show', 'bongkar-pasang') }}">Bongkar Pasang</a></li>
        <li><a href="{{ route('layanan.show', 'kontrak-perawatan') }}">Kontrak Perawatan</a></li>
      </ul>
    </div>

    <div>
      <div class="footer-col-title">Elektronik</div>
      <ul class="footer-links">
        <li><a href="{{ route('layanan.show', 'kulkas') }}">Service Kulkas</a></li>
        <li><a href="{{ route('layanan.show', 'mesin-cuci') }}">Service Mesin Cuci</a></li>
        <li><a href="{{ route('layanan.show', 'televisi') }}">Service TV</a></li>
        <li><a href="{{ route('layanan.show', 'water-heater') }}">Service Water Heater</a></li>
        <li><a href="{{ route('layanan.show', 'microwave') }}">Service Microwave</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <span>© {{ date('Y') }} SatSet. Semua hak dilindungi.</span>
    <span>Dibangun dengan Laravel & dedikasi</span>
  </div>
</footer>