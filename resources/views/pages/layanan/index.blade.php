{{-- resources/views/pages/layanan/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Semua Layanan')
@section('meta_description', 'Lihat semua layanan service AC dan elektronik SatSet — dari cuci AC, isi freon, hingga service kulkas, mesin cuci, dan televisi.')

@section('content')

  {{-- PAGE HERO --}}
  <section class="page-hero">
    <div class="section-label">SatSet</div>
    <h1 class="section-title">Semua <em>Layanan</em> Kami</h1>
    <p class="section-sub">Kami menangani berbagai kebutuhan service AC dan elektronik rumah tangga Anda di seluruh Jabodetabek.</p>
  </section>

  {{-- LAYANAN UNGGULAN (3 kartu atas) --}}
  @include('partials.layanan-unggulan')

  {{-- SEMUA LAYANAN DARI DATABASE --}}
  <section class="all-layanan-section">
    <div class="section-label">Semua Layanan</div>
    <div class="section-title">Lebih Banyak <em>Solusi</em> untuk Anda</div>
    <div class="section-sub">Selain AC, kami juga menangani berbagai perangkat elektronik rumah tangga lainnya.</div>

    @if(isset($semuaLayanan) && $semuaLayanan->count() > 0)
      <div class="all-grid">
        @foreach($semuaLayanan as $item)
          <div class="all-card">
            <div class="all-card-img">
              <img src="{{ $item->gambar_url }}" alt="{{ $item->nama }}"/>
            </div>
            <div class="all-card-body">
              <div class="all-card-label">{{ $item->kategori }}</div>
              <div class="all-card-title">{{ $item->nama }}</div>
              <div class="all-card-text">{{ $item->deskripsi_singkat }}</div>
              <div style="display:flex; justify-content:space-between; align-items:center; margin-top:14px;">
                <a href="{{ route('layanan.show', $item->slug) }}" class="all-card-link">Detail layanan</a>
                <span style="font-size:13px; color:var(--blue-acc); font-weight:500;">
                  {{ $item->harga_mulai_format }}
                </span>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      {{-- FALLBACK DATA STATIS jika database kosong --}}
      <div class="all-grid">
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/cuci-ac/400/300" alt="Cuci AC"/></div>
          <div class="all-card-body">
            <div class="all-card-label">AC</div>
            <div class="all-card-title">Service & Cuci AC</div>
            <div class="all-card-text">Pembersihan menyeluruh unit AC — evaporator, kondensor, dan filter udara.</div>
            <a href="{{ route('layanan.show', 'cuci-ac') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/isi-freon/400/300" alt="Isi Freon"/></div>
          <div class="all-card-body">
            <div class="all-card-label">AC</div>
            <div class="all-card-title">Isi Ulang Freon</div>
            <div class="all-card-text">Pengisian freon R32, R410A, R22 untuk AC yang kurang dingin.</div>
            <a href="{{ route('layanan.show', 'isi-freon') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/bongkar-pasang/400/300" alt="Bongkar Pasang"/></div>
          <div class="all-card-body">
            <div class="all-card-label">AC</div>
            <div class="all-card-title">Instalasi & Bongkar Pasang</div>
            <div class="all-card-text">Pasang AC baru, pindah unit, dan instalasi pipa freon yang rapi.</div>
            <a href="{{ route('layanan.show', 'bongkar-pasang') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/refrigerator/400/300" alt="Kulkas"/></div>
          <div class="all-card-body">
            <div class="all-card-label">Elektronik Dapur</div>
            <div class="all-card-title">Kulkas & Freezer</div>
            <div class="all-card-text">Perbaikan kompresor, kebocoran freon, pintu tidak menutup rapat.</div>
            <a href="{{ route('layanan.show', 'kulkas') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/washing-machine/400/300" alt="Mesin Cuci"/></div>
          <div class="all-card-body">
            <div class="all-card-label">Elektronik Rumah</div>
            <div class="all-card-title">Mesin Cuci</div>
            <div class="all-card-text">Service mesin cuci top loading dan front loading semua merk.</div>
            <a href="{{ route('layanan.show', 'mesin-cuci') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/television-repair/400/300" alt="TV"/></div>
          <div class="all-card-body">
            <div class="all-card-label">Hiburan</div>
            <div class="all-card-title">Televisi & Monitor</div>
            <div class="all-card-text">Perbaikan TV LED, LCD, OLED. Masalah gambar, suara, dan mainboard.</div>
            <a href="{{ route('layanan.show', 'televisi') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/water-heater/400/300" alt="Water Heater"/></div>
          <div class="all-card-body">
            <div class="all-card-label">Sanitasi</div>
            <div class="all-card-title">Water Heater</div>
            <div class="all-card-text">Perbaikan dan instalasi water heater elektrik & gas semua merk.</div>
            <a href="{{ route('layanan.show', 'water-heater') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
        <div class="all-card">
          <div class="all-card-img"><img src="https://picsum.photos/seed/microwave-oven/400/300" alt="Microwave"/></div>
          <div class="all-card-body">
            <div class="all-card-label">Elektronik Dapur</div>
            <div class="all-card-title">Microwave & Oven</div>
            <div class="all-card-text">Service microwave tidak panas, magnetron lemah, pintu bermasalah.</div>
            <a href="{{ route('layanan.show', 'microwave') }}" class="all-card-link">Detail layanan</a>
          </div>
        </div>
      </div>
    @endif
  </section>

  {{-- PROSES KERJA --}}
  @include('partials.proses-kerja')

  {{-- CTA --}}
  @include('partials.cta-hubungi')

@endsection