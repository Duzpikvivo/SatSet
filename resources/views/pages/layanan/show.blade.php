{{-- resources/views/pages/layanan/show.blade.php --}}
@extends('layouts.app')

@section('title', $layanan->nama)
@section('meta_description', $layanan->deskripsi_singkat)

@section('content')

  {{-- HERO LAYANAN --}}
  <section class="page-hero">
    <div class="page-hero-inner">
      <div class="section-label">{{ $layanan->kategori }}</div>
      <h1 class="section-title">{{ $layanan->nama }}</h1>
      <p class="section-sub">{{ $layanan->deskripsi_singkat }}</p>
    </div>
  </section>

  {{-- DETAIL LAYANAN --}}
  <section class="layanan-detail-section">
    <div class="layanan-detail-layout">

      {{-- KONTEN UTAMA --}}
      <div class="layanan-detail-main">
        <img src="{{ $layanan->gambar_url }}" alt="{{ $layanan->nama }}" class="layanan-detail-img"/>

        <h2 class="layanan-detail-title">Apa yang Kami Kerjakan</h2>
        <p class="layanan-detail-text">{{ $layanan->deskripsi_lengkap }}</p>

        {{-- DAFTAR PEKERJAAN YANG DICAKUP --}}
        @if($layanan->cakupan->isNotEmpty())
          <h3 class="layanan-detail-subtitle">Mencakup</h3>
          <ul class="layanan-checklist">
            @foreach($layanan->cakupan as $item)
              <li class="layanan-checklist-item">{{ $item }}</li>
            @endforeach
          </ul>
        @endif

        {{-- TAG / MERK YANG DITANGANI --}}
        @if($layanan->tags->isNotEmpty())
          <div class="layanan-tags" style="margin-top: 24px;">
            @foreach($layanan->tags as $tag)
              <span class="tag">{{ $tag }}</span>
            @endforeach
          </div>
        @endif
      </div>

      {{-- SIDEBAR --}}
      <aside class="layanan-detail-sidebar">

        {{-- HARGA LAYANAN INI --}}
        <div class="sidebar-card">
          <div class="sidebar-card-title">Estimasi Harga</div>
          <div class="harga-price" style="font-size: 32px; margin: 12px 0 4px;">
            {{ $layanan->harga_mulai }}
          </div>
          <div class="harga-period">{{ $layanan->satuan_harga }}</div>
          <a href="{{ route('kontak') }}" class="btn-primary" style="width:100%;text-align:center;margin-top:20px;display:block;">
            Pesan Sekarang
          </a>
        </div>

        {{-- INFO GARANSI & WAKTU --}}
        <div class="sidebar-card" style="margin-top: 16px;">
          <div class="sidebar-card-title">Informasi Servis</div>
          <div class="sidebar-info-item">
            <span class="sidebar-info-label">Estimasi Waktu</span>
            <span class="sidebar-info-value">{{ $layanan->estimasi_waktu }}</span>
          </div>
          <div class="sidebar-info-item">
            <span class="sidebar-info-label">Garansi</span>
            <span class="sidebar-info-value">30 hari pengerjaan</span>
          </div>
          <div class="sidebar-info-item">
            <span class="sidebar-info-label">Area Cakupan</span>
            <span class="sidebar-info-value">Jabodetabek</span>
          </div>
        </div>

        {{-- LAYANAN TERKAIT --}}
        @if($layananTerkait->isNotEmpty())
          <div class="sidebar-card" style="margin-top: 16px;">
            <div class="sidebar-card-title">Layanan Terkait</div>
            @foreach($layananTerkait as $terkait)
              <a href="{{ route('layanan.show', $terkait->slug) }}" class="sidebar-related-link">
                {{ $terkait->nama }}
              </a>
            @endforeach
          </div>
        @endif

      </aside>
    </div>
  </section>

  {{-- CTA BAWAH --}}
  @include('partials.cta-hubungi')

@endsection