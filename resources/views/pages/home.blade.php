{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_description', 'SatSet – Jasa service AC dan elektronik profesional di Jabodetabek. Teknisi bersertifikat, respons cepat 2-3 jam, garansi 30 hari.')

@section('content')

  {{-- HERO --}}
  @include('partials.hero')

  {{-- LAYANAN UNGGULAN (3 kartu utama) --}}
  @include('partials.layanan-unggulan')

  {{-- SEMUA LAYANAN (grid 4 kolom) --}}
  @include('partials.semua-layanan')

  {{-- PROSES KERJA --}}
  @include('partials.proses-kerja')

  {{-- KEUNGGULAN --}}
  @include('partials.keunggulan')

  {{-- HARGA PREVIEW (tampilkan di home, full di halaman harga) --}}
  @include('partials.harga')

@endsection