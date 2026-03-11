<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'SatSet') – Service AC & Elektronik</title>
  <meta name="description" content="@yield('meta_description', 'Jasa service AC dan elektronik profesional, bergaransi, dan terpercaya untuk kebutuhan rumah dan bisnis Anda di Jabodetabek.')">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --cream: #F5F3EF;
      --navy: #0F1F3D;
      --steel: #1E3A5F;
      --blue-acc: #2A6FBF;
      --gold: #B8962E;
      --gold-light: #D4AE4E;
      --text: #2C2C2C;
      --muted: #7A7A7A;
      --border: #DDD9D1;
      --white: #FFFFFF;
    }

    html { scroll-behavior: smooth; }
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--text);
      font-size: 15px;
      line-height: 1.7;
    }

    /* ── NAVBAR ── */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      background: rgba(15, 31, 61, 0.97);
      backdrop-filter: blur(8px);
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 48px;
      height: 68px;
      border-bottom: 1px solid rgba(42,111,191,0.25);
    }
    .nav-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
    .nav-logo {
      width: 38px; height: 38px;
      background: var(--blue-acc);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .nav-logo svg { width: 20px; height: 20px; fill: white; }
    .nav-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px; font-weight: 600;
      color: white; letter-spacing: 0.04em;
      text-decoration: none;
    }
    .nav-name span { color: var(--gold-light); }
    .nav-links { display: flex; gap: 32px; list-style: none; }
    .nav-links a {
      color: rgba(255,255,255,0.72);
      text-decoration: none; font-size: 13px;
      font-weight: 400; letter-spacing: 0.07em;
      text-transform: uppercase; transition: color 0.2s;
    }
    .nav-links a:hover, .nav-links a.active { color: var(--gold-light); }
    .nav-cta {
      background: var(--blue-acc);
      color: white; padding: 9px 22px;
      font-size: 12.5px; font-weight: 500;
      letter-spacing: 0.07em; text-transform: uppercase;
      text-decoration: none; transition: background 0.2s;
      white-space: nowrap;
    }
    .nav-cta:hover { background: #1a5aa0; }

    /* Mobile nav toggle */
    .nav-toggle {
      display: none;
      flex-direction: column; gap: 5px;
      cursor: pointer; padding: 4px;
      background: none; border: none;
    }
    .nav-toggle span {
      display: block; width: 24px; height: 2px;
      background: white; transition: all 0.3s;
    }
    .nav-toggle.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .nav-toggle.open span:nth-child(2) { opacity: 0; }
    .nav-toggle.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* Mobile menu */
    .mobile-menu {
      display: none;
      position: fixed; top: 68px; left: 0; right: 0;
      background: rgba(15, 31, 61, 0.98);
      backdrop-filter: blur(8px);
      z-index: 99;
      padding: 24px 32px;
      border-bottom: 1px solid rgba(42,111,191,0.25);
      flex-direction: column; gap: 0;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
      color: rgba(255,255,255,0.72);
      text-decoration: none; font-size: 14px;
      font-weight: 400; letter-spacing: 0.07em;
      text-transform: uppercase;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255,255,255,0.07);
      transition: color 0.2s;
    }
    .mobile-menu a:last-child { border-bottom: none; }
    .mobile-menu a:hover, .mobile-menu a.active { color: var(--gold-light); }
    .mobile-menu .mobile-cta {
      margin-top: 16px;
      background: var(--blue-acc);
      color: white; padding: 13px 22px;
      text-align: center; font-weight: 500;
      border-bottom: none;
    }

    /* ── HERO ── */
    .hero {
      min-height: 100vh;
      background: linear-gradient(150deg, #0F1F3D 0%, #1E3A5F 55%, #0F1F3D 100%);
      display: flex; flex-direction: column;
      justify-content: center; align-items: flex-start;
      padding: 120px 80px 100px;
      position: relative; overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute; inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232A6FBF' fill-opacity='0.05'%3E%3Cpath d='M0 0h40v40H0V0zm40 40h40v40H40V40zm0-40h2l-2 2V0zm0 4l4-4h2l-6 6V4zm0 4l8-8h2L40 10V8zm0 4L52 0h2L40 14v-2zm0 4L56 0h2L40 18v-2zm0 4L60 0h2L40 22v-2zm0 4L64 0h2L40 26v-2zm0 4L68 0h2L40 30v-2zm0 4L72 0h2L40 34v-2zm0 4L76 0h2L40 38v-2zm0 4L80 0v2L42 40h-2zm4 0L80 4v2L46 40h-2zm4 0L80 8v2L50 40h-2zm4 0L80 12v2L54 40h-2zm4 0L80 16v2L58 40h-2zm4 0L80 20v2L62 40h-2zm4 0L80 24v2L66 40h-2zm4 0L80 28v2L70 40h-2zm4 0L80 32v2L74 40h-2zm4 0L80 36v2L78 40h-2zm4 0L80 40h-2l2-2v2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
    }
    .hero-img-panel {
      position: absolute; right: 0; top: 0; bottom: 0;
      width: 42%; overflow: hidden;
    }
    .hero-img-panel::before {
      content: '';
      position: absolute; left: 0; top: 0; bottom: 0;
      width: 180px;
      background: linear-gradient(to right, #1E3A5F, transparent);
      z-index: 1;
    }
    .hero-img-panel img {
      width: 100%; height: 100%;
      object-fit: cover; opacity: 0.35;
      filter: grayscale(30%);
    }
    .hero-tag {
      font-size: 11px; letter-spacing: 0.2em;
      text-transform: uppercase; color: var(--gold-light);
      font-weight: 500; margin-bottom: 20px;
      display: flex; align-items: center; gap: 10px;
      position: relative; z-index: 2;
    }
    .hero-tag::before { content: ''; width: 36px; height: 1px; background: var(--gold); }
    .hero h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(40px, 6.5vw, 82px);
      font-weight: 300; color: white;
      line-height: 1.06; max-width: 620px;
      margin-bottom: 24px; position: relative; z-index: 2;
    }
    .hero h1 em { font-style: italic; color: var(--gold-light); }
    .hero > p {
      color: rgba(255,255,255,0.6); font-size: 16px;
      max-width: 440px; margin-bottom: 40px;
      line-height: 1.8; position: relative; z-index: 2;
    }
    .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; position: relative; z-index: 2; }
    .btn-primary {
      background: var(--blue-acc); color: white;
      padding: 14px 32px; border: none;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px; font-weight: 500;
      letter-spacing: 0.08em; text-transform: uppercase;
      text-decoration: none; cursor: pointer;
      transition: background 0.2s; display: inline-block;
    }
    .btn-primary:hover { background: #1a5aa0; }
    .btn-outline {
      background: transparent; color: white;
      padding: 14px 32px;
      border: 1px solid rgba(255,255,255,0.28);
      font-family: 'DM Sans', sans-serif;
      font-size: 13px; font-weight: 500;
      letter-spacing: 0.08em; text-transform: uppercase;
      text-decoration: none; cursor: pointer;
      transition: border-color 0.2s, color 0.2s; display: inline-block;
    }
    .btn-outline:hover { border-color: var(--gold); color: var(--gold-light); }

    /* Stats bar */
    .hero-infobar {
      position: absolute; bottom: 0; left: 0; right: 0;
      background: rgba(255,255,255,0.04);
      border-top: 1px solid rgba(42,111,191,0.2);
      display: flex; z-index: 2;
    }
    .info-item {
      flex: 1; padding: 18px 32px;
      border-right: 1px solid rgba(42,111,191,0.15);
    }
    .info-item:last-child { border-right: none; }
    .info-label { font-size: 10px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--gold-light); margin-bottom: 4px; }
    .info-value { color: white; font-size: 14px; font-weight: 300; }

    /* ── SECTIONS ── */
    section { padding: 88px 80px; }
    .section-label {
      font-size: 10.5px; letter-spacing: 0.2em;
      text-transform: uppercase; color: var(--blue-acc);
      font-weight: 500; margin-bottom: 12px;
      display: flex; align-items: center; gap: 10px;
    }
    .section-label::before { content: ''; width: 28px; height: 1px; background: var(--blue-acc); }
    .section-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(28px, 4vw, 46px);
      font-weight: 300; color: var(--navy);
      line-height: 1.15; margin-bottom: 14px;
    }
    .section-title em { font-style: italic; color: var(--gold); }
    .section-sub { color: var(--muted); max-width: 480px; font-size: 15px; margin-bottom: 52px; }

    /* ── PAGE HERO ── */
    .page-hero { background: linear-gradient(150deg, #0F1F3D 0%, #1E3A5F 55%, #0F1F3D 100%); padding: 140px 80px 80px; }
    .page-hero .section-label { color: var(--gold-light); }
    .page-hero .section-label::before { background: var(--gold); }
    .page-hero .section-title { color: white; }
    .page-hero .section-sub { color: rgba(255,255,255,0.6); }

    /* ── LAYANAN ── */
    .layanan-section { background: white; }
    .layanan-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; border: 1px solid var(--border); }
    .layanan-card { border-right: 1px solid var(--border); overflow: hidden; position: relative; transition: transform 0.3s; }
    .layanan-card:last-child { border-right: none; }
    .layanan-card:hover .layanan-img img { transform: scale(1.04); }
    .layanan-img { width: 100%; height: 220px; overflow: hidden; position: relative; }
    .layanan-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; filter: grayscale(15%); }
    .layanan-img-overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 40%, rgba(15,31,61,0.7)); }
    .layanan-body { padding: 28px 28px 32px; }
    .layanan-num { font-family: 'Cormorant Garamond', serif; font-size: 13px; font-weight: 600; color: var(--blue-acc); letter-spacing: 0.12em; margin-bottom: 10px; }
    .layanan-title { font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 600; color: var(--navy); margin-bottom: 10px; line-height: 1.25; }
    .layanan-desc { color: var(--muted); font-size: 13.5px; line-height: 1.75; margin-bottom: 20px; }
    .layanan-tags { display: flex; flex-wrap: wrap; gap: 6px; }
    .tag { font-size: 10.5px; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase; padding: 4px 10px; background: var(--cream); color: var(--navy); border: 1px solid var(--border); }

    /* ── SEMUA LAYANAN ── */
    .all-layanan-section { background: var(--cream); }
    .all-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .all-card { background: white; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s, transform 0.2s; }
    .all-card:hover { box-shadow: 0 8px 28px rgba(0,0,0,0.09); transform: translateY(-3px); }
    .all-card-img { width: 100%; height: 160px; overflow: hidden; }
    .all-card-img img { width: 100%; height: 100%; object-fit: cover; filter: grayscale(10%); transition: transform 0.4s; }
    .all-card:hover .all-card-img img { transform: scale(1.06); }
    .all-card-body { padding: 20px; }
    .all-card-label { font-size: 10px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--blue-acc); margin-bottom: 6px; }
    .all-card-title { font-family: 'Cormorant Garamond', serif; font-size: 18px; font-weight: 600; color: var(--navy); margin-bottom: 6px; line-height: 1.3; }
    .all-card-text { color: var(--muted); font-size: 13px; line-height: 1.65; }
    .all-card-link { display: inline-flex; align-items: center; gap: 6px; margin-top: 14px; font-size: 12px; font-weight: 500; color: var(--navy); text-decoration: none; letter-spacing: 0.06em; border-bottom: 1px solid var(--gold); padding-bottom: 1px; transition: color 0.2s; }
    .all-card-link:hover { color: var(--gold); }

    /* ── PROSES KERJA ── */
    .proses-section { background: var(--navy); }
    .proses-section .section-label { color: var(--gold-light); }
    .proses-section .section-label::before { background: var(--gold); }
    .proses-section .section-title { color: white; }
    .proses-section .section-sub { color: rgba(255,255,255,0.5); }
    .proses-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 2px; }
    .proses-card { background: rgba(255,255,255,0.04); border: 1px solid rgba(42,111,191,0.15); padding: 36px 28px; position: relative; overflow: hidden; transition: background 0.2s; }
    .proses-card::before { content: ''; position: absolute; top: 0; left: 0; width: 0; height: 3px; background: var(--gold); transition: width 0.3s; }
    .proses-card:hover::before { width: 100%; }
    .proses-card:hover { background: rgba(255,255,255,0.07); }
    .proses-num { font-family: 'Cormorant Garamond', serif; font-size: 52px; font-weight: 300; color: rgba(42,111,191,0.25); line-height: 1; margin-bottom: 16px; }
    .proses-title { font-family: 'Cormorant Garamond', serif; font-size: 20px; color: white; font-weight: 400; margin-bottom: 10px; }
    .proses-desc { color: rgba(255,255,255,0.5); font-size: 13.5px; line-height: 1.7; }

    /* ── KEUNGGULAN ── */
    .keunggulan-section { background: white; }
    .tentang-section { background: white; padding: 88px 80px; }
    .keunggulan-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
    .keunggulan-img { position: relative; }
    .keunggulan-img img { width: 100%; height: 480px; object-fit: cover; filter: grayscale(15%); }
    .keunggulan-badge { position: absolute; bottom: -20px; right: -20px; background: var(--navy); color: white; padding: 24px 28px; min-width: 160px; text-align: center; }
    .keunggulan-badge-num { font-family: 'Cormorant Garamond', serif; font-size: 48px; font-weight: 300; color: var(--gold-light); line-height: 1; }
    .keunggulan-badge-text { font-size: 11px; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.6); margin-top: 4px; }
    .keunggulan-list { display: flex; flex-direction: column; gap: 24px; margin-bottom: 36px; }
    .keunggulan-item { display: flex; gap: 16px; align-items: flex-start; }
    .keunggulan-icon { width: 40px; height: 40px; flex-shrink: 0; background: var(--navy); display: flex; align-items: center; justify-content: center; }
    .keunggulan-icon svg { width: 18px; height: 18px; fill: var(--gold-light); }
    .keunggulan-item-title { font-family: 'Cormorant Garamond', serif; font-size: 18px; font-weight: 600; color: var(--navy); margin-bottom: 4px; }
    .keunggulan-item-text { color: var(--muted); font-size: 13.5px; line-height: 1.65; }

    /* ── HARGA ── */
    .harga-section { background: var(--cream); }
    .harga-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .harga-card { background: white; border: 1px solid var(--border); padding: 36px 32px; position: relative; transition: box-shadow 0.2s; }
    .harga-card:hover { box-shadow: 0 8px 28px rgba(0,0,0,0.08); }
    .harga-card.featured { background: var(--navy); border-color: var(--navy); }
    .harga-card.featured .harga-name { color: var(--gold-light); }
    .harga-card.featured .harga-price { color: var(--gold-light); }
    .harga-card.featured .harga-period { color: rgba(255,255,255,0.5); }
    .harga-card.featured .harga-desc { color: rgba(255,255,255,0.55); }
    .harga-card.featured .harga-item { color: rgba(255,255,255,0.7); border-color: rgba(255,255,255,0.1); }
    .harga-badge-top { position: absolute; top: -1px; left: 32px; background: var(--gold); color: white; font-size: 10px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; padding: 4px 14px; }
    .harga-name { font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--blue-acc); margin-bottom: 16px; }
    .harga-price { font-family: 'Cormorant Garamond', serif; font-size: 40px; font-weight: 300; color: var(--navy); line-height: 1; }
    .harga-period { font-size: 12px; color: var(--muted); margin-bottom: 20px; margin-top: 4px; }
    .harga-desc { font-size: 13.5px; color: var(--muted); margin-bottom: 24px; line-height: 1.65; }
    .harga-items { list-style: none; margin-bottom: 28px; }
    .harga-item { font-size: 13.5px; color: var(--text); padding: 9px 0; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 8px; }
    .harga-item::before { content: ''; width: 6px; height: 6px; background: var(--gold); flex-shrink: 0; }

    /* ── KONTAK ── */
    .kontak-section { padding: 88px 80px; background: white; }
    .kontak-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; font-size: 12px; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase; color: var(--navy); margin-bottom: 8px; }
    .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 12px 16px; border: 1px solid var(--border); background: white; color: var(--text); font-family: 'DM Sans', sans-serif; font-size: 14px; outline: none; transition: border-color 0.2s; }
    .form-group input:focus, .form-group select:focus, .form-group textarea:focus { border-color: var(--blue-acc); }
    .form-group input.is-error, .form-group select.is-error { border-color: #e53e3e; }
    .form-error { font-size: 12px; color: #e53e3e; margin-top: 4px; display: block; }
    .required { color: #e53e3e; }
    .alert-success { background: #f0fff4; border: 1px solid #9ae6b4; color: #276749; padding: 14px 18px; margin-bottom: 24px; font-size: 14px; }
    .kontak-info { padding-top: 8px; }
    .kontak-info-item { display: flex; gap: 16px; align-items: flex-start; margin-bottom: 24px; }
    .kontak-info-label { font-size: 10px; letter-spacing: 0.12em; text-transform: uppercase; color: var(--muted); margin-bottom: 4px; }
    .kontak-info-value { font-size: 15px; color: var(--navy); text-decoration: none; }
    a.kontak-info-value:hover { color: var(--blue-acc); }

    /* ── FAQ ── */
    .faq-list { max-width: 760px; }
    .faq-item { border-bottom: 1px solid var(--border); }
    .faq-question { width: 100%; background: none; border: none; text-align: left; padding: 20px 0; font-family: 'Cormorant Garamond', serif; font-size: 20px; font-weight: 400; color: var(--navy); cursor: pointer; display: flex; justify-content: space-between; align-items: center; gap: 16px; }
    .faq-icon { font-size: 22px; color: var(--blue-acc); flex-shrink: 0; transition: transform 0.3s; }
    .faq-item.open .faq-icon { transform: rotate(45deg); }
    .faq-answer { display: none; padding: 0 0 20px; color: var(--muted); font-size: 14px; line-height: 1.8; max-width: 640px; }
    .faq-item.open .faq-answer { display: block; }

    /* ── LAYANAN DETAIL ── */
    .layanan-detail-section { background: white; padding: 80px; }
    .layanan-detail-layout { display: grid; grid-template-columns: 1fr 340px; gap: 56px; align-items: flex-start; }
    .layanan-detail-img { width: 100%; height: 360px; object-fit: cover; margin-bottom: 32px; filter: grayscale(10%); }
    .layanan-detail-title { font-family: 'Cormorant Garamond', serif; font-size: 28px; font-weight: 400; color: var(--navy); margin-bottom: 16px; }
    .layanan-detail-subtitle { font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 400; color: var(--navy); margin: 28px 0 14px; }
    .layanan-detail-text { color: var(--muted); font-size: 15px; line-height: 1.8; }
    .layanan-checklist { list-style: none; display: flex; flex-direction: column; gap: 10px; }
    .layanan-checklist-item { display: flex; align-items: center; gap: 10px; font-size: 14px; color: var(--text); }
    .layanan-checklist-item::before { content: ''; width: 6px; height: 6px; background: var(--gold); flex-shrink: 0; }
    .sidebar-card { background: var(--cream); border: 1px solid var(--border); padding: 24px; }
    .sidebar-card-title { font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--blue-acc); margin-bottom: 12px; }
    .sidebar-info-item { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid var(--border); font-size: 13.5px; }
    .sidebar-info-label { color: var(--muted); }
    .sidebar-info-value { color: var(--navy); font-weight: 500; }
    .sidebar-related-link { display: block; padding: 10px 0; border-bottom: 1px solid var(--border); color: var(--navy); text-decoration: none; font-size: 14px; transition: color 0.2s; }
    .sidebar-related-link:last-child { border-bottom: none; }
    .sidebar-related-link:hover { color: var(--blue-acc); }

    /* ── FOOTER ── */
    footer { background: #0A1628; color: rgba(255,255,255,0.5); padding: 64px 80px 40px; }
    .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; padding-bottom: 48px; border-bottom: 1px solid rgba(255,255,255,0.07); margin-bottom: 32px; }
    .footer-brand-name { font-family: 'Cormorant Garamond', serif; font-size: 22px; color: white; font-weight: 400; margin-bottom: 10px; }
    .footer-brand-name span { color: var(--gold-light); }
    .footer-col-title { font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: var(--gold-light); margin-bottom: 18px; }
    .footer-links { list-style: none; display: flex; flex-direction: column; gap: 10px; }
    .footer-links a { color: rgba(255,255,255,0.5); text-decoration: none; font-size: 13.5px; transition: color 0.2s; }
    .footer-links a:hover { color: white; }
    .footer-bottom { display: flex; justify-content: space-between; align-items: center; font-size: 12.5px; flex-wrap: wrap; gap: 8px; }
    .contact-line { display: flex; align-items: center; gap: 8px; font-size: 13.5px; margin-bottom: 8px; color: rgba(255,255,255,0.5); }
    .contact-line svg { width: 14px; height: 14px; fill: var(--gold); flex-shrink: 0; }

    /* ════════════ RESPONSIVE ════════════ */
    @media (max-width: 1100px) {
      nav { padding: 0 32px; }
      .nav-links { gap: 20px; }
      section { padding: 72px 48px; }
      .kontak-section, .layanan-detail-section, .tentang-section { padding: 72px 48px; }
      footer { padding: 56px 48px 36px; }
      .footer-grid { gap: 32px; }
      .all-grid { grid-template-columns: repeat(2, 1fr); }
      .hero { padding: 120px 48px 120px; }
      .hero-img-panel { width: 36%; }
      .page-hero { padding: 120px 48px 64px; }
    }

    @media (max-width: 900px) {
      nav { padding: 0 24px; }
      .nav-links { display: none; }
      .nav-cta { display: none; }
      .nav-toggle { display: flex; }
      .hero { padding: 100px 32px 140px; min-height: 100svh; }
      .hero-img-panel { width: 100%; opacity: 0.5; }
      .hero-img-panel::before { width: 100%; background: linear-gradient(to right, #0F1F3D 30%, rgba(15,31,61,0.5)); }
      .hero h1, .hero > p { max-width: 100%; }
      .hero-infobar { flex-wrap: wrap; position: relative; margin-top: 56px; }
      .info-item { flex: 1 1 50%; padding: 14px 20px; border-bottom: 1px solid rgba(42,111,191,0.15); }
      .info-item:nth-child(2) { border-right: none; }
      .info-item:nth-child(3), .info-item:nth-child(4) { border-bottom: none; }
      section { padding: 64px 32px; }
      .kontak-section, .layanan-detail-section, .tentang-section { padding: 64px 32px; }
      .page-hero { padding: 120px 32px 64px; }
      .layanan-grid { grid-template-columns: 1fr; }
      .layanan-card { border-right: none; border-bottom: 1px solid var(--border); }
      .layanan-card:last-child { border-bottom: none; }
      .all-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
      .proses-grid { grid-template-columns: repeat(2, 1fr); }
      .keunggulan-layout { grid-template-columns: 1fr; gap: 48px; }
      .keunggulan-img { max-width: 560px; margin: 0 auto; }
      .keunggulan-img img { height: 360px; }
      .keunggulan-badge { right: 0; bottom: -16px; }
      .harga-grid { grid-template-columns: 1fr; max-width: 480px; }
      footer { padding: 48px 32px 32px; }
      .footer-grid { grid-template-columns: 1fr 1fr; gap: 36px; }
      .kontak-layout { grid-template-columns: 1fr; gap: 48px; }
      .layanan-detail-layout { grid-template-columns: 1fr; }
    }

    @media (max-width: 600px) {
      nav { padding: 0 20px; height: 60px; }
      .mobile-menu { top: 60px; padding: 20px; }
      .hero { padding: 88px 20px 20px; min-height: 100svh; justify-content: flex-start; }
      .hero-img-panel { opacity: 0.3; }
      .hero h1 { font-size: clamp(36px, 10vw, 52px); margin-bottom: 16px; }
      .hero > p { font-size: 14px; margin-bottom: 28px; }
      .hero-tag { margin-bottom: 14px; font-size: 10px; }
      .btn-primary, .btn-outline { padding: 13px 22px; font-size: 12px; width: 100%; text-align: center; }
      .hero-actions { flex-direction: column; width: 100%; }
      .hero-infobar { position: relative; margin-top: 32px; }
      .info-item { flex: 1 1 100%; border-right: none; border-bottom: 1px solid rgba(42,111,191,0.15); padding: 12px 20px; }
      .info-item:last-child { border-bottom: none; }
      section { padding: 48px 20px; }
      .kontak-section, .layanan-detail-section, .tentang-section { padding: 48px 20px; }
      .page-hero { padding: 100px 20px 48px; }
      .section-sub { margin-bottom: 36px; }
      .layanan-body { padding: 20px 20px 24px; }
      .layanan-img { height: 180px; }
      .all-grid { grid-template-columns: 1fr; gap: 16px; }
      .proses-grid { grid-template-columns: 1fr; gap: 2px; }
      .proses-card { padding: 28px 20px; }
      .proses-num { font-size: 40px; margin-bottom: 12px; }
      .keunggulan-layout { gap: 40px; }
      .keunggulan-img img { height: 280px; }
      .keunggulan-badge { right: 0; bottom: -12px; padding: 16px 20px; min-width: 120px; }
      .keunggulan-badge-num { font-size: 36px; }
      .keunggulan-list { gap: 20px; }
      .harga-grid { grid-template-columns: 1fr; max-width: 100%; }
      .harga-card { padding: 28px 24px; }
      footer { padding: 40px 20px 28px; }
      .footer-grid { grid-template-columns: 1fr; gap: 32px; }
      .footer-bottom { flex-direction: column; align-items: flex-start; gap: 6px; }
    }

    @media (max-width: 380px) {
      .hero h1 { font-size: 34px; }
      .info-item { padding: 10px 16px; }
      .info-value { font-size: 13px; }
    }
  </style>
  @stack('styles')
</head>
<body>

  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')

  @stack('scripts')
</body>
</html>